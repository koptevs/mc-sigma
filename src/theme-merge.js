const fs = require('fs').promises;
const path = require('path');
const importFresh = require('import-fresh');

// Функция для определения приоритета файла
function getFilePriority(fileName) {
    if (fileName === '$schema') return 0;
    if (fileName === 'version') return 1;
    return 2;
}

async function processDirectory(directoryPath) {
    try {
        const files = await fs.readdir(directoryPath);
        
        // Создаем список файлов с информацией о приоритете и глубине
        const fileList = files
            .filter(file => path.extname(file) === '.js')
            .map(file => {
                const fileName = path.basename(file, '.js');
                return {
                    path: file,
                    name: fileName,
                    priority: getFilePriority(fileName),
                    depth: (fileName.match(/--/g) || []).length
                };
            })
            // Сортируем: сначала по приоритету, затем по глубине
            .sort((a, b) => {
                if (a.priority !== b.priority) {
                    return a.priority - b.priority;
                }
                return a.depth - b.depth;
            });

        const result = {};

        for (const {path: filePath, name: fileName} of fileList) {
            const fullPath = path.join(directoryPath, filePath);
            
            try {
                const moduleExports = importFresh(fullPath);
                
                // Обработка вложенных файлов (с разделителями)
                if (fileName.includes('--')) {
                    const parts = fileName.split('--');
                    const lastPart = parts.pop().replace(/_/g, '/');
                    let current = result;

                    // Рекурсивно создаем структуру объектов
                    for (let i = 0; i < parts.length; i++) {
                        const part = parts[i];
                        
                        // Если узел не существует - создаем пустой объект
                        if (current[part] === undefined) {
                            current[part] = {};
                        }
                        // Если узел существует, но не является объектом - пропускаем файл
                        else if (typeof current[part] !== 'object' || current[part] === null) {
                            console.warn(`⚠️ Конфликт структуры: '${part}' не является объектом (файл: ${filePath}). Пропускаем.`);
                            continue;
                        }
                        
                        current = current[part];
                    }
                    
                    // Добавляем значение в существующий объект (не перезаписывая целиком)
                    if (typeof current === 'object' && current !== null) {
                        current[lastPart] = moduleExports;
                    }
                } 
                // Обработка корневых файлов (без разделителей)
                else {
                    // Если значение уже существует - сохраняем его (не перезаписываем)
                    if (result[fileName] === undefined) {
                        if (typeof moduleExports === 'string' ||
                            (typeof moduleExports === 'object' && moduleExports !== null) ||
                            typeof moduleExports === 'number' || 
                            typeof moduleExports === 'boolean' ||
                            moduleExports === null) {
                            
                            result[fileName] = moduleExports;
                        } else {
                            console.warn(`⚠️ Файл ${filePath} экспортирует неподдерживаемый тип (${typeof moduleExports}). Пропускаем.`);
                        }
                    }
                }
            } catch (err) {
                console.error(`❌ Ошибка загрузки ${filePath}:`, err.message);
            }
        }

        const outputPath = path.join(process.cwd(), 'theme.json');
        await fs.writeFile(outputPath, JSON.stringify(result, null, 2));
        console.log(`✅ Результат сохранен в: ${outputPath}`);

    } catch (err) {
        console.error('❌ Ошибка обработки директории:', err.message);
        process.exit(1);
    }
}

// Проверка аргументов командной строки
if (process.argv.length < 3) {
    console.log('ℹ️ Использование: node index.js <путь_к_директории>');
    process.exit(1);
}

const directoryPath = path.resolve(process.argv[2]);
processDirectory(directoryPath);
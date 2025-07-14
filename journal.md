# Site development tasks
## Initial setup ( assuming wordpress installed already )

- [x] remove unnecessary themes
- [x] create theme folder
- [x] add index.php to the theme folder
- [x] add [style.css](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/) to the theme folder
- [x] initialize git repo in the root directory of the theme:
```
$ git init
```
- [x] add .gitignore file:
```
node_modules
dist/
```
- [x] initial commit
- [x] create github repo

## Development environment
### TailwindCSS
- [x] initialize project ( creates a package.json ) in the root directory of the theme:
```
npm init
```
- [x] install packages
```
npm install tailwindcss @tailwindcss/cli prettier prettier-plugin-tailwindcss -D
mkdir src
touch src/styles.css
echo '@import "tailwindcss";' > src/styles.css
``` 
- [x] add CLI commands for tailwind
```
"scripts": {
    "tailwindwatch": "@tailwindcss -i ./src/styles.css -o ./css/styles.css --watch --minify",
    "tailwindbuild": "@tailwindcss -i ./src/styles.css -o ./css/styles.css --minify",
  },
```
### JS bundler
### Node CLI commands 
# Site development tasks
## Initial setup ( assuming wordpress installed already )

- [x] remove unnecessary themes
- [x] create theme folder
- [x] add index.php to the theme folder
- [x] add [style.css](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/) to the theme folder
- [x] initialize git repo in the root directory:
```
$ git init
```
- [x] add .gitignore file:
```
/*
!.gitignore
!README.md
!journal.md
!/wp-content
/wp-content/uploads
```
- [x] initial commit
- [x] create github repo

## Development environment
### TailwindCSS
- [x] initialize project ( creates a package.json )
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
### JS bundler
### Node CLI commands 
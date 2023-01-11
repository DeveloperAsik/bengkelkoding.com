
## API Trutrip Test

Install Database engine (mysql)

- after database engine installed (mysql), dump database into engine (locate dump sql file at Documentation directroy).
- set user name as 'root' and using password '' or empty password (you can set a password, but you need set this into laravel env).
- import db file into database engine

## Setup PHP (match with your own OS)

Windows: 
- Setup PHP path (using php version 8 above)
- Setup ext in php ini (bz2, curl, gd, intl, mbstring, mysqli, pdo_mysql, etc)
- Setup composer

## Extract or clone project directory
- open command prompt at root directory
- rename .env.example into .env
- typing 'composer update' and wait until progress finish
- type 'php artisan serve' to run website and do test using postman or other tools

## How to use

If using php artisan serve
- usually 'http://localhost:8000' as base url
- then you can access api with endpoint 'http://localhost:8000/api/v1/' 
# Laravel Blog

A simple blog for demonstration on how to use Laravel and MySQL to create and run a blog.

## Requirements

- Laravel 6.3
- PHP >= 7.2.*
- MySQL 5.7.*
- PhpMyAdmin

## Demo

You can try the live demo : []()


## Installation

```
git clone https://github.com/Vinge1718/Blog.git blog
cd blog
composer install
cp .env.example .env
- set up your database credentials in the .env file
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

## API End Points
This project exposes some API endpoints.
/api/auth/token
/api/auth/reset-password
/api/auth/change-password

/api/tags
/api/categories
/api/users     // only accessible by admin
/api/posts


## Author

- [Victor Njonge](https://github.com/Vinge1718)

## License
Released under the MIT license attached tho this code.
The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

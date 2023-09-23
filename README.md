## ecommerce_website_in_laravel8

## Overview
Hello All,
I have completed the E-Commerce website in which use can easily buy or sell the products, Once the user places the order it will be notified to the owner who has posted that product, For the payment we can integrate the payment gateway through the stripe in this web application the setup is already done, The database I have used is MySql and website is developed using Laravel-8, PHP, HTML and CSS.

## Installation
- Enter Commands: 
1. Download the database and import in the MySql
2. Clone the Repository
3. composer install
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed
7. php artisan serve
8. php artisan make:controller MyController

- Commands for Laravel
1. For Maintenance mode:- php artisan down
2. Starting the Development Server:- php artisan serve
3. Creating a New Laravel Project:- composer create-project laravel/laravel project-name
4. Creating a New Controller:- php artisan make:controller MyController
5. Creating a New Model:- php artisan make:model MyModel
6. Running Database Migrations:- php artisan migrate
7. Creating a New Migration:- php artisan make:migration create_table_name
8. Optimizing Autoloader and Classmaps:- php artisan optimize
9. Clearing Caches in Laravel:- php artisan config:clear, php artisan view:clear, php artisan route:clear
10. Creating a New Artisan Command:- php artisan make:command MyCommand
11. Generating Authentication Scaffolding:- php artisan make:auth
12. Seeding the Database:- php artisan db:seed

## Usage
1. Run the application
2. Add the item to show in the application which products you want to sell
3. Add the picture of the Product
4. Follow the steps shown in the application and place the order for the product you want to buy or add it to the cart.

## References
1. For Laravel I Referred: https://laravel.com/docs/8.x/installation 
2. For PHP I have Referred: https://www.php.net/docs.php

## Dependencies
1. "axios": "^0.25",
2. "laravel-mix": "^6.0.6",
3. "lodash": "^4.17.19",
4. "postcss": "^8.1.14"

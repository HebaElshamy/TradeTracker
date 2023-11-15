<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

![tradetracker-high-resolution-logo-transparent](https://github.com/HebaElshamy/TradeTracker/assets/46092804/30e7447c-a364-405d-893e-e393a132e314)


# Inventory Management System with Laravel

Welcome to our Inventory Management System built with Laravel. This project provides a comprehensive solution for managing suppliers, customers, products, as well as purchase and sales operations, along with inventory tracking.

## Key Features

- Supplier and customer management.
- Product categorization and unit tracking.
- Creation of sales invoices and purchase operations.
- Daily reports for operations and inventory status.
- Intuitive and user-friendly interface.

Feel free to explore the system and utilize its features for efficient inventory management.

## Technologies Used

- **Laravel:** PHP web application framework.
- **HTML/CSS/JS:** Front-end design and development technologies.
- **Ajax:** Technology for dynamic interaction between front-end and back-end.
- **MySQL:** Database management system.

## Getting Started

1. Install project dependencies using Composer:

   ```bash
   composer install
2. Copy the .env.example file and rename it to .env:
    ```bash
    cp .env.example .env
3. Generate the application key:
    ```bash
    php artisan key:generate
4. Configure the .env file with your database connection details
5. Run the database migrations to create tables:
    ```bash
    php artisan migrate
6. Start the local server:
    ```bash
    php artisan serve
7. Open the project in the browser at http://localhost:8000.
8. To run the seeder for the users table, use the command:
    ```bash
    php artisan db:seed --class=UsersTableSeeder
9. To login as an admin, use the following credentials:
    Username: Admin
    Password: 123456789
10. Enjoy your experience!
    
![dashboard](https://github.com/HebaElshamy/TradeTracker/assets/46092804/29c41a07-55fc-4b22-ad37-ba87a5114a3c)

![invoice](https://github.com/HebaElshamy/TradeTracker/assets/46092804/7f3af888-ef95-4d96-98fd-76ed26981c6a)

![purchase](https://github.com/HebaElshamy/TradeTracker/assets/46092804/746f2871-553d-4acd-8e35-84d4388e9e37)


# Struudel

An appointment coordination tool to find the best dates for events.

## Installation

-   requires php (tested with 8.4) and nodejs
-   navigate to project directory
-   run `npm install` and `composer install` to install dependencies
-   copy `.env.example` to `.env` and optionally change variables
-   run `php artisan migrate` to create database
-   run `php artisan key:generate` to generate encryption key
-   if you want to generate sample data, run `php artisan db:seed`
    
# Starting

-   to start the frontend, run `npm run dev`
-   and for the backend, run `php artisan serve`

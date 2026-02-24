# Money Tracker API

Backend-only Laravel API for managing multiple wallets and transactions.

## Features
- Create users
- Create multiple wallets
- Add income & expense transactions
- View user profile with total balance
- View wallet with balance and transactions

## Setup
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan serve

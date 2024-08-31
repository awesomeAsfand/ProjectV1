# Laravel Project Setup

## Introduction

This project is built with Laravel and utilizes Filament for the admin panel, Blueprint for generating schemas, tables, forms and action, Socialite plugin for OAuth login through Laravel Socialite to Filament.

## Prerequisites

- laragon - https://laragon.org/
- Node.js and npm - https://nodejs.org/en
- Filament- https://filamentphp.com/docs/3.x/panels/installation
- Blueprint- https://blueprint.laravelshift.com/docs/available-commands/
- Socialite - https://v2.filamentphp.com/plugins/socialite#installation

## Installation

### Clone the Repository

First, clone the repository to your local machine within you laragon installation:

```bash
C:\laragon\www\git clone https://github.com/yourusername/your-repository.git
```
Navigate to the cloned repository folder

```bash
cd your-repository
```

Configure the database: Update the .env file in the project directory with your database credentials (e.g., DB_USERNAME, DB_PASSWORD, etc.)
#### example
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=your_database
- DB_USERNAME=root
- DB_PASSWORD=


Open a terminal and navigate to the project directory. Run the following commands to set up the database:
```bash
php artisan migrate
```
Run the following command in the project directory to start the Laravel development server:

```bash
php artisan serve
```
## OAuth login through Laravel Socialite

If you want to log in through Google or Facebook, be sure to edit the .env file in your project directory and add your Google and Facebook credentials.


####COntinued











 

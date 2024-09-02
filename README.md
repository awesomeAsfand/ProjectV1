# Laravel Project Setup

## Introduction

This project is built with Laravel and utilizes Filament for the admin panel, Blueprint for generating schemas, tables, forms and action, Socialite plugin for OAuth login through Laravel Socialite to Filament.

## Prerequisites

- laragon - https://laragon.org/


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

We now need to create the .env file. Laravel ships with an example .env file so we can copy that one with the cp command.
```bash
cp .env.example .env
```

Next, ensure that all required packages are installed. Open the composer.json file in your project folder, and run the necessary commands to install the packages.


Open a terminal and navigate to the project directory. Run the following commands to set up the database:
```bash
php artisan migrate
```
You can create a new user account with the following command or use Login and registration page:
```bash
php artisan make:filament-user
```


Run the following command in the project directory to start the Laravel development server:

```bash
php artisan serve
```

## OAuth login through Laravel Socialite

Since sensitive information isn't included in the GitHub repository, if you want to log in through Google or Facebook, 
make sure to edit the .env file in your project directory and add your Google and Facebook credentials.

```bash
# Google
GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
GOOGLE_REDIRECT_URL=https://your-domain.com/auth/google/callback

# Facebook
FACEBOOK_CLIENT_ID=your-facebook-client-id
FACEBOOK_CLIENT_SECRET=your-facebook-client-secret
FACEBOOK_REDIRECT_URL=https://your-domain.com/auth/facebook/callback
```




 

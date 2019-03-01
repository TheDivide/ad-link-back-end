# AD LINK API

Laravel 5.7 API for AD-LINK, an advertising agency.

[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/built-by-developers.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/check-it-out.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/powered-by-netflix.svg)](https://forthebadge.com)

### Prerequisites

These are the prequisites for running Laravel 5.5:

* PHP >= 7.0.0
* Composer
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

Other:
* MySql

### Installing

* Install the composer dependencies and npm packages

```
composer install
npm install
```

* Create a .env file (by copying .env.example) and add your environment variables
* Generate the application key

```
php artisan key:generate
```

### Building

#### PHP

To generate autoload files run

```
composer dump-autoload
```

#### Database

Migrate the database:

```
php artisan migrate
```

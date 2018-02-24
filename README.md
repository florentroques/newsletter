# Newsletter

[![StyleCI](https://styleci.io/repos/70211763/shield?branch=master)](https://styleci.io/repos/70211763)
[![Status](https://img.shields.io/badge/status-dev-red.svg?style=flat-square)](https://img.shields.io/badge/status-dev-red.svg?style=flat-square)
[![Website](https://img.shields.io/website-up-down-green-red/http/shields.io.svg?style=flat-square)](http://nawala.laravel.web.id)
[![License](https://img.shields.io/badge/license-MIT%20License-blue.svg?style=flat-square)](https://img.shields.io/badge/license-MIT%20License-blue.svg?style=flat-square)

Simple newsletter app using Laravel framework.

![Screenshot](https://s16.postimg.org/tzvo9b7ut/Screenshot_from_2016_10_08_14_57_19.png)

The application demo can be viewed at [http://nawala.laravel.web.id](http://nawala.laravel.web.id).

## System Requirement

* PHP >= 7.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

## Other Needs

* Supervisor to run Queue Laravel
* ElasticSearch for Laravel Scout

## Installation

* Clone the repository to get the latest updates.
* Modify directory permissions `storage` and `bootstrap/cache` to be writable by app.
* Run the command `composer update` to update the framework and dependency libraries. Specifically with email settings can be changed on app via URI `setting` .
* Copy the file `.env.example` to `.env` and change some settings in it according to the machine used.
* Run the command `php artisan key:generate` to create a new key.
* Run the command `php artisan migrate` to run migrations.
* Run a built-in server with commands `php artisan serve` or `php -S localhost:8000`.
* Access the URL `localhost:8000` through the browser.

## Sample Data

This application provides a seeder to create dummy data using the Faker package. Run the command below to run the dummy data generator.

`php artisan db:seed`

Automatically generated data are:

* Default list
* Data subscriber
* User
* Unsubscribe reason
* Newsletter template

Default login to app with role admin can use username `admin@email.com` and password `admin`. As for login with role user can use username `user@email.com` and password `user`.

## License

MIT License.

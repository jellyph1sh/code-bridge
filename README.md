# CODEBRIDGE

## DESCRIPTION

Codebridge is a website that offers IT tools to make users' lives easier.

## DEPENDENCIES
- PHP 8.3
- Composer LTS
- Docker LTS
- Docker Compose LTS

## HOW TO SETUP PROJECT

- Clone this repository
- Copy .env.example file to .env
- Run this command : `sudo chmod o+w ./storage/ -R`.
- Run this command : `composer i`.
- Run this command : `php artisan key:generate`.
- IF YOU GET ERROR WITH COMPOSER.LOCK DELETE IT.
- RUN WITH DOCKER : `sudo ./vendor/bin/sail up` Option `-d` for detached.
- RUN WITHOUT DOCKER : `php artisan serve`

## MEMBERS

- SORGIATI Sacha
- ANTIER Guillaume

## LICENSE

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

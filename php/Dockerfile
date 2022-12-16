FROM php:8.1-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

#ENV COMPOSER_ALLOW_SUPERUSER=1

#COPY --from=composer:2.4 /usr/bin/composer /usr/bin/composer

COPY ./app .

RUN composer dump-autoload --optimize
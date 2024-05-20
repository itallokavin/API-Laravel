FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpq-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql pgsql zip

RUN apt-get install -y libpq5 && docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY . .

RUN composer install --no-scripts --no-autoloader

RUN cp .env.example .env

RUN composer dump-autoload --optimize

RUN php artisan key:generate

EXPOSE 8000



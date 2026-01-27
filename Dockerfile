FROM php:8.2-cli
LABEL authors="bohemio-rulo"

RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev \
    && docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www

COPY . .

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000

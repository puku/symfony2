FROM php:7-fpm

MAINTAINER Ivan Levchuk <ivan.liauchuk@gmail.com>

RUN apt-get update && apt-get install -y --no-install-recommends \
        git \
        libzip-dev \
        zip \
        unzip \
        libpq-dev \
        libicu-dev \
    && pecl install xdebug \
        && docker-php-ext-enable xdebug \
    && docker-php-ext-configure zip --with-libzip \
        && docker-php-ext-install zip \
    && docker-php-ext-enable opcache \
    && docker-php-ext-configure intl \
        && docker-php-ext-install intl \
    && docker-php-ext-install pdo pdo_pgsql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

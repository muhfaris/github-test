FROM php:7.1-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql 
RUN chown -R www-data:www-data /var/www/ \
	&& chmod -R 0775 /var/www/*

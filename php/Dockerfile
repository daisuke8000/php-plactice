FROM php:7.3-fpm
COPY php.ini /usr/local/etc/php/
RUN apt-get update
RUN apt-get install -y vim
RUN docker-php-ext-install pdo_mysql
FROM php:5.6-apache
RUN apt-get update
RUN apt-get install -y libmcrypt-dev
RUN docker-php-ext-install mysqli mcrypt

COPY templates/config.php /var/html/

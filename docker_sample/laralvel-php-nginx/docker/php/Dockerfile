# Base image
FROM php:8.2-fpm

# Copy custom php.ini
COPY php.ini /usr/local/etc/php/

# Install required packages
RUN apt-get update \
  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev \
  && docker-php-ext-install zip pdo_mysql

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

# Set Composer environment variables
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

# Set working directory
WORKDIR /var/www

# Install Laravel installer globally
RUN composer global require "laravel/installer"

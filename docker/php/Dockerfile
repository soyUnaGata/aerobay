FROM php:8.0-fpm

# Установка необходимых расширений PHP
RUN docker-php-ext-install pdo_mysql

# Install wget and other dependencies
RUN apt-get update && apt-get install -y wget gnupg2

# Download and install the install-php-extensions script
RUN wget -O /usr/local/bin/install-php-extensions https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions \
    && chmod +x /usr/local/bin/install-php-extensions

# Install xdebug extension
RUN install-php-extensions xdebug

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configure xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request = yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.log=/var/log/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.idekey = stagingkey" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Set PHP_IDE_CONFIG environment variable
ENV PHP_IDE_CONFIG='serverName=staging'

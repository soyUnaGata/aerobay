FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/* \
    && a2enmod rewrite \
    && docker-php-ext-install pdo_pgsql zip


COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html /var/www/html/storage /var/www/html/bootstrap/cache

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && echo "Composer installed successfully" \
    && composer install --no-dev --optimize-autoloader \
    && echo "Dependencies installed successfully" \

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer self-update

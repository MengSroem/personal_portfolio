FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip git curl

RUN docker-php-ext-install pdo pdo_mysql mbstring bcmath gd
RUN a2enmod rewrite

WORKDIR /var/www/html
COPY . .

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data storage bootstrap/cache

COPY apache.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80

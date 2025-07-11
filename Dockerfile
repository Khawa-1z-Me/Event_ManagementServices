# Start from PHP 8.1 + Apache
FROM php:7.4-apache

# System dependencies
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libpng-dev  \
 && a2enmod rewrite

# Install mySQL supports
RUN docker-php-ext-install pdo_mysql

COPY vhost.conf /etc/apache2/sites-available/000-default.conf


COPY . /var/www/html
# RUN chown -R www-data:www-data /var/www/html \
#    && chmod -R 755 /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Composer
COPY --from=composer:2.4 /usr/bin/composer /usr/bin/composer

# Copy source and install PHP deps
# COPY . .
# RUN composer install --no-dev --optimize-autoloader

# Set folder permissions
#RUN chown -R www-data:www-data storage bootstrap/cache \
 #&& chmod -R 775 storage bootstrap/cache

EXPOSE 80
CMD ["apache2-foreground"]
# Dockerfile
FROM php:8.1-fpm


RUN apt-get update -y && apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pgsql pdo_pgsql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
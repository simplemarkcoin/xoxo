FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    netcat-traditional \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd gmp zip

# Install nginx
RUN apt-get update && apt-get install -y nginx

# Remove default nginx config and add custom one
RUN rm -f /etc/nginx/sites-enabled/default
COPY docker/nginx/conf.d/app.conf /etc/nginx/conf.d/app.conf

# Expose port 80 for nginx
EXPOSE 80

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Install dependencies while ignoring the extensions you don't need yet
# Skip Laravel's auto-discovery during build to avoid database connection issues
RUN composer install --optimize-autoloader --ignore-platform-req=ext-gmp --ignore-platform-req=ext-zip --no-scripts

# Laravel cache optimizations (for production)
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Copy and set up entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["docker-entrypoint.sh"]
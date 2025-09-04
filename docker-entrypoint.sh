#!/bin/bash

echo "Waiting for database..."
while ! nc -z "$DB_HOST" "$DB_PORT"; do
  sleep 1
done
echo "Database is ready!"


# Auto-migrations disabled for production safety. Uncomment for development only.
# if [ "$MIGRATE_DB" = "true" ]; then
#     echo "Running migrations..."
#     php artisan migrate --force
# fi

# Run basic Laravel setup
composer dump-autoload --optimize
php artisan config:clear

# Laravel cache optimizations (for production)
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start php-fpm
exec php-fpm

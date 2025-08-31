#!/bin/bash

echo "Waiting for database..."
while ! nc -z "$DB_HOST" "$DB_PORT"; do
  sleep 1
done
echo "Database is ready!"

# Optional migration if enabled
if [ "$MIGRATE_DB" = "true" ]; then
    echo "Running migrations..."
    php artisan migrate --force
fi

# Run basic Laravel setup
composer dump-autoload --optimize
php artisan config:clear

# Start php-fpm
exec php-fpm

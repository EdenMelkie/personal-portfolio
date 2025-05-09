#!/usr/bin/env bash

# Exit on first error
set -o errexit

# Create Laravel's required directories
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p bootstrap/cache

# Set permissions
chmod -R 775 storage bootstrap/cache

# Install dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Generate key
php artisan key:generate

# (Optional) Run migrations
# php artisan migrate --force

# Use official PHP with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip

# Enable Apache Rewrite Module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1

# Run composer install (optional)
RUN composer install --no-interaction --optimize-autoloader --no-scripts


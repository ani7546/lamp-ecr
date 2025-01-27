# Use an official PHP-Apache image
FROM php:8.0-apache

# Install MySQL extension
RUN docker-php-ext-install mysqli

# Copy application files to the web root
COPY . /var/www/html/

# Set permissions for web root
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

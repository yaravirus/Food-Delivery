# Use official PHP + Apache image
FROM php:8.2-apache

# Install MySQL extension
RUN docker-php-ext-install mysqli

# Copy project files to Apache root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

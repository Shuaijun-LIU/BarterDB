# Use the official PHP image with Apache
FROM php:8.2-apache

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli

# Copy project files into the container
COPY public/ /var/www/html/
COPY includes/ /var/www/includes/
COPY views/ /var/www/views/
COPY assets/ /var/www/assets/

# Set the working directory to the web root
WORKDIR /var/www/html

# Expose the default HTTP port
EXPOSE 80
# Use an official PHP image with Apache
FROM php:8.1-apache

# Install any additional PHP extensions you need
RUN docker-php-ext-install mysqli

# Copy your project files into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
# Use official PHP with Apache
FROM php:8.2-apache

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache rewrite module (if routing is needed)
RUN a2enmod rewrite

# Copy project files into the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Install Composer dependencies, if composer.json exists
RUN if [ -f composer.json ]; then \
      apt-get update && apt-get install -y unzip && \
      curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
      composer install --no-dev --optimize-autoloader; \
    fi

# Expose HTTP port
EXPOSE 80

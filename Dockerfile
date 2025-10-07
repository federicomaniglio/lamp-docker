FROM php:apache

# Install PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql
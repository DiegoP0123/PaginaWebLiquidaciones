FROM php:8.2-apache

# Dependencias e extensiones necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl libonig-dev libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd

# Instala Composer copiando desde la imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Habilita rewrite (necesario para Laravel)
RUN a2enmod rewrite

WORKDIR /var/www/html

# Copia composer primero para cachear
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Copia el resto del proyecto
COPY . .

# Permisos (ajusta si usas otro user)
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
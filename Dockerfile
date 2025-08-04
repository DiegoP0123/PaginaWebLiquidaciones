FROM php:8.1-cli

# Instalar dependencias del sistema y extensiones necesarias
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip libonig-dev libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_mysql bcmath mbstring zip curl

# Instalar Composer desde la imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copiar todo el proyecto
COPY . .

# Forzar que Composer use toda la memoria disponible y luego instalar dependencias
RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Asegurar permisos en storage y cache
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
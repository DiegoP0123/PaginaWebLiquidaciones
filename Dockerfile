FROM php:8.1-cli

# Instalar dependencias del sistema necesarias para Laravel y extensiones
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip libonig-dev \
    && docker-php-ext-install pdo pdo_mysql bcmath mbstring zip

# Instalar Composer (desde la imagen oficial de Composer)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copiar todo el proyecto
COPY . .

# Instalar dependencias de PHP (sin cachear config aún)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Asegurar permisos básicos (Laravel necesita escribir en storage y bootstrap/cache)
RUN mkdir -p storage && mkdir -p bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Exponer el puerto que se usará
EXPOSE 8000

# Comando de arranque
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
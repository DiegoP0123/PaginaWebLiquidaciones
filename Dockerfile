# Imagen oficial de PHP con extensiones necesarias
FROM php:8.1-cli

# Instalar dependencias del sistema y extensiones de PHP necesarias para Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer directorio de trabajo
WORKDIR /app

# Copiar todo el proyecto al contenedor
COPY . .

# Instalar dependencias de PHP en producción
RUN composer install --no-dev --optimize-autoloader

# Generar cachés de configuración y rutas
RUN php artisan config:cache && php artisan route:cache

# Definir variables de entorno básicas
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV PORT=8000

# Exponer el puerto que Laravel usará
EXPOSE 8000

# Comando para iniciar Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT
FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install intl mysqli gd zip \
    && a2dismod mpm_event mpm_worker || true \
    && a2enmod mpm_prefork \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-interaction

COPY . .

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf \
    && sed -i 's/\r$//' docker/start-container.sh \
    && chmod +x docker/start-container.sh

EXPOSE 8080

CMD ["sh", "-c", "APP_PORT=${PORT:-8080}; sed -ri \"s/Listen 80/Listen ${APP_PORT}/\" /etc/apache2/ports.conf; sed -ri \"s/:80>/:${APP_PORT}>/\" /etc/apache2/sites-available/000-default.conf; ./docker/start-container.sh"]

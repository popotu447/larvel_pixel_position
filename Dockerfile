FROM php:8.2-cli

# Instalacja zależności systemowych + bibliotek do budowania rozszerzeń
RUN apt-get update && apt-get install -y \
    unzip curl git zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-install \
        pdo_mysql \
        zip \
        mbstring \
        xml \
        curl

# Instalacja Composera
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

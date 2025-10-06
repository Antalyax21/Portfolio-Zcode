FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
# installer les outils nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*
# installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html

# copier composer.json et installer les dépendances
COPY composer.json composer.lock* ./
RUN composer install --no-dev --optimize-autoloader || true

# copier le reste du code
COPY . .

RUN chown -R www-data:www-data /var/www/ && chmod -R 755 /var/www/

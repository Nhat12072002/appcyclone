# Sử dụng image PHP 8.3-FPM làm base
FROM php:8.3-fpm

# Cài đặt các tiện ích và phần mềm cần thiết, bao gồm autoconf
RUN rm -f /var/lib/dpkg/status && apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    libicu-dev \
    zlib1g-dev \
    autoconf \
    automake \
    libtool \
    && rm -rf /var/lib/apt/lists/*

# Cài đặt PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd intl zip

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Thiết lập thư mục làm việc và cài đặt các phụ thuộc của Laravel
WORKDIR /var/www/html
COPY . .
RUN composer install --no-scripts --no-autoloader && \
    composer dump-autoload --optimize

# Expose port 80
EXPOSE 80

# Chạy PHP-FPM
CMD ["php-fpm"]

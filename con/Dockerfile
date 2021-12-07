FROM php:7.1-fpm-alpine

USER root

WORKDIR /var/www

# RUN addgroup -S www -g 1000 && adduser -S www -G www -u 1000

RUN apk update && apk add --no-cache \
    build-base \
    libmcrypt \
    libmcrypt-dev \
    vim 
    # php7-common \
    # php7-pdo \
    # php7-pdo_mysql \
    # php7-mysqli \
    # php7-mcrypt \
    # php7-mbstring \
    # php7-xml \
    # php7-openssl \
    # php7-json \
    # php7-phar \
    # php7-zip \
    # php7-gd \
    # php7-dom \
    # php7-session \
    # php7-zlib 
    

RUN docker-php-ext-install mcrypt pdo_mysql
# RUN pecl install mcrypt-1.0.4 && docker-php-ext-enable mcrypt

# RUN addgroup -S www && \
    # adduser -S www -G www

# USER www

# COPY --chown=www:www . /var/www

# COPY ./hosts /etc/hosts

EXPOSE 9000

ARG PHP_VERSION=8.3.9

FROM php:${PHP_VERSION}-alpine

WORKDIR /app

COPY --from=composer:2.2.24 /usr/bin/composer /usr/local/bin

RUN apk add --no-cache --update autoconf g++ git make && \
    pecl install pcov && \
    docker-php-ext-enable pcov
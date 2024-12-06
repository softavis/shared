ARG PHP_VERSION=8.3.9

FROM php:${PHP_VERSION}-alpine

COPY --from=composer:2.2.24 /usr/bin/composer /usr/local/bin

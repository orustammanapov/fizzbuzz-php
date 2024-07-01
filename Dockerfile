# syntax=docker/dockerfile:1

FROM composer:lts
WORKDIR /var/www/html

COPY . .
RUN composer install --no-interaction

ENTRYPOINT ["/bin/ash"]

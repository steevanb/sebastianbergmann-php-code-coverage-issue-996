FROM php:8.2.5-cli-alpine3.17

RUN \
    apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    && pecl install pcov \
    && apk del .build-deps

COPY docker/php.ini /usr/local/etc/php/conf.d/99-ci.ini

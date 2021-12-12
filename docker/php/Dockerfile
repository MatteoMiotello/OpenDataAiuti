FROM php:7.3-fpm-alpine
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && docker-php-ext-install pdo pdo_mysql 

RUN apk add --no-cache zip libzip-dev
# RUN echo "http://dl-4.alpinelinux.org/alpine/edge/community/" >>         /etc/apk/repositories && \
#     apk update && \
#     apk upgrade && \
#     apk add --update \
#     php7-gd

RUN apk --no-cache update \
    && apk --no-cache upgrade \
    && apk add --no-cache $PHPIZE_DEPS \
        freetype-dev \
        libjpeg-turbo-dev \
        libpng-dev && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/ && \
    docker-php-ext-install -j$(getconf _NPROCESSORS_ONLN) gd

RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip


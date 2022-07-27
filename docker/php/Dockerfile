FROM php:8.1.8-fpm-alpine3.15
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli && docker-php-ext-install pdo pdo_mysql 

RUN apk add --no-cache zip libzip-dev

RUN apk --no-cache update \
   && apk --no-cache upgrade \
   && apk add --no-cache $PHPIZE_DEPS \
      freetype-dev \
      libjpeg-turbo-dev \
      libpng-dev

RUN docker-php-ext-install gd

RUN docker-php-ext-install exif

RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip


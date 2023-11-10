 FROM php:8.2-alpine
 LABEL authors="ruslan"

 RUN apk update && apk add curl
 RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
 RUN apk add zip
 CMD bash -c "composer install"

 COPY . /var/www/html/

 WORKDIR /var/www/html/
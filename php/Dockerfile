FROM php:8.2-fpm-alpine

RUN docker-php-ext-install mysqli

WORKDIR /project

COPY . .

CMD ["php", "-S", "0.0.0.0:8000"]

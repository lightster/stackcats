FROM php:7

RUN pecl install redis-4.0.1 \
  && docker-php-ext-enable redis

WORKDIR /app

ADD . /app

EXPOSE 89

ENV NAME World

CMD ["php", "-S", "0.0.0.0:80", "index.php"]

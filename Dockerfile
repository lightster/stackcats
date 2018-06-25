FROM php:7-alpine

WORKDIR /app

ADD . /app

EXPOSE 89

ENV NAME World

CMD ["php", "-S", "0.0.0.0:80", "index.php"]

FROM php:8.2-cli

WORKDIR /var/www/html

COPY ./app /var/www/html/

CMD ["php", "-S", "0.0.0.0:8080", "-t", "app/public"]
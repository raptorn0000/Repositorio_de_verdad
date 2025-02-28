FROM php:8.1-fpm
COPY src/ /var/www/html/
EXPOSE 9000
CMD ["php-fpm"]

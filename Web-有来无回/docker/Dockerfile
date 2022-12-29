FROM php:7.0.1-apache

RUN rm -rf /var/www/html/* && chown www-data:www-data /var/www/html -R

COPY src/xxe.php /var/www/html

COPY src/flag.txt /tmp

EXPOSE 80
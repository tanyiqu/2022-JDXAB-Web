FROM php:5.5-apache

COPY php.ini /usr/local/etc/php/
COPY php.ini /usr/local/etc/php/conf.d/


RUN rm -rf /var/www/html/* && chown www-data:www-data /var/www/html -R

COPY src /var/www/html

COPY flag.sh /tmp


EXPOSE 80

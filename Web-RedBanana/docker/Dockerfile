FROM php:5.6-apache

COPY flag.sh /tmp

RUN rm -rf /var/www/html/* && chown www-data:www-data /var/www/html -R 

COPY src /var/www/html

RUN chmod -R 777 /var/www/html/upload

EXPOSE 80

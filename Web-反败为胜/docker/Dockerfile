FROM php:7.0.1-apache

# COPY flag.sh /tmp

RUN rm -rf /var/www/html/* && chown www-data:www-data /var/www/html -R

COPY src /var/www/html

EXPOSE 80
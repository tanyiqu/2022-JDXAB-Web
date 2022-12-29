FROM php:7.2-apache

RUN rm -rf /var/www/html/* && chown www-data:www-data /var/www/html -R
COPY flaaaaaag /
COPY php.ini-production /usr/local/etc/php
COPY php.ini /usr/local/etc/php
COPY php.ini-development /usr/local/etc/php
COPY src /var/www/html
RUN chmod 777 /var/www/html/Upld0d

COPY flag.sh /tmp

EXPOSE 80

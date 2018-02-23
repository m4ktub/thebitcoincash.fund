FROM php:7.0-apache
COPY html/ /var/www/html/

RUN a2enmod rewrite

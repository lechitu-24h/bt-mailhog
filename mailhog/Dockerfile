FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
  vim \
  sendmail
RUN docker-php-ext-install mysqli pdo_mysql

EXPOSE 9000


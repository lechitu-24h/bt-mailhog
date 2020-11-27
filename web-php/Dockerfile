FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
	vim \
  && docker-php-ext-install mysqli pdo_mysql

EXPOSE 9000 
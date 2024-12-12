FROM php:8.3-fpm

RUN echo 'nameserver 8.8.8.8' >> /etc/resolv.conf && \
    apt-get update -y && \
    apt-get install -y apache2

#RUN apt-get update \
#  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev \
#  && docker-php-ext-install zip pdo_mysql

#Composer install
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin


WORKDIR /var/www

RUN composer global require "laravel/installer"
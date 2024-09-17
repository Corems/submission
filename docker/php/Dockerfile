FROM php:8.3-apache
COPY ./ /var/www/html/

RUN a2enmod rewrite
RUN docker-php-ext-install pdo && docker-php-ext-enable pdo
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update --allow-insecure-repositories -y \
  && apt-get install -y \
     libxml2-dev \
     libzip-dev \
     libmcrypt-dev libjpeg-dev libpng-dev libfreetype6-dev libbz2-dev zlib1g-dev \
  && apt-get clean -y \
  && docker-php-ext-install zip soap gd
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;
RUN curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

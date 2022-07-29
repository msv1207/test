FROM bitnami/php-fpm:8.0

WORKDIR /application

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update -yqq
RUN apt-get install -yqq git libpq-dev libcurl4-gnutls-dev libicu-dev libvpx-dev libjpeg-dev libpng-dev libxpm-dev zlib1g-dev libfreetype6-dev libxml2-dev libexpat1-dev libbz2-dev libgmp3-dev libldap2-dev unixodbc-dev libsqlite3-dev libaspell-dev libsnmp-dev libpcre3-dev libtidy-dev libonig-dev libzip-dev
RUN apt-get -y install php-curl php-intl php-xml php-zip php-bz2 php-opcache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ADD ./docker/php-fpm/conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
RUN apt update && apt install -y wget gnupg2 lsb-release
RUN wget https://packages.sury.org/php/apt.gpg && apt-key add apt.gpg
RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list
RUN apt-get update
RUN apt-get -y install redis-server
RUN apt-get -y install php8.0-mysql
RUN apt-get -y install php8.0-redis
COPY ./docker/php-fpm/php-ini-overrides.ini /etc/php/8.0/fpm/conf.d/99-overrides.ini
COPY ./ /application

RUN rm -rf /application/docker && chmod -R 777 /application/bootstrap && chmod -R 777 /application/storage

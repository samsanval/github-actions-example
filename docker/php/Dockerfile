FROM php:8.1.11-fpm

RUN apt-get update && apt-get install -y \
        cron vim git wget libmagickwand-dev unzip libzip-dev --no-install-recommends libxslt-dev \
    && rm -rf /var/lib/apt/lists/* \
    && service cron start \
    && wget -O /usr/bin/pickle https://github.com/FriendsOfPHP/pickle/releases/latest/download/pickle.phar \
    && chmod +x /usr/bin/pickle \
    && docker-php-ext-install pdo pdo_mysql zip xsl gd \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

COPY ./php.ini /usr/local/etc/php/
COPY ./www.conf /usr/local/etc/php-fpm.d/
COPY ./dotfiles/.bashrc /root/.bashrc

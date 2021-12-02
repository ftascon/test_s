FROM wyveo/nginx-php-fpm:php74


RUN apt-get update \
    && apt-get install php7.4-dev -y \
    && apt-get install php7.4-xdebug -y \
    && rm /etc/php/7.4/mods-available/xdebug.ini \
    && apt-get install sqlite3 \
    && apt-get install php7.4-sqlite3

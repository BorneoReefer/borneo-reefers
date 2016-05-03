FROM fedora:23

MAINTAINER "Timur Kiyivinski" <deathseclipse@gmail.com>

# Expose PHP ports
EXPOSE 80 443

# Image volumes
VOLUME ["/etc/ssl", "/var/www/html/laravel/public/images", "/var/www/html/laravel/public/photos"]

# Basic Laravel Requirements
RUN dnf install -y  \
        nginx       \
        php-common  \
        php-mcrypt  \
        php-mysql   \
        php-pear    \
        php-cli     \
        php-fpm     \
        composer    \
        npm         \
        git

# Nginx & PHP configuration
RUN sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php.ini
COPY etc /etc/

RUN npm install -g -y gulp

# SUKMA-Core application
RUN mkdir -p /var/www/html/laravel
COPY . /var/www/html/laravel
COPY .env.example /var/www/html/laravel/.env

# JS packages
WORKDIR /var/www/html/laravel
RUN composer install && npm install && gulp --production
RUN php artisan key:generate
RUN chown -R nginx /var/www/html/laravel && chmod -R 775 /var/www/html/laravel

# Container commands
CMD ["/etc/entry.sh"]
ENTRYPOINT ["/bin/bash"]

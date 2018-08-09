FROM alpine:latest
LABEL Maintainer="Fabien LALLEMAND - fabien.lallemand@gmail.com"
LABEL Description="Lightweight container with Nginx 1.14 & PHP-FPM 7.2 based on Alpine Linux"

# Install packages
RUN apk update
RUN apk --no-cache add php7 php7-fpm php7-json php7-openssl php7-curl \
    php7-zlib nginx supervisor curl

# Configure nginx
COPY conf/nginx.conf /etc/nginx/nginx.conf

# Configure PHP-FPM
COPY conf/fpm-pool.conf /etc/php7/php-fpm.d/zzz_custom.conf
COPY conf/php.ini /etc/php7/conf.d/zzz_custom.ini

# Configure supervisord
COPY conf/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Add application
RUN mkdir -p /var/www/html
WORKDIR /var/www/html
COPY src/ /var/www/html/

EXPOSE 80 443
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
#ENTRYPOINT ["python-lambda-local"]

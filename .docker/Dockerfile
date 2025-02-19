FROM php:8.2-apache

RUN a2enmod ssl && a2enmod rewrite
RUN mkdir -p /etc/apache2/ssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/apache2/ssl/apache.key \
    -out /etc/apache2/ssl/apache.crt \
    -subj "/CN=localhost"


COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

EXPOSE 80 445

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

# Dockerfile

FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

WORKDIR /var/www/html

RUN apt-get update -y && \
    apt-get install -y apache2 php libapache2-mod-php php-json

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Set up PHP session directory
RUN mkdir -p /var/lib/php/sessions && \
    chown -R www-data:www-data /var/lib/php/sessions && \
    chmod 700 /var/lib/php/sessions

EXPOSE 916

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
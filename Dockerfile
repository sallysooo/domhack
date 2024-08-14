# Dockerfile

FROM ubuntu:22.04

ENV DEBIAN_FRONTEND=noninteractive

WORKDIR /var/www/html

RUN apt-get update -y
RUN apt-get install apache2 -y
RUN apt-get install php -y

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

EXPOSE 916

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

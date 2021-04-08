FROM alpine:latest

RUN apk add --no-cache wget apache2 php7-apache2 php7-json curl iputils tcpdump bind-tools

RUN rm -f /var/www/localhost/htdocs/index.html

COPY php.ini /etc/php7/php.ini

COPY index.php /var/www/localhost/htdocs

EXPOSE 80

CMD ["-D","FOREGROUND"]

ENTRYPOINT ["/usr/sbin/httpd"]

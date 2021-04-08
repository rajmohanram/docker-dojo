FROM alpine:3.13

RUN apk add --no-cache apache2 php7-apache2 php7-common php7-curl php7-dom php7-exif php7-fileinfo php7-gd php7-json php7-ldap php7-mbstring php7-mysqli php7-openssl php7-simplexml php7-soap php7-sockets php7-sodium php7-tokenizer php7-xml php7-xmlreader php7-zip \
    && rm -f /var/www/localhost/htdocs/index.html

COPY php.ini /etc/php7/php.ini

EXPOSE 80

CMD ["-D","FOREGROUND"]

ENTRYPOINT ["/usr/sbin/httpd"]
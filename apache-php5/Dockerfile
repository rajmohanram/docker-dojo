FROM alpine:3.8

RUN apk add --no-cache apache2 php5-apache2 php5-bcmath php5-bz2 php5-calendar php5-ctype php5-common php5-curl php5-dom php5-exif php5-gd php5-json php5-ldap php5-mcrypt php5-mysqli php5-openssl php5-soap php5-sockets php5-xml php5-xmlreader php5-zip \
    && rm -f /var/www/localhost/htdocs/index.html && mkdir /run/apache2

COPY php.ini /etc/php5/php.ini

EXPOSE 80

CMD ["-D","FOREGROUND"]

ENTRYPOINT ["/usr/sbin/httpd"]
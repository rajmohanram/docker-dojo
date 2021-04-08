FROM alpine:latest

RUN apk add --no-cache bash iptables apache2 wget curl iputils tcpdump ethtool bind-tools py3-pip jq

EXPOSE 80

CMD ["-D","FOREGROUND"]

ENTRYPOINT ["/usr/sbin/httpd"]
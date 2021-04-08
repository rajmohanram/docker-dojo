FROM alpine:latest

RUN apk add --no-cache bash wget curl iputils tcpdump ethtool bind-tools py3-pip && pip install flask

COPY . /app

WORKDIR /app

CMD ["python3", "app.py"]
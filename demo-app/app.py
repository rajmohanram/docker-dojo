from flask import Flask, request, jsonify
import socket
from os import environ

app = Flask(__name__)


@app.route('/')
def index():
    if environ.get('APP_DATA'):
        APP_DATA = environ.get('APP_DATA')
        hostname = socket.gethostname()
    else:
        APP_DATA = "Application data"
    response = {
        'app_name': environ.get('APP_NAME'),
        'app_version': environ.get('APP_VERSION'),
        'app_data': APP_DATA,
        'pod_name':  hostname,
        'pod_ip': socket.gethostbyname(hostname)
    }
    return jsonify(response)


if __name__ == '__main__':
    app.run(debug=True,host='0.0.0.0')
# k8s-webutils
Flask web application to get the details of a pod deployed in a kubernetes cluster
This is a sample flask web application to get the details of a pod deployed in a kubernetes cluster. CURL, wget, IP utilities, DNS utilities and tcpdump are included in this image.
Following information will be shown on the web page.
- `Node name`
- `Node IP`
- `Pod name`
- `Pod IP`
- `Namespace`

Following client information will also be displayed.
- `Source IP`
- `X-Forwarded-For` (if LB is involved in the path to the pod and SNAT occurs)

### Run in Docker
Pull the image and run a container from this image as follow
- `docker pull rajmor/k8s-utils:latest`
- `docker run -it --rm -p 5000:5000 rajmor/k8s-utils`  

The application can be accessed at `http:localhost:5000`


### Run in Kubernetes
Sample K8s manfiest file (Deployment and NodePort service) can be found [here](https://github.com/rajmohanram/k8s-webutils/blob/main/manifest.yaml).

The application can be accessed by the NodePort alloted for this service.
`http://<node_ip>:<node_port>`

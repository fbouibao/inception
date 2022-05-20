from debian:buster
COPY tools /
COPY conf /
run sh script.sh
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
entrypoint [ "nginx" ]
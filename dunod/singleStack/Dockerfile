FROM centos:latest

RUN yum install -y epel-release && \ 
    yum update &&\
    yum install -y nginx mariadb-server mariadb-server && \
    yum install -y php-common php-cli php-fpm php-mysql php-apcu php-curl php-intl php-mbstring supervisor &&\
    yum clean all 

COPY nginx/nginx.conf /etc/nginx/nginx.conf
COPY myapp/* /var/www/myapp/web/
EXPOSE 80

ENTRYPOINT ["nginx", "-g", "daemon off;"]

FROM centos:latest

RUN yum install -y epel-release && \ 
    yum update &&\
    yum install -y nginx mariadb-server mariadb-server && \
    yum install -y php-common php-cli php-fpm php-mysql php-apcu php-curl php-intl php-mbstring supervisor &&\
    yum clean all 

COPY nginx/nginx.conf /etc/nginx/nginx.conf
COPY myapp/* /var/www/myapp/web/
COPY supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
EXPOSE 80
VOLUME ["/var/www/myapp/web"]

CMD ["/bin/supervisord" , "-n" , "-c" , "/etc/supervisor/conf.d/supervisord.conf"]
#ENTRYPOINT ["nginx", "-g", "daemon off;"]

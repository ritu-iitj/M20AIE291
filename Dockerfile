FROM ubuntu:18.04
MAINTAINER M20AIE291 <choudhary.24@iitj.ac.in>
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y apache2 php mariadb-server  && apt-get clean && rm -rf /var/lib/apt/lists/*
ENV APACHE_RUN_USER  www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR   /var/log/apache2
ENV APACHE_PID_FILE  /var/run/apache2/apache2.pid
ENV APACHE_RUN_DIR   /var/run/apache2
ENV APACHE_LOCK_DIR  /var/lock/apache2
ENV APACHE_LOG_DIR   /var/log/apache2
RUN mkdir -p $APACHE_RUN_DIR
RUN mkdir -p $APACHE_LOCK_DIR
RUN mkdir -p $APACHE_LOG_DIR
ADD html /var/www
EXPOSE 80
CMD ["/usr/sbin/apache2", "-D", "FOREGROUND"]

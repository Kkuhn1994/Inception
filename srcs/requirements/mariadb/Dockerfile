FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y \
	mariadb-server

COPY 50-server.cnf /etc/mysql/maria.conf.d/.
COPY script.sh script.sh
RUN chmod +x script.sh


RUN mkdir /run/mysqld

CMD ["./script.sh"]
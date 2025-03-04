FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y \
	php-fpm \
	php-mysqli \
	curl

RUN mkdir -p /run/php && chown -R www-data:www-data /run/php && chmod 755 /run/php

COPY ./script2.sh ./script.sh
RUN chmod +x script.sh
COPY www.conf /etc/php/7.4/fpm/pool.d/.

ENTRYPOINT ["./script.sh"]
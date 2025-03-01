FROM debian:bullseye

RUN apt update && apt upgrade -y && apt install -y \
	php-fpm \
	php-mysqli \
	curl



RUN mkdir -p /run/php && chown -R www-data:www-data /run/php && chmod 755 /run/php


COPY www.conf /etc/php/7.4/fpm/pool.d/.

CMD ["php-fpm7.4", "-F"]
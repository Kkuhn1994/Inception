FROM debian:bullseye


RUN apt-get update && apt-get install -y \
    redis-server \
    && rm -rf /var/lib/apt/lists/* \
	apt-get install iputils-ping


EXPOSE 6379


CMD ["redis-server"]
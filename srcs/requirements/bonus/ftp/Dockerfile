FROM debian:bullseye

RUN apt-get update && apt-get install -y \
    pure-ftpd \
    ftp

RUN mkdir -p /home/kkuhn/www \
    && chown -R nobody:nogroup /home/kkuhn/www \
    && chmod -R 755 /home/kkuhn/www

CMD ["pure-ftpd", "-P", "0.0.0.0"]

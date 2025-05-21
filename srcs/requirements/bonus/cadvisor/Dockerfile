FROM debian:bullseye

RUN apt-get update && \
    apt-get install -y wget ca-certificates gnupg && \
    useradd -r -s /bin/false cadvisor

RUN wget -O /usr/local/bin/cadvisor https://github.com/google/cadvisor/releases/download/v0.52.1/cadvisor-v0.52.1-linux-amd64 && \
    chmod +x /usr/local/bin/cadvisor

USER cadvisor

ENTRYPOINT ["/usr/local/bin/cadvisor"]

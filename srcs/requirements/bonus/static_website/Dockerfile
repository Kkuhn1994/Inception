# Verwende das offizielle Debian Bullseye Image als Basis
FROM debian:bullseye

# Aktualisiere die Paketlisten und installiere Apache
RUN apt-get update && \
    apt-get install -y apache2 && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN rm -f /var/www/html/index.html

# Kopiere die statische Seite ins Webverzeichnis

# RUN mkdir -p /usr/local/apache2/htdocs/static_site
COPY index.html /var/www/html/.

# RUN echo '<?php header("Location: /adminer.php"); ?>' > /var/www/html/index.php

# Expose den Port 80 für den Apache-Webserver
EXPOSE 80

# Starte Apache im Vordergrund
CMD ["apachectl", "-D", "FOREGROUND"]
# FROM debian:bullseye

# RUN apt-get update && apt-get install -y \
# 	apache2 \
# 	php \
# 	php-mysqli \
# 	php-pgsql \
# 	php-sqlite3 \
# 	curl \
# 	&& rm -rf /var/lib/apt/lists/*

# # Adminer herunterladen
# RUN curl -o /var/www/html/adminer.php https://www.adminer.org/latest.php
# RUN echo "Listen 8080" >> /etc/apache2/ports.conf
# RUN sed -i 's/<VirtualHost *:80>/<VirtualHost *:8080>/g' /etc/apache2/sites-available/000-default.conf
# # Konfiguration von Apache
# RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# # Apache-Ports freigeben (Standardport 80)
# RUN echo "<html><body><h1>Apache läuft</h1></body></html>" > /var/www/html/index.html
# COPY dir.conf /etc/apache2/mods-enabled/dir.conf
# EXPOSE 8080

# # Starten von Apache im Vordergrund
# CMD ["apache2ctl", "-D", "FOREGROUND"]



FROM debian:bullseye

RUN apt-get update && apt-get install -y \
    apache2 \
    openssl \
    php \
    php-mysqli \
    php-pgsql \
    php-sqlite3 \
    curl \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod ssl

# Lade Adminer und speichere es im richtigen Verzeichnis
RUN curl -o /var/www/html/adminer.php https://www.adminer.org/latest.php

# Setze den Servername
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Apache auf Port 8080 konfigurieren
RUN echo "Listen 8080" >> /etc/apache2/ports.conf

COPY  000-default.conf /etc/apache2/sites-available/.
COPY dir.conf /etc/apache2/mods-enabled/dir.conf
# Starte Apache im Vordergrund
CMD ["apache2ctl", "-D", "FOREGROUND"]
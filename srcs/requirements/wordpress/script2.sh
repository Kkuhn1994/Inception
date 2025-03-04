#!/bin/bash

DB_NAME=$(cat /run/secrets/db_name)
ROOT_USER=$(cat /run/secrets/root_user)
ROOT_PASSWORD=$(cat /run/secrets/root_password)
USER=$(cat /run/secrets/user)
PASSWORD=$(cat /run/secrets/password)


echo $DB_NAME
echo $ROOT_USER
echo $ROOT_PASSWORD


cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar


./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname=$DB_NAME --dbuser=$ROOT_USER --dbpass=$ROOT_PASSWORD --dbhost=mariadb --allow-root
./wp-cli.phar core install --url=localhost --title=inception --admin_user=$ROOT_USER --admin_password=$ROOT_PASSWORD --admin_email=$ROOT_USER@example.com --allow-root
./wp-cli.phar user create $USER $USER@example.com --user_pass=$PASSWORD --role=subscriber --allow-root

./wp-cli.phar user list --allow-root



php-fpm7.4 -F
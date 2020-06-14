#!/bin/bash

chown -R www-data:www-data /var/www/html/wp-content
docker-entrypoint.sh apache2-foreground
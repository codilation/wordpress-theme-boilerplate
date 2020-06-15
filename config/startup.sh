#!/bin/bash

usermod -a -G www-data root
chgrp -R www-data /var/www/html
chmod -R g+w /var/www/html
docker-entrypoint.sh apache2-foreground
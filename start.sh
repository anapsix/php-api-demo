#!/usr/bin/env sh
if ! [ -d ../vendor ]; then
  apk add php7-phar && cd /srv/app && php composer.phar install
fi
php-fpm7 -D && caddy -root ${APP_ROOT}/public --conf /Caddyfile
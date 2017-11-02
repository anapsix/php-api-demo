FROM anapsix/acp
RUN apk add -U php7-phar && cd /srv/app/ && php composer.phar install && apk del php7-phar
CMD /srv/app/start.sh
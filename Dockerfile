FROM php:fpm
RUN cd / && \
    (curl -s http://getcomposer.org/installer | php) && \
    mv composer.phar /bin/composer && \
    chmod +x /bin/composer

RUN apt-get update -yy && apt-get install -yy \
    git

EXPOSE 9000
CMD ["php-fpm"]

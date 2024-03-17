FROM wordpress

COPY ./src/php.ini /usr/local/etc/php/php.ini

COPY ./src/full-width-template.php /usr/src/wordpress/wp-content/themes/twentytwentythree/full-width-template.php

RUN chown -R www-data:www-data /var/www/html
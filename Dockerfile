# Use the official WordPress image as the base
FROM wordpress:latest

# Copy custom wp-config.php file to the container
COPY wp-config.php /var/www/html/wp-config.php

# Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

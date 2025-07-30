FROM php:8.2-apache

# Optional: suppress ServerName warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Optional: enable mod_rewrite (for frameworks, .htaccess, etc.)
RUN a2enmod rewrite

# Copy and rename the PHP file as index.php
COPY training_briefing.php /var/www/html/index.php
COPY timer.js /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]

FROM php:8.2-apache

# Enable mod_rewrite and any other needed modules
RUN a2enmod rewrite

# Copy your files to the Apache web root
COPY training_briefing.php /var/www/html/
COPY timer.js /var/www/html/

# Set proper permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Use the default Apache entrypoint
CMD ["apache2-foreground"]

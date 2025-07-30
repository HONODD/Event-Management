FROM php:8.2-apache

# Suppress ServerName warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Enable mod_rewrite (optional, for clean URLs or .htaccess support)
RUN a2enmod rewrite

# Copy your PHP and JS files into the web root
COPY index.php /var/www/html/
COPY timer.js /var/www/html/

# Set permissions (optional but good practice)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for Apache
EXPOSE 80

# Start Apache in foreground mode
CMD ["apache2-foreground"]

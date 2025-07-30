FROM php:8.2-apache

COPY training_briefing.php /var/www/html/
COPY timer.js /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
# Image de base avec PHP et Apache
FROM php:8.2-apache

# Copie les fichiers de votre projet dans le dossier web d'Apache
COPY . /var/www/html/

# Active le module de réécriture (utile pour .htaccess)
RUN a2enmod rewrite

# Donne les bons droits
RUN chown -R www-data:www-data /var/www/html

# Expose le port 80 (par défaut utilisé par Apache)
EXPOSE 80

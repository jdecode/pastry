FROM sandymadaan/php7.3-docker-newrelic:0.1

# Copy local code to the container image.
COPY . /var/www/html/

# Use the PORT environment variable in Apache configuration files.
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf


# Authorise .htaccess files
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

#ARG GOOGLE_CLOUD_PROJECT

#RUN sed -ri -e 's/project_id/${GOOGLE_CLOUD_PROJECT}/g' .env
RUN composer install -n --prefer-dist

RUN chown -R www-data:www-data storage bootstrap


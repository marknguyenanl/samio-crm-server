FROM php:8.4-fpm-alpine

# Install Nginx and other dependencies
RUN apk add --no-cache nginx bash libpng libjpeg-turbo freetype \
    && mkdir -p /run/nginx

# Copy Laravel app
WORKDIR /var/www/html

# Copy Nginx config
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Expose HTTP (Gateway terminates TLS)
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]


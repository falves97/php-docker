FROM dunglas/frankenphp

# add additional extensions here:
RUN install-php-extensions \
    @composer \
    zip \
    opcache


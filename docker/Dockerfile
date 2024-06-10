FROM mafio69/mafio-laravel

ENV APP_ENV=${APP_ENV:-prod} \
    WEB_PORT_EXPOSED=${WEB_PORT_EXPOSED:-8077} \
    DATABASE_PORT_EXPOSED=${DATABASE_PORT_EXPOSED:-3308} \
    DATABASE_HOST=${DATABASE_HOST:-database} \
    DATABASE_ROOT_PASSWORD=${DATABASE_ROOT_PASSWORD:-password} \
    DATABASE_USERNAME=${DATABASE_USERNAME:-admin} \
    DATABASE_PASSWORD=${DATABASE_PASSWORD:-password} \
    DATABASE_NAME=${DATABASE_NAME:-slim} \
    ERROR_REPORTING=${ERROR_REPORTING:-0} \
    DISPLAY_ERROR=${DISPLAY_ERROR:-0} \
    XDEBUG_MODE=${XDEBUG_MODE:-off} \
    XDEBUG_CLIENT_HOST=${XDEBUG_CLIENT_HOST:-host.docker.internal}

RUN git config --global user.email "dev@dev.click" \
    && git config --global user.name "Dev"

EXPOSE 9000
CMD ["php-fpm"]

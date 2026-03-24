#!/bin/sh
set -eu

APP_ROOT="/var/www/html"
VOLUME_ROOT="${RAILWAY_VOLUME_MOUNT_PATH:-/data}"
WRITABLE_TARGET="$VOLUME_ROOT/writable"
UPLOADS_TARGET="$VOLUME_ROOT/uploads"

mkdir -p "$WRITABLE_TARGET/cache" \
    "$WRITABLE_TARGET/logs" \
    "$WRITABLE_TARGET/session" \
    "$WRITABLE_TARGET/uploads" \
    "$UPLOADS_TARGET"

if [ ! -L "$APP_ROOT/writable" ]; then
    rm -rf "$APP_ROOT/writable"
    ln -s "$WRITABLE_TARGET" "$APP_ROOT/writable"
fi

if [ ! -L "$APP_ROOT/public/uploads" ]; then
    rm -rf "$APP_ROOT/public/uploads"
    ln -s "$UPLOADS_TARGET" "$APP_ROOT/public/uploads"
fi

chown -R www-data:www-data "$VOLUME_ROOT" "$APP_ROOT/writable" "$APP_ROOT/public/uploads"

apache2-foreground

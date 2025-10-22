#!/usr/bin/env bash
echo "Starting PHP proxy..."
php -S 0.0.0.0:$PORT proxy.php

# Use official PHP runtime
FROM php:8.2-cli

# Copy files into container
WORKDIR /app
COPY . .

# Expose Render's port
ENV PORT=10000
EXPOSE 10000

# Start PHP's built-in server
CMD ["php", "-S", "0.0.0.0:10000", "proxy.php"]

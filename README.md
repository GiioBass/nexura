Permissions to the folders storage/ y bootstrap/
chmod 777 -R storage bootstrap

Run command:
php artisan migrate --seed

Restart migration and seeders
php artisan migrate:fresh -seed

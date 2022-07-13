Permissions to the folders storage/ y bootstrap/
chmod 777 -R storage bootstrap

Clone repository 
git clone url-repository

Install packages
composer install

Copy .env.example and config credentials Data Base

Run command:
php artisan migrate --seed

Restart migration and seeders
php artisan migrate:fresh -seed

Run server Laravel
php artisan serve

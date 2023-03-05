# pablozagni/laravel-starter-pack

Set of custom Laravel Blade components, CSS and layouts.


Usage:

laravel new myapp

cd myapp

composer require pablozagni/laravel-starter-pack:dev-master

php artisan vendor:publish --tag=LaravelStarterPack

To publish:
    components to \resources\views\components
    layouts to \resources\views\layouts
    css to \resources\css

Edit your \resources\css\app.css and add

    @import 'laravel-starter-pack.css';


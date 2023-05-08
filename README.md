# eticaret-prog
 Install the dependencies and devDependencies and start the server. //Bağımlılıkları yükleyin.
 $ cd e-ticaret-web-prog
 $ composer install
 $ npm install
 
 Create .env file from .env.example than:
 $ php artisan generate:key
 
 You can start the localhost with this code.
 $ php artisan serve
 $ npm run watch
 
ERROR

$ composer require --dev barryvdh/laravel-ide-helper
$ php artisan clear-compiled
$ php artisan ide-helper:generate
$ php artisan optimize
$ php artisan vendor:publish --provider="Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider" --tag=config
$ php artisan ide-helper:models OR $ php artisan ide-helper:models "App\Models\Post"

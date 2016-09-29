<?php
namespace Unrulynatives\Helpers;
// namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'helperstimezones');

        // publishing the basic views
        $this->publishes([
            // publish view files for the UN Starter Kit
            __DIR__.'/unstarter_views' => base_path('resources/views/unstarter'),
            
            __DIR__.'/views' => base_path('resources/views/vendor/unrulynatives/helpers'),
        ], 'views');


        $this->publishes([

        // publish app files (the ROUTES file, Models, Controllers, etc.) for the UN Starter Kit
            __DIR__.'/unstarter_app' => base_path('unstarter'),

        // publish  Controllers to the app's app/Http/Controllers folder
            __DIR__.'/unstarter_controllers' => base_path('app/Http/Controllers'),

        // publish  Models to the app's app/Models folder
            __DIR__.'/unstarter_models' => base_path('app/Models'),

        // publish  Helpers to the app's app/Http/Controllers folder
            __DIR__.'/unstarter_helpers' => base_path('app/Helpers'),

        // publish  Middleware to the app's app/Http/Controllers folder
            __DIR__.'/unstarter_middleware' => base_path('app/Http/Middleware')

        ], 'app');


        $this->publishes([
        // publish migrations for all registered packages 
            __DIR__.'/unstarter_migrations' => base_path('database/migrations')


        ], 'migrations');


        $this->publishes([
            // publish seeds for all registered packages 
            __DIR__.'/unstarter_seeds' => base_path('database/seeds'),
        ], 'seeds');


        $this->publishes([
        // publish  public folder content: css and js
        // Public
            __DIR__.'/../public' => public_path(''),
        ], 'publicassets');




    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Unrulynatives\Helpers\HelpersController');
        // $this->app->make('Unrulynatives\Helpers\UserExtensions');
    }
}

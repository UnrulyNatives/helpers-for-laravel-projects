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
            __DIR__.'/views' => base_path('resources/views/vendor/unrulynatives/helpers'),


        // publish view files for the UN Starter Kit
        $this->publishes([
            __DIR__.'/unstarter_views' => base_path('resources/views/unstarter'),

        // publish app files (Models, Controllers, etc.) for the UN Starter Kit
        $this->publishes([
            __DIR__.'/unstarter_app' => base_path('/'),

        // publish app files (Models, Controllers, etc.) for the UN Starter Kit
        $this->publishes([
            __DIR__.'/unstarter_controllers' => base_path('app/Http/Controllers'),

        // Publishes css & js resources to the app
        $this->publishes([__DIR__.'/../public' => public_path(),
        ], 'public'),


            
        ]);

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

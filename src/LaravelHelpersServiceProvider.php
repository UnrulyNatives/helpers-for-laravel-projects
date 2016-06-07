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
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        // require __DIR__ . '/../vendor/autoload.php';

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/unrulynatives'),
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
        $this->app->make('Unrulynatives\Attitudes\HelpersController');
    }
}

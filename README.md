# laravel-helper
A set of code snippets and functions to use across all projects. 

This package contains some modifications made over a fresh installation of Laravel 5.3. 

With time, this package would contain all modifications of the bare Laravel app. In other words, as soon as you include this package in your composer.json, you will get fully working starter kit.



## Features

- Gravatar for your User model

- some usefull css and jQuery tools included. See the Starter kit for details and examples: http://dev.unrulynatives.com/feature

## Installation

1. Add 
	`"unrulynatives/helpers": "0.1.1"`
to your composer.json file.

2. Add this to your `config/app.php` file in packages section
	`Unrulynatives\Helpers\HelpersServiceProvider::class,`

3. Publish views, css & jQuery files to your app:

`php artisan vendor:publish --provider="Unrulynatives\Helpers\HelpersServiceProvider"`

4. Register the package in your User model and wherever you see it is necessary - see features section.

In your `User` model:
`use Unrulynatives\Helpers\UserExtensions;




class User extends Authenticatable
{

use UserExtensions;`


5. Register trait with useful for models
In your model file declare:
`use Unrulynatives\Helpers\ModelExtensions;




class [your-model-name-goes-here] extends Authenticatable
{

use ModelExtensions;`

6. You need to register the routes defined in this package. Open `\app\Providers\RouteServiceProvider.php` and 

- add `$this->mapUnstarterRoutes();` to the `map()` function and
- add the below code at the bottom of mapWebRoutes() fucntion:

```
    protected function mapUnstarterRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('unstarter/routes/unstarter.php');
        });
    }
```    







### Done!
 Now you can check if the package works. Point your browser to `unrulyhelpers`. You should see a clock - an example developed along Laraveldaily tutorial http://laraveldaily.com/how-to-create-a-laravel-5-package-in-10-easy-steps/



## To do (Future features)

1. Include Migrations for the Starter Kit package
2. Include Models for the Starter Kit package


## Example usage

1. To get Gravatar assigned to authenticated user's e-mail use
`<img src="{{Auth::user()->gravatar}}">`
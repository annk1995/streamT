<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         $this->registerMiddlewareAliases();
    }
      protected function registerMiddlewareAliases(): void
    {
        $router = $this->app['router'];

        //  $router->aliasMiddleware('auth', \App\Http\Middleware\Authenticate::class);
        $router->aliasMiddleware('adminAuth', \App\Http\Middleware\AdminAuth::class);
        $router->aliasMiddleware('TalentAuth', \App\Http\Middleware\TalentAuth::class);
        // Add other middleware aliases here
    }
}

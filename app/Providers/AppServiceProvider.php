<?php

namespace App\Providers;

use DB;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;
use URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_ENV') === 'production') {
            // force all generated urls to https on production
            Url::forceScheme('https');
        }

        if (env('APP_ENV') === 'local') {
            // log every sql query while in local environment
            \Event::listen('Illuminate\Database\Events\QueryExecuted', function ($query) {
                \Log::debug($query->sql);
            });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

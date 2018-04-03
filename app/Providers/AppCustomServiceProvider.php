<?php

namespace App\Providers;

use App\Services\PessoaService;
use Illuminate\Support\ServiceProvider;

class AppCustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\PessoaService', function ($app){
            return new PessoaService();
        });
    }
}

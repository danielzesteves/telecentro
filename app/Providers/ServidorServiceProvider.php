<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServidorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\ServidorRepositoryInterface',
            'App\Repositories\ServidorRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

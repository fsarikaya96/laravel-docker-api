<?php

namespace App\Providers;

use App\Repository\RepositoryIoCRegister;
use App\Services\ServiceIoCRegister;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register Repository IoC
        RepositoryIoCRegister::register();
        // Register Service IoC
        ServiceIoCRegister::register();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

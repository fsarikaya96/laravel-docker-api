<?php

namespace App\Services;

use App\Services\Implementations\ProductService;
use App\Services\Implementations\UserService;
use App\Services\Interfaces\IProductService;
use App\Services\Interfaces\IUserService;

class ServiceIoCRegister
{
    /**
     * Register Service dependency injection
     * @return void
     */
    public static function register() : void {
        app()->bind(IProductService::class,ProductService::class);
        app()->bind(IUserService::class, UserService::class);
    }
}

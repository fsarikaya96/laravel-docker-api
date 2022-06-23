<?php

namespace App\Services;

use App\Services\Implementations\ProductService;
use App\Services\Interfaces\IProductService;

class ServiceIoCRegister
{
    public static function register() :void {
        app()->bind(IProductService::class,ProductService::class);
    }
}

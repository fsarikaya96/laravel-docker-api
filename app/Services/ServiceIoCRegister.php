<?php

namespace App\Services;

use App\Services\Implementations\CategoryService;
use App\Services\Implementations\ProductCategoryService;
use App\Services\Implementations\ProductService;
use App\Services\Implementations\UserService;
use App\Services\Interfaces\ICategoryService;
use App\Services\Interfaces\IProductCategoryService;
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
        app()->bind(ICategoryService::class, CategoryService::class);
        app()->bind(IProductCategoryService::class, ProductCategoryService::class);
    }
}

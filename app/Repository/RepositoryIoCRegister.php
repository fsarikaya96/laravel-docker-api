<?php
namespace App\Repository;
use App\Repository\{Implementations\CategoryRepository,
    Implementations\ProductCategoryRepository,
    Implementations\UserRepository,
    Interfaces\ICategoryRepository,
    Interfaces\IProductCategoryRepository,
    Interfaces\IProductRepository,
    Implementations\ProductRepository,
    Interfaces\IUserRepository};

class RepositoryIoCRegister{
    /**
     * Register Repository dependency injection
     *
     * @return void
     */

    public static function register() : void{
        app()->bind(IProductRepository::class,ProductRepository::class);
        app()->bind(IUserRepository::class, UserRepository::class);
        app()->bind(ICategoryRepository::class,CategoryRepository::class);
        app()->bind(IProductCategoryRepository::class , ProductCategoryRepository::class);
    }
}


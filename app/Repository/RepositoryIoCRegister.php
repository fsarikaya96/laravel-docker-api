<?php
namespace App\Repository;
use App\Repository\{
  Interfaces\IProductRepository,
  Implementations\ProductRepository,
};

class RepositoryIoCRegister{
    /**
     * Register Repository dependency injection
     *
     * @return void
     */

    public static function register() : void{
        app()->bind(IProductRepository::class,ProductRepository::class);
    }
}


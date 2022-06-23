<?php

namespace App\Services\Interfaces;

use App\Models\Product;
use Illuminate\Support\Collection;

interface IProductService
{
    public function getProductById(int $id) : Product;

    public function getProductsAll() : Collection;
}

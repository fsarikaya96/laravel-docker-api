<?php

namespace App\Repository\Interfaces;

use App\Models\Product;
use Illuminate\Support\Collection;

interface IProductRepository
{
    /**
     * Get Product By ID
     * @param int $id
     * @return Product
     */

 public function getProductById(int $id) : Product;
 public function getProductsAll() : Collection;
}

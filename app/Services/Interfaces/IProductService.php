<?php

namespace App\Services\Interfaces;

use App\Models\Product;
use Illuminate\Support\Collection;

interface IProductService
{
    /**
     * Get Product By ID
     * @param int $id
     * @return Product
     */
    public function getProductById(int $id) : Product;

    /**
     * Get All Products
     * @return Collection
     */
    public function getAllProducts() : Collection;
}

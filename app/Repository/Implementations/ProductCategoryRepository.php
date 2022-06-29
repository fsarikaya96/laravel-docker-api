<?php

namespace App\Repository\Implementations;

use App\Repository\Interfaces\IProductCategoryRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProductCategoryRepository implements IProductCategoryRepository
{
    /**
     * Get product and category together
     * @return Collection
     */
    public function fetchCategoryProduct():Collection
    {
        return DB::table('category_product')
            ->select('categories.name as Category','products.name as Product')
            ->join('products','category_product.product_id','products.id')
            ->join('categories','category_product.category_id','categories.id')
            ->get();
    }
}

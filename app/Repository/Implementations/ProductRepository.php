<?php
namespace App\Repository\Implementations;
use App\Models\Product;
use App\Repository\Interfaces\IProductRepository;
use Illuminate\Support\Collection;

class ProductRepository implements IProductRepository{

    /**
     * Get product detail by product id
     * @param int $id
     * @return Product
     */

    public function getProductById(int $id): Product
    {
        return Product::findOrFail($id);
    }

    /**
     * Get All Products
     * @return Collection
     */
    public function getProductsAll(): Collection
    {
        return Product::all();
    }
}

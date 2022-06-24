<?php

namespace App\Services\Implementations;

use App\Models\Product;
use App\Repository\Interfaces\IProductRepository;
use App\Services\Interfaces\IProductService;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ProductService implements IProductService
{
    private IProductRepository $productRepository;

    /**
     * ProductService constructor injection
     * @param IProductRepository $IProductRepository
     */
    public function __construct(IProductRepository $IProductRepository)
    {
        $this->productRepository = $IProductRepository;
    }

    /**
     * Get Product By ID
     * @param int $id
     * @return Product
     * @throws Exception
     */
    public function getProductById(int $id): Product
    {
        Log::channel('api')->info('ProductService Called ---> Request getProductById() function');

        Log::channel('api')->info('ProductService Called ---> Return get product by id : ' . $id);
        return $this->productRepository->getProductById($id);

    }

    /**
     * Get All Products
     * @return Collection
     */
    public function getProductsAll(): Collection
    {
        Log::channel('api')->info('ProductService Called ---> Request getProductsAll() function');
        return $this->productRepository->getProductsAll();
    }
}

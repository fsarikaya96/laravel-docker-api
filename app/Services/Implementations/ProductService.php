<?php

namespace App\Services\Implementations;

use App\Models\Product;
use App\Repository\Interfaces\IProductRepository;
use App\Services\Interfaces\IProductService;
use Illuminate\Support\Collection;

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
     */
    public function getProductById(int $id): Product
    {
        return $this->productRepository->getProductById($id);
    }

    public function getProductsAll(): Collection
    {
        return $this->productRepository->getProductsAll();
    }
}

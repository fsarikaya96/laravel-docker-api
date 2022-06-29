<?php

namespace App\Services\Implementations;

use App\Repository\Interfaces\IProductCategoryRepository;
use App\Services\Interfaces\IProductCategoryService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ProductCategoryService implements IProductCategoryService
{
    private IProductCategoryRepository $categoryRepository;

    /**
     * ProductCategoryService constructor injection
     * @param IProductCategoryRepository $IProductCategoryRepository
     */
    public function __construct(IProductCategoryRepository $IProductCategoryRepository)
    {
        $this->categoryRepository = $IProductCategoryRepository;
    }

    /**
     * Get product and category together
     * @return Collection
     */
    public function fetchCategoryProduct(): Collection
    {
        Log::channel('api')->info('ProductCategoryService called ---> request function fetchCategoryProduct()');
        return $this->categoryRepository->fetchCategoryProduct();
    }
}

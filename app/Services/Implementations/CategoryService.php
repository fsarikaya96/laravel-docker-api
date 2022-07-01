<?php

namespace App\Services\Implementations;

use App\Models\Category;
use App\Repository\Interfaces\ICategoryRepository;
use App\Services\Interfaces\ICategoryService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class CategoryService implements ICategoryService
{
    private ICategoryRepository $categoryRepository;

    /**
     * CategoryRepository constructor injection
     * @param ICategoryRepository $ICategoryRepository
     */
    public function __construct(ICategoryRepository $ICategoryRepository)
    {
        $this->categoryRepository = $ICategoryRepository;
    }

    /**
     * Get All Categories
     * @return Collection
     */
    public function getAllCategories(): Collection
    {
        Log::channel('api')->info('CategoryService Called ---> Request getAllCategories() function');
        return $this->categoryRepository->getAllCategories();
    }
    public function getCategoryById(int $id): Category
    {
        Log::channel('api')->info('CategoryService Called ---> Request getCategoryById() function');
        Log::channel('api')->info('CategoryService Called ---> Return get category by id : ' . $id);
        return $this->categoryRepository->getCategoryById($id);
    }
    public function fetchProductsByCategory(): Collection
    {
        Log::channel('api')->info('CategoryService Called ---> Request fetchProductsByCategory function');
        return $this->categoryRepository->fetchProductsByCategory();
    }
}

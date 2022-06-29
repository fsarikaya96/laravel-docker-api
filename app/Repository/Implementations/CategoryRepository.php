<?php

namespace App\Repository\Implementations;

use App\Models\Category;
use App\Repository\Interfaces\ICategoryRepository;
use Illuminate\Support\Collection;

class CategoryRepository implements ICategoryRepository
{
    /**
     * Get Product By ID
     * @param int $id
     * @return Category
     */
    public function getCategoryById(int $id): Category
    {
        return Category::findOrFail($id);
    }

    /**
     * Get All Categories
     * @return Collection
     */
    public function getAllCategories() : Collection
    {
        return Category::all();
    }
}

<?php

namespace App\Repository\Interfaces;

use App\Models\Category;
use Illuminate\Support\Collection;

interface ICategoryRepository
{
    /**
     * Get Category By ID
     * @param int $id
     * @return Category
     */
    public function getCategoryById(int $id) : Category;
    /**
     * Get All Categories
     * @return Collection
     */
    public function getAllCategories() : Collection;

}

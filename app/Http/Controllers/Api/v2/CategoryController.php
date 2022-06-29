<?php

namespace App\Http\Controllers\Api\v2;

use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Services\Interfaces\ICategoryService;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private ICategoryService $categoryService;

    /**
     * Category Construct
     * @param ICategoryService $ICategoryService
     */
    public function __construct(ICategoryService $ICategoryService)
    {
         return $this->categoryService = $ICategoryService;
    }

    /**
     * Get All Categories
     * @return object
     */
    public function getAllCategories(): object
    {
        return ResponseResult::generate(true, $this->categoryService->getAllCategories(), ResponseCodes::HTTP_OK);
    }
    public function getCategoryById(int $id):object
    {
        try {
            return ResponseResult::generate(true,$this->categoryService->getCategoryById($id),ResponseCodes::HTTP_OK);
        }catch (Exception $exception) {
            return ResponseResult::generate(false,  $exception->getMessage(), ResponseCodes::HTTP_NOT_FOUND);
        }

    }
}

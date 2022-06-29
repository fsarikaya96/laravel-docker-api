<?php

namespace App\Http\Controllers\Api\v2;

use App\Helpers\ResponseCodes;
use App\Helpers\ResponseResult;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\IProductCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    private IProductCategoryService $categoryService;

    /**
     * ProductCategoryController Construct
     * @param IProductCategoryService $IProductCategoryService
     */
    public function __construct(IProductCategoryService $IProductCategoryService)
    {
        $this->categoryService = $IProductCategoryService;
    }

    /**
     * Get product and category together
     * @return object
     */
    public function fetchCategoryProduct() :object
    {
        return ResponseResult::generate(true,$this->categoryService->fetchCategoryProduct(),ResponseCodes::HTTP_OK);
    }
}

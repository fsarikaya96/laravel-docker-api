<?php

namespace App\Http\Controllers\Api\v2;

use App\Helpers\ResponseResult;
use App\Helpers\ResponseCodes;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\IProductService;
use Exception;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    private IProductService $productService;

    /**
     * Product construct
     * @param IProductService $IProductService
     */
    public function __construct(IProductService $IProductService)
    {
        return $this->productService = $IProductService;
    }

    /**
     * Get Product By ID
     * @param $id
     * @return JsonResponse
     */
    public function getProductByID($id): object
    {
        try {
            return ResponseResult::generate(true, $this->productService->getProductById($id), ResponseCodes::HTTP_OK);
        } catch (Exception $exception) {
            return ResponseResult::generate(false,  $exception->getMessage(), ResponseCodes::HTTP_NOT_FOUND);
        }
    }

    /**
     * Get All Products
     * @return JsonResponse
     */
    public function getAllProducts(): object
    {
        return ResponseResult::generate(true, $this->productService->getAllProducts(), ResponseCodes::HTTP_OK);
    }
}

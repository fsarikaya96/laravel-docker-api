<?php

namespace App\Http\Controllers\Api\v2;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\IProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private IProductService $productService;
    public function __construct(IProductService $IProductService)
    {
    return $this->productService = $IProductService;
    }
    public function getProductByID($id)
    {
        return response()->json(['order_id' => $this->productService->getProductByID($id)]);
    }
    public function getProductsAll()
    {
        return response()->json(['orders' => $this->productService->getProductsAll()]);
    }
}

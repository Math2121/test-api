<?php

namespace App\Services\Product;

use App\Repositories\Implementation\ProductRepositoryInterface;
use Exception;

class CreateProductService
{
    public function __construct(private ProductRepositoryInterface $productRepository)
    {
    }

    public function execute(array $product)
    {

        try {
       
            $createProduct = $this->productRepository->create($product);
            return [[
                'product' => $createProduct
            ], 201];
        } catch (Exception $e) {
            return [[
                'message' => $e->getMessage(),
            ], 500];
        }
    }
}

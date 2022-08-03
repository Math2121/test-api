<?php

namespace App\Services\Product;

use App\Repositories\Implementation\ProductRepositoryInterface;
use Exception;

class ListAllProductsService
{
    public function __construct(private ProductRepositoryInterface $productRepository)
    {
    }

    public function execute()
    {

        try {

            $productsList = $this->productRepository->list();
            return [[
                'products' => $productsList
            ], 200];
        } catch (Exception $e) {
            return [[
                'message' => $e->getMessage(),
            ], 500];
        }
    }
}
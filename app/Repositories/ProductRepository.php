<?php

namespace App\Repositories;

use App\Models\Product;

use App\Repositories\Implementation\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function create(array $product)
    {
        $product =  Product::create(
            ['name' => $product['name'],
            'price' => $product['price'],
            'amount' => $product['amount']]);

        return $product;
    }

    public function list(){

        return Product::all();
    }
}

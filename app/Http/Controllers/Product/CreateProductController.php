<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Services\Product\CreateProductService;

class CreateProductController extends Controller
{
    private $createProductService;
    public function __construct(CreateProductService $createProductService)
    {
        $this->createProductService = $createProductService;
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ProductRequest $request)
    {
        //

        $request->validated();

        $response = $this->createProductService->execute($request->all());

        return response()->json($response[0], $response[1]);
    }
}

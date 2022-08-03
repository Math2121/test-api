<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\Product\ListAllProductsService;
use Illuminate\Http\Request;

class ListAllProductsController extends Controller
{
    private $listAllProductsService;
    public function __construct(ListAllProductsService $listAllProductsService)
    {
        $this->listAllProductsService = $listAllProductsService;
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $response = $this->listAllProductsService->execute();

        return response()->json($response[0], $response[1]);
    }
}
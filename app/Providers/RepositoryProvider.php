<?php

namespace App\Providers;

use App\Repositories\Implementation\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

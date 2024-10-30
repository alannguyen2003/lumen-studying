<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use ProductRepository;
use ProductService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register service
        $this->app->singleton(ProductService::class, function ($app) {
            $config = ["debug" => true];
            return new ProductService(new ProductRepository());
        });

        // Register repository
        $this->app->singleton(ProductRepository::class, function ($app) {
            $config = ['debug' => true];
            return new ProductRepository();
        });
    }
}

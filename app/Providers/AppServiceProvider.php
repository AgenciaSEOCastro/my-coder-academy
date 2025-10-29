<?php

namespace App\Providers;

// para paginacion con boostrap
use Illuminate\Pagination\Paginator;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //paginacion boostrap para los links
        Paginator::useBootstrap();
    }
}

<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrap();
        // Paginator::useBootstrapFive();    公式ドキュメント
        //または Paginator::useBootstrapFour();    公式ドキュメント
    }

    public function boot(): void
    {
        //
    }
}

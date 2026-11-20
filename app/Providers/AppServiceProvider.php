<?php

namespace App\Providers;

use Throwable;
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
        \Illuminate\Support\Facades\View::composer('layouts.footer', function ($view) {
            try {
                $siteView = \App\Models\SiteView::first();
                $siteViewCount = $siteView ? number_format($siteView->count) : '53,289';
            } catch (Throwable $e) {
                $siteViewCount = '53,289';
            }

            $view->with('siteViewCount', $siteViewCount);
        });
    }
}

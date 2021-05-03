<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;
use function PHPUnit\Framework\callback;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.footer', 'layouts.contact'], function($view){

            $view->with('text_elements', DB::table('text_elements')->get());
        });

        Paginator::useBootstrap();
    }
}

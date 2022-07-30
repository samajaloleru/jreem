<?php

namespace App\Providers;

use View;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

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
        View::composer('*', function($view)
        {
            $result = Category::orderBy('id')
                    ->where('status',1)
                    ->get();
            $view->with('navbarCategories', $result);
        });

    }
}

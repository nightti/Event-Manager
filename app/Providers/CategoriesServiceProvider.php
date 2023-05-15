<?php

namespace App\Providers;

use App\Services\CategoriesService;
use Illuminate\Support\ServiceProvider;

class CategoriesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('categoriesService', function () {
            return new CategoriesService();
        });
    }
}

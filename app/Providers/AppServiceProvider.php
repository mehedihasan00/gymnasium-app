<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        view()->share('content', CompanyProfile::first());
        // view()->share('categories', Category::orderBy('name', 'ASC')->get());
    }
}

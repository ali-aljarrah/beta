<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use App\Models\SupplyChain;
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
        Paginator::useBootstrapFour();

        View::composer('*', function ($view) {
            $services = Service::select('id', 'title', 'slug')
                ->where('is_active', 1)
                ->get();

            $view->with('menuServices', $services);
        });

        View::composer('*', function ($view) {
            $supply_chain = SupplyChain::select('id', 'title', 'slug')
                ->where('is_active', 1)
                ->get();

            $view->with('menuSupply', $supply_chain);
        });
    }
}

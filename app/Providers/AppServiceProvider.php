<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use App\Models\SupplyChain;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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

        Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) {
            $client = new \GuzzleHttp\Client();

            $response = $client->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'form_params' => [
                        'secret' => config('services.recaptcha.secret_key'),
                        'response' => $value,
                        'remoteip' => request()->ip()
                    ]
                ]
            );

            $body = json_decode((string)$response->getBody());
            return $body->success;
        });

        // Add custom error message for recaptcha
        Validator::replacer('recaptcha', function ($message, $attribute, $rule, $parameters) {
            return __('validation.recaptcha');
        });
    }
}

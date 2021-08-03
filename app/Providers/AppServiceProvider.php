<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentContract;
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
        $this->app->singleton(PaymentContract::class, function ($app) {
            if (request()->has('credit')) {
                return new CreditPaymentGateway('Usd');
            }else {
                return new BankPaymentGateway('usd');
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

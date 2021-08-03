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
            if (request()->has('payment_type')) {
                switch (request()->payment_type) {
                    case 2:
                        return new CreditPaymentGateway('Usd');
                        break;

                    default:
                        return new BankPaymentGateway('usd');
                        break;
                }
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

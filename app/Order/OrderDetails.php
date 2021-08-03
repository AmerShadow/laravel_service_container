<?php

namespace App\Order;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentContract;

class OrderDetails{

    private $paymentGateway;
    public function __construct(PaymentContract $paymentGateway) {
        $this->paymentGateway=$paymentGateway;
    }

    public function all($discount)
    {
        $this->paymentGateway->setDiscount($discount);

        return [
            'name' => 'Amer Sohail',
            'address' => 'Hatai Karbala road Nanded',
        ];
    }
}

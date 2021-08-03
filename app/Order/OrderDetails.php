<?php

namespace App\Order;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentContract;

class OrderDetails{

    private $paymentGateway,$amount,$discount;
    public function __construct(PaymentContract $paymentGateway) {
        $this->paymentGateway=$paymentGateway;
        $this->amount=0;
        $this->discount=0;

    }

    public function all($discount,$amount)
    {

        $this->paymentGateway->setAmount($amount);

        $this->paymentGateway->setDiscount($discount);
        return [
            'name' => 'Amer Sohail',
            'address' => 'Hatai Karbala road Nanded',
        ];
    }


}

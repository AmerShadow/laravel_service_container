<?php

namespace App\Billing;



class BankPaymentGateway implements PaymentContract{

    public $currency,$discount;

    public function __construct($currency) {
        $this->currency = $currency;
        $this->discount = 0;
    }
    public function makePayment($amount)
    {
        return [
            "currency" => $this->currency,
            "amount" => $amount- $this->discount,
            "invoice number" => random_int(100,999),
            "discount" => $this->discount,
        ];
    }

    public function setDiscount($amount)
    {
        $this->discount=$amount;
    }
}

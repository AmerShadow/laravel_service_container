<?php

namespace App\Billing;



class BankPaymentGateway implements PaymentContract{

    public $currency,$discount,$amount;

    public function __construct($currency) {
        $this->currency = $currency;
        $this->discount = 0;
        $this->amount=0;
    }
    public function makePayment()
    {
        return [
            "currency" => $this->currency,
            "real_amount" => $this->amount,
            "payable_amount" => $this->amount- $this->discount,
            "invoice number" => random_int(100,999),
            "discount" => $this->discount,
        ];
    }

    public function setDiscount($discount)
    {
        $this->discount=$this->amount * ($discount/100);

    }

    public function setAmount($amount)
    {
        $this->amount=$amount;

    }
}

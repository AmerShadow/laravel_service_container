<?php

namespace App\Billing;

interface PaymentContract
{

    public function setDiscount($amount);
    public function makePayment();
    public function setAmount($amount);
}

<?php
namespace App\Billing;

interface PaymentContract{
public function setDiscount($amount);
public function makePayment($amount);

}

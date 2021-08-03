<?php



namespace App\Billing;



class CreditPaymentGateway implements PaymentContract{

    public $currency,$discount,$fees;

    public function __construct($currency) {
        $this->currency = $currency;
        $this->discount = 0;

    }
    public function makePayment($amount)
    {
        $this->fees=$amount*0.3;
        return [
            "currency" => $this->currency,
            "amount" => ($amount+$this->fees)- $this->discount,
            "invoice number" => random_int(100,999),
            "discount" => $this->discount,
            "fees" => $this->fees,
        ];
    }

    public function setDiscount($amount)
    {
        $this->discount=$amount;
    }
}

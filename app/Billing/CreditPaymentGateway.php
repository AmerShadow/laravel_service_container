<?php



namespace App\Billing;



class CreditPaymentGateway implements PaymentContract{

    public $currency,$discount,$fees,$amount;

    public function __construct($currency) {
        $this->currency = $currency;
        $this->discount = 0;

    }
    public function makePayment()
    {
        $this->fees=$this->amount*0.3;
        return [

            "currency" => $this->currency,
            "real_amount" => $this->amount,
            "payable_amount" => ($this->amount+$this->fees)- $this->discount,
            "invoice number" => random_int(100,999),
            "discount" => $this->discount,
            "fees" => $this->fees,
        ];
    }


    public function setAmount($amount)
    {
        $this->amount=$amount;
    }

    public function setDiscount($discount)
    {
        $this->discount=$this->amount * ($discount/100);
    }


}

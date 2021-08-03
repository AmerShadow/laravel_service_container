<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentContract;
use App\Order\OrderDetails;

class PayOrderController extends Controller
{
    private $discount;
    public function store(OrderDetails $orderDetails,PaymentContract $paymentGateway)
    {
        $discount=10;
      // $paymentGateway=new PaymentGateway($currency='Usd');
      $order=$orderDetails->all($discount);
       return $paymentGateway->makePayment(100);
    }
}

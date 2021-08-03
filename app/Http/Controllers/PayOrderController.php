<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentContract;
use App\Order\OrderDetails;
use Illuminate\Http\Request;


class PayOrderController extends Controller
{
    private $discount, $amount;

    public function paymentPage()
    {
        return view('customer.payments.create');
    }
    public function store(Request $request, OrderDetails $orderDetails, PaymentContract $paymentGateway)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'discount' => 'required|numeric',
            'payment_type' => 'required'
        ]);

        $this->amount = $request->amount;
        $this->discount= $request->discount;

        $order = $orderDetails->all($this->discount, $this->amount);
        return $paymentGateway->makePayment();
    }
}

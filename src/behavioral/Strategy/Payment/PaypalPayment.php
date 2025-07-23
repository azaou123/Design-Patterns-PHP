<?php 

namespace DesignPatterns\Behavioral\Strategy\Payment;

class PaypalPayment implements PaymentStrategy{
    public function pay($amount): string{
        return "Paid {$amount} using PayPal.";
    }
}
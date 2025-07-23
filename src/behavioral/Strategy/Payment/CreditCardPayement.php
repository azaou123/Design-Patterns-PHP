<?php 

namespace DesignPatterns\Behavioral\Strategy\Payment;

class CreditCardPayement implements PaymentStrategy{
    public function pay(int $amount) : string {
        return "Paid {$amount} using Credit Card.";
    }
}
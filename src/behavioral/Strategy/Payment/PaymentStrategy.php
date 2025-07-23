<?php 

namespace DesignPatterns\Behavioral\Strategy\Payment;

interface PaymentStrategy{
    public function pay(int $amount): string;
}
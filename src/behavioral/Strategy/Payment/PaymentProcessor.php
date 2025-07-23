<?php 

namespace DesignPatterns\Behavioral\Strategy\Payment;

use DesignPatterns\Behavioral\Strategy\Payment\PaymentStrategy;

class PaymentProcessor{
    private PaymentStrategy $strategy;

    public function __construct(PaymentStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function setStrategy(PaymentStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function process(int $amount){
        return $this->strategy->pay($amount);
    }

}
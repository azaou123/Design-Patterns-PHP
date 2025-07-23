<?php



use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Strategy\Payment\PaymentProcessor;
use DesignPatterns\Behavioral\Strategy\Payment\PayPalPayment;
use DesignPatterns\Behavioral\Strategy\Payment\CreditCardPayement;

class StrategyPaymentTest extends TestCase
{
    public function testPayPalPayment()
    {
        $paypal = new PayPalPayment();
        $processor = new PaymentProcessor($paypal);

        $result = $processor->process(100);
        $this->assertEquals("Paid 100 using PayPal.", $result);
    }

    public function testCreditCardPayment()
    {
        $creditCard = new CreditCardPayement();
        $processor = new PaymentProcessor($creditCard);

        $result = $processor->process(250);
        $this->assertEquals("Paid 250 using Credit Card.", $result);
    }

    public function testChangeStrategyFromPayPalToCreditCard()
    {
        $paypal = new PayPalPayment();
        $processor = new PaymentProcessor($paypal);

        // Initially PayPal
        $result1 = $processor->process(50);
        $this->assertEquals("Paid 50 using PayPal.", $result1);

        // Change to Credit Card
        $creditCard = new CreditCardPayement();
        $processor->setStrategy($creditCard);

        $result2 = $processor->process(75);
        $this->assertEquals("Paid 75 using Credit Card.", $result2);
    }
}

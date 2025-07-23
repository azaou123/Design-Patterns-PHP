# Payment Strategy Pattern

This module demonstrates the **Strategy Design Pattern** in PHP by implementing different payment methods.

## 📌 Overview
The **Strategy Pattern** allows you to define a family of algorithms (in this case, payment methods), encapsulate each one, and make them interchangeable at runtime without altering the client code.

In this project:
- **PaymentProcessor** is the context that uses a `PaymentStrategy`.
- **PayPalPayment** and **CreditCardPayment** are concrete strategies that implement the `PaymentStrategy` interface.

## 🗂 Structure
src/
└── Behavioral/
└── Strategy/
└── Payment/
├── PaymentStrategy.php
├── PaymentProcessor.php
├── PayPalPayment.php
├── CreditCardPayment.php
└── README.md

## ⚙️ Usage Example
```php
use Src\Behavioral\Strategy\Payment\PaymentProcessor;
use Src\Behavioral\Strategy\Payment\PayPalPayment;
use Src\Behavioral\Strategy\Payment\CreditCardPayment;

$paypal = new PayPalPayment();
$processor = new PaymentProcessor($paypal);

echo $processor->process(100); // Paid 100 using PayPal.

$creditCard = new CreditCardPayment();
$processor->setStrategy($creditCard);

echo $processor->process(250); // Paid 250 using Credit Card.
✅ Running Tests
Make sure you have installed dependencies:

composer install
Run PHPUnit:

vendor/bin/phpunit --filter StrategyPaymentTest
💡 Key Benefit:
You can add new payment methods (e.g., ApplePayPayment, BitcoinPayment) without modifying PaymentProcessor. Just implement the PaymentStrategy interface and plug it in!
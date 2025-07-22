# Singleton Pattern in PHP (Native)

This repository demonstrates the implementation of the **Singleton Design Pattern** using native PHP.

## 📌 What is the Singleton Pattern?

The Singleton Pattern ensures that a class has **only one instance** and provides a global point of access to it. It's commonly used for classes like database connections, logging, configuration managers, etc.

## ✅ Key Characteristics

- Only one instance of the class exists.
- Provides a global access point to that instance.
- Controls instantiation using a private constructor and static method.

## 🛠️ Implementation Example

```php
<?php

class Singleton
{
    private static ?Singleton $instance = null;

    // Prevent direct construction
    private function __construct() {}

    // Prevent cloning
    private function __clone() {}

    // Prevent unserializing
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize Singleton");
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function doSomething(): void
    {
        echo "Doing something from the Singleton instance!";
    }
}

// Usage
$singleton = Singleton::getInstance();
$singleton->doSomething();
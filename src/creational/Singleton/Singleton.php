<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct() {}
    private function __clone() {}

    public function __wakeup(): void
    {
        throw new \Exception('Cannot Unserialize Singleton!');
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function doSomething(): string
    {
        // ✅ Return the string instead of echoing
        return "Singleton instance working!";
    }
}
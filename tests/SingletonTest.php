<?php

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testSingletonReturnsSameInstance()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();

        $this->assertSame($a, $b);
        $this->assertEquals("Singleton instance working!", $a->doSomething());
    }
}

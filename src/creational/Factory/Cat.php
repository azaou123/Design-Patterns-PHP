<?php 

namespace DesignPatterns\creational\Factory;

class Cat implements Animal{
    public function speak(): string{
        return "Meow Meow!";
    }
}
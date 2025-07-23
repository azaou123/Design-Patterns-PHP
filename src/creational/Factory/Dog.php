<?php 

namespace DesignPatterns\creational\Factory;

class Dog implements Animal {
    public function speak(): string {
        return "Hoo Hoew !";
    }
}
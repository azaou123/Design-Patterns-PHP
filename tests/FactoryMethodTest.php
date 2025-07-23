<?php 

use PHPUnit\Framework\TestCase;
use DesignPatterns\creational\Factory\CatFactory;
use DesignPatterns\creational\Factory\DogFactory;

class FactoryMethodTest extends TestCase{
    public function testCatFactory(){
        $factory = new CatFactory();
        $animal = $factory->createAnimal();
        $this->assertEquals("Meow Meow!", $animal->speak());
    }
    public function testDogFactory(){
        $factory = new DogFactory();
        $animal = $factory->createAnimal();
        $this->assertEquals("Hoo Hoew !", $animal->speak());
    }
}
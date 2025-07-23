<?php 

namespace DesignPatterns\creational\Factory;

class DogFactory implements AnimalFactory{
    public function createAnimal(): Animal{
        return new Dog();
    }
}
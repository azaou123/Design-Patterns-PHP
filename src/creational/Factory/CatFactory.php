<?php 

namespace DesignPatterns\creational\Factory;

class CatFactory implements AnimalFactory{
    public function createAnimal() : Animal{
        return new Cat();
    }
}
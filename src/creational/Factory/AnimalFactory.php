<?php 

namespace DesignPatterns\creational\Factory;

interface AnimalFactory{
    public function createAnimal(): Animal;
}
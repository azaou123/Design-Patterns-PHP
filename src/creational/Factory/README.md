# Factory Method Pattern

This module demonstrates the **Factory Method** design pattern in PHP.

## 📌 Overview
The Factory Method pattern defines an interface for creating an object, but lets subclasses decide which class to instantiate. It allows a class to defer instantiation to subclasses.

## 🗂 Structure
src/
└── Creational/
└── FactoryMethod/
├── Animal.php
├── Dog.php
├── Cat.php
├── AnimalFactory.php
├── DogFactory.php
├── CatFactory.php
└── README.md

## ⚙️ Usage Example
```php
use Src\Creational\FactoryMethod\DogFactory;
use Src\Creational\FactoryMethod\CatFactory;

$dogFactory = new DogFactory();
$dog = $dogFactory->createAnimal();
echo $dog->speak(); // Woof!

$catFactory = new CatFactory();
$cat = $catFactory->createAnimal();
echo $cat->speak(); // Meow!

✅ Running Tests
vendor/bin/phpunit --filter FactoryMethodTest
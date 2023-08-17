<?php

 class Animal 
 {
  public $name;
  public function __construct($name) 
  {
   $this->name = $name;
  }
  public function makeSound() 
  {
   return "Some generic animal sound";
  }
 }

 class Dog extends Animal {
  public function makeSound()
  {
   return "Woof! Woof!";
  }
 }

 class Cat extends Animal 
 {
  public function makeSound()
  {
  return "Meow!";
  }
 }

 class Cow extends Animal
 {
  public function makeSound() 
  {
   return "Moo!";
  }
 }


  $dog = new Dog('don');
  $cat = new Cat('possy');
  $cow = new Cow('black_gold');
 
  $animals = [$dog, $cat, $cow];

  foreach ($animals as $animal) 
  {
   echo "{$animal->name} says: {$animal->makeSound()} <br>";

  }

?>

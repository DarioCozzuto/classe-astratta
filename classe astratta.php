<?php
//An abstract class or method is defined with the abstract keyword
//An abstract method can be only inside an abstract class

//When a child class is inherited from an abstract class, we have the following rules:
//The child class method must be defined with the same name and it redeclares the parent abstract method
//The child class method must be defined with the same or a less restricted access modifier
//The number of required arguments must be the same. However, the child class may have optional arguments in addition

//le classi astratte sono una sorta di template per le classi figlie che andranno ad estendere la classe astratta.



// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();
  ?>
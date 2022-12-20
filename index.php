<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание JS</title>
</head>
<body>
    <?php
    class Animal
    {
        public $food;
        public $location;   
         public function __construct($food,$location)
        {
            $this -> food = $food;
            $this -> location = $location;

        }
           public function makeNoise()
          {
            echo "Животное издает звук";
          } 
          public function eat()
          {
            echo "Животное ест";
          }
          public function sleep()
          {
            echo "Животное спит";
          }
      
    }
    class Dog extends Animal
    {
        public $weight;
        function __construct($food,$location,$weight)
        {
            parent::__construct($food,$location);
            $this -> weight = $weight;
        }
        public function makeNoise()
          {
            echo "Собака гавкает"."<br>";
          } 
          public function eat()
          {
            echo "Собака ест".$this -> food."<br>";
          }
          public function sleep()
          {
            echo "Собака спит на".$this -> location."<br>";
          }
          public function weight()
          {
            echo "Собака весит".$this -> weight."<br>";
          } 
    }
    class Cat extends Animal
    {
        public $height;
        function __construct($food,$location,$height)
        {
            parent::__construct($food,$location);
            $this -> height = $height;
        }
        public function makeNoise()
          {
            echo "Кошка мяукает"."<br>";
          } 
          public function eat()
          {
            echo "Кошка ест".$this -> food."<br>";
          }
          public function sleep()
          {
            echo "Кошка спит на".$this -> location."<br>";
          }
          public function height()
          {
            echo "Кошка ростом".$this -> height."<br>";
          } 
          
    }
    class Horse extends Animal
    {
        public $breed;
        function __construct($food,$location,$breed)
        {
            parent::__construct($food,$location);
            $this -> bread = $breed;
        }
        public function makeNoise()
          {
            echo "Лошадь фырчит"."<br>";
          } 
          public function eat()
          {
            echo "Лошадь ест".$this -> food."<br>";
          }
          public function sleep()
          {
            echo "Лошадь спит в".$this -> location."<br>";
          }
          public function breed()
          {
            echo "Лошадь породы".$this -> breed."<br>";
          } 
    }

    $dog = new Dog(" мясо"," улице"," 50кг");
    $dog -> makeNoise();
    $dog -> eat();
    $dog -> sleep();
    $dog -> weight();
    
            ?>
    
</body>
</html>
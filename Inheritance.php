<!DOCTYPE html>
<html>
<head>
    <title>Inheritance Assignment</title>
</head>
<body>


<?php

 class Shape
  {
   public function area() 
   {
   }
  }

  class Circle extends Shape 
   {
    private $radius;
    public function __construct($radius)
     {
      $this->radius = $radius;
     }
     public function area()
     {
      return pi() * $this->radius ** 2;
     }
   }

  class Rectangle extends Shape 
   {
    private $width;
    private $height;

    public function __construct($width, $height) 
     {
      $this->width  = $width;
      $this->height = $height;
     }

    public function area() 
     {
      return $this->width * $this->height;
     }
   }

   $circle = new Circle(5);
    echo "Circle Area: " . $circle->area();

    echo "<br>";   


   $rectangle = new Rectangle(4,7);
    echo "Rectangle Area: " . $rectangle->area();

?>

</body>
</html>
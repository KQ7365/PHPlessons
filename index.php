<?php

abstract class Shape {

    protected $name;

    //Abstract Method
    abstract public function calculateArea();

    public function __construct($name) {
        $this->name = $name;
    }

    //Concrete method ((ALSO, we can use this method anywhere below))
    public function getName(){
        return $this->name;
    } 

}

class Circle extends Shape {

        //if you extend class that has abstract method, you have to implement that method

        private $radius;

        public function __construct($name, $radius)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function calculateArea()
        {
            return pi() * pow($this->radius, 2);
        }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle("Circle", 5);
$rectangle = new Rectangle("Reactangle", 4, 6);

echo $circle->getName() . " Area: " . $circle->calculateArea() . "<br>";
echo $rectangle->getName() . " Area: " . $rectangle->calculateArea() . "<br>";
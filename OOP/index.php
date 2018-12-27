<?php

class Circle
{
    const PI = 22.0 / 7.0;
    public $radius;
    private $name;

    public function calculateArea()
    {
        $area = (self::PI * $this->radius * $this->radius);
        return $area;
    }

    public function calculatePerimeter()
    {
        return (2 * self::PI * $this->radius);
    }

    public function __construct($r)
    {
        $this->radius = $r;
        echo ("Area of circle is: " . $this->calculateArea() . "<br/>");
        echo ("Perimeter of circle is: " . $this->calculatePerimeter() . "<br/>");
    }
}

$circle1 = new Circle(5);
// echo $circle1->name = "Taen";
echo '<br/>';

class Rectangle
{
    private $height;
    private $width;

    public function calculateArea()
    {
        $area = $this->height * $this->width;
        return $area;
    }

    public function calculatePerimeter()
    {
        return 2 * ($this->height + $this->width);
    }

    public function __construct($h, $w) {
        $this->height = $h;
        $this->width = $w;
        echo("Area of rectangle is: " . $this->calculateArea() . "<br/>");
        echo("Perimeter of rectangle is: " . $this->calculatePerimeter() . "<br/>");
    }
}

$rectangle = new Rectangle(2, 4);
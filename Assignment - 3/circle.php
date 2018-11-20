<?php
class Circle
{
    const PI = 3.1416;
    public $radius;

    public function __construct($r)
    {
        $this->radius = $r;
        $this->AreaOfCircle();
        $this->CircumferenceOfCircle();
    }

    public function AreaOfCircle()
    {
        echo "Area of circle is : " . (self::PI * $this->radius * $this->radius) . "<br/>";
    }

    public function CircumferenceOfCircle()
    {
        echo "Circumferences of circle is : " . (2 * self::PI * $this->radius) . "<br/>";
    }

}

new Circle(3);

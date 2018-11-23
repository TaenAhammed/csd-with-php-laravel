<?php
class Rectangle
{
    public $length;
    public $width;

    public function __construct($l, $w)
    {
        $this->length = $l;
        $this->width = $w;
        $this->AreaOfRectangle();
        $this->PerimeterOfRectangle();
    }

    public function AreaOfRectangle()
    {
        echo "Area of Rectangle is : " . ($this->length * $this->width) . "<br/>";
    }

    public function PerimeterOfRectangle()
    {
        echo "Perimeter of Rectangle is : " . (2 * ($this->length + $this->width)) . "<br/>";
    }
}

new Rectangle(10, 5);

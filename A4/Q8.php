<?php
class Shape {
    public function getArea(){

    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(21, 6);
echo "Area of the rectangle: " . $rectangle->getArea();
?>

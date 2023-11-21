<?php

class Circle {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function getArea() {
        return M_PI * $this->radius * $this->radius;
    }
    public function getPerimeter() {
        return 2 * M_PI * $this->radius;
    }
}

$circy = new Circle(11);
echo "Area of the circle: " . $circy->getArea() . "<br>";
echo "Perimeter of the circle: " . $circy->getPerimeter();
?>

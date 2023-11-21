<?php
class Product {
    public $name;
    public $description;
    public $price;
}

$product1 = new Product();
$product1->name = 'iPhone 12';
$product2 = new Product();
$product2->name = 'Samsung F12';

echo "Product 1: " . $product1->name . "<br>";
echo "Product 2: " . $product2->name . "<br>";
?>

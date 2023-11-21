<?php
// Function to calculate the area of a triangle
function calculateTriangleArea($base, $height) {
 return 0.5 * $base * $height;
}
// Function to calculate the area of a rectangle
function calculateRectangleArea($length, $width) {
 return $length * $width;
}
// Function to calculate the area of a square
function calculateSquareArea($side) {
 return $side * $side;
}
// Function to calculate the area of a circle
function calculateCircleArea($radius) {
 return M_PI * $radius * $radius;
}
// Example values
$base = 5;
$height = 8;
$rectangleLength = 7;
$rectangleWidth = 4;
$squareSide = 6;
$circleRadius = 3;

// Calculate and display areas
echo " Area of Triangle with base $base, height $height is " . 
calculateTriangleArea($base, $height) . "<br>";
echo " Area of Rectangle with length $rectangleLength, width $rectangleWidth is " . 
calculateRectangleArea($rectangleLength, $rectangleWidth) . "<br>";
echo " Area of Square with side $squareSide is " . calculateSquareArea($squareSide) . "<br>";
echo " Area of Circle with radius $circleRadius is " . 
calculateCircleArea($circleRadius) . "<br>";
?>
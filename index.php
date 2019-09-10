<?php
include "interface/Colorable.php";
include "class/Shape.php";
include "class/Circle.php";
include "class/Cylinder.php";
include "class/Rectangle.php";
include "class/Square.php";


$arr[0] = new Circle("Circle",30);
$arr[1] = new Circle("Circle2",40);
$arr[2] = new Cylinder("cylinder",30,60);
$arr[3] = new Rectangle("rectangle",60,30);
$arr[4] = new Square("square",50);

foreach ($arr as $element) {
    echo $element->getName() ." area : " . $element->getArea()."<br>";
    if ($element instanceof Square){
        echo $element->howToColor()."<br>";
    }

}

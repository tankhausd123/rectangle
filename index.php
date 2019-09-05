
<?php
include('Rectangle.php');
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo "width: " .$rectangle->width;
echo "<br>";
echo "height: " .$rectangle->height;
echo "<br>";
$rectangle->width = 20;
$rectangle->height = 30;
echo "set width: " .$rectangle->width;
echo "<br>";
echo "set height: " .$rectangle->height;
echo "<br>";
echo "Area: " .$rectangle->getArea();
echo "<br>";
echo "Perimeter: " .$rectangle->getPerimeter();
echo "<br>";
echo "My Rectangle: ". $rectangle->display();

<?php
include('class.php');


$instance1 = new Product('Galaxy a52', 'legit description of a phone', 222, 'Samsung');
$instance2 = new Product('LG phone', 'legit product description', 555, 'LG');

echo $instance1 -> displayProduct();

 $instance1 -> setBrand("poco"); //sets new brand using the setBrand() function
 echo $instance1 -> getBrand(). '<br>'; //reurn the value of brand in this instance and use the echo to display 

echo $instance2 -> displayProduct();
echo $instance2 -> getBrand() . '<br>';
<?php

echo '<p> Hello World! </p>';

//Local Variables
$integer = 1;
$float = 1.5;
$boolean = true;
$arrayColores = array('Red', 'Green', 'Blue', 'Yellow');
$string = "Hello";

//echo is the "print" of PHP
echo $integer;
echo $float;
//If the variable $integer is an integer then add 4
if(is_int($integer)) {
  $integer += 4;
  echo $integer;
}


?>

<?php

echo '<h1> Hello World! </h1>';

//Local Variables
//An integer variable
$integer = 1;
//A float or double variable
$float = 1.5;
//A boolean variable
$boolean = true;
//An string variable
$string = "Hello";
//An array
$array = [
  1,
  1.5,
  'Value',
  "Value2",
];

//We use |echo| to "print" the value of variable in PHP
echo "<p>$integer</p>";
echo "<p>$float</p>";
echo "<p>$string</p>";
echo "<p>$array[2]</p>";
//We can use |var_dump($array);| to print the information of the variable

//If the variable $integer is an integer then add 4
if(is_int($integer)) {
  $integer += 4;
  echo "<p>$integer</p>";
}
else{
  echo "<p>Is not an integer</p>";
}

//This is a |do while| loop
$a = 0;
do {
  // code...
  echo '<p>' . $array[$a] .'</p>';

  $a += 1;
} while ($a < count($array));

//This is a |for| loop
//The |count| function takes an array as a parameter an returns his length
for($a = 0; $a < count($array); $a += 1){
  // code...
  echo '<p>' . $array[$a] .'</p>';
}

//This is a loop that returns all the par numbers from 0 to 50
for($i = 0; $i <= 50; $i += 2){
  echo '<span>' . $i . ' ' .'</span>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$number = 100;
echo $number . "<br>";


define("VALUE", 1000);

echo VALUE . "<br>";


// Works as of PHP 5.3.0

const CONSTANT = 'Hello World';


echo CONSTANT . "<br>";


// Works as of PHP 5.6.0

const ANOTHER_CONST = CONSTANT.'; Goodbye World';

echo ANOTHER_CONST . "<br>";


const ANIMALS = array('dog', 'cat', 'bird');

echo ANIMALS[1] . "<br>"; // outputs "cat"


// Works as of PHP 7

define('ANIMALS', array(

'dog',

'cat',

'bird'

));

echo ANIMALS[1] . "<br>"; // outputs "cat"

?>
</body>
</html>
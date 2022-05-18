<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Function </title>
</head>
<body>
<?php
  function sum($num1, $num2){

    echo  $num1 + $num2;

  }


  sum(10,20);


  function say_name(){
    echo "<h1>Hello Shadab</h1>";
  }

  say_name();


  function oddeven($num) {
    if($num%2 == 0){
      echo "Number is Even";
    }
    else {
      echo "Number is Odd";
    }
  }

  oddeven(10);


?>
</body>
</html>
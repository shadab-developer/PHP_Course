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
  $number = array(
    10,
    20,
    49
  );

  //Normal Arry
  echo $number[2] . "<br>";



  $names = array(
    "Id" => 1,
    "FName" => "Shadab",
    "LName" => "Ahmad",
    "Id" => 2,
    "FName" => "Keshav",
    "LName" => "Gupta"
  );

  print_r($names);

  echo "<br>";

  echo $names['FName'];
  ?>
</body>
</html>
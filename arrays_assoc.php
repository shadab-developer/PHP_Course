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
  // echo $number[2] . "<br>";



  //Associative Array
  $names = array(
    "Id" => 1,
    "FName" => "Shadab",
    "LName" => "Ahmad",
    "Id" => 2,
    "FName" => "Keshav",
    "LName" => "Gupta",
    "Id" => 3,
    "FName" => "Vishal Kumar",
    "LName" => "Singh"
  );

  $companyDetails = array(
    "c_name" => "WebyRoot Private Limited",
    "f_name" => "Shadab Ahmad",
    "r_date" => "25 / Aug / 2021",
    "c_name" => "Google India Private limited",
    "f_name" => "Sundar Picshai",
    "r_date" => "25 / Aug / 1999"
  );

  for($x = 0; $x <= count($companyDetails); $x++){
    print_r ($companyDetails['c_name']);
    echo "<br>";
  }

  // print_r($companyDetails);

  // echo "<br>";

  // echo $companyDetails["c_name"];
  ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
<?php
  $numberList = array(
    "Shadab",
    22,
    "WebyRoot Private Limited"
  );

  $numberList1 = [
    "Shadab",
    22,
    "WebyRoot Private Limited"
  ];

    echo "<p> Hi , I'm $numberList1[0] and I'm $numberList1[1] year old. I founded one IT Company and it's called $numberList1[2] </p>";

    print_r($numberList1);


    $nameList= ["Shadab Ahmad"];
    echo "<br>";
    $numberList2= array(
      28,
      "65",
      866,
      "Shadab Ahmad",
      87,
      "<h1>Hello World</h1>"
    );

    print_r($numberList2);
?>


</body>
</html>
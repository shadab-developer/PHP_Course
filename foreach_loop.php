<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ForEach Loop</title>
</head>
<body>
<?php
  $names = array("Shadab","Keshav","Manjeet","Vishal","Mazharul");

  foreach($names as $client_name){
    echo "<h5>$client_name</h5>" ;
  }



  $clients_detail = array(
    "Shadab" => 22,
    "Vishal" => 25,
    "Manjeet" => 18,
    "Mazharul" => 30
  );

  foreach($clients_detail as $name => $age){
    echo "$name = $age<br>";
  }
?>
</body>
</html>
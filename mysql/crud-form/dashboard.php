<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if(!$connection) {
  $errormsg = "Database connection failed";
}

$query = 'SELECT * from users';

$result = mysqli_query($connection , $query);

if(!$result){
  die('Something is wrong' . 'mysqli_error()');
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Page</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <style>
    .form-group {
      margin-top: 20px;
    }

  </style>
</head>
<body>
<div class="container">
<div class="col-sm-8">

</div>
</div>
</body>
</html>
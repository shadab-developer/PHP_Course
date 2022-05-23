<?php
$connection = mysqli_connect('localhosst', 'root', '', 'loginapp');
if($connection) {
   $successmsg = "you are connected with mysql";

}
else {
  $errormsg = "Database connection failed";
}

$username = $_POST['username'];
  $password = $_POST['password'];

  $query = "INSERT INTO users(username , password)" . "VALUES ('$username', '$password')";


  $result = mysqli_query($connection, $query);

  if(!$result){
    die('Query Faild' . 'mysqli_error()');
  }




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Page</title>
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
<form action="" method="POST">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control" >
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" >
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="submit">
  </div>

  <div class="form-group">

   <?php
    if(isset($_POST['submit'])){
    echo "<p class='alert alert-warning'>";
         echo $errormsg;
    }
    echo "</p>";
    ?>

    <?php
    if(isset($_POST['submit'])){
    echo "<p class='alert alert-success'>";
         echo $successmsg;
    }
    echo "</p>";
    ?>

  </div>
</form>
</div>
</div>
</body>
</html>
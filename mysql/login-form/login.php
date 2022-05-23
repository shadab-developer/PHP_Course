<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if($connection) {
   $successmsg = "you are connected with mysql";

}
else {
  $errormsg = "Database connection failed";
}
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];


  if($username && $password) {
    echo $username;
    echo $password;
  }
  else {
    $errormsg =  "Please fill the form !";
  }



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
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
    <p class="alert alert-warning"><?php echo $errormsg ?></p>
    <p class="alert alert-success"><?php echo $successmsg ?></p>
  </div>
</form>
</div>
</div>
</body>
</html>
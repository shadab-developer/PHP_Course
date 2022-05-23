<?php
if(isset($_POST['submit'])){
  $uname = $_POST['uname'];
  $password = $_POST['password'];

  // echo "Name : " . $name ."and Company Name : " . $company_name ;

  if($uname == "shadabdeveloper" && $password == "pass@1234S") {
    $smessage = "You are logged In";
  }
  elseif($uname != "shadabdeveloper"){
    $emessage = "your username is incorrect";
  }
  elseif($password != "pass@1234S"){
    $emessage = "your password is incorrect";
  }
  else {
    echo "Invaild Account";
  }



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .error_msg {
      color: red;
    }
    .success_msg {
      color: green;
    }
  </style>

</head>
<body>
<form action="form.php" method="POST">
  <label for="uname">UserName : </label>
  <input type="text" name="uname" placeholder="Enter UserName"><br>
  <label for="password">Password</label>
  <input type="password" name="password" placeholder="Enter Password"><br>

  <input type="submit" name="submit">
</form>
<?php

if(isset($_POST['submit'])){

  echo "<p class='error_msg'>$emessage</p>";
  echo "<p class='success_msg'>$smessage</p>";
}
?>
</body>
</html>
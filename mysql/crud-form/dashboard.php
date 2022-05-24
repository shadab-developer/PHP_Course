<?php
include 'config.php';

$query = 'SELECT * from users';

$result = mysqli_query($connection , $query);

if(!$result){
  die('Something is wrong' . mysqli_error($connection));
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
    ul {
      margin-top: 20px;
      display: flex;
      justify-content : space-evenly;
    }
    ul > li {
      list-style: none;
    }

  </style>
</head>
<body>
<div class="container">
<div class="col-sm">
  <?php include 'menu.html'; ?>
    <table class="table">
      <thead>
        <td>Id</td>
      <td>Username</td>
      <td>Password</td>
      <td>Registration Number</td>
      <td>Option</td>
      </thead>
      <tbody>

      <?php

      while($row = mysqli_fetch_assoc($result)){

        $id =$row['id'];
        $username = $row['username'];
        $password = $row['password'];
        $rnumber = $row['rnumber'];

        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $username . "</td>";
        echo "<td>" . $password . "</td>";
         echo "<td>" . $rnumber . "</td>";
        echo "<td><a href='edit.php'>Edit</a></td>";
        echo "</tr>";
      }



        ?>
      </tbody>
    </table>
</div>
</div>
</body>
</html>
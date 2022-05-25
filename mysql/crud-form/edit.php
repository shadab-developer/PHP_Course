<?php
include 'config.php';
include 'functions.php';


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

    ul {
      margin-top: 20px;
      display: flex;
      justify-content: space-evenly;
    }

    ul>li {
      list-style: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="col-sm-8">
      <?php include 'menu.html'; ?>
      <form action="" method="POST">
        <div class="form-group">
          <label for="username">Username :</label>
          <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">Password :</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="id">Id :</label>
          <select name="id" class="form-control">
            <?php

            showAllData();


            ?>
          </select>

        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary">Edit</button>
        </div>

        <div class="form-group">
          <?php
          if (isset($_POST['submit'])) {
            updateUser();
          }
          ?>


        </div>
      </form>
    </div>
  </div>
</body>

</html>
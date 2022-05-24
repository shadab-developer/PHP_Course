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
  <title>Delete  Page</title>
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
<div class="col-sm-8">
  <?php include 'menu.html'; ?>
<form action="" method="POST">

<div class="form-group">
  <label for="id">Search by (Id , Registration Number) :</label>
     <input type="text" name="id_rn">

   </div>
   <div class="form-group">
     <button type="submit" name="search" class="btn btn-primary">Fetch</button>
   </div>
   <br>
   <?php
if(isset($_POST['search'])){
  fetchUser();
}
   ?>
    <div class="form-group">
   <?php
if(isset($_POST['submit'])){
deleteUser();
}
    ?>
  </div>
  </form>
</div>
</div>
</body>
</html>
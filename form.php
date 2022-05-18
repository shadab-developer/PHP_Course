<?php
if(isset($_POST['submit'])){
  echo "Its works";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="form.php" method="POST">
  <label for="name">Name : </label>
  <input type="text" name="name" placeholder="Enter Name"><br>
  <label for="comapny_name">Company Name</label>
  <input type="text" name="company_name" placeholder="Enter Company Name"><br>

  <input type="submit" name="submit">
</form>

</body>
</html>
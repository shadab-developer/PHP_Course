<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Object Oriented Programming</title>
</head>

<body>

  <?php
  class User
  {
    // Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;
  }


  $user1 = new User();

  var_dump($user1);
  ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  class Car
  {
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;


    function Speed()
    {
    }
    function MoveWheels()
    {
      $this->wheels = 10;
    }
  }


  $bmw = new Car();
  $bmw->MoveWheels();
  echo  $bmw->wheels;

  ?>
</body>

</html>
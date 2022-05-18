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

  // Global

  $global = "Outside";

  function convert() {
    global $x;

    // Local
    $x = "inside";
    echo $x;
  }

  echo $global;

  echo convert();

  ?>
</body>
</html>
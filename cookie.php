<?php

$name = "WBT";
$vlaue = 200;
$expiry = time() + (60 * 60 * 24 * 7);

setcookie($name, $vlaue, $expiry);

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

  <?php

  if (isset($_COOKIE['WBT'])) {

    echo $_COOKIE['WBT'];

    echo "Cookie found";
  } else {
    echo "Cookie Not Found";
  }


  ?>

</body>

</html>
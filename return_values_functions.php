<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Return Valus Function</title>
</head>
<body>
<?php
    function oddeven($num){
      if($num%2 == 0){
        return true;
      }
      else {
        return false;
      }

    }
    $value = oddeven(0);


      if($value == true){
        echo "Given number is Even";
      }
      elseif($value == false) {
        echo "Given number is Odd";

      }
      else {
        echo "Invalid Entry";
      }
?>
</body>
</html>
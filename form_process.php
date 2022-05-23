<?php
        if(isset($_POST['submit'])){
          $name = $_POST['name'];
          $contact = $_POST['contact_number'];
          $email = $_POST['email'];


          echo $name . "<br>";
          echo $contact . "<br>";
          echo $email . "<br>";
        }
?>

<h1><a href="form_external.php">Go back</a></h1>
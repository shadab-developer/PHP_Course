<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if(!$connection) {

  $errormsg = "Database connection failed";

}


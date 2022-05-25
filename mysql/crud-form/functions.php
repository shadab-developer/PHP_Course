<?php
// Create User

function createUser()
{

  global $connection;


  $username = $_POST['username'];
  $password = $_POST['password'];
  $rnumber = rand(1, 120000000);

  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);

  $query = "INSERT INTO users(username , password , rnumber)" . "VALUES ('$username', '$password' , '$rnumber')";


  $result = mysqli_query($connection, $query);



  if (!$result) {
    $msg = "Query Failed";
  } else {
    $msg = "Your account is created !";
  }

  if ($result == true) {
    echo "<p class='alert alert-success'>";
    echo $msg;
  } elseif (isset($_POST['submit']) && !$result) {
    echo "<p class='alert alert-warning'>";
    echo $msg;
  }
  echo "</p>";
}

//Display All Data

function dashboardData()
{
  global $connection;
  $query = 'SELECT * from users';

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Something is wrong' . mysqli_error($connection));
  }


  while ($row = mysqli_fetch_assoc($result)) {

    $id = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    $rnumber = $row['rnumber'];

    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $username . "</td>";
    echo "<td>" . $password . "</td>";
    echo "<td>" . $rnumber . "</td>";
    echo "<td><a href='edit.php'>Edit</a> <a href='delete.php'>Delete</a> </td>";
    echo "</tr>";
  }
}
// Show All User
function showAllData()
{
  global $connection;

  $query = 'SELECT * from users';

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Something is wrong<br>' . mysqli_error($connection));
  }

  while ($row = mysqli_fetch_assoc($result)) {

    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}


// Update User
function updateUser()
{

  global $connection;

  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];
  $query = "UPDATE users SET username = '$username' , password = '$password' where id = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    $msg = "There is issue with database connection !";
  } else {
    $msg = "Your account is edited successfully!";
  }
  if ($result == true) {
    echo "<p class='alert alert-success'>";
    echo $msg;
  } elseif (isset($_POST['submit']) && !$result) {
    echo "<p class='alert alert-warning'>";
    echo $msg;
  }
  echo "</p>";
}


// Delete User
function deleteUser()
{
  global $connection;
  $id = $_POST['id'];
  $query = "DELETE from users where id = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    $msg = "There is issue with database connection !" . mysqli_error($connection);
  } else {
    $msg = "Account Deleted successfully!";
  }

  if ($result == true) {
    echo "<p class='alert alert-success'>";
    echo $msg;
  } elseif (isset($_POST['submit']) && !$result) {
    echo "<p class='alert alert-warning'>";
    echo $msg;
  }
  echo "</p>";
}

// Fetch User
function fetchUser()
{
  global $connection;
  $id = $_POST['id_rn'];
  $query = "SELECT * from users where rnumber = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    $msg = "There is issue with database connection !" . mysqli_error($connection);
  } else {
    $msg = "Account fetched successfully!";
  }

  if ($result == true) {
    echo "<p class='alert alert-success'>";
    echo $msg;
  } elseif (isset($_POST['submit']) && !$result) {
    echo "<p class='alert alert-warning'>";
    echo $msg;
  }
  echo "</p>";
  while ($row = mysqli_fetch_assoc($result)) {
    $username = $row['username'];
    $password = $row['password'];
    echo "<div class='form-group'>";
    echo "<label for='username'> Username: " . $username . "</label>" . "</div>";

    echo "<div class='form-group'>";
    echo "<label for='password'> Password: " . $password . "</label>" . "</div>";
  }
}

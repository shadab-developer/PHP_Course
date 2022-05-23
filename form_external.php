<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="form_process.php" method="POST">
    <label for="name">Name : </label>
    <input type="text" name="name" placeholder="Enter your name"><br>

    <label for="number">Contact Number : </label>
    <input type="number" name="contact_number" placeholder="Enter contact info"><br>

    <label for="email">Email Address : </label>
    <input type="email" name="email" placeholder="Enter your email">


    <button type="submit" name="submit">Submit</button>
  </form>

</body>
</html>
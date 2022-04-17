<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JS Document</title>
</head>
<body>
<p>hello <span>web performance</span> students!</p>
<div><img width="250px" height="250px" src="https://source.unsplash.com/user/c_v_r" alt=""></div>
<script>
  var span= document.getElementsByTagName('span')[0];
  span.innerText= 'Interactive'; //Change the DOM text content
  span.style.display='inline'; // Change CSSOM property

  // Create a new element , style it and append it to the DOM
  var loadTime = document.createElement('div');
  loadTime.innerText='You loaded this page on : ' + new Date();
  loadTime.style.color= 'blue';
  document.body.appendChild(loadTime);
</script>
</body>
</html>
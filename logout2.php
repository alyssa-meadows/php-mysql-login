<?php 

  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  
  session_destroy();

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mysqli.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Logout Page</title>
  </head>
  <body>
  <div class="container center">
    <h2>You are logged out. </ br></h2>
    <p>Click <a href="home.php">HERE</a> to return to our home page.</p>
  </div>
  </body>
</html>
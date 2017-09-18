<?php 

  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  
  if (isset($_SESSION['id'])) {
    
    $userId = $_SESSION['id'];
    $username = $_SESSION['username'];
    
  } else {
    
    header('Location: home.php');
    die();
    
  }
  
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mysqli.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Secret User Page</title>
  </head>
  <body>
    <div class="container">
      <h1>
        Welcome, <?php echo $username; ?>
        You are logged in.<br /><br />Your user ID is <?php echo $userId; ?>.<br /><br />
      </h1>
      <form class="center" action="logout2.php">
        <input type="submit" value="Log Me Out!!!" />
      </form>
    </div>
  </body>
</html>
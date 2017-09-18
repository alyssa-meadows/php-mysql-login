<?php 

error_reporting(E_ALL & ~E_NOTICE);
session_start();

if ($_POST['submit']) {
  
  include_once("connection.php");
  $username = strip_tags (strtolower($_POST['username']));
  $password = strip_tags($_POST['password']);
  
  $sql = "SELECT id, username, password FROM members
  WHERE username = '$username' AND activated = '1' LIMIT 1";
  $query = mysqli_query($dbCon, $sql);
  
  if ($query) {
    
    $row = mysqli_fetch_assoc($query);
    $userId = $row['id']; 
    $dbUsername = $row['username'];
    $dbPassword = $row['password'];
    
  } else {
    
    echo "no success.";
    
  }
  
  if ($username == $dbUsername && $password == $dbPassword) {
    
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $userId;
    header('Location: user.php');
    
  } else {
    
    echo "Incorrect username or password, bruh.";
    
  }
  
}

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mysqli.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta charset="UTF-8">
    <title>PHP/My SQL Login</title>
  </head>
  <body>
    <div class="container">
      
      <h1>PHP/My SQL Login</h1><br />
      
      <form method="post" action="home.php">
        
        <input type="text" placeholder="Username" name="username"/> <br />
        <input type="password" placeholder="Password" name="password" /> <br /><br />
        <input type="submit" name="submit" value="Log In" /> <br />
        
      </form>
      
    </div>
  </body>
</html>
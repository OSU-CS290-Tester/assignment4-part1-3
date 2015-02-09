<?php
session_start();
error_reporting(E_ALL);
//ini_set('display_errors','On');

echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
</head>
<body>';
if ($_GET["logout"]=="yes") {
  session_unset();
  session_destroy();
}

echo '<form action = "content1.php" method="post"> <br>
  Username: <input type="text" name="username" <br>
  <input type = "submit" value="Login"> <br>
  </form>';
echo '</body>
</html>';
?>
<?php
ob_start(); //from stack overflow
session_start();
error_reporting(E_ALL);
//ini_set('display_errors','On');
if (!isset($_SESSION["valid"])) {
  header("Location: login.php");
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Content2</title>
</head>
<body>';

echo "<br> Click <a href=\"content1.php\">here</a> to see content1";
echo "<br> Click <a href=\"login.php?logout=yes\">here</a> to logout";
echo '</body>
</html>';
?>

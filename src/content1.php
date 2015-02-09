<?php
ob_start(); //from stack overflow
error_reporting(E_ALL);
//ini_set('display_errors','On');
session_start();
if (!isset($_SESSION["username"]))
{
$_SESSION["username"]= $_POST["username"];
}
if (!isset($_SESSION["username"])) {
  header("Location: login.php", true);
}
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Content1</title>
</head>
<body>';

if (($_SESSION["username"]==null||$_SESSION["username"]==""))
{
	
	echo "A username must be entered click <a href=\"login.php?logout=yes\">here</a> to return to the login screen";
}
else
{
	if (!isset($_SESSION["visits"]))
	{
		$_SESSION["visits"]=0;
	}
	else
	{
		$_SESSION["visits"]=$_SESSION["visits"]+1;
	}
	echo "Hello " . $_SESSION["username"];
	echo "<br> You have visited this page   $_SESSION[visits] times before";
	echo "<br> Click <a href=\"content2.php\">here</a> to navigate to Content2";
	echo "<br> Click <a href=\"login.php?logout=yes\">here</a> to logout";
}

echo '</body>
</html>';
?>

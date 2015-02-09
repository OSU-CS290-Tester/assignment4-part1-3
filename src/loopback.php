
<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Loopback</title>
</head>
<body>';
$output;
$input=array();
if ($_SERVER['REQUEST_METHOD'] == "GET")
{
	if ($input==$_GET)
	{
		echo " \"Type\":\"GET\" , \"Parameters\" : null";
	}
	else
	{
		$output=json_encode($_GET);
		echo " \"Type\":\"GET\" , \"Parameters\" : $output";
	}
}
else
{
	if ($input==$_POST)
	{
		echo " \"Type\":\"POST\" , \"Parameters\" : null";
	}
	else
	{
		$output=json_encode($_POST);
		echo " \"Type\":\"POST\" , \"Parameters\" : $output";
	}
}

echo '</body>
</html>';
?>
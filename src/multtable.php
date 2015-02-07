
<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multtable</title>
</head>
<body>';

$errChk =0;
$minCand = $_GET['min-multiplicand'];
$minPlier = $_GET['min-multiplier'];
$maxCand = $_GET['max-multiplicand'];
$maxPlier = $_GET['max-multiplier'];
$i;
$j;
$product;


if ($minCand == null) {
  echo "Minimum multiplicand not provided. <br>";
  $errChk++;
}
if ($minPlier == null) {
  echo "Minimum multiplier not provided. <br>";
  $errChk++;
}
if ($maxCand == null) {
  echo "Maximum multiplicand not provided. <br>";
  $errChk++;
}
if ($maxPlier == null) {
  echo "Maximum multiplier not provided. <br>";
  $errChk++;
} 

if ($minCand>$maxCand) {
  echo "Minimum multiplicand is larger than maximum. <br>";
  $errChk++;
} 
if ($minCand != (integer)$minCand) {
  echo "Minimum multiplicand is not an integer. <br>";
  $errChk++;
}

if ($minPlier>$maxPlier) {
  echo "Minimum multiplier is larger than maximum. <br>";
  $errChk++;
} 

if ($minPlier != (integer)$minPlier) {
  echo "Minimum multiplier is not an integer. <br>";
  $errChk++;
}
	
if($maxCand != (integer)$maxCand) {
  echo "Minimum multiplicand is not an integer. <br>";
  $errChk++;
}


if ($minPlier != (integer)$minPlier) {
  echo "Minimum multiplier is not an integer. <br>";
  $errChk++;
}

if ($errChk == 0) {
  echo "<table>";
	echo "  <caption>Multtable</caption>";
	echo    "<thead>";
	echo	  "<tr>";
	echo		"<th></th>";
	for ($i=$minPlier;$i<=$maxPlier;$i++)
	{
		echo    "<th>$i</th>";
	}
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
	for ($j=$minCand;$j<=$maxCand;$j++)
	{
		echo "<tr>";
		echo  "<th>$j</th>";
		for ($i=$minPlier;$i<=$maxPlier;$i++)
		{
			$product=$i*$j;
			echo "<td>$product</td>";
		}
		echo "</tr>";
	}
}
echo '</tbody>
	</table>
	</body>
</html>';
?>

<?php

$user="co89177_1";
$password="diana";
$host="localhost";
$db="co89177_1";

$link = mysqli_connect($host,$user,$password,$db);

if ($link == False)
{
	echo "not connect";
}

?>


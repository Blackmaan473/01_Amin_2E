<?php
//Find out the time of the day
$time=date("H:i:s");
echo "This time now is ".$time." hours<br>";

//Find out the am or pm of the day
$d=date("a");

if ($d=="am") {
	echo "Good morning.";

} else {
	echo "Good afternoon.";
}
?>	
<?php
//Enter your income per month 
$income = 3000;
echo "Based on your monthly income of $".$income.",";

//Determine your income level
if ($income<= 1500) {
	echo "poor thing, you belong to lower income group.";
} elseif ($income > 1500 && $income < 5000) {
	echo "neither here or there, you belong to upper income group.";
} else {
	echo "Congrats!, you belong to upper income group.";
}
?>	
<?php
/* Sav's code */
date_default_timezone_set('UTC');
$todayDate1 = strtotime(date('2015-03-26'));
$finalsDate1 = strtotime(date('2015-05-08'));

function DaysLeft ($todayDate1, $finalsDate1)
{
	return $daysLeft1 = $finalsDate1 - $todayDate1;
}
echo "<p>days left: ", idate('z', daysLeft($todayDate1, $finalsDate1)); echo "</p>";
/* find out amount days left until finals 
Final day may 8th*/
date_default_timezone_set('UTC');
$todayDate = new DateTime("2015-03-26");
$finalsDate = new DateTime("2015-05-08");

$daysLeft = $finalsDate->diff($todayDate)->format ("%a");

if ($daysLeft < 47) {
    echo "$daysLeft days until finals! Start studying!";
} else {
    echo "$daysLeft days until finals! Chill out!!";
}

/* Tax returns
$mySalary = 90000;
$myBonus = 25000;
$mnTax = .25;
$iaTax = .35;
$wiTax = .40;
$myState = "Minnesota";
$yourState = "Wisconsin";

if ($myState == "Minnesota")
{
	echo "<p>Minnesota Income After tax: ", 
	IncomeAfterTax($mySalary, $mnTax), "</p>";

}
if ($yourState == "Wisconsin")
{
	echo "Wisconsin Income After tax: ",IncomeAfterTax($mySalary, $wiTax);
}

MyIncome($mySalary, $myBonus);	

IncomeAfterTax ($mySalary, $mnTax);
/* function */
/*
This function calculates total income using salary the bonus
function MyIncome($mySalary, $myBonus)
	{
		$total = $mySalary + $myBonus;
		return $total;
	}
/* Calculates income after tax using salary and tax
	function IncomeAfterTax ($salary, $tax)
	{
		$total = $salary * (1-$tax);
		return $total;
	}
*/
?>
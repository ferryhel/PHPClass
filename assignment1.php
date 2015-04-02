<?php
/* ASSIGNMENT #1: find the perimeter, area, sine, cosine and tangent of a triangle */
$sidenr1 = 14.8;
$sidenr2 = 20.3;
$sidenr3 = 25.3;
$anglenr1 = 36;
$anglenr2 = 53;
$anglenr3 = 91;
function perimeter($a, $b, $c) {
	$perimeter = $a + $b + $c;
	return $perimeter;
}
	/* Formula to calculate the area of a triangle from sides*/
function area($a, $b, $c) {
	$p = $a + $b + $c;
	$s = $p / 2;
	$area = sqrt(($s) * ($s - $a) * ($s - $b) * ($s - $c));
	return $area;
}
/* Perimeter and Area */
echo "The perimeter of this triangle is: " . perimeter($sidenr1, $sidenr2, $sidenr3);
echo "<br>The area of this triangle is: " . area($sidenr1, $sidenr2, $sidenr3);
/* Sine */
echo "<br>Sine of Angle 1: " . sin($anglenr1);
echo "<br>Sine of Angle 2: " . sin($anglenr2);
echo "<br>Sine of Angle 3: " . sin($anglenr3);
/* Cosine */
echo "<br>Cosine of Angle 1: " . cos($anglenr1);
echo "<br>Cosine of Angle 2: " . cos($anglenr2);
echo "<br>Cosine of Angle 3: " . cos($anglenr3);
/* Tangent */
echo "<br>Tangent of Angle 1: " . tan($anglenr1);
echo "<br>Tangent of Angle 2: " . tan($anglenr2);
echo "<br>Tangent of Angle 3: " . tan($anglenr3);
/* Sav's code from class
date_default_timezone_set('UTC');
$todayDate1 = strtotime(date('2015-03-26'));
$finalsDate1 = strtotime(date('2015-05-08'));

function DaysLeft ($todayDate1, $finalsDate1)
{
return $daysLeft1 = $finalsDate1 - $todayDate1;
}
echo "<p>days left: ", idate('z', daysLeft($todayDate1, $finalsDate1)); echo "</p>";
/* find out amount days left until finals MY CODE
Final day may 8th
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
/* function my code from class*/
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
<?php
//printing statements
echo "hi<br>";
echo "muthumari<br>";
//date functions 
echo date("d-m-Y");
echo "<br>";
echo date("l,F j,Y \\a\\t h:i A"); // \\t is used to write a word at inside the date function 
echo "<br>";
$time = strtotime("12.10pm January 06 2026");//convert string to date format
echo date("Y-m-d H:i:s",$time);
echo "<br>";
date_default_timezone_set('America/New_York');
echo date("Y-m-d H:i:s A");
echo "<br>";
//simple calculation 
$a=10;
$b=20;
echo $a+$b;
?>
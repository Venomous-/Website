<?php
date_default_timezone_set('America/Chicago');
echo "Today's date is"; 
echo date (" F d, Y");

$var = date('h:i');
echo "<br>The time is";
echo date(' h:i');

$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "<br>Tomorrow is ".date(" m/d/Y", $tomorrow);

$d=date("D");
if ($d=="Fri")
  echo "<br>Have a nice weekend!";
else
  echo "<br>Have a nice day!";

?>
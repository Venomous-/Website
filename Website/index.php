<a href="/color.html">Color</a>
<a href="/date.php"><br>Date</a>
<a href="/addition.php"><br>Addition</a>
<a href="/subtraction.php"><br>Subtraction</a>
<a href="/multiplication.php"><br>Multiplication</a>
<a href="/division.php"><br>Division</a>
<a href="/ILoveThisEditorSoMuch.htm"><br>CLICK ME NAO!</a>

<?php
echo "<pre>Welcome to the Home Page!
Look below to see the number of views!
This is under development!</pre>";
 
$mysql_host = "mysql15.000webhost.com";
$mysql_database = "a7985561_zack";
$mysql_user = "a7985561_zack";
$mysql_password = "dragon7";

session_start();  
if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+ 1;
else
    $_SESSION['views'] = 1;

echo "Views = ". $_SESSION['views'];



?>
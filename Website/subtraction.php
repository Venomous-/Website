<html>
<head>
<title>Addition</title>
</head>
<body>

<form action="" method="post">
<label>Enter the first number:</label>
<input type="text" name="num1" /><br>
<label>Enter the second number:</label>
<input type="text" name="num2" /><br><br>
<input  type="submit" name="btn_submit" value="Subtract">
</form>

<?php
    if(isset($_POST['btn_submit']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        $total =  $num1-$num2;
        
        echo "The total difference of the two values is ".$total;
    }

	$int = 123;

if(!filter_var($int, FILTER_VALIDATE_INT))
  {
  echo("<br> Integer is not valid");
  }
else
  {
  echo("<br> Integer is valid");
  }
?>


</body>
</html>
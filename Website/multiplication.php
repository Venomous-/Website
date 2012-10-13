<html>
<head>
<title>Multiplication</title>
</head>
<body>

<form action="" method="post">
<label>Enter the first number:</label>
<input type="text" name="num1" /><br>
<label>Enter the second number:</label>
<input type="text" name="num2" /><br><br>
<input  type="submit" name="btn_submit" value="Multiply">
</form>

<?php
    if(isset($_POST['btn_submit']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        $total =  $num1*$num2;
        
        echo "The product is ".$total;
    }
?>


<html>
<head>
<title>Names!</title>
</head>
<body TEXT="yellow" bgcolor="blue"></body>

<form action="" method="post">
<label>Enter your first name:</label>
<input STYLE="background-color:blue" type="text" name="name1" /><br>
<label>Enter your last name:</label>
<input STYLE="background-color:blue" type="text" name="name2" /><br><br>
<input type="submit" name="btn_submit" value="Done? Click me.">
</form>

<?php

    if(isset($_POST['btn_submit']))
    {
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
    }
		if (($name1 == "Shashu") || ($name2 == "Saravanan"))
		{
		echo "Wow! What an awesome and cool name!";
		}
		else if (strlen($name1) == 0)
		{
		echo "Enter your info!";
		}
		else 
		{
		echo "Your name sucks!";
		}
?>


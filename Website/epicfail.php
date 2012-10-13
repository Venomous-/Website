<html><head><title>Random Colors!</title></head>
<body>
<?php

header("Refresh: 1;");


function randColor()
{
	$str = null;
	$letters = "1234567890ABCDEF";
	for($i=0;$i<6;$i++)
	{
	
	$pos = rand(0,15);
	$str .= $letters[$pos]; //Fixed error
	}
	return "#".$str;
}
for($i=1;$i<6;$i++)
{
echo '<span style="color:'.randColor().'">Ambris sucks</span><BR>';
}
?>
</body></html>

<!DOCTYPE html>
<html>
<head>
<title>Task-2</title>
</head>

<body>
	<h2>Continue Statement</h2>
	<h5>Continue Statement skips the condition if it is true</h5>


<?php

	for($c=0; $c<100; $c++)
	{
	if($c==50)
	{
	continue;
	}
	if($c==81)
		break;
	
	echo "This number is:$c <br>";
			}
?>


</body>
</html>
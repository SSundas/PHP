<!DOCTYPE html>
<html>
<head>
<title>Continue Statement</title>
</head>

<body>
	<h2>Continue Statement</h2>
	<h5>Continue Statement skips the condition if it is true</h5>


<?php

	for($x=0; $x<10; $x++)
	{
	if($x==4)
	{
	continue;
	}
	echo "This number is:$x <br>";
			}
?>

	<p>As you can see when x==4 conditions become true and skips printing of 4.</p>


</body>
</html>
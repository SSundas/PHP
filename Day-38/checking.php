<?php
include ("config.php");
$a=$_REQUEST['Name'];
$sql=mysqli_query($db, "select * from product_detail where Product_Name LIKE '%$a%'");
while ($row=mysqli_fetch_array($sql))
{
?>	
	<!DOCTYPE html>
	<html>
	
	<head>
	<title>
	</title>
	</head>
	<body>
	<table border="1">
	<tr>
	<td><?php echo $row['Product_Name'];?> </td>
	</tr>
	</td>
	</table>
	</body>
	</html>
<?php
}
?>
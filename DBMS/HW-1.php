<h3  style="color:green; font-family:Copperplate Gothic">Q NO 1</h3>
<?php

include("config.php");
$result=mysqli_query($db, "select * from products where seller_city='Lahore'");

while($row=mysqli_fetch_array($result))
{
?>
<html>
<body>
<table border="3">
<tr>
<td><?php echo $row['product_id']; ?> </td>	
<td><?php echo $row['product_name'];?> </td>
<td><?php echo $row['category']; ?> </td>
<td><?php echo $row['price']; ?> </td>
<td><?php echo $row['seller_city']; ?> </td>

</tr>
</table>
</body>
</html>
<?php
}
?>
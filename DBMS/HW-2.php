<h3  style="color:purple; font-family:Copperplate Gothic">Q  NO 2</h3>
<?php

include("config.php");
//Qurey-1
$result=mysqli_query($db, "select * from products where not seller_city='Lahore'");

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
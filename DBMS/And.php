<h3  style="color:green; font-family:Copperplate Gothic">Query-1</h3>
<?php

include("config.php");
//Qurey-1
$result=mysqli_query($db, "select * from products where seller_city='Peshawar' and product_name='pen'");

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


<h3  style="color:brown; font-family:Copperplate Gothic">Query-2</h3>
<?php
//Query-2
$result=mysqli_query($db, "select * from products where seller_city='Karachi' and product_name='cover'");

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

<h3  style="color:grey; font-family:Copperplate Gothic">Query-3</h3>
<?php
//Query-3
$result=mysqli_query($db, "select * from products where product_name='pen' and category='4'");

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

<h3 style="color:purple; font-family:Copperplate Gothic">Query-4</h3>
<?php
//Query-4
$result=mysqli_query($db, "select * from products where product_name='book' and category='4'");

while($row=mysqli_fetch_array($result))
{
?>
<html>
<body>
<table border="3">
<tr>
<td><?php echo $row['product_id']; ?></td>	
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
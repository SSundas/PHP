<html><body><h3>Use Of ' GROUP BY'</h3></body></html>
<?php

include('config.php');
//Query-1
$result=mysqli_query($db,"select product_name,category,sellar_city,avg(price)as price from products group by sellar_city");
while($row=mysqli_fetch_array($result))
{
?>

<html>
<body>
<table border="1">
<tr>

<td><?php echo $row['product_name'];?><td>
<td><?php echo $row['category'];?><td>
<td><?php echo $row['price'];?><td>
<td><?php echo $row['sellar_city'];?><td>

</tr>
</table>
</body>
</html>
<?php
}
?>


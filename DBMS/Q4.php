<h1>Question-4</h1>

<?php

include("config.php");
$result=mysqli_query($db, "select * from result where name='A' and score=33");

while($row=mysqli_fetch_array($result))
{
?>
<html>
<body>
<table border="3">
<tr>
<td><?php echo $row['id']; ?> </td>	
<td><?php echo $row['name'];?> </td>
<td><?php echo $row['score']; ?> </td>
<td><?php echo $row['year']; ?> </td>

</tr>
</table>
</body>
</html>
<?php
}
?>
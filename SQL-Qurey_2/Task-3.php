<h1>Question-3</h1>
<?php

include("config.php");
$result=mysqli_query($db, "select * from countries order by salary ASC");

while($row=mysqli_fetch_array($result))
{
?>
<html>
<body>
<table border="3">
<tr>

<td><?php echo $row['employee_id']?></td>
<td><?php echo $row['first_name'];?> </td>
<td><?php echo $row['last_name']; ?> </td>
<td><?php echo $row['salary'];?> </td>
<td><?php echo $row['designation']; ?> </td>
</tr>
</table>
</body>
</html>
<?php
}
?> 

<h1>Question-1</h1>
<?php

include("config.php");
$result=mysqli_query($db, "select * from countries");

while($row=mysqli_fetch_array($result))
{
?>
<html>
<body>
<table border="3">
<tr>

<td><?php echo $row['first_name'];?> </td>
<td><?php echo $row['last_name']; ?> </td>

</tr>
</table>
</body>
</html>
<?php
}
?>
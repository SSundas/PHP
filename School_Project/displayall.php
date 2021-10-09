<?php

include("config.php");
$result=mysqli_query($db, "select * from students");?>

<a href="school.php"><button>click to register</button></a>
<?php
while($row=mysqli_fetch_array($result))
{
?>

<table border="1">
<tr>

<td><?php echo $row['name'];?> </td>
<td><?php echo $row['f_name']; ?> </td>
<td><?php echo $row['roll_no']; ?> </td>
<td><?php echo $row['class']; ?> </td>

<td><a href="del.php?id=<?php echo $row['id']; ?>">Delete</a></td>
<td><a href="editing.php?id=<?php echo $row['id']; ?>">Edit</a></td>
</tr>
</table>

<?php
}
?>
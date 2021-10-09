<h1>Question-4</h1>
<?php

include("config.php");
$result=mysqli_query($db, "select first_name,last_name, salary, designation, avg(salary) as salary from countries group by designation");

while($row=mysqli_fetch_array($result))
{
?>
<html>
<body>
<table border="3">
<tr>


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

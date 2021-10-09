<?php
include('Config.php');
if(count($_POST)>0)
{
$p=mysqli_query($db, "update students set name='".$_POST['name']."',
									f_name='".$_POST['fname']."',
									roll_no='".$_POST['roll']."',
									class='".$_POST['class']."' where id='".$_GET['id']."'");
	if(!$p){
		die("error".mysqli_error($db));
	}	
}
$result=mysqli_query($db, "select * from students where id ='".$_GET['id']."'");
$row=mysqli_fetch_array($result);
?>

<html>
<body>
<a href="displayall.php">Students List</a>
<form name="form"  method="post"  action="">
<input type="hidden"  name="id" value="<?php  echo $row['id'];?>">
<input type="text"  name="name" value="<?php  echo $row['name'];?>">
<input type="text"  name="fname" value="<?php  echo $row['f_name'];?>">
<input type="text"  name="roll" value="<?php  echo $row['roll_no'];?>">
<input type="text"  name="class" value="<?php  echo $row['class'];?>">
<input type="submit"  name="submit" value="submit">
</form>
</body>
</html>
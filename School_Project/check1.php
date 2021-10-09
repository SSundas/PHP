<?php
include ("Config.php");

	$a=$_REQUEST['name'];
	$b=$_REQUEST['fname'];
	$c=$_REQUEST['roll'];
	$d=$_REQUEST['class'];

	$sql="INSERT INTO students (name, f_name, roll_no, class) VALUES ('$a','$b', '$c', '$d')";
	if($db->query($sql)===TRUE)
{
	header ("location:school.php");
}
	

?>

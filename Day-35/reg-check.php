<?php

include ("config.php");

$e=$_REQUEST['name'];
$f=$_REQUEST['uname'];
$g=$_REQUEST['email'];
$h=$_REQUEST['password'];

$sql="INSERT INTO registration_form(name, username, email, password)
VALUES ('$e', '$f', '$g', '$h')";

if($db->query($sql)==TRUE)
{
	header ("location:login.php");
}


?>
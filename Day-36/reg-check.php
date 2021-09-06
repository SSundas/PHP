<?php

include ("config.php");

$e=$_REQUEST['id'];
$f=$_REQUEST['country'];
$g=$_REQUEST['city'];
$h=$_REQUEST['rate'];

$sql="INSERT INTO country_data(id, country, city, rate)
VALUES ('$e', '$f', '$g', '$h')";

if($db->query($sql)==TRUE)
{
	header ("location:task-reg.php");
}

?>
<html><body><h3>Use Of 'DROP Table '</h3></body></html>
<?php

include('config.php');
//Query-1
$result=mysqli_query($db,"DROP Table taimoor");
if($result==True)

{
echo"Database has been deleted";
}
?>
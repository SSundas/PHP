<html><body><h3>Use Of 'DROP DATABASE'</h3></body></html>
<?php

include('config.php');
//Query-1
$result=mysqli_query($db,"DROP DATABASE taimoor ");
if($result==True)

{
echo"Database has been deleted";
}
?>
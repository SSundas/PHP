<?php

$n=10;
$r=3;
$result=1;
	for($k=1;  $k<=$n;  $k++)
					{
						$result= $result*$k;
					}
					echo"Factorial of n ","$result<br>";
					
					$n2=$n-$r;
					$result1=1;
					
		for($k=1;  $k<=$n2;  $k++)		
				{
					$result1= $result1*$k;
				}
					echo"Factorial of n-r ","$result1<br>";
					
					$result=$result/$result1;
					echo"Permutation is ","$result";
					
?>
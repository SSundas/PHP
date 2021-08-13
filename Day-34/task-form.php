<html>
<head>

<style>
#sub {
width:180px;
margin-left:70px;
background-color:purple;
color:white;
}

fieldset {
background-color:pink;
border:2px solid purple;
}

legend {
font-family:Copperplate Gothic;
font-size:50px;
color:purple;

}	
</style>

</head>
<center>
	
		<fieldset>
		<legend>Registration Form</legend>
			<form action="task-check.php"  method="post">
			Firstname:
			<input type="text"  name="fname"><br><br>
			Lastname:
			<input type="text"  name="lname"><br><br>
			Password:
			<input type="password"  name="pw"><br><br>
			Mob No:
			<input type="number" name="12345"><br><br>
			Address:
			<textarea name="address"  rows="4"  cols="40"></textarea><br><br>
			
			<input type="submit"  name="submit"  id="sub">
	
	
	
		</fieldset>
	

</center>
</html>
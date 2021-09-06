<html>

<head>

<style>

#mit {
width:180px;
padding:5px;
margin-left:70px;
background-color:#0B7FAB;
color:white;
}

fieldset {
background-color:;
border:2px solid #0B7FAB;
}

legend {
font-family:Engravers MT;
font-size:50px;
color:#0B7FAB;

}	
</style>

</head>
<center>
	<fieldset>
		<legend>Registration Form</legend>
			<form action="reg-check.php"  method="post">
			
				ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text"  name="id"><br><br>
			
				Country:
				<input type="text"  name="country"  style="margin-right:5px";><br><br>
			
				City:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text"  name="city"><br><br>
				
				Employment Rate:
				<input type="text"  name="rate" style="margin-right:65px";><br><br>
			
				<input type="submit"  name="submit"  value="submit" id="mit"><br><br>
			</form>
			
	</fieldset>
</center>
</html>
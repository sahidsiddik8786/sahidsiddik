<?php
	
	include 'logconn.php';
	if(isset($_POST["save"]))
	{
		$no=$_POST["phone"];
		$psw=$_POST["password"];
		$sql="SELECT * FROM `reg` WHERE phone='$no' AND password='$psw'";
		$result=mysqli_query($con,$sql);
				if($result==1)
		{
			echo("INSERTION success");
		}
		else
		{
			echo("Failed");
		}
		header("location:view.php");
	}
	
	
?>
<html>
	<head>
		<title>  login </title>
		
	</head>
	<body background="https://images.pexels.com/photos/1831234/pexels-photo-1831234.jpeg?auto=compress&cs=tinysrgb&w=600" width="100%" height="100%">
		<form action="#" method="POST">
		<table style="color:black"  align="center" border="7" bordercolor="black" cellpadding="10">
			<h2><center> LOGIN </center> </h2><br>
					<tr> <th>Phone Number: 
					<input type="tel" id="phone" name="phone" required value=""><br><br>
					password:
		<input type="password" name="password" id="password" required value=""><br><br>
	<input type="submit" name="save" value="login"><br>
	<p>Don't have an account?<a href="reg.php">REGISTER HERE</a><br><br>
	</tr></th>
			</form>	
		</table>
	</body>
</html>	

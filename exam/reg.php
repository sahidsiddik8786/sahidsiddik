<center>
<h1 align="Center"> REG FORM</h1>
<form action="#" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>Enter your Name</td>
<td><input type="text" name="t1">
</td></tr>
<tr>       
<td>Enter your Address</td>
<td><textarea name="t2" placeholder="Enter address"></textarea>
</td></tr>
<tr>
<td>Enter your Phone number</td>
<td><input type="textarea" name="t3" size="10">
</td></tr>
<tr>
<td>Select gender:</td>
<td><input type="radio" name="t4" value="male">Male
<input type="radio" name="t4" value="female">Female</td>
</tr>
<tr>
<td>select your country:</td>
<td><select name="t5">
<option>India</option>
<option>Pakistan</option>
<option>Srilanka</option>
	<option selected hidden>Select Country</option>
</td></tr>
<tr>
<td>file upload</td>
<td><input type="file" name="t6">
</td></tr>
	<tr><th> Create Password:</th>
				<td><input type="password" id="pwd" name="pwd"></td></th></tr>
<tr>
<td><input type="submit" name="save">
<p>login<a href="login.php">LOGIN HERE</a><br><br>
</td>
</tr>
</table>
</form>

<?php
include 'dbcon.php';
if(isset($_POST["save"]))
{
		$n=$_POST["t1"];
		$ad=$_POST["t2"];
		$no=$_POST["t3"];
		$ge=$_POST["t4"];
		$co=$_POST["t5"];
		print_r($_FILES);
		$iname=$_FILES["t6"]["name"];
		move_uploaded_file($_FILES["t6"]["tmp_name"],"imageup/".$_FILES["t6"]["name"]);
$sql="INSERT INTO `reg`(`name`, `address`, `phone`, `gender`, `country`,`pic`) VALUES ('$n','$ad','$no','$ge','$co','$iname')";
$result=mysqli_query($con,$sql);
echo("<br>");
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

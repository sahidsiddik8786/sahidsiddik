<?php
$con=mysqli_connect("localhost","root","","proreg");
if($con)
	echo "connected";
else
	echo"not connected";
	echo"<br>";
?>
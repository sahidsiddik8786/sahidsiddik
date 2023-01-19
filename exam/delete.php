<?php
echo("delete page");
include 'dbcon.php';
$var=$_GET["xyz"];
echo($var);
$nresult=mysqli_query($con,"SELECT * FROM `reg`");
$row=mysqli_fetch_array($nresult);
$result=mysqli_query($con,"DELETE FROM `reg` WHERE `sid`='$var'");
unlink("imageup/".$row["pic"]);
header("location:view.php");
?>
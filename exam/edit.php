<?php
include 'dbcon.php';
$var=$_GET["abc"];
$result=mysqli_query($con,"SELECT * FROM `reg` WHERE `sid`= '$var'");
#print_r($result);
$row=mysqli_fetch_array($result);
?>
<form action="#" method="post" enctype="multipart/form-data">
<table border="2">
<tr>
<td>Edit Name:<input type="text" name="t1" size="30" value="<?php echo $row["name"];?>"/></td>
</tr>
<tr>
<td>Edit Address:<input type="text" name="t2" size="30" value="<?php echo($row["address"]);?>"></td>
</tr>
<tr>
<td>Edit Number:<input type="text" name="t3" size="30" value="<?php echo($row["phone"]);?>"></td>
</tr>
<tr>
<td>Edit Country:<input type="text" name="t4" size="30" value="<?php echo($row["country"]);?>"></td>
</tr>
<tr>
<td>Edit image:<input type="file" name="t5"><img src="imageup/<?php echo($row["pic"]); ?>" height="100" width="100"/></td>
</tr>
<tr>
<td>
<input type="submit" name="save"></td>
</form>
<?php
if(isset($_POST["save"]))
{
$n=$_POST["t1"];
$add=$_POST["t2"];
$no=$_POST["t3"];
$co=$_POST["t4"];
print_r($_FILES);
$iname=$_FILES["t5"]["name"];
move_uploaded_file($_FILES["t5"]["tmp_name"],"imageup/".$_FILES["t5"]["name"]);
$sql="UPDATE `reg` SET `name`='$n',`address`='$add',`phone`='$no',`country`='$co',`pic`='$iname' WHERE `sid`='$var'";
$result=mysqli_query($con,$sql);

echo("<br>");
header("location:view.php");
}
?>
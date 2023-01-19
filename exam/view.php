<?php
include 'dbcon.php';
?>
<a href="reg.php">Register here</a>
<table border="2">
<tr>
<td>student ID</td>
<td>Name</td>
<td>Address</td>
<td>Phone</td>
<td>Gender</td>
<td>Country</td>
<td>pic</td>
<td>Edit</td>
<td>Delete</td>
</tr>
<?php
$result=mysqli_query($con,"SELECT * FROM `reg`");
//print_r($result);
while($row=mysqli_fetch_array($result))
{?>
  
  <tr>
  <td><?php echo $row["sid"];?></td>
  <td><?php echo $row["name"];?></td>
  <td><?php echo $row["address"];?></td>
  <td><?php echo $row["phone"];?></td>
  <td><?php echo $row["gender"];?></td>
  <td><?php echo $row["country"];?></td>

  <td><img src="imageup/<?php echo($row["pic"]); ?>" height="100" width="100"/></td>
  <td><a href="edit.php?abc=<?php echo $row["sid"];?>">Update</a></td>
  <td><a href="delete.php?xyz=<?php echo $row["sid"];?>">remove</a></td>
  
  </tr>
  
<?php
}
?>
</table>
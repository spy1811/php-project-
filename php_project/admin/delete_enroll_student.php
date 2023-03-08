<?php
include('config.php');
$id=$_GET['id'];
$sql="delete from tbl_enrolled where id='$id'";
if(mysqli_query($con,$sql))
{
	header('Location:enrolled_student.php');
}
else
{
	echo"error".$mysqli_error($con);
}
?>
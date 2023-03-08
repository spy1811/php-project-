<?php
include('config.php');
$id=$_GET['id'];
$sql="delete from tbl_student where id='$id'";
if(mysqli_query($con,$sql))
{
	header('Location:student_details.php');
}
else
{
	echo"error".$mysqli_error($con);
}
?>
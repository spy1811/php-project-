<?php
include('config.php');
$id=$_GET['id'];
$sql="delete from tbl_comment where id='$id'";
if(mysqli_query($con,$sql))
{
	header('Location:feedback.php');
}
else
{
	echo"error".mysqli_error($con);
}
?>
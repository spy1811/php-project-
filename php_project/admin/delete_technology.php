<?php
include('config.php');
$id=$_GET['id'];
$sql="delete from tbl_technology where id='$id'";
if(mysqli_query($con,$sql))
{
	header('Location:display_technology.php');
}
else
{
	echo"error".$mysqli_error($con);
}
?>
<?php
include('config.php');
$id=$_GET['id'];
$sql="delete from tbl_features where id='$id'";
if(mysqli_query($con,$sql))
{
	header('Location:display_features.php');
}
else
{
	echo"error".$mysqli_error($con);
}
?>
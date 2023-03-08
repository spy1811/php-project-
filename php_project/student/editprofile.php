<?php
include('header.php');
if(isset($_POST['btn']))
{
	$name=$_POST['name'];
	$id=$_GET['id'];
	$mobile=$_POST['mobile'];
	$mail=$_POST['email'];
	$address=$_POST['address'];
	$date=$_POST['date'];
	$pass=$_POST['password'];
	$education=$_POST['education'];
	
		$sql="update  `tbl_student` set name='$name',mobile='$mobile',email='$mail',address='$address',education='$education',password='$pass',date_of_birth='$date' where id='$id'";
		if(mysqli_query($con,$sql))
		{
            echo "<script>alert('Updated successfully')</script>";
            echo "<script>window.location.href='profile.php'</script>";
		}
		else
		{
			echo"error".mysqli_error($con);
		}
}

?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <!-- <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="./customer_tbl.php">Customer Deatils</a></li>
                            <li class="active">Edit</li>
                        </ol>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-8" style="margin:auto;">
                        <div class="card">
                            <!-- <div class="card-header">
                                <strong class="card-title">Update Profile </strong>
                            </div> -->
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Update Profile </h3>
                                        </div>
                                        <hr>
										<?php
										$id=$_GET['id'];
										$sql1="select * from tbl_student where id='$id'";
										$result = mysqli_query($con,$sql1);
										$row=mysqli_fetch_row($result);
										?>
                                        <form method="post" action=""  enctype="multipart/form-data">
                                         
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Name </label>
                                                <input  name="name" type="text" value="<?php echo $row[1];?>" placeholder="Enter Name" pattern="[A-z-a-Z]" class="form-control cc-number identified visa" required>
                                            </div>
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Email </label>
                                                <input  name="email" type="text" value="<?php echo $row[2];?>" placeholder="Enter Mobile"  class="form-control cc-number identified visa" required>
                                            </div>
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Mobile </label>
                                                <input  name="mobile" type="text" value="<?php echo $row[3];?>" placeholder="Enter Email"  class="form-control cc-number identified visa" required>
                                            </div>
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Education </label>
                                                <input  name="education" type="text" value="<?php echo $row[4];?>" placeholder="Enter Email"  class="form-control cc-number identified visa" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Date Of Birth </label>
                                                <input  name="date" type="date" value="<?php echo $row[6];?>" placeholder="Enter Email"  class="form-control cc-number identified visa" required>
                                            </div>
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Address</label>
                                                <textarea  name="address"  placeholder="Enter Address"  class="form-control cc-number identified visa" required><?php echo $row[5];?></textarea>
                                            </div>
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Password </label>
                                                <input  name="password" type="text" value="<?php echo $row[7];?>" placeholder="Enter Email"  class="form-control cc-number identified visa" required>
                                            </div>
											
											    <div>
                                                    <input type="submit"  name="btn" class="btn btn-lg btn-info btn-block">  
                                                </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                                          
                                                </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
									
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>

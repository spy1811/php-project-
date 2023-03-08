<?php 
include('header.php');
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="./package_tbl.php">Package Deatils</a></li>
                            <li class="active">Create</li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>

         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
				
                            <div class="card-header">
                                 <strong class="card-title">Profile</strong>
								<!-- <a href="booking.php" class="btn btn-primary" style="float: right;">Add Booking</a> -->
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
								<?php
										$id=$_SESSION['student_email'];
										$sql1="select * from tbl_student where email='$id'";
										$result = mysqli_query($con,$sql1);
										$row=mysqli_fetch_row($result);
										?>
								    
                                    <thead>
                                        <tr><th>Name</th><td><?php echo $row[1];?></td></tr>
                                        <tr><th>Email</th><td><?php echo $row[2];?></td></tr>
                                        <tr><th>Mobile</th><td><?php echo $row[3];?></td></tr>
                                        <tr><th>Education</th><td><?php echo $row[4];?></td></tr>
                                        <tr><th>Date Of Birth</th><td><?php echo $row[6];?></td></tr>
                                        <tr><th>Address</th><td><?php echo $row[5];?></td></tr>
                                        <tr><th>Password</th><td><input type="password" class="form-control" id="myInput" placeholder="Password" required="required" data-validation-required-message="Please enter your email" name="password" value="<?php echo $row[7];?>"/><input type="checkbox" onclick="myFunction()"> Show Password
</div><br></td></tr>

                                    </thead>
									
								
                                </table>
                                
                            </div>
                            <a href="editprofile.php?id=<?php echo $row[0];?>" style="padding: 10px;background-color:#a6559f;color:white;width:100px;margin-left:20px;">Edit Profile</a>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
					<div class="col-md-1"></div>
                                          
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
                            <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>

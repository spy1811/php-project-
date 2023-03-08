<?php
include('header.php');
if(isset($_POST['btn']))
{
	$name=$_POST['name'];
    $chapter=$_POST['chapter'];
	$file=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_size=$_FILES['file']['size'];
	$file_temp_loc=$_FILES['file']['tmp_name'];
	$file_store='videos/'.$file;
	if(move_uploaded_file($file_temp_loc,$file_store))
	{
	    $sql="INSERT INTO `tbl_features`(`technology_id`, `file`,`chapter`) VALUES ('$name','$file','$chapter')";
		if(mysqli_query($con,$sql))
		{
			//echo"inserted...!";
			echo"<script>windows.location=display_features.php</script>";
		}
		else
		{
			echo"error".mysqli_error($con);
		}
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
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="./display_features.php">Features Details</a></li>
                            <li class="active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-8" style="margin:auto;">
                        <div class="card">
                            <!-- <div class="card-header">
                                <!-- <strong class="card-title">Add Bus </strong> 
                            </div> -->
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Add Features</h3>
                                        </div>
                                        <hr>
                                        <form method="post"  action="" enctype="multipart/form-data">
                                         
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Technology Name</label>
                                                <select  name="name" type="text"  class="form-control cc-number identified visa" required>
                                                <?php
                                                $sql1="select * from tbl_technology where status='active'";
                                                $rk=mysqli_query($con,$sql1);
                                                while($rw=mysqli_fetch_row($rk))
                                                {
                                                ?>
                                                <option value="<?php echo $rw[0]?>"><?php echo $rw[1];?></option>
                                                <?php
                                                }
                                                ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Enter Chapter</label>
                                                <input  name="chapter" type="text" value=""  pattern="[A-z-a-Z]" class="form-control cc-number identified visa" required >
                                            </div>
                                            <div class="form-group">
                                                 <label for="file-input" class=" form-control-label">Uplode Video</label>
                                                   <input  type="file" id="file-input" name="file" class="form-control-file" required>
                                            
                                                </div>
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
                            <script>
                                $(document).ready(function() {
                                    $('#summernote').summernote();
                                });
                            </script>
</body>
</html>

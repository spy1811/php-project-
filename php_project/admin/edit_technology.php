<?php
include('header.php');
if(isset($_POST['btn']))
{
	$name=$_POST['name'];
	$id=$_GET['id'];
	$desc=$_POST['desc'];
    $short_desc=$_POST['short_desc'];
	$file=$_FILES['file']['name'];
    if($file!="")
    {
        $file=$_FILES['file']['name'];
        $file_type=$_FILES['file']['type'];
        $file_size=$_FILES['file']['size'];
        $file_temp_loc=$_FILES['file']['tmp_name'];
        $file_store='img/'.$file;
        if(move_uploaded_file($file_temp_loc,$file_store))
        {
            $sql="update `tbl_technology` set `name`='$name',`image`='$file',`description`='$desc',`short_desc`='$short_desc', where id='$id'";
            if(mysqli_query($con,$sql))
            {
                header("Location:display_technology.php");
            }
            else
            {
                echo"error".mysqli_error($con);
            }
        }
    }
    else
    {
        $sql="update `tbl_technology` set `name`='$name',`description`='$desc',`short_desc`='$short_desc' where id='$id'";
        if(mysqli_query($con,$sql))
        {
            //echo"inserted...!";
            echo"<script>window.location.href=display_technology.php</script>";
            //header("Location:bus_tbl.php");
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
                            <li><a href="./display_technology.php">Technology Details</a></li>
                            <li class="active">Update</li>
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
                                <strong class="card-title">Update Technology </strong>
                            </div> -->
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Update Technology</h3>
                                        </div>
                                        <hr>
										<?php
										$id=$_GET['id'];
										$sql="select * from tbl_technology where id='$id'";
										$result = mysqli_query($con,$sql);
										$row=mysqli_fetch_row($result)
										?>
                                        <form action="" method="post"  enctype="multipart/form-data">
                                         
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Name</label>
                                                <input  name="name" type="text" value="<?php echo $row[1]; ?>" placeholder="Bus Name" pattern="[a-zA-Z ]+" title="Enter Valid Name" class="form-control cc-number identified visa" required >
                                            </div>
                                            <div class="form-group">
                                                <label for="file-input" class=" form-control-label">Select Image</label>
                                                <input  type="file" id="file-input" name="file" class="form-control-file"><br>
                                                <img src="img/<?php echo $row[2];?>" height="100px" width="100px">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Short Description</label>
                                                <textarea  name="short_desc" type="text" class="form-control cc-number identified visa" required><?php echo $row[4];?></textarea>
                                            </div>
                                            <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Description</label>
                                            <!-- <div id="summernote">Hello Summernote</div> -->
                                            <!-- <form method="post"> -->
                                                <textarea id="summernote" name="desc"><?php echo $row[3]; ?></textarea>
                                            <!-- </form> -->
                                                <!-- <label for="cc-payment" class="control-label mb-1">Description</label>
                                                <textarea  name="description"  placeholder="Enter Description"  class="form-control cc-number identified visa" required></textarea> -->
                                            </div>	
											<button type="submit"  name="btn" class="btn btn-lg btn-info btn-block">Submit</button>
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

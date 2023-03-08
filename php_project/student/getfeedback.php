<?php
include('header.php');
if(isset($_POST['btn']))
{
	$id=$_GET['id'];
	$description=$_POST['description'];
	$rating=$_POST['rating'];
	$stud=$_SESSION['student_email'];
    $sql1="select * from tbl_student where email='$stud'";
    $rp=mysqli_query($con,$sql1);
    $rt=mysqli_fetch_row($rp);
    $st_id=$rt[0];
	$sql="insert into `tbl_comment`(student_id,course_id,rating,description)values('$st_id','$id','$rating','$description')";
	if(mysqli_query($con,$sql))
	{
        echo "<script>alert('Insert successfully')</script>";
        echo "<script>window.location.href='mycourses.php'</script>";
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
                                            <h3 class="text-center">Feedback</h3>
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
                                                <label for="cc-payment" class="control-label mb-1">Rating </label>
                                                <input type="hidden" name="rating" value="" id="rating">
                            <span class="score">
								<div class="score-wrap">
									<span class="stars-active" style="width:0%">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
									</span>
									<span class="stars-inactive">
										<button id="c1" value="1" type="button"><i class="fa fa-star-o" aria-hidden="true" id="c1"></i></button>
										<button id="c2" value="2" type="button"><i class="fa fa-star-o" aria-hidden="true"></i></button>
										<button id="c3" value="3" type="button"><i class="fa fa-star-o" aria-hidden="true"></i></button>
										<button id="c4" value="4" type="button"><i class="fa fa-star-o" aria-hidden="true"></i></button>
										<button id="c5" value="5" type="button"><i class="fa fa-star-o" aria-hidden="true"></i></button>
									</span>
								</div>
							</span><br><br>
                                            </div>
											<div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Description</label>
                                                <textarea  name="description"  placeholder="Enter Address"  class="form-control cc-number identified visa" required><?php echo $row[5];?></textarea>
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
                            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(){
	for(i=1; i<=5; i++)
	{
		$("#c"+i).on("click",function()
		{
			id=$(this).val();
			//alert(id);
			for(j=1; j<=id; j++)
			{	
				document.getElementById("c"+j).style.cssText = 'background-color: yellow';
			}
			$("#rating").val(id);
		});
	}
});
	
</script>
</body>
</html>

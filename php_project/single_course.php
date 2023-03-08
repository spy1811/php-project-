<?php
include('header.php');
?>

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Detail Page</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <?php
            $id=$_GET['id'];
            $sql="select * from tbl_technology where id='$id'";
            $rs=mysqli_query($con,$sql);
            $rk=mysqli_fetch_row($rs);

            ?>
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <!-- <h6 class="text-primary font-weight-normal text-uppercase mb-3">Blog Detail Page</h6> -->
                    <h1 class="mb-4 section-title"><?php echo $rk[1]; ?></h1>
                    <!-- <div class="d-index-flex mb-2">
                        <span class="mr-3"><i class="fa fa-user text-primary"></i> Admin</span>
                        <span class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</span>
                        <span class="mr-3"><i class="fa fa-comments text-primary"></i> 15</span>
                    </div> -->
                </div>

                <div class="mb-5">
                    <img class="img-fluid w-100 mb-4" src="admin/img/<?php echo $rk[2];?>" alt="Image" style="height:500px;">
                    <p><?php echo $rk[3];?></p>
                    
                </div>

                

                

                <!-- Comment Form Start -->
                <!-- <div class="bg-light p-5">
                    <h3 class="font-weight-bold mb-4">Leave a comment</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                        </div>
                    </form>
                </div> -->
                <!-- Comment Form End -->
            </div>
            <!-- Blog Detail End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">All Courses</h3>
                    <ul class="list-group">
                        <?php
                        $sql1="select * from tbl_technology where status='active'";
                        $rl=mysqli_query($con,$sql1);
                        while($rp=mysqli_fetch_row($rl))
                        {
                        ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="single_course.php?id=<?php echo $rp[0];?>" style="text-decoration:none;text-align:center;"><?php
                            echo $rp[1];
                            ?></a>
                            <!-- <span class="badge badge-primary badge-pill">150</span> -->
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <!-- Category End -->
 
               

            </div>
            
					</div>
                    <?php
                    $id=$_GET['id'];
                    $sql="select * from tbl_comment where course_id='$id'";
                    $rk=mysqli_query($con,$sql);
                    
                    while($rw=mysqli_fetch_row($rk))
                    {
                        $sid=$rw[1];
                        $sql1="select name from tbl_student where id=$sid";
                        $po=mysqli_query($con,$sql1);
                        $rl=mysqli_fetch_row($po);
                    ?>
                    <div style="height:auto;border:0px solid red;margin-bottom:20px;width:80%;box-shadow: 3px 3px 15px 5px grey;padding:20px;">
                    
						<div class="col-md-10" >
							<h6><b><?php echo $rl[0];?></b></h6>
							<p><?php echo $rw[4];?></p>
							<?php
							$sw="select count(id) from tbl_comment where course_id='$id'";
							$rk2=mysqli_query($con,$sw);
							$rp1=mysqli_fetch_row($rk2);
                            $ratecount=$rp1[0];
							if($ratecount>0)
							{
                                $sq="select * from tbl_comment where course_id='$id'";
                                $rd1=mysqli_query($con,$sq);
                                $rp2=mysqli_fetch_row($rd1);
                                $rate=$rw[3];
                            ?>
                            <span class="stars-inactive">
										<?php
										
											for($i=1; $i<=5; $i++)
											{
												if($rate>=$i)
												{
													echo '<button id="c1" value="1" type="button" style="border:none;background:white;"><i class="fa fa-star-o" aria-hidden="true" id="c1" style="color:red;"></i></button>';
												}
												else
												{
													echo '<button id="c1" value="1" type="button" style="border:none;background:white;"><i class="fa fa-star-o" aria-hidden="true" id="c1"></i></button>';
												}
											}
										}
										else
										{
											for($i=1; $i<=5; $i++)
											{
												
													echo '<button id="c1" value="1" type="button" style="border:none;background:white;"><i class="fa fa-star-o" aria-hidden="true" id="c1"></i></button>';
												
											}
										}
										?>
									</span>
						</div>
                                          
                    </div>
                    <?php
                       
                    }
                ?>
<br>
            <a href="login.php?id=<?php echo $id;?>" style="text-decoration:none;background-color:#314783;padding:20px;width:200px;padding-left:10%;color:white;margin-left:30px;text-align:center;margin-top:20px;">Enroll Now</a>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Detail End -->
<?php
include('footer.php');
?>
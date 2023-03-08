<?php
include('header.php');
?>

        <div class="breadcrumbs">
            <!-- <div class="col-sm-12">
                <!-- <div class="page-header float-left">
                    <!-- <div class="page-title">
                        <h1>Our Courses</h1>
                    </div> 
                </div> 
            </div> -->
            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Dashboard</a></li>
                            <li><a href="./bus_details.php">Create</a></li>
                            <li class="active">Details </li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>


<!-- Pricing Plan Start -->
<div class="container-fluid pt-5 pb-3">
        <div class="container">
            <!-- <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Pricing Plan</h6> -->
            <h1 class="display-4 text-center mb-5">Our Courses</h1>
            <div class="row">
            <?php
            $email=$_SESSION['student_email'];
            $tech_id=$_GET['id'];
            $sq="select id from tbl_student where email='$email'";
            $rp=mysqli_query($con,$sq);
            $ro=mysqli_fetch_row($rp);
            $studentid=$ro[0];
            $sql="select * from tbl_technology as tech inner join tbl_enrolled as enroll on tech.id=enroll.technology_id inner join tbl_student as stud on stud.id=enroll.student_id inner join tbl_features as feature on tech.id=feature.technology_id where stud.id='$studentid' and enroll.technology_id='$tech_id'";
            $rs=mysqli_query($con,$sql);
            while($rw=mysqli_fetch_row($rs))
            {
                $str=$rw[4];
            ?>
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary" style="background-color:#f8f9fa !important;">
                            <!-- <h3 class="text-white">Basic</h3>
                           
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                            </h1> -->
                            <h4 style=""><?php echo $rw[1];?></h4>
                            <p><?php echo $rw[22];?></p>
                            <video src="../admin/videos/<?php echo $rw[21];?>" height="100%" width="100%" controls>
                        
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <!-- <h2><?php //echo $rw[1];?></h2> -->
                            <p><?php echo $str;?></p>
                        </div>
                        <!-- <a href="single_course.php?id=<?php echo $rw[0];?>" class="btn btn-secondary py-2 px-4" style="color:white;">Read More</a> -->
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="col-lg-4 mb-4" style="margin:auto;">
               
        </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>

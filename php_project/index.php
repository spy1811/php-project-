<?php
include('header.php');
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/male-hands-typing-password-on-260nw-1910826565.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-md-3">Helping you stay up-to-date wherever you are</h1>
                            <!-- <h1 class="display-3 text-white mb-md-4">Best For Laundry Services</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/social-media-usage-technology-teens-260nw-216851293.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4> -->
                            <font size="7"><b>"Knowledge is power. information is liberating.Education is the premise of progress,in every  society,in  every family"</b></font>
                            <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container" style="padding: 0 30px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex">
                        <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Our Location</h5>
                            <p class="m-0 text-white">Seth Walchand Hirachand Marg,Ashok Chowk , Solapur</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Email Us</h5>
                            <p class="m-0 text-white">principal@witsolapur.org</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Call Us</h5>
                            <p class="m-0 text-white">+0217-2653040</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="img/Education-Portal-The-Logistics-of-Learning-and-Teaching-Made-Easy.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Learn About Us</h6>
                    <h1 class="mb-4">We Are Best Teaching Provider In your City</h1>
                    <!-- <h5 class="font-weight-medium font-italic mb-4">Clita sit et ipsum sed. Volup duo sea dolor rebum ea rebum kasd stet. Dolor at duo dolor sit stet.</h5> -->
                    <p class="mb-2">In this Educational Portal we are providing learning material for students for better learning</p>
                    <div class="row">
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">A better learning future starts here.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Education is about helping students with learning differences.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


   

     <!-- Pricing Plan Start -->
     <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <!-- <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Pricing Plan</h6> -->
            <h1 class="display-4 text-center mb-5">The Best Courses</h1>
            <div class="row">
            <?php
            $sql="select * from tbl_technology where status='active'";
            $rs=mysqli_query($con,$sql);
            $i=1;
            while($rw=mysqli_fetch_row($rs))
            {
                if($i<=3)
                {
                $str=$rw[4];
            ?>
                <div class="col-lg-4 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary">
                            <!-- <h3 class="text-white">Basic</h3>
                           
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                            </h1> -->
                            
                            <img src="admin/img/<?php echo $rw[2];?>" height="200px" width="100%">
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <!-- <h2><?php echo $rw[1];?></h2> -->
                            <p><?php echo substr($str,0,80)."...";?></p>
                        </div>
                        <a href="single_course.php?id=<?php echo $rw[0];?>" class="btn btn-secondary py-2 px-4" style="color:white;">Read More</a>
                    </div>
                </div>
                <?php
                }
                $i++;
            }
                ?>
                <div class="col-lg-4 mb-4" style="margin:auto;">
                <center><a href="courses.php" class="btn btn-secondary py-2 px-4" style="color:black;background-color:white;width:300px;padding:10px;">All Courses</a></center>
        </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <!-- <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Our Features</h6> -->
                    <h1 class="mb-4">Counter</h1>
                    <!-- <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p> -->
                    <div class="row">
                        <?php
                        $sql1="select count(id) from tbl_student";
                        $rp=mysqli_query($con,$sql1);
                        $rw=mysqli_fetch_row($rp);
                        ?>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up"><?php echo $rw[0];?></h1>
                            <h5 class="font-weight-bold">Register Student</h5>
                        </div>
                        <?php
                        $sql2="SELECT COUNT(DISTINCT student_id) from  tbl_enrolled";
                        $rp2=mysqli_query($con,$sql2);
                        $rw2=mysqli_fetch_row($rp2);
                        ?>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up"><?php echo $rw2[0];?></h1>
                            <h5 class="font-weight-bold">Enrolled Student</h5>
                        </div>
                        <?php
                        $sql3="select count(id) from tbl_technology";
                        $rp3=mysqli_query($con,$sql3);
                        $rw3=mysqli_fetch_row($rp3);
                        ?>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up"><?php echo $rw3[0];?></h1>
                            <h5 class="font-weight-bold">Number Of Courses</h5>
                        </div>
                        <?php
                        $sql4="select count(id) from tbl_features";
                        $rp4=mysqli_query($con,$sql4);
                        $rw4=mysqli_fetch_row($rp4);
                        ?>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up"><?php echo $rw4[0];?></h1>
                            <h5 class="font-weight-bold">Number Of Videos</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
                        <i class="fa fa-5x fa-certificate text-white mb-5"></i>
                        <h1 class="display-1 text-white mb-3">1+</h1>
                        <h1 class="text-white m-0">Years Experience</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    


    <?php
    include('footer.php');
    ?>
<?php
include('header.php');
if(isset($_POST['btn']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from tbl_student";
    $rk=mysqli_query($con,$sql);
   // exit();
    while($rw=mysqli_fetch_row($rk))
    {
        $emailtbl=$rw[2];
        $passtbl=$rw[7];
        //echo $emailtbl;
        //echo $passtbl;
        
        if($email==$emailtbl && $password==$passtbl)
        {
            $_SESSION['student_email']=$email;
            $loginemail=$_SESSION['student_email'];
            if(isset($_SESSION['student_email']))
            {
               
                        echo "<script>alert('Login Successfully')</script>";
                        echo "<script>window.location.href='student/index.php'</script>";
                    
            }
            else
                {
                    echo "<script>alert('Enter Valid Inputs')</script>";
                    echo "<script>window.location.href='logindashboard.php'</script>";
                }
            }
            
        }
    }
?>
<!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Login</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                     
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="post">
                            <div class="form-row">
                                <div class="col-md-6" style="margin:auto;">
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="name" placeholder="Email" required="required" data-validation-required-message="Please enter your name" name="email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="col-md-6" style="margin:auto;">
                                    <div class="control-group">
                                    
                                        <input type="password" class="form-control" id="myInput" placeholder="Password" required="required" data-validation-required-message="Please enter your email" name="password" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                            <div class="col-md-6" style="margin:auto;">
                            <input type="checkbox" onclick="myFunction()"> Show Password
</div><br>
                            <center><button class="btn btn-primary py-3 px-5" type="submit"  name=
                                "btn" style="margin:auto;">Login</button>
                            </div></center><br>
                            <!-- <a href="register.php" style="margin-left:350px;text-decoration:none;">You don't have an account</a><br> -->
                            <a href="forgetpassword.php" style="margin-left:380px;text-decoration:none;">Forgot Password</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<?php
include('footer.php');
?>
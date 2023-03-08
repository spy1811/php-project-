<?php
include('header.php');
if(isset($_POST['btn']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_pass=$_POST['confirm_password'];
    $sql1="select count(email) from tbl_student where email='$email'";
    $rp=mysqli_query($con,$sql1);
    $rk=mysqli_fetch_row($rp);
    $count=$rk[0];
    if($count==1)
    {
        if($password==$confirm_pass)
        {
            $sql="update tbl_student set password='$password' where email='$email'";
            if(mysqli_query($con,$sql))
            {
                echo "update";
            }
            else
            {
                mysqli_error($con);
            }
        }
        else
        {
            echo "<script>alert('Please Enter Valid Confirm Password')</script>";
            echo "<script>window.location.href='forgetpassword.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Please Enter Valid Email')</script>";
        echo "<script>window.location.href='forgetpassword.php'</script>";
    }
}
?>
<!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Forgot Password</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Forgot Password</a>
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
                                    
                                        <input type="password" class="form-control" id="pass" placeholder="Password" required="required" data-validation-required-message="Please enter your email" name="password" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                            <div class="form-row">
                            <div class="col-md-6" style="margin:auto;">
                                    <div class="control-group">
                                    
                                    <input type="password" class="form-control" id="myInput" placeholder="Confirm Password" required="required" data-validation-required-message="Please enter your email" name="confirm_password" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                            <div class="col-md-6" style="margin:auto;">
                            <input type="checkbox" onclick="myFunction()"> Show Password
</div><br>
                            <center><button class="btn btn-primary" type="submit"  name=
                                "btn" style="margin:auto;">Reset</button>
                            </div></center>
                          
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
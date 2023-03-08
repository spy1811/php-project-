<?php
include('header.php');
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['contact'];
    $education=$_POST['education'];
    $dofbirth=$_POST['dofbirth'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $sql2="select count(id) from tbl_student where email='$email'";
    $rk1=mysqli_query($con,$sql2);
    $rpp1=mysqli_fetch_row($rk1);
    $countenroll=$rpp1[0];
    if($countenroll==0)
    {
        $sql="insert into tbl_student(name,email,mobile,education,address,date_of_birth,password)values('$name','$email','$mobile','$education','$address','$dofbirth','$password')";
        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Registration Successful')</script>";
            echo "<script>window.location.href='login.php'</script>";
        }
        else
        {
            echo mysqli_error($con);
        }
    }
    else
    {
        echo "<script>alert('you have already used this email id')</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
}
?>
<!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Registration</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Registration</a>
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
                                <div class="col-md-6">
                                    <div class="control-group">
                                    <label>Your Name</label>
                                        <input type="text" class="form-control" id="name" required="required" data-validation-required-message="Please enter your name" name="name" pattern="[a-zA-Z ]+" title="Enter Valid Name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                    <label>Your Email</label>
                                        <input type="email" class="form-control" id="email" required="required" data-validation-required-message="Please enter your email" name="email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                    <label>Contact Number</label>
                                        <input type="number" class="form-control" id="name" required="required" data-validation-required-message="Please enter your name" name="contact"/>
                                        <p class="help-block text-danger" pattern="[0-9]{10}" title="Enter Valid Mobile Number"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                    <label>Education</label>
                                        <input type="text" class="form-control" id="email"required="required" data-validation-required-message="Please enter your email" name="education" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="control-group">
                                        <label>Date Of Birth</label>
                                        <input type="date" class="form-control" id="name" placeholder="Your Date" required="required" data-validation-required-message="Please enter your name" name="dofbirth"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group">
                                    <label>Password</label>
                                        <input type="password" class="form-control" id="email" required="required" data-validation-required-message="Please enter your email" name="password"/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                            <label>Address</label>
                                <textarea class="form-control" rows="6" id="message" required="required" data-validation-required-message="Please enter your message" name="address"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit"  name=
                                "btn">Register </button>
                                <a href="login.php" style="margin-top:20px;margin-left:15px;background-color:#194376;padding:15px;color:white;text-decoration:none;">Login</a>
                            </div>
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
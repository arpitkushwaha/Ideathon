<?php 
// Start the session
session_start();
require_once "php/include/error.php";
require_once "php/include/db_connect.php";
require_once "php/Login.php";
require_once "php/Signup.php";
//require_once "php/socialsignin.php";

if(isset($_SESSION['logged']) && $_SESSION['role']==="Pet Parent")
{
	header("Location: myaccount.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.tempload.com/beapp-1-1/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 05:46:23 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Furries</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="oldassets/images/Logo/logo.jpg">

    <!-- Bootstrap & Plugins CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="oldassets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href ="https://unpkg.com/aos@next/dist/aos.css" />



    <!-- Custom CSS -->
    <link href="oldassets/css/style.css" rel="stylesheet" type="text/css">
    <link href="oldassets/css/furrie.css" rel="stylesheet" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <link href="php/check.js" rel="javascript" type="text/javascript">

</head>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->

    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Content End ***** -->
    <style>
        .login-section {
            background-image: url(oldassets/images/login-bg.png);
            background-size: cover;
            background-position: center;
            min-height: 500px;
            background-repeat: no-repeat;
        }
        @media(max-width:575px)
        {
         .login-box
            {

                 margin-top: -80%;
             }

            .login-img {
             margin-top: -112%;
            }

        }
        @media(max-width:335px)
        {
            .login-img {
             margin-top: -120%;
            }

        }

    </style>
    <section class="login-area ">
        <div class="login-section">

        </div>

        <div class="container-fluid mb-5">
            <div class="row justify-content-center ">
                <img src="oldassets/images/Logo/logo1.png" alt="" class="login-img">
            </div>

            <div class="row justify-content-center">



                <div class="col-10 col-lg-4 col-md-6 col-sm-8 p-5 login-box" id="signup">
                    <div class="row justify-content-center">
                        <ul>
                            <a href="login.php">
                                <li>Login</li>
                            </a><span class="mr-4 ml-4">|</span>
                            <a href="signup.php" >
                                <li style="color: #FBAF1A;"><u> Signup</u></li>
                            </a>
                        </ul>

                    </div>
                    <div class="row justify-content-center mt-4">
                        <h2 style="font-weight: 500;">Hello</h2>

                    </div>
                    <div class="row justify-content-center">
                        <p>Please sign up to your account</p>
                    </div>



        <!-- warning line -->
        <?php if (isset($user_already_registered_error)): ?>
            <div class="row justify-content-center text-center" >
                        <p id="warning" name="warning" class="warning"><?php echo $user_already_registered_error; ?></p>
                    </div>
        <?php endif ?>
        <!-- warning line ends -->


                    <form action="login.php" method="POST" class="mt-4">

                        <div class="row form-group justify-content-center">
                            <div class="col-sm-10">
                                <label for="username" class="label-content">Username</label>
                                <div class="input-group">
                                    <input class="form-control  " type="text" aria-label="username" name="username" pattern="[a-zA-Z0-9]+"
                                        required >
                                    <span class="input-group-btn">
                                        <button class="btn btn-default reveal1" readonly>
                                            <i class="fa fa-user" aria-hidden="true"></i></button>
                                    </span>
                                </div>

                            </div>
                        </div>


                        <div class="row form-group justify-content-center">
                            <div class="col-sm-10">
                                <label for="email" class="label-content">Email</label>
                                <div class="input-group">
                                    <input class="form-control  " type="email" aria-label="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                        placeholder="abc@gmail.com" required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default reveal" readonly>
                                            <i class="fa fa-envelope" aria-hidden="true"></i></button>
                                    </span>
                                </div>

                            </div>
                        </div>

                        <div class="row form-group justify-content-center mt-4">
                            <div class="col-sm-10">
                                <label for="exampleInputPassword1" class="label-content"
                                    style="margin-bottom: 10px;">Password</label>
                                <div class="input-group ">
                                    <input type="password" class="form-control pwd" id="exampleInputPassword2"
                                        placeholder="xxxxxxx" name="password" required>
                                    <span class="input-group-btn" id="eyeSlash1">
                                        <button class="btn btn-default reveal"
                                            onclick="$('#exampleInputPassword2').attr('type', 'text');$('#eyeSlash1').hide();$('#eyeShow1').show();"
                                            type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow1" style="display: none;">
                                        <button class="btn btn-default reveal"
                                            onclick="$('#exampleInputPassword2').attr('type', 'password');$('#eyeShow1').hide();$('#eyeSlash1').show();"
                                            type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="offset-sm-5 col-sm-10 text-center forgot-text " style="">
                                <a href="">Forgot Password?</a>
                            </div>
                        </div>

                        <div class="row form-group justify-content-center mt-3">
                            <div class="col-sm-10 ">

                                <button class="btn btn-primary btn-block text-white btn-user mt-2 login-btn "
                                    name="signup" type="submit">
                                    SIGN UP
                                </button>
                            </div>

                        </div>

                    </form>

                    <div class="row justify-content-center mt-4">
                        <p style="color: black;font-size: 12px;">Or Sign up using social media</p>
                    </div>


                    <div class="row mt-4 justify-content-center login-icon">

                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <!-- <a href="<?php if(!$google_button == ''){echo $google_button;}?>"><i class="fa fa-google"></i></a> -->


                    </div>
                    <div class="row justify-content-center mt-4">
                        <a href="index.php" class="goback" style="color:#FBAF1A;font-weight:600;" ><i class="fa fa-arrow-circle-left  mr-2" style="color: #FBAF1A !important;"></i>Go Back</a>
                    </div>
                </div>

















            </div>

        </div>

    </section>





    <!-- ***** Footer Start ***** -->

    <!-- ***** Footer Start ***** -->



    <!-- jQuery -->

    <!-- custom -->




        <?php
include "partials/footer.php";
?>

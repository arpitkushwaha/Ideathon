<?php 
require_once "dashboard_vet.php";
require_once "../include/function.php";

if(isset($_SESSION['logged']) && $_SESSION['role']=="Vet")
{	
    echo "inside if";
    redirect_to("vet/askavetlist_all.php");
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
    <link rel="icon" type="image/png" href="../oldassets/images/Logo/logo.jpg">

    <!-- Bootstrap & Plugins CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../oldassets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href ="https://unpkg.com/aos@next/dist/aos.css" />



    <!-- Custom CSS -->
    <link href="../oldassets/css/style.css" rel="stylesheet" type="text/css">
    <link href="../oldassets/css/furrie.css" rel="stylesheet" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <link href="../php/check.js" rel="javascript" type="text/javascript">

</head>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->

    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Content End ***** -->
    <style>
        .login-section {
            background-image: url(../oldassets/images/login-bg.png);
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
                <img src="../oldassets/images/Logo/logo1.png" alt="" class="login-img">
            </div>

            <div class="row justify-content-center">

                <div class="col-10 col-lg-4 col-md-6 col-sm-8 p-5 login-box" id="login">
                    <div class="row justify-content-center">
                        <ul >

                                <div >
                                    <li style="color: #FBAF1A;"><u>Login</u> </li>
                                </div>
                            


                        </ul>

                    </div>
                    <div class="row justify-content-center mt-4">
                        <h2 style="font-weight: 500;">Hello</h2>

                    </div>
                    <div class="row justify-content-center text-center">
                        <p>Please Login to your account</p>
                    </div>


                    <!-- warning line -->
                    <?php if (isset($user_login_error)): ?>
                                <div class="row justify-content-center text-center " >
                                    <p id="warning" name="warning" class="warning"><?php echo $user_login_error; ?></p>
                                </div>
                    <?php endif ?>
                    <!-- warning line ends -->


                    <form action="index.php" method="POST" class="mt-4">


                        <div class="row form-group justify-content-center">
                            <div class="col-sm-10">
                                <label for="email" class="label-content">Email</label>
                                <div class="input-group">
                                    <input class="form-control  " type="email" aria-label="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
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
                                    <input type="password" class="form-control pwd" id="exampleInputPassword1"
                                        placeholder="xxxxxxx" name="password" required>
                                    <span class="input-group-btn" id="eyeSlash">
                                        <button class="btn btn-default reveal"
                                            onclick="$('#exampleInputPassword1').attr('type', 'text');$('#eyeSlash').hide();$('#eyeShow').show();"
                                            type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow" style="display: none;">
                                        <button class="btn btn-default reveal"
                                            onclick="$('#exampleInputPassword1').attr('type', 'password');$('#eyeShow').hide();$('#eyeSlash').show();"
                                            type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                       

                        <div class="row form-group justify-content-center mt-3">
                            <div class="col-sm-10 ">

                                <button class="btn btn-primary btn-block text-white btn-user mt-2 login-btn "
                                   name="vet" type="submit">
                                    LOGIN
                                </button>
                            </div>

                        </div>

                    </form>

                </div>


            </div>

        </div>

    </section>





    <!-- ***** Footer Start ***** -->

    <!-- ***** Footer Start ***** -->



    <!-- jQuery -->

    <!-- custom -->
<style>
.btn:active
{
 border: white !important;
}
</style>

<?php
include "../partials/footer.php";
?>
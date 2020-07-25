<?php 
    session_start();
    require_once "include/error.php";
    require_once "include/db_connect.php";
    require_once "include/function.php";
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="ideathon/logo.png">
    <title>Clean-O-Rama</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">
    <!-- Favicon -->
   

    <!-- Bootstrap & Plugins CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="oldassets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="oldassets/css/style.css" rel="stylesheet" type="text/css">
    <link href="oldassets/css/furrie.css" rel="stylesheet" type="text/css">

    <!-- Global site tag (gtag.js) - Google Analytics -->

</head>

<body>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="ideathon/logo.png" class="light-logo " alt=""
                                style="width:60px;height:60px;margin-top: -18px;">
                            <img src="ideathon/logo.png" class="dark-logo  " alt=""
                                style="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <style>
                          .dark-logo 
                          {
                            width:60px;
                            height:60px;
                            margin-top: -18px;
                          }
                         
                        </style>

                        <!-- ***** Menu Start ***** -->
                        <div class="row">
                            <!-- <div class="col-lg-3 offset-lg-1 mt-3 pr-0 pl-4 search-box" >
                                <form class="form-inline mb-0">
                                    <input class="form-control search-bar search-bar-new search-bar-width col-sm-10 " type="search" placeholder="Find a Vet ,Vet Clinic, Vet Hospitals etc"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success col-sm-2 search-btn" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </form>
                            </div> -->
                            <div class="col-sm-12 nav-links-margin">
                                <ul class="nav nav ">
                                   
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Marketplace</a></li>
                            <!-- <li><a href="#">Contact us</a></li> -->
                            <li><a href=<?php echo "'".basepath()."blog-list.php'";?>>Blog</a></li>
                            <li><a href=<?php echo "'".basepath()."forum.php'";?>>Forum</a></li>
                         
                            <?php 
                                if(isset($_SESSION['logged']) && $_SESSION['role']==="Pet Parent")
                                {
                                echo "<li><a href='".basepath()."petparent/myaccount.php'>Dashboard</a></li>";
                                }
                                else{
                                    echo "<li><a href='".basepath()."petparent/login.php'>Login</a></li>";
                                   // echo "<li><a href='".basepath()."petparent/signup.php'>Sign Up</a></li>";
                                }
                            ?>

                                </ul>
                            </div>
                        </div>


                        <!-- <ul class="nav nav ">
                        <form class="form-inline">
                                <input class="form-control col-sm-10 search-bar " type="search" placeholder="Search" 
                                    aria-label="Search">
                                <button class="btn btn-outline-success search-btn" type="submit"><i
                                        class="fa fa-search"></i></button>
                            </form>
                           

                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href=<?php echo "'".basepath()."blog-list.php'";?>>Blog</a></li>
                            <li><a href=<?php echo "'".basepath()."forum.php'";?>>Ask a vet</a></li>
                         
                            <?php 
                                if(isset($_SESSION['logged']) && $_SESSION['role']==="Pet Parent")
                                {
                                echo "<li><a href='".basepath()."petparent/myaccount.php'>Dashboard</a></li>";
                                }
                                else{
                                    echo "<li><a href='".basepath()."petparent/login.php'>Login</a></li>";
                                    //echo "<li><a href='".basepath()."petparent/signup.php'>Sign Up</a></li>";
                                }
                            ?>


                        </ul> -->
                        <a class="menu-trigger">

                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


<style>
    body{
        font-family: 'Source Sans Pro', sans-serif !important;
    }
     .header-area.header-sticky .search-bar 
     {
         color: #3B566E !important;
     }
     .header-area .main-nav .nav
     {
         margin-top: 0 !important;
     }

   
   
 @media(max-width: 575px)
 {
     .search-bar
     {
         width: 87.5%;
         background: white;
 
         color: #3B566E;
         border-bottom: 2px solid #3B566E;
     }
     .search-bar::placeholder
     {
         color: #3B566E;
         font-weight: 600;
      
     }
     .search-btn
     {
         background-color: white;
         border-bottom: 2px solid #3B566E;

        
     }
     .search-btn .fa-search
     {
         color: #3B566E !important;
         font-weight: 600;
        
     }
     .header-area.header-sticky .search-bar 
     {
         color: #3B566E !important;
         background-color: white;
     }
     .search-bar:active 
     {
         background-color: white !important;
     }
     .search-bar-width
     {
         width: 50%;
     }
     .search-btn
     {
         width: 20%;
     }
     .header-area .main-nav .nav
     {
         margin-top: 10px !important;
         margin-left: -105px;
         width: 426px;
     }
 }
 @media(min-width: 991px)
 {
    .nav-links-margin
    {
        margin-top: 20px;
    }
  
 }
</style>
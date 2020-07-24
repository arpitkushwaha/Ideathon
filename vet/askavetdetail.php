<?php
	session_start();
    require_once "../include/error.php";
    require_once "../include/db_connect.php";
	require_once "../include/function.php";
	
	//Check Session
	if(empty($_SESSION['vet']) || empty($_SESSION['askavet_id']))
	{
		redirect_to("vet/index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="index.php" />
    <!-- OG -->

    <title>My Furries</title>


    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../oldassets/images/Logo/logo.jpg">

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="../assets/js/html5shiv.min.js"></script>
	<script src="../assets/js/respond.min.js"></script>
	<![endif]-->

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="../assets/css/assets.css">

    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i%7CRubik:300,300i,400,400i,500,500i,700,700i,900,900i');
    </style>

    <!-- TYPOGRAPHY ============================================= -->


    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="../assets/css/shortcodes/shortcodes.css">

    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets1/css/dashboard.css">


    <link href="../oldassets/css/style.css" rel="stylesheet" type="text/css">




    <link href="../oldassets/css/newfurries.css" rel="stylesheet" type="text/css">
    <link href="../oldassets/css/furrie.css" rel="stylesheet" type="text/css">

</head>


<body id="bg">
    <div class="page-wraper">


        <!-- Header Top END ==== -->
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Page Heading Box ==== -->
            <div class="page-banner page-banner-sm">
                <div class="container">
                    <div class="page-banner-entry">
                        <h1 class="banner-head">Ask a Vet Detail</h1>
                        <div class="breadcrumb-row text-black">
                            <ul class="list-inline inline-text">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li>Ask a vet</li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>


            <!-- Page Heading Box END ==== -->
            <!-- Main Slider -->
            <div class="content-block" id="content-area">
                <!-- Popular Courses -->
                <div class="section-area section-sp2" style="background-color: #eff3f6;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-lg-8 col-xl-8 m-md-b50 wow fadeInUp" data-wow-delay="0.2s">
                                <!-- blog start -->
                                <div class="blog-lg blog-single">



                                    <div class="ttr-post-title">
                                        <!-- <h2 class="post-title mt-2 font-weight-bold"><a href="blog-details-sidebar.html"
                                                style="color: rgb(78, 78, 78);"><?php echo $_SESSION['askavet_title']; ?></a>
                                        </h2> -->


                                        <h2 class="post-title mt-2 font-weight-bold"><a href="blog-details-sidebar.html"
                                                style="color: rgb(78, 78, 78);"><?php echo $_SESSION['askavet_title']; ?>
                                        </h2>

                                    </div>







                                    <div class="row ">
                                        <div class="col-lg-12 ">

                                            <div class="card-courses-list-bx share-margin-icons-blog  "
                                                style="float: left;">

                                                <ul class="card-courses-view">

                                                    <div class="card-courses-user-pic"
                                                        style="width: 80px;height: 80px;">

                                                        <?php
                                                        if(!empty($_SESSION['askavet_author_image']))
                                                        {
                                                            echo '<img src="../petparent/php/uploads/user/'.$_SESSION['askavet_author_image'].'" class="img-fluid forum-img-round" alt="" />';			
                                                        }
                                                        else
                                                        {
                                                            echo '<img src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" class="img-fluid forum-img-round" alt="" />';
                                                        }
                                                        ?>

                                                    </div>
                                                    <div class="card-courses-user-info ml-2">
                                                        <div class="mt-3">
                                                            <h4
                                                                style="color: rgb(112, 112, 112);font-size: 16px;font-weight: 600 ;">
                                                                <?php echo $_SESSION['askavet_author_name']; ?></h4>

                                                            <h5 class="text-muted" style="margin-top: -15px;">
                                                                <?php echo timestamp($_SESSION['askavet_created_at']); ?>
                                                            </h5>
                                                        </div>


                                                    </div>

                                                </ul>

                                            </div>

                                            <div class="ttr-post-meta d-flex category-forum-alignment">

                                                <div class="post-tags">
                                                    <li class="card-courses-categories mt-3 ">
                                                        <h5 style="color: #FFB000;font-size: 14px;font-weight: 600;">
                                                            Category</h5>
                                                        <h4 class="category-text-margin" style="font-weight: 200;">
                                                            <?php echo $_SESSION['askavet_category_name']; ?></h4>
                                                    </li>
                                                </div>

                                            </div>
                                        </div>
                                    </div>









                                    <div class="info-bx">












                                        <div class="ttr-post-text ">
                                            <!-- <p><?php echo $_SESSION['askavet_description']; ?></p> -->


                                            <!-- <p><?php echo $_SESSION['askavet_content']; ?></p> -->

                                            <p style="color: rgb(129, 129, 129);">
                                                <?php echo $_SESSION['askavet_content']; ?>
                                            </p>



                                            <div class="action-box blog-lg mt-2">
                                                <?php echo "
                                                    <img src='../petparent/php/uploads/askavet/".$_SESSION['askavet_id'].".jpg' alt=''>
                                                    <img src='../petparent/php/uploads/askavet/".$_SESSION['askavet_id'].".jpeg' alt=''>
                                                    <img src='../petparent/php/uploads/askavet/".$_SESSION['askavet_id'].".png' alt=''>";
                                                    ?>
                                            </div>


                                            <!-- video and img url here -->




                                            <ul class="wp-block-gallery columns-6 is-cropped mt-4 mb-4">
                                                <li class="blocks-gallery-item"><iframe class="video-height"
                                                        src="<?php echo linkembed($_SESSION['askavet_video']); ?>"
                                                        allowfullscreen></iframe></li>

                                            </ul>






                                        </div>
                                        <div class="row ">
                                            <div class="col-lg-12 align-row-detailblog-feedback">

                                                <div class="card-courses-list-bx share-margin-icons-blog  "
                                                    style="float: left;">

                                                    <ul class="card-courses-view">

                                                        <li class="card-courses-review">
                                                            <div class="media-box">
                                                                <ul class="media-post blog-features blog-vote-icon">

                                                                    <li><a href="#"><i
                                                                                class="fa fa-thumbs-up"></i><span>0</span>
                                                                        </a></li>
                                                                    <li><a href="#"><i
                                                                                class="fa fa-thumbs-down"></i><span>0</span>
                                                                        </a></li>

                                                                    <li><a href="#"><i
                                                                                class="fa fa-comments-o"></i><span>0</span>
                                                                        </a></li>

                                                                </ul>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                    <ul class="card-courses-view ">

                                                        <li class="card-courses-review mt-2 ml-2">
                                                            <div class="media-box">
                                                                <ul class="media-post blog-features share-icon-blog ">
                                                                    <li class="text-muted" style="font-size: 16px;">
                                                                        Share</li>

                                                                    <li><a href="#"><i
                                                                                class="fa fa-facebook-square"></i>
                                                                        </a></li>
                                                                    <li><a href="#"><i class="fa fa-whatsapp"></i>
                                                                        </a></li>

                                                                    <li><a href="#"><i
                                                                                class="fa fa-linkedin-square"></i>
                                                                        </a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter-square"></i>
                                                                        </a></li>

                                                                </ul>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <div class="ttr-post-meta d-flex tag-align">

                                                    <div class="post-tags">

                                                        <span>
                                                            <h4 class="tag-head"
                                                                style="color: #FFB000;font-size: 16px;font-weight: 700;">
                                                                TAGS</h4>
                                                        </span>
                                                        <a href="" class="tags">Pets</a>
                                                        <a href="" class="tags">Animals</a>
                                                        <a href="" class="tags">Dogs</a>
                                                        <a href="" class="tags">Petcare</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="author-box blog-user m-b60">
								<div class="author-profile-info">
									<div class="author-profile-pic">
										<img src="../assets/images/testimonials/pic2.jpg" alt="">
									</div>
									<div class="author-profile-content">
										<h6>Author Name</h6>
										<p>Aenean sollicitudin, lorem quis biber idum auctor anisi elit consequat
											happ quam vel enim augue.</p>
		
									</div>
								</div>
                            </div> -->


              <!-- COMMENTS START HERE -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-sm-2 text-center">
                                                                <div class="row justify-content-center">
                                                                    <div class="card-courses-user-pic mt-2 "
                                                                        style="width: 80px;height: 80px;">
                                                                        <img src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg"
                                                                            class="img-fluid" alt="" />
                                                                    </div>
                                                                    <div class="card-courses-user-info mt-4">
                                                                        <div class="">
                                                                            <h4
                                                                                style="color: rgb(112, 112, 112);font-size: 16px;font-weight: 600 ;letter-spacing:1px">
                                                                                VET BOT</h4>
                                                                            <h5 class="text-muted"
                                                                                style="margin-top: -15px;">
                                                                                <?php echo timestamp($_SESSION['askavet_created_at']); ?>
                                                                            </h5>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="col-md-10">
                                                                <p class="mt-2 text-muted"
                                                                    style="font-size:14px;line-height:25px">
                                                                    Hello,  Welcome to My Furries - Ask a Vet Service.

                                                                    Thanks for choosing MyFurries. We hope you will be
                                                                    satisfied by our service and recieve 
                                                                    answers to all your questions.
                                                                    A Vet will connect with you shortly.

                                                                    Good luck! :D
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

<?php

                $sql_e = "SELECT * FROM askavet_comment WHERE post_fk=".$_SESSION['askavet_id']." ORDER BY created_at";
                $result = $conn->query($sql_e);
                    if($result->num_rows > 0){
                    while($askavet_comment = $result->fetch_assoc()) {
                            $id = $askavet_comment['id'];
                            $content = $askavet_comment['content'];
							$user_fk = $askavet_comment['user_fk'];
                            $created_at = $askavet_comment['created_at'];
                            
                            $sql_e = "SELECT * FROM user_master WHERE id='$user_fk'";
							$result_user_master = $conn->query($sql_e); 

                            if($result_user_master->num_rows > 0){
                                while($user_master = $result_user_master->fetch_assoc()) {
                                    $user_name = $user_master['name'];
                                    $user_image = $user_master['image'];
                                    $user_role = $user_master['role'];
                                    }     
                                  
echo '
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-sm-2 text-center">
                                                                <div class="row justify-content-center">
                                                                    <div class="card-courses-user-pic mt-2 "
                                                                        style="width: 80px;height: 80px;">
                                                                        ';

                                                                       
                                                                        if(!empty($user_image))
                                                                        {
                                                                            echo '<img src="../petparent/php/uploads/user/'.$user_image.'" class="img-fluid forum-img-round" alt="" />';			
                                                                        }
                                                                        else
                                                                        {
                                                                            echo '<img src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" class="img-fluid forum-img-round" alt="" />';
                                                                        }
                                                                              
                                                                                
                                                                        echo    '
                                                                    </div>
                                                                    <br>
                                                                    <div class="card-courses-user-info mt-4">
                                                                        <div class="">
                                                                            <h4
                                                                                style="color: rgb(112, 112, 112);font-size: 16px;font-weight: 600;letter-spacing:1px">
                                                                                '.$user_name.'</h4>
                                                                            <h5 class="text-muted"
                                                                                style="margin-top: -15px;">
                                                                                '.timestamp($created_at).'
                                                                            </h5>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="col-md-10">
                                                                <p class="mt-2 text-muted"
                                                                    style="font-size:14px;line-height:25px">
                                                                    '.$content.'
                                                                </p>';

                                                             if($user_role == "Vet" && $_SESSION['askavet_status'] == 'open')
                                                             {
                                                                echo ' <div class="row">
                                                                    <div class="col-lg-12">
                                                                    <form action="dashboard_vet.php" method="POST">
                                                                        <input type="hidden" name="askavet_comment_id" value="'.$id.'">
                                                                        <button type="submit" name="deletevetcomment"
                                                                            class="btn btn-primary ml-auto comment-reply-btn mt-3">Delete</button>
                                                                    </form>        
                                                                    </div>

                                                                </div>';
                                                             }
                                                               
                                                           echo' </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>';
                    }
                }
            }


?>

                                                


                                            </div>
                                        </div>
                                    </div>
                                </div>

             <!-- COMMENTS START HERE -->
             <?php

                    if($_SESSION['askavet_status'] == 'open')
                            echo '
                                <div class="clear" id="comment-list">
                                    <div class="comments-area" id="comments">

                                        <div class="clearfix">

                                            <!-- Form -->
                                            <div class="comment-respond " id="respond">
                                                <h4 class="comment-reply-title " style="color: rgb(82, 82, 82);"
                                                    id="reply-title">Leave a Reply <small> <a style="display:none;"
                                                            href="#" id="cancel-comment-reply-link"
                                                            rel="nofollow">Cancel reply</a> </small> </h4>
                                                <form action="dashboard_vet.php" class="comment-form" id="commentform" method="post">
                                                    <input type="hidden" name="askavet_post_id" value="'.$_SESSION['askavet_id'].'">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p class="comment-form-comment">
                                                                <label  for="comment1">Comment</label>
                                                                <textarea rows="8" cols="100" name="content"
                                                                    placeholder="Comment" id="content"></textarea>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <button
                                                                type="submit" name="comment" class="btn btn-primary ml-3  comment-reply-btn ">SUBMIT
                                                                COMMENT</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Form -->
                                        </div>
                                    </div>
                                </div>';


                    ?>








                                <!-- blog END -->
                            </div>
                            <div class="col-md-12 col-lg-4 col-xl-4 sticky-top wow fadeInUp">
                                <aside class="side-bar sticky-top aside-bx" style="top: 100px;">
                                    <!-- <div class="widget">

                                        <form class="search-bx style-1" action="/blogger/editblogger.php">
                                            <button class="btn" href="editblogger.php"
                                                style="background-color: #862A30;color: #fff;width: 100%;text-transform: none;"><i
                                                    class="fa fa-newspaper-o" style="color: white;"></i> Edit
                                                Blog</button>
                                        </form>
                                    </div> -->
                                    <div class="widget">
									<div class="search-bx style-1 mt-4">
                                    <form class="search-bx text-center style-1" action="dashboard_vet.php" method="POST">
                                        <?php
                                            if($_SESSION['askavet_status'] == 'closed')
                                            {
                                                echo ' <span class="text-danger ">This thread is closed</span>';
                                            }
                                            else
                                            {
                                                echo '<input type="hidden" id="custId" name="askavet_id" value='.$_SESSION['askavet_id'].'>
                                                <button class="btn" name="closethread" type="submit" style="background-color: #862A30;color: #fff;width: 100%;text-transform: none;"><i style="color: white;"></i> Close Thread</button>';
                                            }
                                            
                                        ?>    
                                    </form>
									</div>
									
								</div>
                                    <div class=" widget  ">
                                        <h6 class="widget-title">Category</h6>
                                        <ul>
                                            <li class="list-category">
                                                <div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
                                                        Pet Care</a></div>
                                            </li>
                                            <hr>
                                            <li class="list-category">
                                                <div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
                                                        Pet Behaviour</a></div>
                                            </li>
                                            <hr>
                                            <li class="list-category">
                                                <div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
                                                        Animal Help</a></div>
                                            </li>
                                            <hr>
                                            <li class="list-category">
                                                <div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
                                                        Pet Health</a></div>
                                            </li>
                                            <hr>

                                        </ul>
                                    </div>





                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact area END -->
        </div>
        <!-- Content END-->
        <!-- Footer ==== -->

        <?php
	include "../partials/footer.php";
	?>
        <!-- Footer END ==== -->

    </div>

    <!-- External JavaScripts -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/vendors/wow/wow.js"></script>
    <script src="../assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="../assets/vendors/magnific-popup/magnific-popup.js"></script>
    <script src="../assets/vendors/counter/waypoints-min.js"></script>
    <script src="../assets/vendors/counter/counterup.min.js"></script>
    <script src="../assets/vendors/imagesloaded/imagesloaded.js"></script>
    <script src="../assets/vendors/masonry/masonry.js"></script>
    <script src="../assets/vendors/masonry/filter.js"></script>
    <script src="../assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="../assets/js/jquery.scroller.js"></script>
    <script src="../assets/vendors/progress-bar/jquery.appear.js"></script>
    <script src="../assets/vendors/stellar/stellar.js"></script>
    <script src="../assets/js/functions.js"></script>
    <script src="../assets/js/contact.js"></script>
</body>

</html>

<style>
    .addthis-smartlayers {
        display: none;
    }
</style>


<style>
    .page-banner-entry {
        display: table-cell;
        vertical-align: middle;
        text-align: center;
    }

    .page-banner h1 {
        font-size: 50px;
        margin-bottom: 10px;
        line-height: 65px;
        font-weight: 900;
    }

    .breadcrumb-row {
        background: rgba(255, 255, 255, 0.1);
        padding: 10px 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        display: inline-block;
        border-radius: 6px;
    }

    .breadcrumb-row ul li {
        padding: 0;
        margin-right: 3px;
        color: #fff;
        display: inline-block;
    }

    .breadcrumb-row ul li:last-child {
        color: #fff;
    }

    @media(max-width: 767px) {
        .page-banner-entry {
            vertical-align: middle;
        }

    }
</style>
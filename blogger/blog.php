<?php
    session_start();
    require_once "../include/error.php";
    // require_once "../include/db_connect.php";
     require_once "../include/function.php"
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
                    <h1 class="banner-head">Detail Blog</h1>
					<div class="breadcrumb-row text-black">
						<ul class="list-inline inline-text">
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
							<li>Blog</li>
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
								<div class="action-box blog-lg">
											<?php echo "
											<img src='uploads/createblog/".$_SESSION['blog_id'].".jpg' alt=''>
											<img src='uploads/createblog/".$_SESSION['blog_id'].".jpeg' alt=''>
											<img src='uploads/createblog/".$_SESSION['blog_id'].".png' alt=''>";
											?>
								</div>
								<div class="info-bx">
									<div class="card-courses-list-bx  card-courses-list-bx-margin ">
										
										<ul class="card-courses-view card-courses-view-margin">
							
											<li class="card-courses-review">
												<div class="media-box">
													<ul class="media-post blog-features">
														<li><a href="#"><i class="fa fa-calendar"></i><?php echo $_SESSION['blog_created_at']; ?></a>
														</li>
														<li><a href="#"><i
																	class="fa fa-comments-o"></i><span>10</span>
																Comments</a></li>
														<li><a href="#"><i
																	class="fa fa-caret-up"></i><span>54</span>
																Likes</a></li>
														<li><a href="#"><i
																	class="fa fa-caret-down"></i><span>10</span>
																Dislikes</a></li>
							
													</ul>
												</div>
											</li>
											<li class="card-courses-price">
											<li class="card-courses-categories card-courses-categories-align ">
												<h5>Category</h5>
												<h4 class="category-text-margin"><?php echo $_SESSION['blog_category_name']; ?></h4>
											</li>
											</li>
										</ul>
									</div>
									<div class="ttr-post-title">
										<h2 class="post-title font-weight-bold"><a href="#"><?php echo $_SESSION['blog_title']; ?></a></h2>
									</div>

									<div class="row author-margin">
										<div class="col-sm-8  mt-4 mb-2 text-muted">

											<span><?php echo $_SESSION['blog_author_name']; ?></span>
										</div>

									</div>
									<div class="ttr-post-text">
										<p><?php echo $_SESSION['blog_description']; ?></p>

<!-- video and img url here -->
								<ul class="wp-block-gallery columns-6 is-cropped mt-4 mb-4">
							    <li class="blocks-gallery-item"><iframe class="video-height" src="<?php echo linkembed($_SESSION['blog_video']); ?>" allowfullscreen></iframe></li>
					
										</ul>
		
										<p><?php echo $_SESSION['blog_content']; ?></p>


									</div>
									<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
									<div class="ttr-post-meta d-flex">
		
										<div class="post-tags">
		
											<span><h4 style="color: #FFB000;font-size: 16px;font-weight: 700;">TAGS</h4></span>
											<a href="" class="tags">Pets</a>
											<a href="" class="tags">Animals</a>
											<a href="" class="tags">Dogs</a>
											<a href="" class="tags">Petcare</a>
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
							<div class="clear" id="comment-list">
								<div class="comments-area" id="comments">
									<h2 class="comments-title mt-5">8 Comments</h2>
									<div class="clearfix">
										<!-- comment list END -->
										<ol class="comment-list">
											<li class="comment">
												<div class="comment-body">
													<div class="comment-author vcard"> <img class="avatar photo"
															src="../assets/images/testimonials/pic1.jpg" alt=""> <cite
															class="fn">George</cite> <span class="says">says:</span>
													</div>
													<div class="comment-meta"> <a href="#">May 02, 2020 at
															10:45 am</a> </div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
														vitae neqnsectetur adipiscing elit. Nam viae neqnsectetur
														adipiscing elit.
														Nam vitae neque vitae sapien malesuada aliquet. </p>
													<div class="col-md-12  ">
		
														<!-- <a href="#" class="btn  market-card-btn reply-btn">Reply</a> -->
													</div>
												</div>
												
												<!-- list END -->
											</li>
											<li class="comment">
												<div class="comment-body">
													<div class="comment-author vcard"> <img class="avatar photo"
															src="../assets/images/testimonials/pic1.jpg" alt=""> <cite
															class="fn">Sonar</cite> <span class="says">says:</span>
													</div>
													<div class="comment-meta"> <a href="#">May 02, 2020 at
															10:45 am</a> </div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
														vitae neque vitae sapien malesuada aliquet.
														In viverra dictum justo in vehicula. Fusce et massa eu ante
														ornare molestie. Sed vestibulum sem felis,
														ac elementum ligula blandit ac.</p>
													<div class="col-md-12  ">
		
													
													</div>
												</div>
											</li>
											<li class="comment">
												<div class="comment-body">
													<div class="comment-author vcard"> <img class="avatar photo"
															src="../assets/images/testimonials/pic2.jpg" alt=""> <cite
															class="fn">Michel</cite> <span class="says">says:</span>
													</div>
													<div class="comment-meta"> <a href="#">May 02, 2020 at
															10:45 am</a> </div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
														vitae neque vitae sapien malesuada aliquet.
														In viverra dictum justo in vehicula. Fusce et massa eu ante
														ornare molestie. Sed vestibulum sem felis,
														ac elementum ligula blandit ac.</p>
													<div class="col-md-12  ">
		
														<!-- <a href="#" class="btn  market-card-btn reply-btn">Reply</a> -->
													</div>
												</div>
											</li>
											
										</ol>
										<!-- comment list END -->
										<!-- Form -->
										<!-- <div class="comment-respond" id="respond">
											<h4 class="comment-reply-title" id="reply-title">Leave a Reply <small>
													<a style="display:none;" href="#" id="cancel-comment-reply-link"
														rel="nofollow">Cancel reply</a> </small> </h4>
											<form class="comment-form" id="commentform" method="post">
												<p class="comment-form-author">
													<label for="author">Name <span class="required">*</span></label>
													<input type="text" value="" name="Author" placeholder="Author"
														id="author">
												</p>
												<p class="comment-form-email">
													<label for="email">Email <span class="required">*</span></label>
													<input type="text" value="" placeholder="Email" name="email"
														id="email">
												</p>
												<p class="comment-form-url">
													<label for="url">Website</label>
													<input type="text" value="" placeholder="Website" name="url"
														id="url">
												</p>
												<p class="comment-form-comment">
													<label for="comment">Comment</label>
													<textarea rows="8" name="comment" placeholder="Comment"
														id="comment"></textarea>
												</p>
												<p class="form-submit">
													<input type="submit" value="Submit Comment" class="send-btn-blog"
														id="submit" name="submit">
												</p>
											</form>
										</div> -->
										<!-- Form -->
									</div>
								</div>
							</div>
							<!-- blog END -->
						</div>
						<div class="col-md-12 col-lg-4 col-xl-4 sticky-top wow fadeInUp" >
							<aside class="side-bar sticky-top aside-bx" style="top: 100px;">

								
								<div class=" widget  " >
									<h6 class="widget-title">Category</h6>
									<ul  >
                                    <li class="list-category"><div><a href="<?php echo ''.basepath().'blogger/dashboard_blogger.php?'.urlencode("blog_id=".$_SESSION["blog_id"]).''; ?>"><?php echo ''.basepath().'blogger/dashboard_blogger.php?blog_id='.urlencode($_SESSION["blog_id"]).''; ?></a></div></li> <hr>
										<li class="list-category"><div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i> Pet Care</a></div></li> <hr>
										<li class="list-category"><div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>  Pet Behaviour</a></div></li> <hr>
										<li class="list-category"><div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>  Animal Help</a></div></li> <hr>
										<li class="list-category"><div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>  Pet Health</a></div></li> <hr>
									
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
	.addthis-smartlayers
	{
		display: none;
	}
	
</style>
<style>
	.video-height
	{
		min-height:300px;
	}
	@media(max-width:425px)
	{
		.video-height
	{
		min-height:200px;
	}
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
    background: rgba(255,255,255,0.1);
    padding: 10px 20px;
    border: 1px solid rgba(255,255,255,0.3);
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
@media(max-width: 767px)
{
	.page-banner-entry {
	vertical-align: middle;
	}

}
</style>
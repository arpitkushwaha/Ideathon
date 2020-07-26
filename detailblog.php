<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="canonical" href="index.php" />
	<!-- OG -->

    <title>Clean-O-Rama</title>


    <!-- Favicon -->
    <link rel="icon" type="image/png" href="oldassets/images/Logo/logo.jpg">

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">

	<!-- Google Font -->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CRaleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CRoboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i%7CRubik:300,300i,400,400i,500,500i,700,700i,900,900i');
	</style>

	<!-- TYPOGRAPHY ============================================= -->


	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">



	<link rel="stylesheet" type="text/css" href="assets1/css/dashboard.css">

	<link href="oldassets/css/style.css" rel="stylesheet" type="text/css">
	

	

	<link href="oldassets/css/furrie.css" rel="stylesheet" type="text/css"> 
	
	<link href="oldassets/css/newfurries.css" rel="stylesheet" type="text/css">

</head>


<body id="bg">
	<div class="page-wraper">
		<?php include "partials/header.php"; ?>


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
											<img src='blogger/uploads/createblog/".$_SESSION['blog_id'].".jpg' alt=''>
											<img src='blogger/uploads/createblog/".$_SESSION['blog_id'].".jpeg' alt=''>
											<img src='blogger/uploads/createblog/".$_SESSION['blog_id'].".png' alt=''>";
											?>
								</div>
								<div class="info-bx">
									
									
						
									<div class="ttr-post-title">
										<h2 class="post-title mt-2 font-weight-bold"><a href="#"
											style="color: rgb(78, 78, 78);"><?php echo $_SESSION['blog_title']; ?></a></h2>
									
									</div>
				
									<div class="row author-margin">
										<div class="col-sm-12  mt-3  text-muted">

											<div style="float: left;">

												<span style="font-size: 20px;color: #862A30;">
													<?php echo $_SESSION['blog_author_name']; ?> </span>
												<br>

												<span>
													<li class="mt-1" style="font-size: 14px;"><a href="#"></i>
															<span class="text-muted ">
																<?php echo timestamp($_SESSION['blog_created_at']); ?>
															</span></a>
													</li>
												</span>
											</div>



											<div style="float: right;">
												<li class="card-courses-price ">
												<li class="card-courses-categories mt-2 ">
													<h5
														style="color: #FFB000;font-size: 14px;font-weight: 600;">
														Category</h5>
													<h4 class="category-text-margin" style="font-weight: 200;">
														<?php echo $_SESSION['blog_category_name']; ?></h4>
												</li>
												</li>
											</div>



										</div>

									</div>

									<div class="ttr-post-text">
										<p><?php echo $_SESSION['blog_description']; ?></p>

<!-- video and img url here -->
						<?php
							if(!empty($_SESSION['blog_video']))
								echo '
									<ul class="wp-block-gallery columns-6 is-cropped mt-3	 mb-4">
									<li class="blocks-gallery-item"><iframe class="video-height" src="'.linkembed($_SESSION['blog_video']).'" allowfullscreen></iframe></li>
						
											</ul>';
						?>
										<p><?php echo $_SESSION['blog_content']; ?></p>


									</div>
								


<div class="row ">
	<div class="col-lg-12 align-row-detailblog-feedback">

		<div class="card-courses-list-bx share-margin-icons-blog  " style="float: left;">
										
			<ul class="card-courses-view">

				<li class="card-courses-review" >
					<div class="media-box">
						<ul class="media-post blog-features blog-vote-icon" >
						
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
									
				<li class="card-courses-review mt-2 ml-2" >
					<div class="media-box">
						<ul class="media-post blog-features share-icon-blog " >
							<li class="text-muted" style="font-size: 16px;">Share</li>
						
							<li><a href="#"><i
										class="fa fa-facebook-square"></i>
									</a></li>
							<li><a href="#"><i
										class="fa fa-whatsapp"></i>
									</a></li>
							
							<li><a href="#"><i
										class="fa fa-linkedin-square"></i>
									</a></li>
							<li><a href="#"><i
										class="fa fa-twitter-square"></i>
									</a></li>

						</ul>
					</div>
				</li>
				
			</ul>
		</div>

		<div class="ttr-post-meta d-flex tag-align">
									
			<div class="post-tags">

				<span><h4 class="tag-head"  style="color: #FFB000;font-size: 16px;font-weight: 700;">TAGS</h4></span>
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
							
				
							<!-- blog END -->
						</div>


















						<div class="col-md-12 col-lg-4 col-xl-4 sticky-top wow fadeInUp" >
							<aside class="side-bar sticky-top aside-bx" style="top: 100px;">
								
								<div class=" widget  " >
									<h6 class="widget-title">Category</h6>
									<ul  >
										
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
	include "partials/footer.php";
	?>
	<!-- Footer END ==== -->

	</div>

	<!-- External JavaScripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/vendors/wow/wow.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendors/counter/waypoints-min.js"></script>
	<script src="assets/vendors/counter/counterup.min.js"></script>
	<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="assets/vendors/masonry/masonry.js"></script>
	<script src="assets/vendors/masonry/filter.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="assets/js/jquery.scroller.js"></script>
	<script src="assets/vendors/progress-bar/jquery.appear.js"></script>
	<script src="assets/vendors/stellar/stellar.js"></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/js/contact.js"></script>
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
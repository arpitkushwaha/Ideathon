<?php
	session_start();
	require_once "../php/include/error.php";
	require_once "../php/include/db_connect.php";
	require_once "function.php";
	//Check Session
	if(!isset($_SESSION))
	{
		redirect_to("blogger/index.php");
	}
?>	

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="canonical" href="../index.php" />
	<!-- OG -->

    <title>My Furries</title>


    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../oldassets/images/Logo/logo.jpg">

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
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
			<header class="hero" role="banner">
				<div class="hero__container">
					<h2 class="hero__title">Blog</h2>
				</div>
			</header>
			<svg class="topLeftRounded" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="50 20 50 80" preserveAspectRatio="none">
				<path d="M0,100 C15,100 35,50 50,50 L50,50 C65,50 85,100 100,100 Z"></path>
			</svg>

		<!-- Page Heading Box END ==== -->
		<!-- Main Slider -->
		<div class="content-block" id="content-area">
            <!-- Popular Courses -->
			<div class="section-area section-sp2" style="background-color: #eff3f6;">
                <div class="container">
					<div class="row">
						<div class="col-sm-4 head-list-blog">
							<h3>My Blogs</h3>
						</div>
					</div>
					<div class="row">
					
						<div class="col-md-12 col-lg-8 col-xl-8 m-md-b50">
	
						

<?php 
				$user_fk = $_SESSION['id'];
				
				$sql_e = "SELECT * FROM blog_post WHERE user_fk='$user_fk'" ;
				$result = $conn->query($sql_e);
				
					if($result->num_rows > 0){
				
					while($row = $result->fetch_assoc()) {
						
						echo 
					
						"<div class='recent-news list-margin '	>
								<div class='action-box'>
									<img src='uploads/createblog/".$row['id'].".jpg' alt=''>
									<img src='uploads/createblog/".$row['id'].".jpeg' alt=''>
									<img src='uploads/createblog/".$row['id'].".png' alt=''>
								</div>
								<div class='info-bx'>
									<ul class='media-post'>
			
										<li class='card-courses-review'>
											<div class='media-box'>
												<ul class='media-post blog-features'>
													<li><a href='#'><i class='fa fa-calendar'></i>May 14
															2020</a></li>
													<li><a href='#'><i class='fa fa-comments-o'></i><span>10</span>
															Comments</a></li>
													<li><a href='#'><i
																class='fa fa-thumbs-o-up '></i><span>36</span>
															Likes</a></li>
													<li><a href='#'><i
																class='fa fa-thumbs-o-down '></i><span>6</span>
															Dislikes</a></li>
												</ul>
											</div>
										</li>
									</ul>";

							echo "<h4 class='post-title'><a href='blog-details-sidebar.html'>".$row['title']."</a></h4>";		
							echo "<p>".$row['description']."</p>";
							echo "<div class='post-extra'>
							<a href='#' class='btn  market-card-btn reply-btn'>Read More</a>
							</div>
						</div>
				</div>";

				
          }	
        }					
?>
							
									


							<div class="recent-news list-margin">
									<div class="action-box">
										<img src="https://www.protexinvet.com/userfiles/image/cute-2500929_1920_(1).jpg" alt="">
									</div>
									<div class="info-bx">
										<div class="media-box">
											<ul class="media-post">
			
												<li class="card-courses-review">
													<div class="media-box">
														<ul class="media-post blog-features">
															<li><a href="#"><i class="fa fa-calendar"></i>May 14
																	2020</a></li>
															<li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
																	Comments</a></li>
															<li><a href="#"><i
																		class="fa fa-thumbs-o-up "></i><span>36</span>
																	Likes</a></li>
															<li><a href="#"><i
																		class="fa fa-thumbs-o-down "></i><span>6</span>
																	Dislikes</a></li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
										<h4 class="post-title"><a href="blog-details-sidebar.html">Ways To Tell You're Suffering From An Obession.</a></h4>
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
										<div class="post-extra">
										<a href="#" class="btn  market-card-btn reply-btn">Read More</a>
										</div>
									</div>
							</div>

							
							
							
							
							
							
								<div class="row justify-content-center">
						
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center" style="margin-left: -10px;">
							  <li class="page-item margin-pagination ">
								<a class="page-link" href="#" tabindex="-1">Prev</a>
							  </li>
							  <li class="page-item margin-pagination" ><a class="page-link" href="#">1</a></li>
							  <li class="page-item margin-pagination"><a class="page-link" href="#">2</a></li>
							  <li class="page-item margin-pagination"><a class="page-link" href="#">3</a></li>
							  <li class="page-item margin-pagination">
								<a class="page-link" href="#">Next</a>
							  </li>
							</ul>
							</nav>
							
			
					
				</div>
							
							
						</div>
						<div class="col-md-12 col-lg-4 col-xl-4 sticky-top wow fadeInUp" >
							<aside class="side-bar sticky-top aside-bx">
								<div class="widget">
									<div class="search-bx style-1">
										<a class="btn" href="newcreateblog.php" style="background-color: #862A30;color: #fff;width: 100%;text-transform: none;"><i class="fa fa-newspaper-o" style="color: white;"></i> Create Blog</a>
									</div>
								</div>
								<div class="widget">
									<div class="search-bx style-1">
										<a class="btn" href="logout.php" style="background-color: #862A30;color: #fff;width: 100%;text-transform: none;"><i style="color: white;"></i> Logout</a>
									</div>
								</div>
								<div class=" widget  " >
									<h6 class="widget-title">Category</h6>
									<ul  >
										<li class="list-category"><div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i> Pet Care</a></div></li> <hr>
										<li class="list-category"><div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>  Pet Behaviour</a></div></li><hr>
										<li class="list-category"><div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>  Animal Help</a></div></li><hr>
										<li class="list-category"><div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>  Pet Health</a></div></li>
									
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
	.social li a {
		color: #862A30 !important;
	}

	.post-tags .tags {
		color: #862A30!important;
	}
	.comment-meta a
	{
		color: #FFB000  !important;
	}
	p{
		color: rgb(114, 114, 114);
	}
	ol.comment-list li.comment .comment-author .avatar
	{
		background-color: rgb(255, 195, 66) !important;
	}
	.send-btn-blog
	{
		background-color: #FFB000 !important;
		
	}
	.send-btn-blog:hover
	{
		background-color: rgb(199, 136, 2) !important;
		color: white !important;
	}
	.at-icon-wrapper
	{
		background-color: #862A30 !important;
	}
</style>

<style>
	.addthis-smartlayers
	{
		display: none;
	}
</style>



<style>

	.hero {
    background: #FF6450;
    background-image: linear-gradient(135deg, #fe9124  0%,#FFB000  100%);
    background-position: top right;
    background-repeat: no-repeat;
    background-size: contain;
    padding: 0 70px 50px;
    background-attachment: fixed;
    min-height: 300px;
}
.hero__container {
    position: relative;
    max-width: 1120px !important;
    margin: 0 auto;
    padding: 60px 0 0;
}
.hero__title {
    margin: 60px 0 0;
    padding: 0;
    text-indent: -3px;
    font-weight: 700;
    font-size: 64px;
    color: #fff;
	cursor: default;
}
@media only screen and (max-width: 479px) and (min-width: 0px)
{
.hero__title {
    margin: 50px 0;
    text-align: center;
}
}
.topLeftRounded {
    position: absolute;
    fill: #eff3f6;
    margin-top: -100px;
    z-index: 9;
	transform: scaleX(-1);
}
</style>
<style>
	.reply-btn
	{
		border: 1px solid #862A30;
	}
	.side-bar
	{
		top: 100px;
	}
	.widget_tag_cloud a:hover
	{
		background-color: #fe9124;
	}

</style>
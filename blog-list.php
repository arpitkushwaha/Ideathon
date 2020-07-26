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
	<link rel="icon" type="image/png" href="ideathon/logo.png">

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





	<link href="oldassets/css/newfurries.css" rel="stylesheet" type="text/css">
	<link href="oldassets/css/furrie.css" rel="stylesheet" type="text/css">

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
						<h1 class="banner-head">Blog</h1>
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
							<div class="col-sm-4 head-list-blog">
								<h3>Latest Blogs</h3>
							</div>
						</div>
						<div class="row">

							<div class="col-md-12 col-lg-8 col-xl-8 m-md-b50">


								<?php
				$sql_e = "SELECT * FROM blog_post ORDER BY created_at DESC"  ;
				$result = $conn->query($sql_e);

					if($result->num_rows > 0){

					while($blog_post = $result->fetch_assoc()) {

							$blog_id = $blog_post['id'];
							$blog_title = $blog_post['title'];
							$blog_description = $blog_post['description'];
							$blog_content = $blog_post['content'];
							$blog_video = $blog_post['video'];
							$user_fk = $blog_post['user_fk'];
							$category_fk = $blog_post['category_fk'];
							$created_at = $blog_post['created_at'];
						
							$sql_e = "SELECT * FROM user_master WHERE id='$user_fk'";
							$result_user_master = $conn->query($sql_e);
							$sql_e = "SELECT * FROM blog_categories WHERE id='$category_fk'";
							$result_blog_categories = $conn->query($sql_e);
							if($result_user_master->num_rows > 0 && $result_blog_categories->num_rows > 0){

							while($user_master = $result_user_master->fetch_assoc()) {
								$author_name = $user_master['name'];
								}     
							while($blog_categories = $result_blog_categories->fetch_assoc()) {
								$category_name = $blog_categories['name'];
								}     
								
										
								echo 
					
								'<div id="pet_care">

									<div class="recent-news list-margin">
										<div class="action-box">
										<img src="blogger/uploads/createblog/'.$blog_id.'.jpg" alt="">
										<img src="blogger/uploads/createblog/'.$blog_id.'.jpeg" alt="">
										<img src="blogger/uploads/createblog/'.$blog_id.'.png" alt="">
										</div>
										<div class="info-bx">

											<h4 class="post-title mt-2"><a href="#"
													style="color: rgb(78, 78, 78);">'.$blog_title.'</a></h4>




											<div class="row author-margin">
												<div class="col-sm-12  mt-3  text-muted">

													<div style="float: left;">

														<span style="font-size: 20px;color: #862A30;">
															'.$author_name.'</span>
														<br>

														<span>
															<li class="mt-1" style="font-size: 14px;"><a href="#"></i>
																	<span class="text-muted ">

																	'.timestamp($created_at).'
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
															'.$category_name.'</h4>
														</li>
														</li>
													</div>



												</div>

											</div>

											<p class="mt-1 " style="font-size: 16px;color: rgb(94, 94, 94);">'.$blog_description.'</p>




											<div class="row">
												<div class="col-lg-12">

													<div class="card-courses-list-bx mt-3  " style="float: left;">

														<ul class="card-courses-view ">

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
													</div>


													<div class="post-extra row public-blog-read-btn  "
														>

														<form class="padding-btn" action="controller/dashboard.php" method="POST" >
														<input type="hidden" id="custId" name="blog_id" value="'.$blog_id.'">
														<input type="hidden" id="custId" name="blog_author_name" value="'.$author_name.'">
														<input type="hidden" id="custId" name="blog_title" value="'.$blog_title.'">
														<input type="hidden" id="custId" name="blog_description" value="'.$blog_description.'">
														<input type="hidden" id="custId" name="blog_content" value="'.$blog_content.'">
														<input type="hidden" id="custId" name="blog_created_at" value="'.$created_at.'">	
														<input type="hidden" id="custId" name="blog_category_name" value="'.$category_name.'">
														<input type="hidden" id="custId" name="blog_video" value="'.$blog_video.'">
														<button type="submit" name="readmorebloglist"
															class="btn  market-card-btn reply-btn align-bloglist-btn">Read
															More</button>
														</form>
																
														
													</div>

												</div>
											</div>







										</div>
									</div>


								</div>';
			}
			
				
          }	
        }					
?>


								





								<div class="row justify-content-center">

									<nav aria-label="Page navigation example">
										<ul class="pagination justify-content-center" style="margin-left: -10px;">
											<li class="page-item margin-pagination ">
												<a class="page-link" href="#" tabindex="-1">Prev</a>
											</li>
											<li class="page-item margin-pagination"><a class="page-link" href="#">1</a>
											</li>
											<li class="page-item margin-pagination"><a class="page-link" href="#">2</a>
											</li>
											<li class="page-item margin-pagination"><a class="page-link" href="#">3</a>
											</li>
											<li class="page-item margin-pagination">
												<a class="page-link" href="#">Next</a>
											</li>
										</ul>
									</nav>



								</div>


							</div>
							<div class="col-md-12 col-lg-4 col-xl-4 sticky-top wow fadeInUp">
								<aside class="side-bar sticky-top aside-bx">
									<div class=" widget  ">
										<h6 class="widget-title">Category</h6>
										<ul>
											<li class="list-category" onclick="petcare()">
												<div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
														Laundry</a></div>
											</li>
											<hr>
											<li class="list-category" onclick="petbehaviour()">
												<div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
														Ironing</a></div>
											</li>
											<hr>
											<li class="list-category" onclick="animalhelp()">
												<div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
														Dry Cleaning</a></div>
											</li>
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

<!-- <script>
	function petcare() {
		$('#pet_care').show();
		$('#pet_behaviour').hide();
		$('#animal_help').hide();
		$('#pet_health').hide();
	}

	function petbehaviour() {
		$('#pet_care').hide();
		$('#pet_behaviour').show();
		$('#animal_help').hide();
		$('#pet_health').hide();
	}

	function animalhelp() {
		$('#pet_care').hide();
		$('#pet_behaviour').hide();
		$('#animal_help').show();
		$('#pet_health').hide();
	}

	function pethealth() {
		$('#pet_care').hide();
		$('#pet_behaviour').hide();
		$('#animal_help').hide();
		$('#pet_health').show();
	}
</script> -->












<style>
	.social li a {
		color: #862A30 !important;
	}

	.post-tags .tags {
		color: #862A30 !important;
	}

	.comment-meta a {
		color: #FFB000 !important;
	}

	p {
		color: rgb(114, 114, 114);
	}

	ol.comment-list li.comment .comment-author .avatar {
		background-color: rgb(255, 195, 66) !important;
	}

	.send-btn-blog {
		background-color: #FFB000 !important;

	}

	.send-btn-blog:hover {
		background-color: rgb(199, 136, 2) !important;
		color: white !important;
	}

	.at-icon-wrapper {
		background-color: #862A30 !important;
	}
</style>

<style>
	.addthis-smartlayers {
		display: none;
	}
</style>



<style>
	.hero {
		background: #FF6450;
		background-image: linear-gradient(135deg, #fe9124 0%, #FFB000 100%);
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

	@media only screen and (max-width: 479px) and (min-width: 0px) {
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
	.reply-btn {
		border: 1px solid #862A30;
	}

	.side-bar {
		top: 100px;
	}

	.widget_tag_cloud a:hover {
		background-color: #fe9124;
	}
</style>
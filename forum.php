<?php
	session_start();
	// require_once "include/error.php";
	// require_once "include/db_connect.php";
	// require_once "include/function.php";
	
	// //Check Session
	// if(!empty($_SESSION['askavet_id']))
	// {
	// 	unset($_SESSION['askavet_id']); 
	// }
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="canonical" href="../index.php" />
	<!-- OG -->

	<title>Clean-O-Rama</title>


	<!-- Favicon -->
	<link rel="icon" type="image/png" href="/ideathon/logo.png">

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


	<link href="oldassets/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets1/css/dashboard.css">





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
						<h1 class="banner-head">Forum</h1>
						<div class="breadcrumb-row text-black">
							<ul class="list-inline inline-text">
								<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
								<li>Forum</li>
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
						<!-- <div class="row">
						<div class="col-sm-4 head-list-blog">
							<h3>My Blogs</h3>
						</div>
					</div> -->
						<div class="row justify-content-center">
							<div class="col-md-12 col-lg-8 col-xl-8 m-md-b50">
							


<?php

												
								$sql_e = "SELECT * FROM askavet_post ORDER BY created_at DESC"  ;
								$result = $conn->query($sql_e);

									if($result->num_rows > 0){

										while($askavet_post = $result->fetch_assoc()) {

											$askavet_id = $askavet_post['id'];
											$askavet_title = $askavet_post['title'];
											$askavet_description = $askavet_post['description'];
											$askavet_content = $askavet_post['content'];
											$askavet_video = $askavet_post['video'];
											$category_fk = $askavet_post['category_fk'];
											$user_fk = $askavet_post['user_fk'];
											$created_at = $askavet_post['created_at'];
										
											$sql_e = "SELECT * FROM user_master WHERE id='$user_fk'";
											$result_user_master = $conn->query($sql_e);
											$sql_e = "SELECT * FROM blog_categories WHERE id='$category_fk'";
											$result_blog_categories = $conn->query($sql_e);
											if($result_user_master->num_rows > 0 && $result_blog_categories->num_rows > 0){

											while($user_master = $result_user_master->fetch_assoc()) {
												$author_id = $user_master['id'];
												$author_name = $user_master['name'];
												$author_image = $user_master['image'];
												}     
											while($blog_categories = $result_blog_categories->fetch_assoc()) {
												$category_name = $blog_categories['name'];
												}     


											echo '

												<div class="blog-post blog-md clearfix">

													<div class="ttr-post-media forum-user-pic">
														<a href="#">
														 ';

											
												if(!empty($author_image))
												{
													echo '<img src="petparent/php/uploads/user/'.$author_image.'" class="img-fluid forum-img-round">';			
												}
												else
												{
													echo '<img src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" class="img-fluid forum-img-round">';
												}
												
														
														
											echo '</a>

													</div>
													<div class="ttr-post-info forum-list-box-width">
														<form action="controller/dashboard.php" method="POST">
															<input type="hidden" id="custId" name="askavet_id" value="'.$askavet_id.'">
															<input type="hidden" id="custId" name="askavet_author_name" value="'.$author_name.'">
															<input type="hidden" id="custId" name="askavet_title" value="'.$askavet_title.'">
															<input type="hidden" id="custId" name="askavet_description" value="'.$askavet_description.'">
															<input type="hidden" id="custId" name="askavet_content" value="'.$askavet_content.'">
															<input type="hidden" id="custId" name="askavet_created_at" value="'.$created_at.'">	
															<input type="hidden" id="custId" name="askavet_category_name" value="'.$category_name.'">
															<input type="hidden" id="custId" name="askavet_video" value="'.$askavet_video.'">
															<input type="hidden" id="custId" name="askavet_author_image" value="'.$author_image.'">
															<button name="readmore_askavet" type="submit" class="title-forum-btn text-left">
																<a>
																	<h5 class="post-title float-left forum-head">'.$askavet_title.'</h5>

																</a>
															</button>
														</form>

														<div class="card-courses-list-bx   card-courses-list-bx-margin ">
															<div class="row author-margin">
																<div class="col-sm-12 ml-2 mt-1  text-muted 	forum-list-box-font-size">

																	<span>'.$author_name.'</span> | <span>'.timestamp($created_at).'</span>
																</div>

															</div>
												
															<div class="row forum-list-box-info-margin">
																<div class="col-lg-12">
																	<li class="card-courses-review ml-2 mt-3" style="float: left;">
																		<div class="media-box">
																			<ul class="media-post blog-features">

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


																	
														
																	<li
																		class="card-courses-categories m-0 mt-2	 card-courses-categories-align " style="float: right;">
																		<h4 style="color: #FFB000;">Category</h4>
																		<h5 class="category-text-margin text-muted">'.$category_name.'</h5>
																	</li>
																
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
							<div class="col-md-12 col-lg-4 col-xl-4 sticky-top">
								<aside class="side-bar sticky-top aside-bx">

									<div class="widget">
										<h6 class="widget-title">Category</h6>
										<ul>
											<li class="list-category">
												<div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
														Laundry</a></div>
											</li>
											<hr>
											<li class="list-category">
												<div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
														Dry CLeaning</a></div>
											</li>
											<hr>
											<li class="list-category">
												<div><a href="#" class="category-blog"><i class="fa fa-angle-right"></i>
														Ironing</a></div>
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


<style>
	.title-forum-btn {
		background: none;
		border: none;
	}

	.forum-head:hover {
		background: none;
		border: none;
		color: #862a30 !important;
	}

	.forum-head:focus {
		background: none;
		border: none;
		color: #862a30 !important;
	}
</style>
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
	<link rel="icon" type="image/png" href="/oldassets/images/Logo/logo.jpg">

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
						<h1 class="banner-head">Community Forum</h1>
						<div class="breadcrumb-row text-black">
							<ul class="list-inline inline-text">
								<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
								<li>Community Forum</li>
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
						<div class="row">
							<div class="col-md-12 col-lg-8 col-xl-8 m-md-b50 wow fadeInUp" data-wow-delay="0.2s">
								<!-- blog start -->
								<div class="blog-lg blog-single">

									<div class="row ">
										<div class="col-lg-12">
											<div class="row">

					<!-- user pic -->
												<div class="col-sm-2 user-forum-col">
													<img class="img-fluid" src="assets/images/testimonials/pic1.jpg"
														alt="" style="border-radius: 50%;">
												</div>


					<!-- user pic  ends-->
												<div class="col-sm-8 pl-2 user-forum-col-detail ">



						<!-- user content -->
													<h4 class="mt-2" style="color: black;"><?php echo $_SESSION['forum_author_name']; ?></h4>
													<p style="margin-top: -15px;">
														<div class="media-box">
															<ul class="media-post">

																<li class="card-courses-review">
																	<div class="media-box">
																		<ul class="media-post blog-features">
																			<li><a href="#"><i
																						class="fa fa-calendar"></i><?php echo $_SESSION['forum_created_at']; ?></a></li>
																			<li><a href="#"><i
																						class="fa fa-comments-o"></i><span>10</span>
																					Comments</a></li>
																			<li><a href="#"><i
																						class="fa fa-caret-up"></i><span>36</span>
																					Likes</a></li>
																			<li><a href="#"><i
																						class="fa fa-caret-down "></i><span>6</span>
																					Dislikes</a></li>
																		</ul>
																	</div>
																</li>
															</ul>
														</div>
													</p>
												</div>
											</div>
										</div>
									</div>

		  <!-- user content  ends-->
		  

		  <!-- forum content -->
									<div class="info-bx">

										<div class="ttr-post-title">
											<h3 class="post-title"><a href="#"><?php echo $_SESSION['forum_title']; ?></a></h3>
										</div>
										<div class="ttr-post-text">
											<p><?php echo $_SESSION['forum_content']; ?></p>



											<div class="action-box blog-lg mt-5">
												<?php echo "
												<img src='petparent/php/uploads/forum/".$_SESSION['forum_id'].".jpg' alt=''>
												<img src='petparent/php/uploads/forum/".$_SESSION['forum_id'].".jpeg' alt=''>
												<img src='petparent/php/uploads/forum/".$_SESSION['forum_id'].".png' alt=''>";
												?>
											</div>




											<!-- video and img url here -->
											<ul class="wp-block-gallery columns-6 is-cropped mt-4 mb-4">
												<li class="blocks-gallery-item">
													<iframe height="300" src="<?php echo linkembed($_SESSION['forum_video']); ?>"
														frameborder="0"
														allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
														allowfullscreen></iframe>



												</li>

											</ul>
											
										</div>
										<div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>
										<div class="ttr-post-meta d-flex">

											<div class="post-tags">

												<span>
													<h4 style="color: #FFB000;font-size: 16px;font-weight: 700;">TAGS
													</h4>
												</span>
												<a href="" class="tags">Pets</a>
												<a href="" class="tags">Animals</a>
												<a href="" class="tags">Dogs</a>
												<a href="" class="tags">Petcare</a>
											</div>

										</div>
									</div>
								</div>

		  <!-- forum content ends -->		
		  
		  








		  
								<!-- <div class="author-box blog-user m-b60">
								<div class="author-profile-info">
									<div class="author-profile-pic">
										<img src="assets/images/testimonials/pic2.jpg" alt="">
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
																src="assets/images/testimonials/pic1.jpg" alt=""> <cite
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
																src="assets/images/testimonials/pic1.jpg" alt=""> <cite
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
																src="assets/images/testimonials/pic2.jpg" alt=""> <cite
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




											         <!-- COMMENTS START HERE -->
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
                                                    <input type="hidden" name="askavet_post_id" value="<?php echo $_SESSION['askavet_id'] ?>">

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
                                                                type="submit" name="comment" class="btn btn-primary ml-3  comment-reply-btn " style="background: white;">SUBMIT
                                                                COMMENT</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Form -->
                                        </div>
                                    </div>
                                </div>

								<!-- blog END -->
							</div>
							<div class="col-md-12 col-lg-4 col-xl-4 sticky-top">
								<aside class="side-bar sticky-top aside-bx">

									<div class="widget">
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
	@media(max-width: 500px) {
		.video-height {
			height: 250px;
		}
	}
</style>



<style>
	@media(max-width: 575px) {
		.user-forum-col {
			width: 30%;
		}

		.user-forum-col-detail {
			width: 65%;
			margin-left: -2%;
		}
	}

	@media(max-width: 450px) {
		.user-forum-col {
			width: 35%;
		}

		.user-forum-col-detail {
			width: 65%;
			margin-left: -2%;
		}
	}

	@media(max-width: 350px) {
		.user-forum-col {
			width: 100%;
			text-align: center;
		}

		.user-forum-col-detail {
			width: 100%;
			margin-left: -2%;
			text-align: center;
		}
	}
</style>
<?php
	session_start();
	require_once "../include/error.php";
	require_once "../include/function.php";
	
	//Check Session
	if(empty($_SESSION['blogger']) || empty($_SESSION['blog_id']))
	{
		redirect_to("blogger/index.php");
	}
	?>	

	<!-- FAVICONS ICON ============================================= -->

	<link rel="icon" type="image/png" href="../oldassets/images/Logo/logo.jpg	">

	<!-- PAGE TITLE HERE ============================================= -->
	<title>MyFurries</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->



	<!-- TYPOGRAPHY ============================================= -->
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
	


	<!-- SHORTCODES ============================================= -->

	<!-- STYLESHEETS ============================================= -->

	<link rel="stylesheet" type="text/css" href="../assets1/css/dashboard.css">
	<link href="../oldassets/css/tagsinput.css" rel="stylesheet" type="text/css">



	


	<link href="../oldassets/css/furrie.css" rel="stylesheet" type="text/css"> 
	<link href="../oldassets/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
	<link href="../oldassets/css/newfurries.css" rel="stylesheet" type="text/css">

    
<body id="bg">
	<div class="page-wraper">

		<!-- Header Top END ==== -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- Page Heading Box ==== -->
			<div class="page-banner page-banner-sm">
				<div class="container">
					<div class="page-banner-entry">
						<h1 class="banner-head">Edit Blog</h1>
						<div class="breadcrumb-row text-black">
							<ul class="list-inline inline-text">
								<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
								<li>Edit Blog</li>
							</ul>
						</div>
						
					</div>
					
				</div>
			</div>


<main class="ttr-wrapper" id="create_blog" style="background-color: #eff3f6;" >
		<div class="container-fluid" style="background: transparent;margin-top: -50px;">
		
			<div class="row  justify-content-center">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 mb-5 ">
					<div class="widget-box ">
						<div class="row justify-content-center">
							<h3 class="form-head-mypost mt-5" style="color: rgb(100, 100, 100) ;font-weight: 600;">Enter Details</h3>
						</div>
						<div class="email-wrapper">

							<div class="mail-list-container">
								<form method="POST" action="dashboard_blogger.php" enctype="multipart/form-data" class="mail-compose">
									<div class="form-group col-12">
										<label  class="title-head">Title</label>
										<input  class="form-control" type="text" placeholder="Heading" name="title" required value="<?php echo $_SESSION['blog_title']; ?>">
									</div>

									<div class="form-group col-lg-12">
										<label for="exampleFormControlText2" class="title-head">Description</label>
										<input id="exampleFormControlText1" class="form-control" name="description" type="text" required
											value="<?php echo $_SESSION['blog_description']; ?>">
									</div>
									<div class="form-group col-lg-12">
										<label for="exampleFormControlTextarea1" class="title-head">Content</label>
										<textarea class="form-control rounded-0" name="content" id="exampleFormControlTextarea1" required
											rows="5"><?php echo $_SESSION['blog_content']; ?></textarea>
									</div>

									<div class="form-group">
										<label for="tagPlaces" class="col-sm-2 control-label title-head">Choose 
											Tag</label>
										<div class="col-sm-12">
										    <select class="form-control select2 tag-input-form" multiple="multiple" style="width: 100%;padding: 10px;"></select>
										</div>
                                    </div>
                                    
                                    <div class="form-group col-12">
										<label  class="title-head">Video URL</label>
										<input  class="form-control" value="<?php echo $_SESSION['blog_video']; ?>" type="url" placeholder="Enter video  URL " name="video">
									</div>
									<div class="form-group row   ">

										<div class="col-sm-12 mt-3 pr-5 ml-3 category-align">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<label class="input-group-text category"
														for="inputGroupSelect01">Category</label>
												</div>
												<select name="category" class="custom-select" id="inputGroupSelect01"  required>
												
													<option value="Pet Care">Pet Care</option>
													<option value="Pet Behaviour">Pet Behaviour</option>
													<option value="Pet Health">Pet Health</option>
													<option value="Animal Help">Animal Help</option>

												</select>
											</div>
										</div>
									</div>	
	
								
									
								<!-- </form> -->
								<div class="form-group col-sm-12 pr-3 text-center">
										<!-- <form method='post' action='upload.php' enctype='multipart/form-data' > -->
											<!-- <img src="" width=250 height=250 alt='file not uploaded' >
											<input class="choosefile" type="file" name="fileToUpload" id="fileToUpload" accept="image/*" width="100%" >
											<button name="submitphoto" type="submit" class="btn btn-lg r-5 blog-send-btn">upload photo</button> -->
											<div class="file-upload">
												<div class="file-select">
												  <div class="file-select-button" id="fileName">Choose File</div>
												  <div class="file-select-name" id="noFile">No file chosen...</div> 
												  <!-- <input type="file" name="chooseFile" id="chooseFile"> -->
												  <input class="choosefile" type="file" name="fileToUpload" id="fileToUpload" accept="image/*" width="100%" >
												</div>



												<div class="row mt-4">	<small class="text-muted ml-3 ">Required Image Format :</small></div>
												<div class="row mt-3">
													<div class="col-sm-4 ">
													  <small style="float: left;" class="text-muted"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 
														Recommended (JPG,JPEG,PNG)</small>
													</div>
													<div class="col-sm-4 mt-2">
													  <small  style="float: left;" class="text-muted"><i class="fa fa-check-circle-o" aria-hidden="true"></i> 
														Minimum Resolution (1280×720)</small>
													</div>
													<div class="col-sm-4 mt-2">
													  <small  style="float: left;"class="text-muted"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Size must be (less than 2mb)</small>
													</div>
												
												  </div>
												<button name="editblog" type="submit" class="btn btn-lg mt-5 r-5 blog-send-btn">Submit</button>	
											  </div>
									</form>
									</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
    </main>
    
<style>
    .category {
    background-color: #862A30;
    border: none;
    color: white;
    border-radius: 5px;
    width: 100px;
    }
</style>
    <?php include "../partials/dashboardfooter.php"; ?>
    <?php include "../partials/footer.php"; ?>
    


    

	<style>
		.file-upload{display:block;text-align:center;font-size: 16px;}
	.file-upload .file-select{display:block;border: 1px solid rgb(190, 190, 190);color: #862a30;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;font-weight: 500;}
	.file-upload .file-select .file-select-button{border-right:1px solid rgb(192, 192, 192);background:#862a30;padding:0 10px;display:inline-block;height:40px;line-height:40px;font-weight: 500;color: white;}
	.file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;color: gray;}
	.file-upload .file-select:hover{border-right: 1px solid #FFB000; border-color:#FFB000;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
	.file-upload .file-select:hover .file-select-button{border-right: 1px solid #FFB000;background:#FFB000;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
	.file-upload.active .file-select{border-color:#862A30 ;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
	.file-upload.active .file-select .file-select-button{background:#862A30 ;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
	.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
	.file-upload .file-select.file-select-disabled{opacity:0.65;}
	.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #FFB000;color: #FFB000;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
	.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#FFB000;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
	.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
	</style>
	
	<script>
		$('#fileToUpload').bind('change', function () {
	var filename = $("#fileToUpload").val();
	if (/^\s*$/.test(filename)) {
	$(".file-upload").removeClass('active');
	$("#noFile").text("No file chosen..."); 
	}
	else {
	$(".file-upload").addClass('active');
	$("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
	}
	});
	
	</script>

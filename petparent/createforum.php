<?php include "../partials/dashboardheader.php"; ?>



<main class="ttr-wrapper" id="ask_forum">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Compose</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>Compose</li>
			</ul>
		</div>
		<div class="row  justify-content-center">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-11 mb-5 ">
				<div class="widget-box shadow-lg">
					<div class="row justify-content-center">
						<h3 class="form-head-mypost mt-3">Ask on Forum</h3>
					</div>
					
					<div class="email-wrapper">

					<div class="mail-list-container">
								<form method="POST" action="createforum.php" enctype="multipart/form-data" class="mail-compose">
									<div class="form-group col-12">
										<label  class="title-head">Title</label>
										<input  class="form-control" type="text" placeholder="Heading" name="title" required>
									</div>

									<div class="form-group col-lg-12">
										<label for="exampleFormControlTextarea1" class="title-head">Content</label>
										<textarea class="form-control rounded-0" name="content" id="exampleFormControlTextarea1"
											rows="5" placeholder="Hello world!" required></textarea>
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
										<input  class="form-control" type="url" placeholder="Enter video  URL " name="video">
									</div>
									<div class="form-group row   ">

										<div class="col-sm-12 mt-3 pr-5 ml-3">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<label class="input-group-text category"
														for="inputGroupSelect01">Category</label>
												</div>
												<select name="category" class="custom-select" id="inputGroupSelect01"  required>
												
													<option value="Pet Care">Laundry</option>
													<option value="Pet Behaviour">Ironing</option>
													<option value="Pet Health">Dry Cleaning</option>

												</select>
											</div>
										</div>
									</div>	
	
									<div class="form-group col-12 text-center">
	
										
										<!-- <button name="createblog" type="submit" class="btn btn-lg r-5 blog-send-btn" >Send</button> -->
									</div>
									
								<!-- </form> -->
								<div class="form-group col-sm-12 pr-3 ">
										<!-- <form method='post' action='upload.php' enctype='multipart/form-data' > -->
											<!-- <img src="" width=250 height=250 alt='file not uploaded' >
											<input class="choosefile" type="file" name="fileToUpload" id="fileToUpload" accept="image/*" width="100%" >
											<button name="submitphoto" type="submit" class="btn btn-lg r-5 blog-send-btn">upload photo</button> -->
											
											<div class="text-center">

											<div class="file-upload" style="margin-top: -20px;">
												<div class="file-select">
												  <div class="file-select-button" id="fileName">Choose File</div>
												  <div class="file-select-name" id="noFile">No file chosen...</div> 
												  <!-- <input type="file" name="chooseFile" id="chooseFile"> -->
												  <input class="choosefile" type="file" name="fileToUpload" id="fileToUpload" accept="image/*" width="100%" >
												</div>
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
												<button name="createforum" type="submit" class="btn btn-lg mt-5 r-5 blog-send-btn">Submit</button>	
											  </div>
									</form>
									</div>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>
	</div>
</main>


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
	


<?php include "../partials/dashboardfooter.php"; ?>

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
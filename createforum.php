<?php include "partials/dashboardheader.php"; ?>



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
						<h3 class="form-head-mypost">Ask on Forum</h3>
					</div>
					
					<div class="email-wrapper">

						<div class="mail-list-container">
							<form class="mail-compose">
								<div class="form-group col-12">
									<label for="exampleFormControlTextarea1" class="title-head">Title</label>
									<input class="form-control" type="text" placeholder="Ask your question">
								</div>

								
								<div class="form-group col-lg-12">
									<label for="exampleFormControlTextarea1" class="title-head">Description</label>
									<textarea class="form-control rounded-0" id="exampleFormControlTextarea1"
										rows="50" placeholder="Please provide details of forum"></textarea>
								</div>

								<div class="form-group">
									<label for="tagPlaces" class="col-sm-2 control-label title-head">Choose 
										Tag</label>
									<div class="col-sm-12">
										<select class="form-control select2 tag-input-form" multiple="multiple" style="width: 100%;"></select>
									</div>
								</div>
								<div class="form-group row   ">

									<div class="col-sm-11 mr-3 ml-3">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text category"
													for="inputGroupSelect01">Category</label>
											</div>
											<select class="custom-select" id="inputGroupSelect01">
											
												<option value="Pet Care">Pet Care</option>
												<option value="Pet Behaviour">Pet Behaviour</option>
												<option value="Pet Health">Pet Health</option>
												<option value="Animal Help">Animal Help</option>

											</select>
										</div>
									</div>
								</div>
								<div class="form-group col-12 text-center">
									<form method='post' action='php/upload.php' enctype='multipart/form-data' >
										<!-- <img src="" width=250 height=250 alt='file not uploaded' >
										<input class="choosefile" type="file" name="fileToUpload" id="fileToUpload" accept="image/*" width="100%" >
										<button name="submitphoto" type="submit" class="btn btn-lg r-5 blog-send-btn">upload photo</button> -->
										<div class="file-upload">
											<div class="file-select">
											  <div class="file-select-button" id="fileName">Choose File</div>
											  <div class="file-select-name" id="noFile">No file chosen...</div> 
											  <input type="file" name="chooseFile" id="chooseFile">
											</div>
											<button name="submitphoto" type="submit" class="btn btn-lg mt-3 r-5 blog-send-btn">upload photo</button>	
										  </div>
									</form>
									</div>



								<div class="form-group col-12 text-center">

									
									<button name="createblog" type="submit" class="btn btn-lg r-5 blog-send-btn" style="margin-top: -50px;">Send</button>
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
.file-upload .file-select{display:block;border: 2px solid #FFB000;color: #862a30;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;font-weight: 500;}
.file-upload .file-select .file-select-button{background:#FFB000;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
.file-upload .file-select:hover{border-color:#FFB000;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select:hover .file-select-button{background:#FFB000;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select{border-color:#862A30 ;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select .file-select-button{background:#862A30 ;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
.file-upload .file-select.file-select-disabled{opacity:0.65;}
.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #FFB000;color: #FFB000;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#FFB000;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
</style>

<script>
	$('#chooseFile').bind('change', function () {
var filename = $("#chooseFile").val();
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
<?php include "partials/dashboardfooter.php"; ?>
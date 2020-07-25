<?php include "../partials/dashboardheader.php"; ?>

<main class="ttr-wrapper" id="main-profile">
	<div class="container-fluid">
		<div class="db-breadcrumb">
			<h4 class="breadcrumb-title">Account</h4>
			<ul class="db-breadcrumb-list">
				<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
				<li>My account</li>
			</ul>
		</div>
		<div class="row justify-content-center">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-11 m-b30">
				<div class="widget-box shadow-sm">

					<div class="widget-inner widget-inner-padding ">

						<div class="card-courses-list admin-courses ">
							<div class="card-courses-media user-account-pic " style="height: 160px !important;">


							<form method="POST" action="myaccount.php" enctype="multipart/form-data">
								<img id="profileImage"
								<?php 
										if(!empty($_SESSION['image']))
										{
											echo 'src="php/uploads/user/'.$_SESSION['image'].'"';
											
										}
											
										else
											echo 'src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg"';
								?>
								  class="img-fluid avatar-image-size">
									
									<input id="imageUpload" type="file" 
										   name="userimage" placeholder="Photo" required="" capture>
								
										   <button name="userimageupload" type="submit" class="mt-3 avatar-upload-btn"> <i class="fa fa-upload mr-1"></i> Upload</button>
							</form>
									
		

								<!-- 

									<img src="https://images.unsplash.com/photo-1586297098710-0382a496c814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
										alt="" /> -->










							</div>


							<div class="card-courses-full-dec mt-3">
								<div class="card-courses-title user-name ">
									<h4 class="market-card-title user-name-alignment"><?php echo $_SESSION['name']; ?></h4>
								</div>

								<div class="card-courses-list-bx mt-3">
									<ul class="card-courses-view">
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="https://img.icons8.com/bubbles/50/000000/map-pin.png"
													alt="" class="detail-img user-icondetail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text"><?php echo $_SESSION['city']; ?></h5>

											</div>
										</li>
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="https://img.icons8.com/bubbles/50/000000/iphone-x.png"
													alt="" class="detail-img user-icondetail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text"><?php echo $_SESSION['phone']; ?></h5>

											</div>
										</li>
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="https://img.icons8.com/bubbles/50/000000/messaging-.png"
													alt="" class="detail-img user-icondetail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text"><?php echo $_SESSION['email']; ?></h5>

											</div>
										</li>
									</ul>
									<ul class="card-courses-view mt-2">
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="https://img.icons8.com/bubbles/50/000000/filled-star.png"
													alt="" class="detail-img user-icondetail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">15</h5>

											</div>
										</li>
									</ul>


								</div>



							</div>




						</div>

					</div>

				</div>

			</div>

			<!-- Your Profile Views Chart END-->
			<ul class="nav d-flex justify-content-around mb-4">
				<li class="nav-item mid-nav">
					<a class="nav-link mid-nav-item " href="#" onclick="personal_info()"><i class="fa fa-user"></i>
						Personal Detail </a>
				</li>
				<li class="nav-item mid-nav">
					<a class="nav-link mid-nav-item" href="#" onclick="account_info()"><i class="fa fa-shield"></i>
						Account Setting </a>
				</li>
				<li class="nav-item mid-nav">
					<a class="nav-link mid-nav-item" href="#" onclick="youraffiliation()"><i
							class="fa fa-shopping-cart"></i> Your Posts</a>
				</li>
				<li class="nav-item mid-nav">
					<a class="nav-link mid-nav-item" href="#" onclick="scratchcard()">
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
					width="20" height="20"
					viewBox="0 0 172 172"
					style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M79.8725,3.44c-8.50594,-0.05375 -15.265,5.54969 -17.2,15.3725c-1.86781,9.59438 3.41313,29.24 9.1375,45.6875c-13.02094,-11.9325 -28.90406,-25.39687 -38.7,-27.52c-11.15312,-2.43219 -19.72625,3.05031 -21.93,13.0075c-0.5375,2.43219 0.16125,9.94375 -1.3975,16.8775c-1.46469,6.67844 -5.24062,12.84625 -5.805,15.3725c-2.19031,9.9975 3.34594,18.51688 14.5125,20.9625c11.20688,2.44563 35.42125,-3.82969 53.32,-9.89c-13.55844,12.53719 -30.94656,29.75063 -33.97,40.5275c-2.96969,10.62906 1.96188,19.28281 11.61,21.93c2.35156,0.67188 9.71531,0.38969 16.4475,2.2575c6.50375,1.80063 12.40281,5.65719 14.835,6.3425c9.675,2.64719 18.3825,-2.24406 21.3925,-12.9c2.48594,-8.86875 -1.29,-26.60625 -5.4825,-42.4625c21.23125,32.00813 51.62688,57.835 57.9425,59.4475c0.72563,0.18813 1.505,0.3225 2.2575,0.3225c3.77594,0 7.56531,-2.49937 9.675,-6.3425c1.70656,-3.1175 1.78719,-6.39625 0.3225,-8.7075c-0.38969,-0.61812 -0.94062,-1.02125 -1.6125,-1.29c-25.06094,-9.89 -48.17344,-33.28469 -60.415,-47.1925c12.12063,8.37156 25.37,15.97719 33.4325,16.8775c10.83063,1.22281 18.55719,-4.8375 19.6725,-14.5125c0.26875,-2.365 -1.22281,-9.36594 -0.43,-16.125c0.73906,-6.49031 3.68188,-12.71187 3.9775,-15.1575c1.10188,-9.70187 -5.06594,-17.25375 -15.91,-18.49c-8.72094,-0.98094 -23.27375,4.17906 -37.84,10.32c11.12625,-12.76562 20.78781,-27.13031 22.575,-36.335c2.21719,-11.20687 -3.60125,-19.65906 -13.76,-21.6075c-2.4725,-0.49719 -9.9975,0.38969 -17.0925,-0.9675c-6.83969,-1.31687 -13.2225,-4.87781 -15.8025,-5.375c-1.27656,-0.24187 -2.55312,-0.41656 -3.7625,-0.43z"></path></g></g></svg>
					Scratch Cards</a>
				</li>
			</ul>
		</div>



	</div>


	<div class="container-fluid">

		<!-- Personal Info editable form here -->
		<div class="row justify-content-center" id="personalinfo">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-11 m-b30">
				<div class="widget-box shadow-sm">

					<div class="offset-1 widget-inner">
						<form class="edit-profile m-b30">
							<div class="">
								<div class="form-group row ">
									<div class="col-sm-12  ml-auto">
										<h3 class="profile-head">Your Details</h3>
									</div>
								</div>
								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Full Name</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php echo $_SESSION['name']; ?>"
											readonly>
									</div>
								</div>
								<!-- <div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">User Name</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="arpitk122" readonly>
									</div>
								</div> -->
								<div class=" offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">E-Mail</label>
									<div class="col-sm-7">
										<input class="form-control" type="email"
											value="<?php echo $_SESSION['email']; ?>" readonly>
									</div>
								</div>


								<div class=" offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Phone No.</label>
									<div class="col-sm-7">
										<input class="form-control" type="text"
											value="<?php echo $_SESSION['phone']; ?>" placeholder="+120 012345 6789"
											readonly>
									</div>
								</div>

								<div class=" offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label" for="sel1">Own a Pet</label>
									<div class="col-sm-7">
										<select value="<?php echo $_SESSION['ownapet']; ?>" class="form-control"
											id="sel1" disabled>
											<?php 
												if($_SESSION['ownapet']==="Yes")
												echo "<option selected>Yes</option><option>No</option>"; 
												else
												echo "<option selected>No</option><option>Yes</option>";
												?>
										</select>
									</div>
								</div>

								<div class=" offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label" for="sel1">Adopt a Pet</label>
									<div class="col-sm-7">
										<select class="form-control" id="sel1" disabled>
											<?php 
												if($_SESSION['adoptapet']==="Yes")
												echo "<option selected>Yes</option><option>No</option>"; 
												else
												echo "<option selected>No</option><option>Yes</option>";
												?>
										</select>
									</div>
								</div>




								<div class="seperator"></div>
								<div class=" form-group row ">
									<div class="col-sm-12  ml-auto">
										<h3 class="profile-head">Address Details</h3>
									</div>
								</div>
								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">State</label>
									<div class="col-sm-7">
										<input class="form-control" type="text"
											value="<?php echo $_SESSION['state']; ?>" readonly>
									</div>
								</div>
								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">City</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="<?php echo $_SESSION['city']; ?>"
											readonly>
									</div>
								</div>

								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Address</label>
									<div class="col-sm-7">
										<input class="form-control" type="text"
											value="<?php echo $_SESSION['address']; ?>" readonly>
									</div>
								</div>




							</div>

							<div class=" col-12 text-center">

								<a class="btn btn-lg r-5 blog-send-btn" onclick="edit_personalinfo_btn()">Edit</a>
							</div>


						</form>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>



		<!-- to edit personal detail form -->
		<div class="row justify-content-center" id="personalinfo-edit" style="display: none;">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-11 m-b30">
				<div class="widget-box shadow-sm">

					<div class="offset-1 widget-inner">
						<form method="POST" action="myaccount.php" class="edit-profile m-b30">
							<div class="">
								<div class="form-group row ">
									<div class="col-sm-12  ml-auto">
										<h3 class="profile-head">Your Details</h3>
									</div>
								</div>
								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Full Name</label>
									<div class="col-sm-7">
										<input class="form-control" name="name" type="text"
											value="<?php echo $_SESSION['name']; ?>" required>
									</div>
								</div>
								<!-- <div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">User Name</label>
									<div class="col-sm-7">
										<input class="form-control" type="text" value="arpitk122" readonly>
									</div>
								</div> -->
								<div class=" offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">E-Mail</label>
									<div class="col-sm-7">
										<input class="form-control" name="email" type="email"
											value="<?php echo $_SESSION['email']; ?>"
											pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
									</div>
								</div>


								<div class=" offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Phone No.</label>
									<div class="col-sm-7">
										<input class="form-control" name="phone" type="text"
											value="<?php echo $_SESSION['phone']; ?>" placeholder="+120 012345 6789"
											required>
									</div>
								</div>

								<div class=" offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label" for="sel1">Own a Pet</label>
									<div class="col-sm-7">
										<select class="form-control" name="ownapet" id="sel1">
											<?php 
												if($_SESSION['ownapet']==="Yes")
												echo "<option selected>Yes</option><option>No</option>"; 
												else
												echo "<option selected>No</option><option>Yes</option>";
												?>

										</select>
									</div>
								</div>

								<div class=" offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label" for="sel1">Adopt a Pet</label>
									<div class="col-sm-7">
										<select class="form-control" name="adoptapet" id="sel1">
											<?php 
												if($_SESSION['adoptapet']==="Yes")
												echo "<option selected>Yes</option><option>No</option>"; 
												else
												echo "<option selected>No</option><option>Yes</option>";
												?>
										</select>
									</div>
								</div>




								<div class="seperator"></div>
								<div class=" form-group row ">
									<div class="col-sm-12  ml-auto">
										<h3 class="profile-head">Address Details</h3>
									</div>
								</div>

								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">State</label>
									<div class="col-sm-7">
										<select onchange="print_city('state', this.selectedIndex);" id="sts"
											name="state" class="form-control" required></select>
									</div>


								</div>
								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">City</label>
									<div class="col-sm-7">

										<select id="state" name="city" class="form-control" required></select>
									</div>

								</div>
								<script language="javascript">
									print_state("sts");
								</script>

								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Address</label>
									<div class="col-sm-7">
										<input class="form-control" name="address" type="text"
											value="<?php echo $_SESSION['address']; ?>">
									</div>
								</div>




							</div>

							<div class=" col-12 text-center">

								<button type="submit" name="personaldetails"
									class="btn btn-lg r-5 blog-send-btn">Save</button>
							</div>


						</form>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>


		<!-- Personal form ends here -->




		<!-- Account form start from here -->


		<div class="row justify-content-center" id="accountinfo" style="display: none;">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-11 m-b30">
				<div class="widget-box shadow-sm">

					<div class="offset-1 widget-inner">
						<form class="edit-profile m-b30">
							<div class="">
								<div class="form-group row ">
									<div class="col-sm-12  ml-auto">
										<h3 class="profile-head">Account Details</h3>
									</div>
								</div>

								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">User Name</label>
									<div class="col-sm-7">
										<input name="username" class="form-control" type="text"
											value="<?php echo $_SESSION['username']; ?>" readonly>
									</div>
								</div>


								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-7">
										<div class="input-group ">
											<input type="password" class="form-control pwd"
												value="<?php echo $_SESSION['password']; ?>" id="exampleInputPassword1"
												placeholder="●●●●●●●●●●●●●●" name="password" required readonly>
											<span class="input-group-btn" id="eyeSlash1">
												<button class="btn btn-default reveal eye-btn"
													onclick="$('#exampleInputPassword1').attr('type', 'text');$('#eyeSlash1').hide();$('#eyeShow1').show();"
													type="button"><i class="fa fa-eye-slash"
														aria-hidden="true"></i></button>
											</span>
											<span class="input-group-btn" id="eyeShow1" style="display: none;">
												<button class="btn btn-default reveal eye-btn"
													onclick="$('#exampleInputPassword1').attr('type', 'password');$('#eyeShow1').hide();$('#eyeSlash1').show();"
													type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
											</span>
										</div>
									</div>
								</div>







							</div>

							<div class=" col-12 text-center">

								<a class="btn btn-lg r-5 blog-send-btn" onclick="edit_accountinfo_btn()">Edit</a>
							</div>


						</form>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>



		<!-- edit account setting here -->
		<div class="row justify-content-center" id="accountinfo-edit" style="display: none;">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-11 m-b30">
				<div class="widget-box shadow-sm">

					<div class="offset-1 widget-inner">
						<form method="POST" action="myaccount.php" class="edit-profile m-b30">
							<div class="">
								<div class="form-group row ">
									<div class="col-sm-12  ml-auto">
										<h3 class="profile-head">Account Details</h3>
									</div>
								</div>

								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">User Name</label>
									<div class="col-sm-7">
										<input name="username" class="form-control" type="text"
											value="<?php echo $_SESSION['username']; ?>" required>
									</div>
								</div>



								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Password</label>
									<div class="col-sm-7">
										<div class="input-group ">
											<input type="password" class="form-control pwd"
												value="<?php echo $_SESSION['password']; ?>" id="exampleInputPassword3"
												placeholder="●●●●●●●●●●●●●●" name="password" required>
											<span class="input-group-btn" id="eyeSlash3">
												<button class="btn btn-default reveal eye-btn"
													onclick="$('#exampleInputPassword3').attr('type', 'text');$('#eyeSlash3').hide();$('#eyeShow3').show();"
													type="button"><i class="fa fa-eye-slash"
														aria-hidden="true"></i></button>
											</span>
											<span class="input-group-btn" id="eyeShow3" style="display: none;">
												<button class="btn btn-default reveal eye-btn"
													onclick="$('#exampleInputPassword3').attr('type', 'password');$('#eyeShow3').hide();$('#eyeSlash3').show();"
													type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
											</span>
										</div>
									</div>
								</div>

								<div class="offset-sm-1 form-group row form-align ">
									<label class="col-sm-2 col-form-label">Confirm Password</label>
									<div class="col-sm-7">
										<div class="input-group ">
											<input type="password" class="form-control pwd"
												value="<?php echo $_SESSION['password']; ?>" id="exampleInputPassword4"
												placeholder="●●●●●●●●●●●●●●" required>
											<span class="input-group-btn" id="eyeSlash4">
												<button class="btn btn-default reveal eye-btn"
													onclick="$('#exampleInputPassword4').attr('type', 'text');$('#eyeSlash4').hide();$('#eyeShow4').show();"
													type="button"><i class="fa fa-eye-slash"
														aria-hidden="true"></i></button>
											</span>
											<span class="input-group-btn" id="eyeShow4" style="display: none;">
												<button class="btn btn-default reveal eye-btn"
													onclick="$('#exampleInputPassword4').attr('type', 'password');$('#eyeShow4').hide();$('#eyeSlash4').show();"
													type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
											</span>
										</div>
									</div>
								</div>






							</div>

							<div class=" col-12 text-center">

								<button type="submit" name="accountsettings"
									class="btn btn-lg r-5 blog-send-btn">Save</button>
							</div>


						</form>
					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>

		<!-- Accouny form ends here -->



		<!-- your affiliation -->
		<div class="row" id="your-affiliation" style="display: none;">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-12 m-b30">
				<div class="widget-box">

					<div class="widget-inner">


						<div class="card-courses-list admin-courses">
							<div class="card-courses-media">
								<img src="https://skypetshop.advertroindia.co.in/uploads-advertro-03-08-2019/Skypetshop/updates/618069/Top-One-Pet-Shop-Mongkok-Vanillapup.jpg"
									alt="" />
							</div>
							<div class="card-courses-full-dec">
								<div class="card-courses-title ">
									<h4 class="market-card-title">Rohit Pet villa</h4>
								</div>
								<div class="card-courses-list-bx">
									<ul class="card-courses-view">
										<li class="card-courses-user">
											<div class="card-courses-user-pic">
												<img src="../oldassets/images/Market Place/market-img/Mask Group 1.png"
													alt="">
											</div>
											<div class="card-courses-user-info">
												<h5>Owner</h5>
												<h4>Rohit</h4>
											</div>
										</li>


									</ul>



								</div>
								<div class="card-courses-list-bx">
									<ul class="card-courses-view">
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="../oldassets/images/Market Place/market-icon-locate/Group1.png"
													alt="" class="detail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">Jodhpur</h5>

											</div>
										</li>
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="../oldassets/images/Market Place/market-icon-locate/Group2.png"
													alt="" class="detail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">9468529765</h5>

											</div>
										</li>
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="../oldassets/images/Market Place/market-icon-locate/Group3.png"
													alt="" class="detail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">Housing Board</h5>

											</div>
										</li>
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="../oldassets/images/Market Place/market-icon-locate/Group4.png"
													alt="" class="detail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">Nutritions and Pet food</h5>

											</div>
										</li>


									</ul>



								</div>
								<div class="row card-courses-dec">
									<div class="col-md-12">
										<h6 class="m-b10 description-head">Description</h6>
										<p>Rohit Pets Villa in Chopasni Housing Board has a wide range of products and
											services to
											cater to the varied requirements of their customers. The staff at this
											establishment are courteous
											and prompt at providing any assistance. They readily answer any queries or
											questions
											that you may have. Pay for the product or service with ease by using any of
											the available modes
											of payment, such as Cash, Cheques, Paytm. This establishment is functional
											from 09:30 - 21:30. </p>
									</div>

									<div class="col-md-12  ">
										<a href="#" class="btn  market-card-btn">Read More</a>
										<a href="#" class="btn  market-card-btn">Delete</a>
									</div>


								</div>

							</div>
						</div>

						<div class="card-courses-list admin-courses">
							<div class="card-courses-media">
								<img src="https://www.animalleague.org/wp-content/uploads/2017/03/pet-supply-store-ny-services-image-interior-05042017.jpg"
									alt="" />
							</div>
							<div class="card-courses-full-dec">
								<div class="card-courses-title ">
									<h4 class="market-card-title">Rohit Pet shop</h4>
								</div>
								<div class="card-courses-list-bx">
									<ul class="card-courses-view">
										<li class="card-courses-user">
											<div class="card-courses-user-pic">
												<img src="../oldassets/images/Market Place/market-img/Mask Group 1.png"
													alt="">
											</div>
											<div class="card-courses-user-info">
												<h5>Owner</h5>
												<h4>Rohit</h4>
											</div>
										</li>


									</ul>



								</div>
								<div class="card-courses-list-bx">
									<ul class="card-courses-view">
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="../oldassets/images/Market Place/market-icon-locate/Group1.png"
													alt="" class="detail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">Jodhpur</h5>

											</div>
										</li>
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="../oldassets/images/Market Place/market-icon-locate/Group2.png"
													alt="" class="detail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">9468529765</h5>

											</div>
										</li>
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="../oldassets/images/Market Place/market-icon-locate/Group3.png"
													alt="" class="detail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">Pratap Nagar</h5>

											</div>
										</li>
										<li class="card-courses-user">
											<div class="detail-icon">
												<img src="../oldassets/images/Market Place/market-icon-locate/Group4.png"
													alt="" class="detail-img">
											</div>
											<div class="card-courses-user-info detail-content">
												<h5 class="detail-text">Shampoo, Nail & Hair clipping,teeth cleaning
													& many more...</h5>

											</div>
										</li>


									</ul>



								</div>
								<div class="row card-courses-dec">
									<div class="col-md-12">
										<h6 class="m-b10">Description</h6>
										<p>Dogs And Pups – Rohit pet shop is the one of the best authentic breeders and
											importers in Jodhpur, satisfies all clients by providing them with the pups
											of good health, quality and temperament. All the pups here are from their
											own kennels and off springs of the best breeds and show winners. </p>
									</div>

									<div class="col-md-12  ">
										<a href="#" class="btn  market-card-btn">Read More</a>
										<a href="#" class="btn  market-card-btn">Delete</a>
									</div>


								</div>

							</div>
						</div>




					</div>
				</div>
			</div>
			<!-- Your Profile Views Chart END-->
		</div>

		<!-- your affiliation ends here -->
		
		<!-- Scratch Card -->
		<div class="row" id="scratchcard" style="display: none;">
			<!-- Your Profile Views Chart -->
			<div class="col-lg-12 m-b30">
				<div class="widget-box">

					<div class="widget-inner">
						<div class="row">
							<div class="col-4 text-center">
								<div class="card">
									<div class="card-body scratch-card p-0">
										<img class="w-100" src="../ideathon/card.svg" alt="">
										<h5>Unlocks after 25 stars.</h5>
									</div>
								</div>
							</div>
							<div class="col-4 text-center">
								<div class="card">
									<div class="card-body scratch-card p-0">
										<img class="w-100" src="../ideathon/card.svg" alt="">
										<h5>Unlocks after 50 stars.</h5>
									</div>
								</div>
							</div>
							<div class="col-4 text-center">
								<div class="card">
									<div class="card-body scratch-card p-0">
										<img class="w-100" src="../ideathon/card.svg" alt="">
										<h5>Unlocks after 75 stars.</h5>
									</div>
								</div>
							</div>
							<div class="col-4 text-center">
								<div class="card">
									<div class="card-body scratch-card p-0">
										<img class="w-100" src="../ideathon/card.svg" alt="">
										<h5>Unlocks after 100 stars.</h5>
									</div>
								</div>
							</div>
							<div class="col-4 text-center">
								<div class="card">
									<div class="card-body scratch-card p-0">
										<img class="w-100" src="../ideathon/card.svg" alt="">
										<h5>Unlocks after 150 stars.</h5>
									</div>
								</div>
							</div>
							<div class="col-4 text-center">
								<div class="card">
									<div class="card-body scratch-card p-0">
										<img class="w-100" src="../ideathon/card.svg" alt="">
										<h5>Unlocks after 200 stars.</h5>
									</div>
								</div>
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
				.scratch-card{
					overflow: hidden;
				}
				.scratch-card h5{
					position: absolute;
					bottom: 50px;
					background: rgba(25, 25, 25, 0.54);
					padding: 10px;
					width: 100%;
					color: #fff;
				}
			</style>





<?php include "../partials/dashboardfooter.php"; ?>





<style>
	#imageUpload
  {
	  display: none;
  }
  
  #profileImage
  {
	  cursor: pointer;
  }
  
  #profile-container {
	  width: 150px;
	  height: 150px;
	  overflow: hidden;
	  -webkit-border-radius: 50%;
	  -moz-border-radius: 50%;
	  -ms-border-radius: 50%;
	  -o-border-radius: 50%;
	  border-radius: 50%;
  }
  
  #profile-container img {
	  width: 150px;
	  height: 150px;
  }
  </style>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
	$("#profileImage").click(function(e) {
	  $("#imageUpload").click();
  });
  
  function fasterPreview( uploader ) {
	  if ( uploader.files && uploader.files[0] ){
			$('#profileImage').attr('src', 
			   window.URL.createObjectURL(uploader.files[0]) );
	  }
  }
  
  $("#imageUpload").change(function(){
	  fasterPreview( this );
  });
  </script>


  <script>
  $(document).ready(function (e) {
    $('#imageUploadForm').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

    $("#imageUpload").on("blur", function() {
        $("#imageUploadForm").submit();
    });
});
  </script>

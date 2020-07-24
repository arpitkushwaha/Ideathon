<?php include "partials/dashboardheader.php"; ?>

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

						<div class="widget-inner ">

							<div class="card-courses-list admin-courses ">
								<div class="card-courses-media user-account-pic ">
									<img src="https://images.unsplash.com/photo-1586297098710-0382a496c814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
										alt="" />

								</div>
								<div class="card-courses-full-dec mt-3">
									<div class="card-courses-title user-name ">
										<h4 class="market-card-title"><?php echo $_SESSION['name']; ?></h4>
									</div>

									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group1.png"
														alt="" class="detail-img user-icondetail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text"><?php echo $_SESSION['city']; ?></h5>

												</div>
											</li>
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group2.png"
														alt="" class="detail-img user-icondetail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text"><?php echo $_SESSION['phone']; ?></h5>

												</div>
											</li>
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group-msg.png"
														alt="" class="detail-img user-icondetail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text"><?php echo $_SESSION['email']; ?></h5>

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
								class="fa fa-shopping-cart"></i> Your Affiliation</a>
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
											<input class="form-control" type="text" value="<?php echo $_SESSION['name']; ?>" readonly>
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
											<input class="form-control" type="email" value="<?php echo $_SESSION['email']; ?>"
												readonly>
										</div>
									</div>


									<div class=" offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label">Phone No.</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $_SESSION['phone']; ?>"
												placeholder="+120 012345 6789" readonly>
										</div>
									</div>

									<div class=" offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label" for="sel1">Own a Pet</label>
										<div class="col-sm-7">
											<select value="<?php echo $_SESSION['ownapet']; ?>" class="form-control" id="sel1" disabled>
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
											<input class="form-control" type="text" value="<?php echo $_SESSION['state']; ?>" readonly>
										</div>
									</div>
									<div class="offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label">City</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php echo $_SESSION['city']; ?>" readonly>
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

									<a  class="btn btn-lg r-5 blog-send-btn"
										onclick="edit_personalinfo_btn()">Edit</a>
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
											<input class="form-control" name="name" type="text" value="<?php echo $_SESSION['name']; ?>" required>
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
											<input class="form-control" name="email" type="email" value="<?php echo $_SESSION['email']; ?>"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
										</div>
									</div>


									<div class=" offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label">Phone No.</label>
										<div class="col-sm-7">
											<input class="form-control" name="phone" type="text" value="<?php echo $_SESSION['phone']; ?>"
												placeholder="+120 012345 6789" required>
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
											<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="state" class="form-control" required></select>
										</div>
										

									</div>
									<div class="offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label">City</label>
										<div class="col-sm-7">
											
											<select id ="state" name="city" class="form-control" required></select>
										</div>
										
									</div>
									<script language="javascript">print_state("sts");</script>

									<div class="offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label">Address</label>
										<div class="col-sm-7">
											<input class="form-control" name="address" type="text"
												value="<?php echo $_SESSION['address']; ?>">
										</div>
									</div>




								</div>

								<div class=" col-12 text-center">

									<button type="submit" name="personaldetails"  class="btn btn-lg r-5 blog-send-btn">Save</button>
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
											<input name="username" class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>" readonly>
										</div>
									</div>


									<div class="offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-7">
											<div class="input-group ">
												<input type="password" class="form-control pwd" value="<?php echo $_SESSION['password']; ?>"
													id="exampleInputPassword1" placeholder="●●●●●●●●●●●●●●"
													name="password" required readonly>
												<span class="input-group-btn" id="eyeSlash1">
													<button class="btn btn-default reveal eye-btn"
														onclick="$('#exampleInputPassword1').attr('type', 'text');$('#eyeSlash1').hide();$('#eyeShow1').show();"
														type="button"><i class="fa fa-eye-slash"
															aria-hidden="true"></i></button>
												</span>
												<span class="input-group-btn" id="eyeShow1" style="display: none;">
													<button class="btn btn-default reveal eye-btn"
														onclick="$('#exampleInputPassword1').attr('type', 'password');$('#eyeShow1').hide();$('#eyeSlash1').show();"
														type="button"><i class="fa fa-eye"
															aria-hidden="true"></i></button>
												</span>
											</div>
										</div>
									</div>

							





								</div>

								<div class=" col-12 text-center">

									<a class="btn btn-lg r-5 blog-send-btn"
										onclick="edit_accountinfo_btn()">Edit</a>
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
											<input name="username" class="form-control" type="text" value="<?php echo $_SESSION['username']; ?>" required>
										</div>
									</div>



									<div class="offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-7">
											<div class="input-group ">
												<input type="password" class="form-control pwd" value="<?php echo $_SESSION['password']; ?>"
													id="exampleInputPassword3" placeholder="●●●●●●●●●●●●●●"
													name="password" required>
												<span class="input-group-btn" id="eyeSlash3">
													<button class="btn btn-default reveal eye-btn"
														onclick="$('#exampleInputPassword3').attr('type', 'text');$('#eyeSlash3').hide();$('#eyeShow3').show();"
														type="button"><i class="fa fa-eye-slash"
															aria-hidden="true"></i></button>
												</span>
												<span class="input-group-btn" id="eyeShow3" style="display: none;">
													<button class="btn btn-default reveal eye-btn"
														onclick="$('#exampleInputPassword3').attr('type', 'password');$('#eyeShow3').hide();$('#eyeSlash3').show();"
														type="button"><i class="fa fa-eye"
															aria-hidden="true"></i></button>
												</span>
											</div>
										</div>
									</div>

									<div class="offset-sm-1 form-group row form-align ">
										<label class="col-sm-2 col-form-label">Confirm Password</label>
										<div class="col-sm-7">
											<div class="input-group ">
												<input type="password" class="form-control pwd" value="<?php echo $_SESSION['password']; ?>"
													id="exampleInputPassword4" placeholder="●●●●●●●●●●●●●●"
													 required>
												<span class="input-group-btn" id="eyeSlash4">
													<button class="btn btn-default reveal eye-btn"
														onclick="$('#exampleInputPassword4').attr('type', 'text');$('#eyeSlash4').hide();$('#eyeShow4').show();"
														type="button"><i class="fa fa-eye-slash"
															aria-hidden="true"></i></button>
												</span>
												<span class="input-group-btn" id="eyeShow4" style="display: none;">
													<button class="btn btn-default reveal eye-btn"
														onclick="$('#exampleInputPassword4').attr('type', 'password');$('#eyeShow4').hide();$('#eyeSlash4').show();"
														type="button"><i class="fa fa-eye"
															aria-hidden="true"></i></button>
												</span>
											</div>
										</div>
									</div>






								</div>

								<div class=" col-12 text-center">

									<button type="submit" name="accountsettings" class="btn btn-lg r-5 blog-send-btn">Save</button>
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
										<h4 class="market-card-title">Rohan Pet Salon</h4>
									</div>

									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group1.png"
														alt="" class="detail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text">Jaipur</h5>

												</div>
											</li>
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group2.png"
														alt="" class="detail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text">9468529765</h5>

												</div>
											</li>
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group3.png"
														alt="" class="detail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text">280 A rajapark jaipur</h5>

												</div>
											</li>
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group4.png"
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
											<h6 class="m-b10 description-head">Description</h6>
											<p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto
												disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum
												ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia
												veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus
												referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit
												salutatus delicatissimi. </p>
										</div>

										<div class="col-md-12  ">
											<a href="#" class="btn  market-card-btn">View More</a>
											<a href="#" class="btn  market-card-btn">Delete</a>
										</div>


									</div>

								</div>
							</div>


							<div class="card-courses-list admin-courses">
								<div class="card-courses-media">
									<img src="https://vanillapup.com/wp-content/uploads/2016/11/Hunter-Hong-Kong-Store-Vanillapup.jpg"
										alt="" />
								</div>
								<div class="card-courses-full-dec">
									<div class="card-courses-title ">
										<h4 class="market-card-title">Arpit Pet Salon</h4>
									</div>

									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group1.png"
														alt="" class="detail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text">Jaipur</h5>

												</div>
											</li>
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group2.png"
														alt="" class="detail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text">9468529765</h5>

												</div>
											</li>
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group3.png"
														alt="" class="detail-img">
												</div>
												<div class="card-courses-user-info detail-content">
													<h5 class="detail-text">280 A rajapark jaipur</h5>

												</div>
											</li>
											<li class="card-courses-user">
												<div class="detail-icon">
													<img src="oldassets/images/Market Place/market-icon-locate/Group4.png"
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
											<h6 class="m-b10 description-head">Description</h6>
											<p>Lorem ipsum dolor sit amet, est ei idque voluptua copiosae, pro detracto
												disputando reformidans at, ex vel suas eripuit. Vel alii zril maiorum
												ex, mea id sale eirmod epicurei. Sit te possit senserit, eam alia
												veritus maluisset ei, id cibo vocent ocurreret per. Te qui doming doctus
												referrentur, usu debet tamquam et. Sea ut nullam aperiam, mei cu tollit
												salutatus delicatissimi. </p>
										</div>

										<div class="col-md-12  ">
											<a href="#" class="btn  market-card-btn">View More</a>
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


		</div>
	</main>





<?php include "partials/dashboardfooter.php"; ?>
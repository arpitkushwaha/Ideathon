<?php require_once "../include/function.php"; ?>
<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo end -->

			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
					</li>


					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar">
						<img alt="" 
						
						<?php
							if(!empty($_SESSION['image']))
								echo "src='php/uploads/user/".$_SESSION['image']."'";
							else
								echo 'src="https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg"'; 
						?>
						
						width="35" height="35">
								<div class="user-online"></div>
							</span></a>
						<div class="ttr-header-submenu user-menu">
							<ul>
								<li><a href=<?php echo "'".basepath()."index.php'";?>> <i class="ti-user"></i> Home</a></li>

								<li><a href="php/logout.php"><i class="ti-shift-right"></i> Logout</a></li>
							</ul>
						</div>
					</li>

				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i
								class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
			<!--header search panel end -->
		</div>
	</header>
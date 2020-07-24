<?php 
				$user_fk = $_SESSION['id'];
				
				$sql_e = "SELECT * FROM blog_post WHERE user_fk='$user_fk'" ;
				$result = $conn->query($sql_e);
				
					if($result->num_rows > 0){
				
					while($row = $result->fetch_assoc()) {
						
						echo 
					
						"<div class='recent-news list-margin '	>
								<div class='action-box'>
									<img src='https://www.parrotwebsite.com/wp-content/uploads/2019/10/AdobeStock_288571906-e1571304649589.jpeg' alt=''>
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
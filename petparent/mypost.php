<?php 
include "../partials/dashboardheader.php"; 

if(!empty($_SESSION['askavet_edit_id']))
{
    unset($_SESSION['askavet_edit_id']);
}
?>


<main class="ttr-wrapper" id="your_blog" >
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">All Post</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>My Post</li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-6 ">
                <a href="createforum.php" class="icon-cell">
                    <div class="feature-container left feature-bx1">

                        <div class="feature-lg text-white ">
                            <i class="flaticon-chat-bubble flat-icon "></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="ttr-tilte">Community Forum </h5>
                            <p> Community forum provides caring, compassionate advice and resources to pet issues.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-6 ">
                <a href="createblog.php" class="icon-cell">
                    <div class="feature-container left feature-bx1">

                        <div class="feature-lg text-white ">
                            <i class="flaticon-employee-2 flat-icon "></i>
                        </div>
                        <div class="icon-content">
                            <h5 class="ttr-tilte">Ask a Vet </h5>
                            <p>Ask your vet the right questions about your dog, from nutritional needs to vaccinations to behavioral issues.</p>
                        </div>
                    </div>
                </a>
            </div>






        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="row">
                        <div class="col-lg-12 mt-4">
                            <div class="blog-title">
                                
                                    <h5>Recent Post</h5>
                                </div>
                                <ul class="ul-mypost"  >
                                   
                                    <li class="list-mypost" >
                                        <div class="dropdown show">
                                            <a class="btn  dropdown-toggle blog-title-right" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-sort-amount-asc"></i> Type
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#" onclick="userblog()">Community</a>
                                                <a class="dropdown-item" href="#" onclick="userforum()">Ask a Vet</a>
                                                
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                                
                            
                        
                    </div>
                    <hr style="height: 1px; width: 90%;">
                    
<!-- blog list will display here -->
<div class="widget-inner pl-4 pr-4" id="user_blog">
<div class="row justify-content-center post-head-top text-center">
    <h2>Community Forum</h2>
</div>

<?php

            $user_fk = $_SESSION['id'];
                            
            $sql_e = "SELECT * FROM forum_post WHERE user_fk='$user_fk' ORDER BY created_at DESC"  ;
            $result = $conn->query($sql_e);

                if($result->num_rows > 0){

                while($forum_post = $result->fetch_assoc()) {

                    $forum_post_id = $forum_post['id'];
                    $forum_post_image = $forum_post['image'];
                    $category_fk = $forum_post['category_fk'];
                    $sql_e = "SELECT * FROM blog_categories WHERE id='$category_fk'";
							$result_blog_categories = $conn->query($sql_e);
							if($result_blog_categories->num_rows > 0){

                            while($blog_categories = $result_blog_categories->fetch_assoc()) {
                                $category_name = $blog_categories['name'];
                                }      
    
   echo ' 
    
                    <div class="card-courses-list bookmarks-bx p-2">
                    <div class="card-courses-media">
                        <img src="php/uploads/forum/'.$forum_post_image.'" alt="" />
                    </div>
                    <div class="card-courses-full-dec">
                        <div class="card-courses-title">
                            <h4 class="m-b5 size-head-forumdash">'.$forum_post['title'].'</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mt-1 ">
                                <span class="text-muted" style="font-size: 14px;">'.timestamp($forum_post['created_at']).'</span>
                            </div>
                        </div>
                        <div class="card-courses-list-bx">
                            <ul class="card-courses-view width-courses-view">

                                <li class="card-courses-review">
                                    <div class="media-box">
                                        <ul class="media-post blog-features margin-feature-icon">
                                        
                                        
                                            <li><a href="#"><i class="fa fa-thumbs-up"></i><span>0</span>
                                                    </a></li>
                                            <li><a href="#"><i
                                                        class="fa fa-thumbs-down"></i><span>0</span>
                                                    </a></li>   
                                            <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span>
                                                    </a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="card-courses-price">
                                <li class="card-courses-categories category-dash-margin">
                                    <h4 style="color: #FFB000;">Category</h4>
                                    <span class="text-muted">'.$category_name.'</span>
                                </li>
                                </li>
                            </ul>
                        </div>
                        <div class="row card-courses-dec">
                            <div class="col-md-12 margin-forum-dashboard-para">
                                <p class="text-justify">'.$forum_post['content'].'</p>
                            </div>
                            <div class="col-md-12  ">
                                <div class="row button-align">
                                <form class="padding-btn" action="mypost.php" method="POST">
                                    <input type="hidden" id="myCustId" name="forum_edit_id" value="'.$forum_post_id.'" >
                                    <input type="hidden" id="myCustId" name="forum_title" value="'.$forum_post['title'].'" >
                                    <input type="hidden" id="myCustId" name="forum_category_name" value="'.$category_name.'" >
                                    <input type="hidden" id="myCustId" name="forum_content" value="'.$forum_post['content'].'" >
                                    <input type="hidden" id="myCustId" name="forum_video" value="'.$forum_post['video'].'" >
                                    <input type="hidden" id="myCustId" name="forum_image" value="'.$forum_post['image'].'" >
                                    <button name="editforumbtn" type="submit" class="btn  market-card-btn">Edit</button>
                                </form>
                            
                                <form class="padding-btn" action="mypost.php" method="POST">
                                    <input type="hidden" id="myCustId" name="forum_post_id" value="'.$forum_post_id.'" >
                                    <button name="deleteforum" type="submit" class="btn  market-card-btn">Delete</button>
                                </form>
                                </div>
                            
                            
                            </div>
                        </div>

                    </div>
                </div>';
            }
        }
    }
?>


<div class="card-courses-list bookmarks-bx p-2">
    <div class="card-courses-media">
        <img src="https://urbananimalveterinary.com/wp-content/uploads/2018/07/dog-bones.jpg"
            alt="" />
    </div>
    <div class="card-courses-full-dec">
        <div class="card-courses-title">

            <form action="">

                <button name="readmore" type="submit" class="title-forum-btn text-left p-0 m-0">
                    <a>
                        <h4 class="m-b5 size-head-forumdash post-title float-left forum-head ">Why do dogs bury bones?</h4>

                    </a>
                </button>

            </form>
            <!-- <h4 class="m-b5 size-head-forumdash">Why do dogs bury bones?</h4> -->
        </div>
        <div class="row">
            <div class="col-lg-6 mt-1 ">
                <span class="text-muted" style="font-size: 14px;">May 2020</span>
            </div>
        </div>
        <div class="card-courses-list-bx">
            <ul class="card-courses-view width-courses-view">

                <li class="card-courses-review">
                    <div class="media-box">
                        <ul class="media-post blog-features margin-feature-icon">
                          
                          
                            <li><a href="#"><i class="fa fa-thumbs-up"></i><span>54</span>
                                    </a></li>
                            <li><a href="#"><i
                                        class="fa fa-thumbs-down"></i><span>10</span>
                                    </a></li>   
                              <li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
                                    </a></li>

                        </ul>
                    </div>
                </li>
                <li class="card-courses-price">
                <li class="card-courses-categories category-dash-margin">
                    <h4 style="color: #FFB000;">Category</h4>
                    <span class="text-muted">Animal Help</span>
                </li>
                </li>
            </ul>
        </div>
        <div class="row card-courses-dec">
            <div class="col-md-12 margin-forum-dashboard-para">
                <p class="text-justify">This behavior is less about playtime and more about instinct. 
                   
                 
                </p>
            </div>
            <div class="col-md-12  ">
                <div class="row button-align">
                <form class="padding-btn" action="">
                    <button  class="btn  market-card-btn">Edit</button>
                </form>
             
                <form class="padding-btn" action="">
                    <button class="btn  market-card-btn">Delete</button>
                </form>
                </div>
               
            
            </div>
        </div>

    </div>
</div>

</div>
<!-- blogs list ends here -->

<!-- ask on forum start here -->
<div class="widget-inner pl-4 pr-4" id="user_forum"  style="display: none;">
<div class="row justify-content-center post-head-top">
    <h2>Ask a Vet</h2>
</div>


<div class="card-courses-list bookmarks-bx p-2">
    <div class="card-courses-media">
        <img src="https://m.economictimes.com/thumb/msid-67175639,width-1200,height-900,resizemode-4,imgsize-348291/turtle.jpg"
        alt="" />
    </div>
    <div class="card-courses-full-dec">
        <div class="card-courses-title">


            <form action="">

                <button name="readmore" type="submit" class="title-forum-btn text-left p-0 m-0">
                    <a>
                        <h4 class="m-b5 size-head-forumdash post-title float-left forum-head ">My turtle has shell rot. How can I prevent this?</h4>

                    </a>
                </button>

            </form>
            <!-- <h4 class="m-b5 size-head-forumdash">My turtle has shell rot. How can I prevent this? </h4> -->
        </div>
        <div class="row">
            <div class="col-lg-6 mt-1 ">
                <span class="text-muted" style="font-size: 14px;">May 2020</span>
            </div>
        </div>
        <div class="card-courses-list-bx">
            <ul class="card-courses-view width-courses-view">

                <li class="card-courses-review">
                    <div class="media-box">
                        <ul class="media-post blog-features margin-feature-icon">
                          
                          
                            <li><a href="#"><i class="fa fa-thumbs-up"></i><span>54</span>
                                    </a></li>
                            <li><a href="#"><i
                                        class="fa fa-thumbs-down"></i><span>10</span>
                                    </a></li>   
                              <li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
                                    </a></li>

                        </ul>
                    </div>
                </li>
                <li class="card-courses-price">
                <li class="card-courses-categories category-dash-margin">
                    <h4 style="color: #FFB000;">Category</h4>
                    <span class="text-muted">Animal Help</span>
                </li>
                </li>
            </ul>
        </div>
        <div class="row card-courses-dec">
            <div class="col-md-12 margin-forum-dashboard-para">
                <p class="text-justify">Shell rot is usually caused by poor living conditions. It is more common in aquatic or semi-aquatic turtles.
                    The key to preventing shell rot is keeping the terrarium clean. That means changing the water at least once
                     a week and removing uneaten food. It is also very important to provide a basking area for the turtle. The area should be large enough for the turtle to get completely out of the water. If the turtle cannot dry out, the shell will weaken. The basking spot should be about 84-86°F. If your turtle does get shell rot, seek a 
                   veterinarian for help. The vet will use povidone iodine or potassium permanganate solutions to help cure him.
                </p>
            </div>
            <div class="col-md-12  ">
                <div class="row button-align">
                <form class="padding-btn" action="">
                    <button  class="btn  market-card-btn">Edit</button>
                </form>
             
                <form class="padding-btn" action="">
                    <button class="btn  market-card-btn">Delete</button>
                </form>
                </div>
               
            
            </div>
        </div>

    </div>
</div>

<?php

            $user_fk = $_SESSION['id'];
                            
            $sql_e = "SELECT * FROM askavet_post WHERE user_fk='$user_fk' ORDER BY created_at DESC"  ;
            $result = $conn->query($sql_e);

                if($result->num_rows > 0){

                while($askavet_post = $result->fetch_assoc()) {

                    $askavet_post_id = $askavet_post['id'];
                    $askavet_post_image = $askavet_post['image'];
                    $category_fk = $askavet_post['category_fk'];
                    $askavet_title = $askavet_post['title'];
                    $askavet_content = $askavet_post['content'];
                    $askavet_video = $askavet_post['video'];
                    $askavet_status = $askavet_post['status'];
                    $user_fk = $askavet_post['user_fk'];
                    $created_at = $askavet_post['created_at'];


                    $sql_e = "SELECT * FROM blog_categories WHERE id='$category_fk'";
							$result_blog_categories = $conn->query($sql_e);
							if($result_blog_categories->num_rows > 0){

                            while($blog_categories = $result_blog_categories->fetch_assoc()) {
                                $category_name = $blog_categories['name'];
                                }      


                echo '

                         <div class="card-courses-list bookmarks-bx p-2">
                        <div class="card-courses-media">
                            <img src="php/uploads/askavet/'.$askavet_post_image.'" alt="" />
                        </div>
                        <div class="card-courses-full-dec">
                            <div class="card-courses-title">

                            <form action="mypost.php" method="POST">
                                <input type="hidden" id="custId" name="askavet_id" value="'.$askavet_post_id.'">
                                <input type="hidden" id="custId" name="askavet_author_name" value="'.$_SESSION['name'].'">
                                <input type="hidden" id="custId" name="askavet_title" value="'.$askavet_title.'">
                                <input type="hidden" id="custId" name="askavet_content" value="'.$askavet_content.'">
                                <input type="hidden" id="custId" name="askavet_created_at" value="'.$created_at.'">	
                                <input type="hidden" id="custId" name="askavet_category_name" value="'.$category_name.'">
                                <input type="hidden" id="custId" name="askavet_video" value="'.$askavet_video.'">
                                <input type="hidden" id="custId" name="askavet_status" value="'.$askavet_status.'">
                                <input type="hidden" id="custId" name="askavet_author_image" value="'.$_SESSION['image'].'">
                                <button name="readmoreaskavet" type="submit" class="title-forum-btn text-left p-0 m-0">
                                    <a>
                                        <h4 class="m-b5 size-head-forumdash post-title float-left forum-head ">'.$askavet_post['title'].'</h4>
                
                                    </a>
                                </button>  
                            </form>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-1 ">
                                    <span class="text-muted" style="font-size: 14px;">'.timestamp($askavet_post['created_at']).'</span>
                                </div>
                            </div>
                            <div class="card-courses-list-bx">
                                <ul class="card-courses-view width-courses-view">

                                    <li class="card-courses-review">
                                        <div class="media-box">
                                            <ul class="media-post blog-features margin-feature-icon">
                                            
                                            
                                                <li><a href="#"><i class="fa fa-thumbs-up"></i><span>0</span>
                                                        </a></li>
                                                <li><a href="#"><i
                                                            class="fa fa-thumbs-down"></i><span>0</span>
                                                        </a></li>   
                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span>
                                                        </a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="card-courses-price">
                                    <li class="card-courses-categories category-dash-margin">
                                        <h4 style="color: #FFB000;">Category</h4>
                                        <span class="text-muted">'.$category_name.'</span>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                            <div class="row card-courses-dec">
                                <div class="col-md-12 margin-forum-dashboard-para">
                                    <p class="text-justify">'.$askavet_post['content'].'</p>
                                </div>';


                          if($askavet_status == 'open')      
                            echo '
                                <div class="col-md-12  ">
                                    <div class="row button-align">
                                    <form class="padding-btn" action="mypost.php" method="POST">
                                        <input type="hidden" id="myCustId" name="askavet_edit_id" value="'.$askavet_post_id.'" >
                                        <input type="hidden" id="myCustId" name="askavet_title" value="'.$askavet_post['title'].'" >
                                        <input type="hidden" id="myCustId" name="askavet_category_name" value="'.$category_name.'" >
                                        <input type="hidden" id="myCustId" name="askavet_content" value="'.$askavet_post['content'].'" >
                                        <input type="hidden" id="myCustId" name="askavet_video" value="'.$askavet_post['video'].'" >
                                        <input type="hidden" id="myCustId" name="askavet_image" value="'.$askavet_post['image'].'" >
                                        <button name="editaskavetbtn" type="submit" class="btn  market-card-btn">Edit</button>
                                    </form>
                                
                                    <form class="padding-btn" action="mypost.php" method="POST">
                                        <input type="hidden" id="myCustId" name="askavet_post_id" value="'.$askavet_post_id.'" >
                                        <input type="hidden" id="myCustId" name="askavet_post_image" value="'.$askavet_post_image.'" >
                                        <button name="deleteaskavet" type="submit" class="btn  market-card-btn">Delete</button>
                                    </form>
                                    </div>
                                
                                
                                </div>';

                        echo '
                            </div>

                        </div>
                    </div>';
                    
                }
            }
        }
?>

</div>
<!-- ask on forum ends here -->
                    
                </div>
                

            </div>
            <div class="row justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item ">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>



<?php include "../partials/dashboardfooter.php"; ?>


<style>
    @media(max-width: 577px) {
        .button-align
    {
        justify-content: center;
    }
        
    }
.padding-btn
{
    padding: 10px;
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
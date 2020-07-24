<?php include "partials/dashboardheader.php"; ?>


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
                            <h5 class="ttr-tilte">Community </h5>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod..</p>
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
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod..</p>
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
                                
                                    <h5  >Recent Post</h5>
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
<div class="row justify-content-center post-head-top">
    <h2>Community</h2>
</div>
<div class="card-courses-list bookmarks-bx">
    <div class="card-courses-media">
        <img src="https://image.cnbcfm.com/api/v1/image/105992231-1561667465295gettyimages-521697453.jpeg?v=1561667497&w=740&h=416"
            alt="" />

    </div>
    <div class="card-courses-full-dec">
        <div class="card-courses-title">
            <h4 class="m-b5">All You Need To Know About Agency</h4>
        </div>
        <div class="card-courses-list-bx">
            <ul class="card-courses-view">

                <li class="card-courses-review">
                    <div class="media-box">
                        <ul class="media-post blog-features">
                            <li><a href="#"><i class="fa fa-calendar"></i>May 14 2020</a>
                            </li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
                                    Comments</a></li>
                            <li><a href="#"><i class="fa fa-thumbs-o-up"></i><span>54</span>
                                    Likes</a></li>
                            <li><a href="#"><i
                                        class="fa fa-thumbs-o-down"></i><span>10</span>
                                    Dislikes</a></li>

                        </ul>
                    </div>
                </li>
                <li class="card-courses-price">
                <li class="card-courses-categories">
                    <h5>Categories</h5>
                    <h4>Pet Behaviour</h4>
                </li>
                </li>
            </ul>
        </div>
        <div class="row card-courses-dec">
            <div class="col-md-12">
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

<div class="card-courses-list bookmarks-bx">
    <div class="card-courses-media">
        <img src="https://s.w-x.co/in-kittens.jpg" alt="" />
    </div>
    <div class="card-courses-full-dec">
        <div class="card-courses-title">
            <h4 class="m-b5">Teachings That Can Empower Your Business</h4>
        </div>
        <div class="card-courses-list-bx">
            <ul class="card-courses-view">

                <li class="card-courses-review">
                    <div class="media-box">
                        <ul class="media-post blog-features">
                            <li><a href="#"><i class="fa fa-calendar"></i>May 14 2020</a>
                            </li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
                                    Comments</a></li>
                            <li><a href="#"><i class="fa fa-thumbs-o-up"></i><span>54</span>
                                    Likes</a></li>
                            <li><a href="#"><i
                                        class="fa fa-thumbs-o-down"></i><span>10</span>
                                    Dislikes</a></li>

                        </ul>
                    </div>
                </li>
                <li class="card-courses-price">
                <li class="card-courses-categories">
                    <h5>Categories</h5>
                    <h4>Pet Care</h4>
                </li>
                </li>
            </ul>
        </div>
        <div class="row card-courses-dec">
            <div class="col-md-12">
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


<div class="card-courses-list bookmarks-bx">
    <div class="card-courses-media">
        <img src="https://vcahospitals.com/-/media/vca/images/vca-know-your-pets-default-image.jpg"
            alt="" />
    </div>
    <div class="card-courses-full-dec">
        <div class="card-courses-title">
            <h4 class="m-b5">Most Effective Ways To Overcome Agency</h4>
        </div>
        <div class="card-courses-list-bx">
            <ul class="card-courses-view">

                <li class="card-courses-review">
                    <div class="media-box">
                        <ul class="media-post blog-features">
                            <li><a href="#"><i class="fa fa-calendar"></i>May 14 2020</a>
                            </li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
                                    Comments</a></li>
                            <li><a href="#"><i class="fa fa-thumbs-o-up"></i><span>54</span>
                                    Likes</a></li>
                            <li><a href="#"><i
                                        class="fa fa-thumbs-o-down"></i><span>10</span>
                                    Dislikes</a></li>

                        </ul>
                    </div>
                </li>
                <li class="card-courses-price">
                <li class="card-courses-categories">
                    <h5>Categories</h5>
                    <h4>Animal Help</h4>
                </li>
                </li>
            </ul>
        </div>
        <div class="row card-courses-dec">
            <div class="col-md-12">
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
<!-- blogs list ends here -->

<!-- ask on forum start here -->
<div class="widget-inner pl-4 pr-4" id="user_forum"  style="display: none;">
<div class="row justify-content-center post-head-top">
    <h2>Ask a Vet</h2>
</div>
<div class="card-courses-list bookmarks-bx">
    <div class="card-courses-media">
        <img src="https://d3i6fh83elv35t.cloudfront.net/static/2019/07/cat_AdobeStock_66043794-1024x678.jpeg"
            alt="" />

    </div>
    <div class="card-courses-full-dec">
        <div class="card-courses-title">
            <h4 class="m-b5">My 3 yrs old Rottweiler is suffering from stomach bulging</h4>
        </div>
        <div class="card-courses-list-bx">
            <ul class="card-courses-view">

                <li class="card-courses-review">
                    <div class="media-box">
                        <ul class="media-post blog-features">
                            <li><a href="#"><i class="fa fa-calendar"></i>May 14 2020</a>
                            </li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
                                    Comments</a></li>
                            <li><a href="#"><i class="fa fa-thumbs-o-up"></i><span>54</span>
                                    Likes</a></li>
                            <li><a href="#"><i
                                        class="fa fa-thumbs-o-down"></i><span>10</span>
                                    Dislikes</a></li>

                        </ul>
                    </div>
                </li>
                <li class="card-courses-price">
                <li class="card-courses-categories">
                    <h5>Categories</h5>
                    <h4>Pet Behaviour</h4>
                </li>
                </li>
            </ul>
        </div>
        <div class="row card-courses-dec">
            <div class="col-md-12">
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

<div class="card-courses-list bookmarks-bx">
    <div class="card-courses-media">
        <img src="https://i.pinimg.com/originals/11/6d/55/116d55524a965f103d58cd1e7e90428d.jpg" alt="" />
    </div>
    <div class="card-courses-full-dec">
        <div class="card-courses-title">
            <h4 class="m-b5">My dog has his one eye watering always Also some mucus comes out How do I treat it</h4>
        </div>
        <div class="card-courses-list-bx">
            <ul class="card-courses-view">

                <li class="card-courses-review">
                    <div class="media-box">
                        <ul class="media-post blog-features">
                            <li><a href="#"><i class="fa fa-calendar"></i>May 14 2020</a>
                            </li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
                                    Comments</a></li>
                            <li><a href="#"><i class="fa fa-thumbs-o-up"></i><span>54</span>
                                    Likes</a></li>
                            <li><a href="#"><i
                                        class="fa fa-thumbs-o-down"></i><span>10</span>
                                    Dislikes</a></li>

                        </ul>
                    </div>
                </li>
                <li class="card-courses-price">
                <li class="card-courses-categories">
                    <h5>Categories</h5>
                    <h4>Pet Care</h4>
                </li>
                </li>
            </ul>
        </div>
        <div class="row card-courses-dec">
            <div class="col-md-12">
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


<div class="card-courses-list bookmarks-bx">
    <div class="card-courses-media">
        <img src="https://resize.hswstatic.com/w_907/gif/sickpet1.jpg"
            alt="" />
    </div>
    <div class="card-courses-full-dec">
        <div class="card-courses-title">
            <h4 class="m-b5">
                Please say dosage of multistar pet syrup for my 7 month Doberman puppy</h4>
        </div>
        <div class="card-courses-list-bx">
            <ul class="card-courses-view">

                <li class="card-courses-review">
                    <div class="media-box">
                        <ul class="media-post blog-features">
                            <li><a href="#"><i class="fa fa-calendar"></i>May 14 2020</a>
                            </li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>10</span>
                                    Comments</a></li>
                            <li><a href="#"><i class="fa fa-thumbs-o-up"></i><span>54</span>
                                    Likes</a></li>
                            <li><a href="#"><i
                                        class="fa fa-thumbs-o-down"></i><span>10</span>
                                    Dislikes</a></li>

                        </ul>
                    </div>
                </li>
                <li class="card-courses-price">
                <li class="card-courses-categories">
                    <h5>Categories</h5>
                    <h4>Animal Help</h4>
                </li>
                </li>
            </ul>
        </div>
        <div class="row card-courses-dec">
            <div class="col-md-12">
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



<?php include "partials/dashboardfooter.php"; ?>
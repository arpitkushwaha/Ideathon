<?php include "partials/header.php"; ?>

<!-- ***** Wellcome Area Content End ***** -->
<style>
    .home-section {
        background:linear-gradient(rgba(29, 29, 29, 0.55), rgba(29, 29, 29, 0.35)), url("ideathon/laundry.svg");
        background-size: cover;
        height: 100vh;
        background-repeat: no-repeat;
    }


    @media(max-width:600px) {
        .home-section {
            background-image: url(ideathon/laundry.svg);
            background-size: cover;
            min-height: 500px;
            background-position: center;
            background-position-x: center;
        }
    }
    }
</style>

<section class="home-area">
    <div class="home-section">

        <div class="home-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-5 col-lg-7 col-md-12 col-sm-12 col-xs-12 align-self-center landing-text">
                        <h2 class="landing-page-heading text-center">WELCOME TO</h2s>
                        <h1 class="landing-mid-heading text-center">Clean-O-Rama</h1>
                        <h4 class="landing-line-heading text-center">Stay Hygiene, Stay Safe</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>


</section>


<!-- ***** About us Content ***** -->


<section class="about-us">
    <div class="container">
        <div class="row justify-content-center about-margin">
            <div class="col-lg-6 text-center  mt-5">

                <h2 class="main-heading">ABOUT US</h2>

            </div>

        </div>
        <div class="row hover-1-wrap mb-5 mb-lg-0">
            <div class="col-12">
                <div class="row mt-4">
                    <div class="col-lg-6 my-auto">
                        <h2 class="about-heading">
                        Welcome to Clean-O-Rama!
                        </h2>
                        <p>
                        Laundry can be frustrating, even for a laundry enthusiast. It's time-consuming, unceasing and there is so very much that can go wrong.
We at Clean-O-Rama aim to curb all your laundry woes and at the same time create a community of people who share a passion for helping each other out
                        </p>
                        <div class="row">
                            <a href=<?php echo "'".basepath()."aboutus.php'";?> class="btn btn-primary btn-regular mt-4 text-center">Know More</a>
                        </div>

                    </div>


                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <img class="w-100" src="ideathon/about.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** About us Content End ***** -->


<!-- services -->

<section class="card-view py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center  mt-5">
                <h2 class="main-heading">Marketplace</h2>
                <h5 class="text-muted">The one stop solution to all your laundry needs.</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="form-group">
                <div class="row mt-3">
                    <div class="col-sm-4">
                        <label for="exampleFormControlSelect1">Select service type:</label>
                    </div>
                    <div class="col-sm-8">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Laundry</option>
                            <option>Dry Cleaning</option>
                            <option>Ironing</option>
                        </select>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 20px;">
            <div class="col-md-6 my-3 d-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3" src="https://img.icons8.com/bubbles/100/000000/machine-wash-warm.png"/>
                            <div class="media-body">
                                <h5 class="my-1">Andina Acquisition Corp.</h5>
                                <div class="row">
                                    <div class="col-4">
                                    Address:
                                    </div>
                                    <div class="col-8">
                                    694 Reinke Point
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    About:
                                    </div>
                                    <div class="col-8">
                                    purus phasellus in felis donec semper sapien a libero nam dui proin leo
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    Service Type:
                                    </div>
                                    <div class="col-8">
                                    <span class="badge badge-primary">Laundry</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    Contact:
                                    </div>
                                    <div class="col-8">
                                    +91-5126780921
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3" type="button">Contact Now</button>
                            </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <p class="text-muted">Active Participation: 100+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3 d-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3" src="https://img.icons8.com/bubbles/100/000000/broom.png"/>
                            <div class="media-body">
                                <h5 class="my-1">eHi Car Services Limited</h5>
                                <div class="row">
                                    <div class="col-4">
                                    Address:
                                    </div>
                                    <div class="col-8">
                                    5781 Sauthoff Junction
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    About:
                                    </div>
                                    <div class="col-8">
                                   integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc 	
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    Service Type:
                                    </div>
                                    <div class="col-8">
                                    <span class="badge badge-primary">Dry Cleaning</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    Contact:
                                    </div>
                                    <div class="col-8">
                                    +91-2151790579
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3" type="button">Contact Now</button>
                            </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <p class="text-muted">Active Participation: 80+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3 d-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3" src="https://img.icons8.com/dusk/100/000000/iron.png"/>
                            <div class="media-body">
                                <h5 class="my-1">Carter, Fadel and Roob</h5>
                                <div class="row">
                                    <div class="col-4">
                                    Address:
                                    </div>
                                    <div class="col-8">
                                    8745 Dennis Street
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    About:
                                    </div>
                                    <div class="col-8">
                                   integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc 	
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    Service Type:
                                    </div>
                                    <div class="col-8">
                                    <span class="badge badge-primary">Ironing</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    Contact:
                                    </div>
                                    <div class="col-8">
                                    +91-7781686660
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3" type="button">Contact Now</button>
                            </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <p class="text-muted">Active Participation: 90+</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3 d-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <img class="mr-3" src="https://img.icons8.com/bubbles/100/000000/hand-wash.png"/>
                            <div class="media-body">
                                <h5 class="my-1">Cartwright-Tremblay</h5>
                                <div class="row">
                                    <div class="col-4">
                                    Address:
                                    </div>
                                    <div class="col-8">
                                    76 Manitowish Avenue
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    About:
                                    </div>
                                    <div class="col-8">
                                   condimentum neque sapien placerat ante nulla justo aliquam quis turpis eget elit	
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    Service Type:
                                    </div>
                                    <div class="col-8">
                                    <span class="badge badge-primary">Dry Cleaning</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                    Contact:
                                    </div>
                                    <div class="col-8">
                                    +91-8621683379
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-3" type="button">Contact Now</button>
                            </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <p class="text-muted">Active Participation: 130+</p>
                    </div>
                </div>
            </div>
        </div>
    </div>




</section>


<!-- services ends-->


<!-- Blog section -->




<!-- Blog section ends -->
<!-- Contact us section -->

<!-- Contact us section ends -->


<!-- Address -->



<!-- Address ends -->


<?php
include "partials/footer.php";
?>



<style>
    @media(max-width: 600px)
    {
        .about-margin
    {
        margin-top: 40px;

    }
    }
    
</style>
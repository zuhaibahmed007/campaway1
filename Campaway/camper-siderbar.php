<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Camper 1</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container">
        <nav class="navbar navbar-expand-lg breadcumbs_navbar_bg">
            <a class="navbar-brand" href="././index.php">
                <img src="./assets/images/Campaway-Logo.png" class="main_logo">
                <img src="./assets/images/Sticky-Campaway-Logo.png" class="sticky_logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Listing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="././contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="././journal.php">Journal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">Login/Register</a>
                    </li>
                    <button class="btn">Become a host</button>
                </ul>
                <?php //include 'menu.php'; 
                ?><?php //include 'menu.php'; 
                    ?>
            </div>
        </nav>
        <!-- MOBILE HEADER -->
        <?php include 'mobileheader.php'; ?>
    </div>
    <!-- SECTION -->

    <div class="main_app_category_content_container">
        <div class="container listing_user_profile_fullWidth_container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcumb_profile_container">
                                <a href="#">
                                    <i><img src="./assets/images/social-user-prolfile-avator.png"></i>
                                </a>
                                <div class="breadcumb_user_content">
                                    <h6>HI, I’M LEA</h6>
                                    <i class="breadcumb_user_icon"><img src="./assets/images/social-location-icon.png" /><span>New Zealand</span></i>
                                </div>
                            </div>
                            <div class="breadcumb_profile_content">
                                <p>Lea believes that there’s nothing quite like spending a night outdoors, listening to the natural sounds that the night has to offer, a Ruru (morepork) in the distance, and waking up to the tui’s and fantails playing about. She’s also no stranger to the sleeplessness caused by pierced mattresses, cold feet and cramping necks; it’s no secret that camping in the wild, for all its benefits, can get uncomfortable. In comes Base Camp!</p>
                            </div>
                            <div class="breadcumb_profile_detail_container">
                                <div class="breadcumb_language">
                                    <h6>Languages</h6>
                                    <span>English, French</span>
                                </div>
                                <div class="breadcumb_status">
                                    <h6>Profiile Status</h6>
                                    <i class="breadcumb_user_icon"><img src="./assets//images/social-verify-icon.png"><span style="margin-left: 10px;">Verified</span></i>
                                </div>
                                <div class="breadcumb_ratings">
                                    <h6>Host rating</h6>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <span style="margin-left: 10px;">Excellent</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcumb_nav_tabpanel">
                            <ul class="nav">
                                <li><a data-toggle="pill" class="active" href="#siderbar_camper_listing">Listings</a></li>
                                <li><a data-toggle="pill" href="#Reviews">Reviews </a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="siderbar_camper_listing" class="tab-pane in active">
                                <div class="card">
                                    <a href="#" class="hover-effect">
                                        <img class="card-img-top " src="./assets/images/journal-card-poster.png" alt="Card image cap">
                                        <p class="card_featured_stripe">Featured</p>
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                        </div>
                                    </div>
                                    <div class="card-body category_card_container">
                                        <h6>Coromandel Tree House *Coming S...</h6>
                                        <p>Hobsonville Point Road, Hobsonville, Upper
                                            Harbour, Auckland, 0618, New Zealand</p>
                                        <div style="margin-bottom: 8px;">
                                            <img src="./assets/images/social_bed_icon.png">
                                            <span>3 Bedrooms</span>
                                            <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                            <span>1 Baths</span>
                                        </div>
                                        <img src="./assets/images/journal-card-user-icon.png">
                                        <span>6 Campers Cabins, Chalets & Huts</span>
                                        <div class="card_user_social_content">
                                            <div>
                                                <a href="#">
                                                    <img src="./assets/images/social_user_avator.png">
                                                </a>
                                                <h6 style="margin-left: 15px;">Hosted by lea</h6>
                                            </div>
                                            <a href="#">
                                                <img src="./assets/images/scoial_dotted_icon.png">
                                            </a>
                                        </div>
                                        <div class="breadcumb_ratings" style="margin-top: marx;">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <span style="margin-left: 10px;">Excellent</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="#" class="hover-effect">
                                        <img class="card-img-top " src="./assets/images/journal-card-poster.png" alt="Card image cap">
                                        <p class="card_featured_stripe">Featured</p>
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                        </div>
                                    </div>
                                    <div class="card-body category_card_container">
                                        <h6>Coromandel Tree House *Coming S...</h6>
                                        <p>Hobsonville Point Road, Hobsonville, Upper
                                            Harbour, Auckland, 0618, New Zealand</p>
                                        <div style="margin-bottom: 8px;">
                                            <img src="./assets/images/social_bed_icon.png">
                                            <span>3 Bedrooms</span>
                                            <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                            <span>1 Baths</span>
                                        </div>
                                        <img src="./assets/images/journal-card-user-icon.png">
                                        <span>6 Campers Cabins, Chalets & Huts</span>
                                        <div class="card_user_social_content">
                                            <div>
                                                <a href="#">
                                                    <img src="./assets/images/social_user_avator.png">
                                                </a>
                                                <h6 style="margin-left: 15px;">Hosted by lea</h6>
                                            </div>
                                            <a href="#">
                                                <img src="./assets/images/scoial_dotted_icon.png">
                                            </a>
                                        </div>
                                        <div class="breadcumb_ratings" style="margin-top: 9px;">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <span style="margin-left: 10px;">Excellent</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="#" class="hover-effect">
                                        <img class="card-img-top " src="./assets/images/journal-card-poster.png" alt="Card image cap">
                                        <p class="card_featured_stripe">Featured</p>
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                        </div>
                                    </div>
                                    <div class="card-body category_card_container">
                                        <h6>Coromandel Tree House *Coming S...</h6>
                                        <p>Hobsonville Point Road, Hobsonville, Upper
                                            Harbour, Auckland, 0618, New Zealand</p>
                                        <div style="margin-bottom: 8px;">
                                            <img src="./assets/images/social_bed_icon.png">
                                            <span>3 Bedrooms</span>
                                            <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                            <span>1 Baths</span>
                                        </div>
                                        <img src="./assets/images/journal-card-user-icon.png">
                                        <span>6 Campers Cabins, Chalets & Huts</span>
                                        <div class="card_user_social_content">
                                            <div>
                                                <a href="#">
                                                    <img src="./assets/images/social_user_avator.png">
                                                </a>
                                                <h6 style="margin-left: 15px;">Hosted by lea</h6>
                                            </div>
                                            <a href="#">
                                                <img src="./assets/images/scoial_dotted_icon.png">
                                            </a>
                                        </div>
                                        <div class="breadcumb_ratings" style="margin-top: 9px;">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <span style="margin-left: 10px;">Excellent</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <a href="#" class="hover-effect">
                                        <img class="card-img-top " src="./assets/images/journal-card-poster.png" alt="Card image cap">
                                        <p class="card_featured_stripe">Featured</p>
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                        </div>
                                    </div>
                                    <div class="card-body category_card_container">
                                        <h6>Coromandel Tree House *Coming S...</h6>
                                        <p>Hobsonville Point Road, Hobsonville, Upper
                                            Harbour, Auckland, 0618, New Zealand</p>
                                        <div style="margin-bottom: 8px;">
                                            <img src="./assets/images/social_bed_icon.png">
                                            <span>3 Bedrooms</span>
                                            <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                            <span>1 Baths</span>
                                        </div>
                                        <img src="./assets/images/journal-card-user-icon.png">
                                        <span>6 Campers Cabins, Chalets & Huts</span>
                                        <div class="card_user_social_content">
                                            <div>
                                                <a href="#">
                                                    <img src="./assets/images/social_user_avator.png">
                                                </a>
                                                <h6 style="margin-left: 15px;">Hosted by lea</h6>
                                            </div>
                                            <a href="#">
                                                <img src="./assets/images/scoial_dotted_icon.png">
                                            </a>
                                        </div>
                                        <div class="breadcumb_ratings" style="margin-top: 9px;">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star checked"></i>
                                            <span style="margin-left: 10px;">Excellent</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Reviews" class="tab-pane fade">
                                <h1>Reviews</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 main_app_sidebar_content_container">
                <div class="camper_one_sidebar_content">
                    <h6>Compare listings</h6>
                    <div class="col-md-6 col-sm-6 col-xs-12 sidebar_img_container">
                        <img src="./assets/images/camper-sde-mg.png" class="img-fluid">
                        <img src="./assets/images/camper-sde-mg.png" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 sidebar_img_container">
                        <img src="./assets/images/camper-sde-mg.png" class="img-fluid">
                        <img src="./assets/images/camper-sde-mg.png" class="img-fluid">
                    </div>
                    <button class="btn camper_btn">Compare</button>
                    <button class="btn close_btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- </div> -->
    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./assets/js/app.js"></script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Category</title>
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
                <?php include 'menu.php'; ?>
            </div>
        </nav>
        <!-- MOBILE HEADER -->
        <?php include 'mobileheader.php'; ?>
    </div>
    <!-- SECTION -->
    <div class="main_app_category_content_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_nav mt-30">
                        <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">Cabins, Chalets & Huts</span></p>
                        <h3>Cabins, Chalets & Huts</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="empty_content_container"></div>
                    <div class="main_app_category_section_header">
                        <span>4 Rentals</span>
                        <div class="breadcumb_dropdown">
                            <span style="font-weight: 700; margin-right:10px;">Sort By:</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>Date New to Old</span>
                            </a>
                            <div class="dropdown-menu">
                                <p class="dropdown-item" href="#">Default Order</p>
                                <p class="dropdown-item" href="#">Rating</p>
                                <p class="dropdown-item" href="#">Featured First</p>
                                <p class="dropdown-item" href="#">Date Old to New</p>
                                <p class="dropdown-item" href="#">Date New to Old</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row mt-40" id="listing">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card category_card_container">
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
                                    <div style="margin-bottom: 10px;">
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
                                        <img src="./assets/images/scoial_dotted_icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card category_card_container">
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
                                    <div style="margin-bottom: 10px;">
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
                                        <img src="./assets/images/scoial_dotted_icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card category_card_container">
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
                                    <div style="margin-bottom: 10px;">
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
                                        <img src="./assets/images/scoial_dotted_icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./assets/js/app.js"></script>

</html>
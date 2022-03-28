<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Searching</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container searching_hero_banner">
        <nav class="navbar navbar-expand-lg">
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
        <div class="main_app_header_banner_content_container_400vh ">
            <h2>Find Your Destination</h2>
            <p>Nature-Based Properties & Accommodation Around New Zealand</p>
        </div>
    </div>
    <!-- SECTION -->
    <div class="main_app_searching_content_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_nav">
                        <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">Search Results</span></p>
                        <h3>Search Results</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="empty_content_container"></div>
                    <div class="main_app_category_section_header">
                        <span>4 Rentals</span>
                        <div>
                            <span style="font-weight: 700; margin-right:10px;">Sort By:</span>
                            <span>Date New to Old</span>
                            <img src="./assets/images/category_dropdown_icon.png">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row mt-40">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="custom_image_grid img_hover_zoom">
                                    <a href="#" class="hover-effect">
                                        <img src="./assets/images/searching-camp-poster.png">
                                        <p class="card_featured_stripe">Featured</p>
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <img src="./assets/images/listing-user.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body journal_card_container">
                                    <h6>Test</h6>
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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="custom_image_grid img_hover_zoom">
                                    <a href="#" class="hover-effect">
                                        <img src="./assets/images/searching-beach-poster.png">
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <img src="./assets/images/listing-user.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body journal_card_container">
                                    <h6>Tongariro Hut * Coming S...</h6>
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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="custom_image_grid img_hover_zoom">
                                    <a href="#" class="hover-effect">
                                        <img src="./assets/images/searching-mount-poster.png">
                                        <p class="card_featured_stripe">Featured</p>
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <img src="./assets/images/listing-user.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body journal_card_container">
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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="custom_image_grid img_hover_zoom">
                                    <a href="#" class="hover-effect">
                                        <img src="./assets/images/searching-camp-poster.png">
                                        <p class="card_featured_stripe">Featured</p>
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <img src="./assets/images/listing-user.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body journal_card_container">
                                    <h6>Test</h6>
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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="custom_image_grid img_hover_zoom">
                                    <a href="#" class="hover-effect">
                                        <img src="./assets/images/searching-beach-poster.png">
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <img src="./assets/images/listing-user.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body journal_card_container">
                                    <h6>Tongariro Hut * Coming S...</h6>
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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="custom_image_grid img_hover_zoom">
                                    <a href="#" class="hover-effect">
                                        <img src="./assets/images/searching-mount-poster.png">
                                        <p class="card_featured_stripe">Featured</p>
                                    </a>
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <img src="./assets/images/listing-user.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body journal_card_container">
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
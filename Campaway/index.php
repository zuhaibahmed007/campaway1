<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Home</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container main_app_hero_banner">
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
        <div class="main_app_home_header_banner_content_container_500vh">
            <h2>Campsites, Glamping, and Quirky Nature-Based Escapes</h2>
            <p>Find the perfect place to stay for your next outdoor adventure!</p>

            <div class="search_wrap search_banner search_banner_desktop hidden_xs">
                <form>
                    <div class="search_destination search-destination-js ">
                        <input type="text" name="location_search" class="form-control input_search on-focus" placeholder="Where to go?">
                    </div>
                    <div class="search_date_range main_search_date_range_js">
                        <div class="search_date_range_arrive">
                            <!-- <input type="date" name="search_date_range_arrive"> -->
                            <input type="date" data-date-inline-picker="true" />
                        </div>
                        <div class="search_date_range_depart">
                            <input type="date" name="search_date_range_depart">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- SECTION -->
    <div class="main_app_content_container">
        <div class="container grid_image_container">
            <div class="row grid_region_heading">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Explore By Region</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Auckland.png">
                            <h4>Auckland</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Bay-Of-Plenty.png">
                            <h4>Bay Of Plenty</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Canterbury.png">
                            <h4>Canterbury</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Gisborne.png">
                            <h4>Gisborne</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row grid_top_spacing">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Hawkes-Bay.png">
                            <h4>Hawke's Bay</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Manawatu-Whanganui.png">
                            <h4>Manawatū-Whanganui</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Marlborough.png">
                            <h4>Marlborough</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Nelson-Tasman.png">
                            <h4>Nelson - Tasman</h4>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row grid_top_spacing">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Northland.png">
                            <h4>Northland</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Otago.png">
                            <h4>Otago</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Southland.png">
                            <h4>Southland</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Taranaki.png">
                            <h4>Taranaki</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row grid_top_spacing">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Waikato.png">
                            <h4>Waikato</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Wellington.png">
                            <h4>Wellington</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/West-Coast.png">
                            <h4>West Coast</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container grid_image_container">
            <div class="row grid_region_heading">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Explore By Type</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Boat.png">
                            <h4>Boat</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Cabins-Chalets-&-Huts.png">
                            <h4>Cabins, Chalets & Huts</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Campervan-Site.png">
                            <h4>Campervan Site</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row grid_top_spacing">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Campsite.png">
                            <h4>Campsite</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Glamping-Tent.png">
                            <h4>Glamping Tent</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Tiny-House.png">
                            <h4>Tiny House</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container grid_image_container">
            <div class="row grid_region_heading">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Explore By Experience</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/By-the-Sea.png">
                            <h4>By The Sea</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Conservation-Area.png">
                            <h4>Conservation Area</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Farm.png">
                            <h4>Farm</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row grid_top_spacing">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/In-The-Bush.png">
                            <h4>In The Bush</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Lakeside.png">
                            <h4>Lakeside</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Mountains.png">
                            <h4>Mountains</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row grid_top_spacing">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Riverside.png">
                            <h4>Riverside</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Rolling-Hills.png">
                            <h4>Rolling Hills</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="custom_image_grid img_hover_zoom">
                        <a href="#" class="hover-effect">
                            <img src="./assets/images/Walk-In.png">
                            <h4>Walk-In</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div id="featured" class="carousel slide home_carousel" data-ride="carousel">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 grid_region_heading">
                            <div class="col-md-6 col-sm-12">
                                <h3>Explore All Listings</h3>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="carousel_direction_btn_container">
                                    <a class="" href="#featured" data-slide="prev">
                                        <span class="prev_btn">Prev</span>
                                    </a>
                                    <a class="" href="#featured" data-slide="next">
                                        <span class="next_btn">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- <img src="one.jpg"> -->
                                <div class="col-md-12">
                                    <div class="row mt-40">
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-40">
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
                                                    <div class="card_header">
                                                        <h6>Test</h6>
                                                        <img src="./assets/images/card-setting-icon.png" class="card_setting_icon">
                                                    </div>
                                                    <div class="card_header_setting_actions">
                                                        <a href="#">Compare</a>
                                                        <a href="#">Add to Favorite</a>
                                                    </div>
                                                    <p>Hobsonville Point Road, Hobsonville, Upper Harbour, Auckland, 0618, New Zealand</p>
                                                    <div style="margin-bottom: 10px;">
                                                        <img src="./assets/images/social_bed_icon.png">
                                                        <span>3 Bedrooms</span>
                                                        <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                                        <span>1 Baths</span>
                                                    </div>
                                                    <img src="./assets/images/journal-card-user-icon.png">
                                                    <span>6 Campers Cabins, Chalets & Huts</span>
                                                    <div class="breadcumb_ratings" style="margin-top: 12px;">
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <span style="margin-top :8px;margin-left: 10px;">Excellent</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-40">
                                            <div class="card">
                                                <div class="custom_image_grid img_hover_zoom">
                                                    <a href="#" class="hover-effect">
                                                        <img src="./assets/images/searching-beach-poster.png">
                                                    </a>
                                                    <div class="card_bottom_header">
                                                        <div class="card_bottom_header_content">
                                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body journal_card_container">
                                                    <div class="card_header">
                                                        <h6>Tongariro Hut * Coming S...</h6>
                                                        <img src="./assets/images/card-setting-icon.png" class="card_setting_icon">
                                                    </div>
                                                    <div class="card_header_setting_actions">
                                                        <a href="#">Compare</a>
                                                        <a href="#">Add to Favorite</a>
                                                    </div>
                                                    <p>Hobsonville Point Road, Hobsonville, Upper Harbour, Auckland, 0618, New Zealand</p>
                                                    <div style="margin-bottom: 10px;">
                                                        <img src="./assets/images/social_bed_icon.png">
                                                        <span>3 Bedrooms</span>
                                                        <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                                        <span>1 Baths</span>
                                                    </div>
                                                    <img src="./assets/images/journal-card-user-icon.png">
                                                    <span>6 Campers Cabins, Chalets & Huts</span>
                                                    <div class="breadcumb_ratings" style="margin-top: 12px;">
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <span style="margin-top :8px;margin-left: 10px;">Excellent</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-40">
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
                                                    <div class="card_header">
                                                        <h6>Coromandel Tree House *Coming S...</h6>
                                                        <img src="./assets/images/card-setting-icon.png" class="card_setting_icon">
                                                    </div>
                                                    <div class="card_header_setting_actions">
                                                        <a href="#">Compare</a>
                                                        <a href="#">Add to Favorite</a>
                                                    </div>
                                                    <p>Hobsonville Point Road, Hobsonville, Upper Harbour, Auckland, 0618, New Zealand</p>
                                                    <div style="margin-bottom: 10px;">
                                                        <img src="./assets/images/social_bed_icon.png">
                                                        <span>3 Bedrooms</span>
                                                        <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                                        <span>1 Baths</span>
                                                    </div>
                                                    <img src="./assets/images/journal-card-user-icon.png">
                                                    <span>6 Campers Cabins, Chalets & Huts</span>
                                                    <div class="breadcumb_ratings" style="margin-top: 12px;">
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <span style="margin-top :8px;margin-left: 10px;">Excellent</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!-- <img src="one.jpg"> -->
                                <div class="col-md-12">
                                    <div class="row mt-40">
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-40">
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
                                                    <div class="card_header">
                                                        <h6>Test</h6>
                                                        <img src="./assets/images/card-setting-icon.png" class="card_setting_icon">
                                                    </div>
                                                    <div class="card_header_setting_actions">
                                                        <a href="#">Compare</a>
                                                        <a href="#">Add to Favorite</a>
                                                    </div>
                                                    <p>Hobsonville Point Road, Hobsonville, Upper Harbour, Auckland, 0618, New Zealand</p>
                                                    <div style="margin-bottom: 10px;">
                                                        <img src="./assets/images/social_bed_icon.png">
                                                        <span>3 Bedrooms</span>
                                                        <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                                        <span>1 Baths</span>
                                                    </div>
                                                    <img src="./assets/images/journal-card-user-icon.png">
                                                    <span>6 Campers Cabins, Chalets & Huts</span>
                                                    <div class="breadcumb_ratings" style="margin-top: 12px;">
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <span style="margin-top :8px;margin-left: 10px;">Excellent</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-40">
                                            <div class="card">
                                                <div class="custom_image_grid img_hover_zoom">
                                                    <a href="#" class="hover-effect">
                                                        <img src="./assets/images/searching-beach-poster.png">
                                                    </a>
                                                    <div class="card_bottom_header">
                                                        <div class="card_bottom_header_content">
                                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body journal_card_container">
                                                    <div class="card_header">
                                                        <h6>Tongariro Hut * Coming S...</h6>
                                                        <img src="./assets/images/card-setting-icon.png" class="card_setting_icon">
                                                    </div>
                                                    <div class="card_header_setting_actions">
                                                        <a href="#">Compare</a>
                                                        <a href="#">Add to Favorite</a>
                                                    </div>
                                                    <p>Hobsonville Point Road, Hobsonville, Upper Harbour, Auckland, 0618, New Zealand</p>
                                                    <div style="margin-bottom: 10px;">
                                                        <img src="./assets/images/social_bed_icon.png">
                                                        <span>3 Bedrooms</span>
                                                        <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                                        <span>1 Baths</span>
                                                    </div>
                                                    <img src="./assets/images/journal-card-user-icon.png">
                                                    <span>6 Campers Cabins, Chalets & Huts</span>
                                                    <div class="breadcumb_ratings" style="margin-top: 12px;">
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <span style="margin-top :8px;margin-left: 10px;">Excellent</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-40">
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
                                                    <div class="card_header">
                                                        <h6>Coromandel Tree House *Coming S...</h6>
                                                        <img src="./assets/images/card-setting-icon.png" class="card_setting_icon">
                                                    </div>
                                                    <div class="card_header_setting_actions">
                                                        <a href="#">Compare</a>
                                                        <a href="#">Add to Favorite</a>
                                                    </div>
                                                    <p>Hobsonville Point Road, Hobsonville, Upper Harbour, Auckland, 0618, New Zealand</p>
                                                    <div style="margin-bottom: 10px;">
                                                        <img src="./assets/images/social_bed_icon.png">
                                                        <span>3 Bedrooms</span>
                                                        <img src="./assets/images/social_bath_icon.png" style="margin-left: 10px;">
                                                        <span>1 Baths</span>
                                                    </div>
                                                    <img src="./assets/images/journal-card-user-icon.png">
                                                    <span>6 Campers Cabins, Chalets & Huts</span>
                                                    <div class="breadcumb_ratings" style="margin-top: 12px;">
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <i class="fa fa-star checked"></i>
                                                        <span style="margin-top :8px;margin-left: 10px;">Excellent</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container home_campaway_host_container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="campaway_host_details_content_col">
                    <h3>Campaway Hosts</h3>
                    <p>Campaway gathers property owners around New Zealand, who want to make money by sharing their unique outdoor experience. Travellers around New Zealand can search for and find beautiful nature-based accomodation near them.</p>
                    <p>From cherry farms to properties adjoining national parks, our verified Hosts offer land, campsites, glamping tents, huts, treehouses and cabins so Glampers can camp whichever way suits them best, without necessarily having to compromise on comfort.</p>
                    <p>Have some beautiful land that you would like to list? It’s 100% free to join!</p>
                    <a href="#" class="campaway_host_details_learn_more">Learn More About Becoming a Campaway Host</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="campaway_host_details_img_col">
                    <img src="assets/images/campaway-host-details-img.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="home_hosting_cards">
                    <h3>Hosting Standards</h3>
                    <p>All Hosts should review and adhere to these standards around providing a positive Campaway experience and serving as a good-natured member of the Campaway community.</p>
                    <a href="#" class="hosting_learn_more_btn">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="home_hosting_cards">
                    <h3>Camper Standards</h3>
                    <p>All Campers should review and adhere to these standards for safety, trip preparation, and serving as a good-natured member of the Campaway community.</p>
                    <a href="#" class="hosting_learn_more_btn">Learn More</a>
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
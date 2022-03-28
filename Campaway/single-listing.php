<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Single Listings</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container">
        <!-- WEB NAVBAR -->
        <nav class="navbar navbar-expand-lg breadcumbs_navbar_bg">
            <a class="navbar-brand" href="././index.php">
                <img src="./assets/images/Campaway-Logo.png" class="img-fluid">
                <!-- <img src="./assets/images/Sticky-Campaway-Logo.png" class="sticky_logo img-fluid"> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php include 'menu.php'; ?>
            </div>
        </nav>
        <!-- MOBILE NAVBAR -->
        <?php include 'mobileheader.php'; ?>
    </div>
    <!-- SECTION -->
    <div class="main_app_slider_container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/images/Single-listing slider/slider-food.jpg" height="550">
                            </div>
                            <div class="carousel-item ">
                                <img src="./assets/images/Single-listing slider/slider-boat.jpeg" height="550">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Single-listing slider/slider-cave.jpg" height="550">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Single-listing slider/slider-river.jpg" height="550">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Single-listing slider/slider-table.jpg" height="550">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Single-listing slider/slider-mountain.jpeg" height="550">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Single-listing slider/slider-forest.jpg" height="550">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Single-listing slider/slider-hut.jpg" height="550">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/Single-listing slider/silder-sunshine.jpg" height="550">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="">
                                <img src="./assets/images/slider-left-icon.png" class="carousel-control-prev-icon">
                            </span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="">
                                <img src="./assets/images/slider-right-icon.png" class="carousel-control-next-icon">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_app_single_listing_content_container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcumb_nav">
                                <div class="breadcumb_nav mt-30">
                                    <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_one" style="margin-left: 10px;">Cabins, Chalets & Huts</span><img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">Tongariro Hut * Coming Soon</span></p>
                                    <h3>Tongariro Hut * Coming Soon</h3>
                                    <i class="breadcumb_user_icon"><img src="./assets/images/social-location-icon.png" /><span>National Park</span></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 grid_card_col">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6 grid_card_content">
                                    <div class="card">
                                        <img class="" src="./assets/images/single-listing-camper-poster.png" alt="Card image">
                                        <div class="card-body">
                                            <p class="card-title">Listiing Type</p>
                                            <h6 class="card-text">Cabins, Chalet & Huts</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 grid_card_content">
                                    <div class="card">
                                        <img class="" src="./assets/images/sinfle-listing-walk-poster.png" alt="Card image">
                                        <div class="card-body">
                                            <p class="card-title">Capacity</p>
                                            <h6 class="card-text">6 Campers</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 grid_card_content">
                                    <div class="card">
                                        <img class="" src="./assets/images/single-listing-location-poster.png" alt="Card image">
                                        <div class="card-body">
                                            <p class="card-title">Sites</p>
                                            <h6 class="card-text">3 Sites / 6 Beds </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 grid_card_content">
                                    <div class="card">
                                        <img class="" src="./assets/images/single-listing-access-poster.png" alt="Card image">
                                        <div class="card-body">
                                            <p class="card-title">Accessibility</p>
                                            <h6 class="card-text">1</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ml-40">
                            <div class="listing_about_content">
                                <h6>About this listing</h6>
                                <p>This Glamping Campsite is nestled on a property of native bush, with stunning ocean views of the Bay of Islands. The area is known for it’s visits of dolphins, orcas and whales, so keep an eye out from your bed!</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="breadcumb_profile_container listing_content">
                                <a href="#">
                                    <i><img src="./assets/images/social-user-prolfile-avator.png"></i>
                                </a>
                                <div class="breadcumb_user_content">
                                    <h6>Hosted by Lea</h6>
                                    <i class="breadcumb_user_icon "><img src="./assets/images/social-location-icon.png" /><span id="listing_location_span">New Zealand</span></i>
                                </div>
                                <div class="listing_bread_cumb_content_container">
                                    <p>[Host Name] has self-certified that Campaway’s COVID-19 Safety Standards have been implemented at this listing. Learn More</p>
                                </div>
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
                                <button class="btn Veiw_Profile_btn">View Profile</button>
                            </div>
                        </div>
                        <div class="col-md-12 ml-40 listing_about_content">
                            <div class="">
                                <h6>Details</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 grid_card_content">
                                    <div class="single_listing_detail_container">
                                        <div class="card">
                                            <h5>Amenities</h5>
                                            <div class="card-body card_body_content_flex">
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/single-listing-kitchen-icon.png">
                                                    Kitchen:<span>Yes</span>
                                                </p>

                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/single-listing--toilet-icon.png">
                                                    Toilet: <span>Standard Flushing</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/single-listing-dustbin-icon.png">
                                                    Bins:<span>Yes</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/single-listing-shower-icon.png">
                                                    Showers:<span>Yes(included)</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/single-listing-water-icon.png">
                                                    Portable Water:<span>Yes</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/single-listing-table-icon.png">
                                                    Picnic Table:<span>Yes</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/single-listing-wifi-icon.png">
                                                    Wifi:<span>No</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/single-listing-loundary-icon.png">
                                                    Laundry:<span>No</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12 grid_card_content">
                                    <div class="single_listing_detail_container">
                                        <div class="card">
                                            <h5>Recommended Gear</h5>
                                            <div class="card-body card_body_content_flex">
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Gear_First Aid Kit 1.png">
                                                    First Aid Kit
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Gear_Headlamp 1.png">
                                                    Headtorch
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Gear_Puffer 1.png">
                                                    Puffer jacket
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Gear_Sturdy Footwear 1.png">
                                                    Sturdy Footwear (Boots)
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Gear_Sun Protection 1.png">
                                                    Sun Protection
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Gear_Warm Hat _ Gloves 1.png">
                                                    Warm Hat & Gloves
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Gear_Warm Layers 1.png">
                                                    Warm Layers
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Gear_Waterproof Clothing 1.png">
                                                    Waterproof Jacket
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12 grid_card_content">
                                    <div class="single_listing_detail_container">
                                        <div class="card">
                                            <h5>Amenities</h5>
                                            <div class="card-body card_body_content_flex">
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Terms _ Accessibility_Check-In After 1.png">
                                                    Check-In After:<span> 10:00AM</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Terms _ Accessibility_Check-Out Before 1.png">
                                                    Check-Out Before: <span> 10:00AM</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Terms _ Accessibility_Included 1.png">
                                                    Accomodation:<span> Included</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Terms _ Accessibility_Campfires 1.png">
                                                    Campfires Allowed:<span> No</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Accessibility_Wheelchair Accessible 1.png">
                                                    Wheelchair Accessible:<span> No</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Accessibility_Drive in.png">
                                                    Accessibility: <span>Drive-In</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Terms _ Accessibility_Allow Additional Campers 1.png">
                                                    Allow Additional Campers:<span>Yes</span>
                                                </p>
                                                <p>
                                                    <img src="./assets/images/Single-listing slider/icons/Terms _ Accessibility_Minimum Booking 1.png">
                                                    Minimum Booking: <span>1 Night</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 grid_card_content">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="card card-body card_body_content_flex">
                                                <h5>Prices</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="card">
                                                <div class="card-body card_body_content_flex">
                                                    <p>
                                                        <img src="./assets/images/single-listing-arrow-icon.png">
                                                        Night: <span>$250.00</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/single-listing-arrow-icon.png">
                                                        Weekends(Sat & Sun): <span> $275.00</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 grid_card_content">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
                                            <div class="card card-body card_body_content_flex">
                                                <h5>Activities </h5>
                                                <h5>Nearby</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="card">
                                                <div class="card-body card_body_content_flex">
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Biking 1.png">
                                                        Biking:<span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Boating 1.png">
                                                        Boating:<span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Hiking 1.png">
                                                        Hiking: <span> Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Fishing 1.png">
                                                        Fishing: <span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Horseback Riding 1.png">
                                                        Horseback Riding:<span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_White Water Paddling 1.png">
                                                        Paddling:<span> No</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Snow Sports 1.png">
                                                        Snow Sports:<span>No</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Swimming 1.png">
                                                        Swimming: <span>Yes</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <div class="card">
                                                <div class="card-body card_body_content_flex">
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Bird Watching 1.png">
                                                        Bird Watching:<span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Off Roading 1.png">
                                                        Off-Roading: <span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Paddling 1.png">
                                                        Whitewater Paddling: <span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Climbing 1.png">
                                                        Climbing: <span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Surfing 1.png">
                                                        Surfings: <span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/Activities_Wind Sports 1.png">
                                                        Wind Sports:<span>No</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 grid_card_content">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <div class="card card-body card_body_content_flex">
                                                <h5>Terms</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="card">
                                                <div class="card-body card_body_content_flex">
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/single-listing-cross.png">
                                                        Accommodation Included
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/single-listing-check.png">
                                                        Accommodation Included
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/single-listing-cross.png">
                                                        Accommodation Included
                                                    </p>
                                                    <p>
                                                        <img src="./assets/images/Single-listing slider/icons/single-listing-check.png">
                                                        Accommodation Included
                                                    </p>
                                                    <p><span>Cancellation Policy</span></p>
                                                    <p><span>24 hours</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="card">
                                                <div class="card-body card_body_content_flex">
                                                    <p>
                                                        <span>No</span>
                                                    </p>
                                                    <p>
                                                        <span>Yes</span>
                                                    </p>
                                                    <p>
                                                        <span>No</span>
                                                    </p>
                                                    <p>
                                                        <span>Yes</span>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_listing_map_banner_container">
                            </div>
                            <div class="main_app_single_listing_middle_navbar">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#middleNavbar" aria-controls="middleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                                        <!-- <span class="navbar-toggler-icon"></span> -->
                                        <i class="fa fa-align-justify" style="color: white;"></i>
                                    </button>
                                    <div class="collapse navbar-collapse" id="middleNavbar">
                                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Additional Information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Terms</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Map</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Host</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Reviews</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Similar Things</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-12 ml-40">
                            <div class="listing_about_content">
                                <h6>0 Review</h6>
                                <div class="listing_review_container">
                                    <p>Verified Reviews - All reviews are from verified guests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 listing_silder_col">
                            <div id="featured" class="carousel slide home_carousel" data-ride="carousel">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 grid_region_heading">
                                    <h3>Similar Listings</h3>
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
                                </div>
                                <!-- <div class="carousel_direction_btn_container">
                                    <a class="carousel-control-prev" href="#featured" data-slide="prev">
                                        <span class="prev_btn">Prev</span>
                                    </a>
                                    <a class="carousel-control-next" href="#featured" data-slide="next">
                                        <span class="next_btn">Next</span>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="man_app_sngle_lstng_sdebar_contaner">
                        <div class="man_app_sdebar_content_contaner">
                            <h6><sup>$</sup>250.00 <sub>/Night</sub></h6>
                        </div>
                        <div class="sngle_lstng_sde_form_contaner">
                            <div class="sidebar_date_input_container">
                                <input type="date">
                                <input type="date">
                            </div>
                            <input type="text" placeholder="Campers" style="display: block;">
                            <textarea name="Introduce yourself to the host" cols="30" rows="4"></textarea>
                            <button class="btn sde_btn">Instant Booking</button>
                            <input type="text" placeholder="Campers" style="display: block;">
                            <p class="mt-5"><img src="./assets/images/prnt-icon.png"><span class="sde_span_content">Print this page</span></p>
                            <div class="sidebar_social_icon">
                                <i><img src="./assets/images/grommet-icons_facebook-option.png"></i>
                                <i><img src="./assets/images/akar-icons_twitter-fill.png"></i>
                                <i><img src="./assets/images/akar-icons_pinterest-fill.png"></i>
                                <i><img src="./assets/images/bx_bxl-linkedin.png"></i>
                                <i><img src="./assets/images/bx_bxl-google.png"></i>
                                <i><img src="./assets/images/socal-envelop.png"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include 'footer.php';
    ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./assets/js/app.js"></script>

</html>
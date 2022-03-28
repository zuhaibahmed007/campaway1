<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Listings</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container  listing_hero_banner">
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
            <h2>Find Your Escape</h2>
            <p>Nature-Based Properties & Accommodation Around New Zealand</p>
        </div>
    </div>
    <!-- SECTION -->
    <div class="main_app_listings_content_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_nav">
                        <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">Listings</span></p>
                        <h3>Listings</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="empty_content_container"></div>
                            <div class="main_app_category_section_header">
                                <span>4 Rentals</span>
                                <div>
                                    <span style="font-weight: 700; margin-right:10px;">Sort By:</span>
                                    <span>Date New to Old</span>
                                    <img src="./assets/images/category_dropdown_icon.png">
                                </div>
                            </div>
                            <div class="card">
                                <a href="#" class="hover-effect">
                                    <img src="./assets/images/searching-camp-poster.png" class="img-fluid">
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <p>Tongariro Hut * Coming S...</p>
                                            <div class="card_bottom_socail_container">
                                                <img src="./assets/images/card-bottom-bed-icon.png"><small>2</small>
                                                <img src="./assets/images/card-bottom-shower-icon.png"><small>2</small>
                                                <img src="./assets/images/card-bottom-user-icon.png"><small>2</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#" class="hover-effect">
                                    <img src="./assets/images/searching-camp-poster.png" class="img-fluid">
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <p>Tongariro Hut * Coming S...</p>
                                            <div class="card_bottom_socail_container">
                                                <img src="./assets/images/card-bottom-bed-icon.png"><small>2</small>
                                                <img src="./assets/images/card-bottom-shower-icon.png"><small>2</small>
                                                <img src="./assets/images/card-bottom-user-icon.png"><small>2</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#" class="hover-effect">
                                    <img src="./assets/images/searching-camp-poster.png" class="img-fluid">
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <p>Tongariro Hut * Coming S...</p>
                                            <div class="card_bottom_socail_container">
                                                <img src="./assets/images/card-bottom-bed-icon.png"><small>2</small>
                                                <img src="./assets/images/card-bottom-shower-icon.png"><small>2</small>
                                                <img src="./assets/images/card-bottom-user-icon.png"><small>2</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#" class="hover-effect">
                                    <img src="./assets/images/searching-camp-poster.png" class="img-fluid">
                                    <div class="card_bottom_header">
                                        <div class="card_bottom_header_content">
                                            <h5><span class="currency">$</span><span class="price">250.00</span><span class="day_count">/Night</span></h5>
                                            <p>Tongariro Hut * Coming S...</p>
                                            <div class="card_bottom_socail_container">
                                                <img src="./assets/images/card-bottom-bed-icon.png"><small>2</small>
                                                <img src="./assets/images/card-bottom-shower-icon.png"><small>2</small>
                                                <img src="./assets/images/card-bottom-user-icon.png"><small>2</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-40">
                            <img src="./assets/images/listing-map-poster.png" class="img-fluid">
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
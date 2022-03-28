<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway About Us</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container about_us_hero_banner">
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
        <div class="main_app_header_banner_content_container_400vh">
            <h2>Our Mission</h2>
            <p>Bring more people to embrace the outdoors, overnight</p>
        </div>
    </div>
    <!-- SECTION -->
    <div class="main_app_about_header_form_container">
        <div class="container-fluid">
            <div class="row form_grid">
                <div class="col-md-12 search_grid_container" style="border-top: none;">
                    <div class="col-md-2">
                        <h6>Capacity</h6>
                    </div>
                    <div class="col-md-9 d-flex flex-wrap">
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option selected>No of Campers</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option selected>Terrain </option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 search_grid_container">
                    <div class="col-md-2">
                        <h6>Price</h6>
                    </div>
                    <div class="col-md-9 d-flex flex-wrap">
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option selected>Mn</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option selected>Max</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 search_grid_container">
                    <div class="col-md-2 col-sm-12">
                        <h6>Search By</h6>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 search_grid_input_container">
                        <div>
                            <input type="checkbox" id="Listing" name="Listing" value="Bike">
                            <label for="Listing">Listing Type</label><br>
                        </div>
                        <div>
                            <input type="checkbox" id="Accessibility" name="Accessibility" value="Bike">
                            <label for="Accessibility">Accessibility</label><br>
                        </div>
                        <div>
                            <input type="checkbox" id="Activities" name="Activities" value="Bike">
                            <label for="Activities">Activities</label><br>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 btn_grid_container">
                        <button class="btn reset_btn">Reset</button>
                        <button class="btn filter_btn">Apply Filters</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_app_about_us_content_container main_app_Become_host_container ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_nav">
                        <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">About</span></p>
                        <h3>About</h3>
                    </div>
                </div>
                <div class="col-md-12 ml-40">
                    <div class="mt-90">
                        <h5>Our Story</h5>
                    </div>
                </div>
                <div class="col-md-12 ml-40">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-60">
                            <p>We are developing a network of unique nature-based campsites and accomodations around New Zealand. We connect landowners who want to make an additional income through land sharing, to travellers seeking a nature-based escape nearby.</p>
                            <p>Our hosts offer a variety of listings, from bare land, to Glamping tents, private huts, cabins and tree houses, so guests can enjoy the outdoors however they want to, without necessarily having to compromise on comfort.</p>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-60">
                            <p>From organic farming and wild foraging, to jumping into in a private waterfall and birdwatching through native bush, we connect people with the land and its unique resources.</p>
                            <h3>We want for more people to get out there,
                                enjoy nature and further seek to help
                                preserve it.</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ml-40">
                    <div class="mt-45">
                        <h6>How Does Campaway Work?</h6>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 mt-70 about_us_banner_container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="about_poster_col">
                                <img src="./assets/images/about-browser-icon.png">
                                <h6 class="mt-37">Step 1: Browse</h6>
                                <p>Explore Hosts within a destination. Apply filters to narrow your options and save favourites to your Wishlist.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="about_poster_col">
                                <img src="./assets/images/about-book-icon.png">
                                <h6 class="mt-37">Step 2: Book</h6>
                                <p>Once you’ve found what you’re looking for, book in just a few clicks.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="about_poster_col">
                                <img src="./assets/images/about-car-icon.png">
                                <h6 class="mt-37">Step 3: Go!</h6>
                                <p>You’re all set! Check out your booking details or connect with your Host for local tips, advice and directions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ml-40">
                    <div class="mt-45">
                        <h6>About Us</h6>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row mt-60 about_card_row">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card about_card_container">
                                <a href="#" class="hover-effect">
                                    <img class="card-img-top" src="./assets/images/about-family-poster.png" alt="Card image cap">
                                </a>
                                <div class="card-body about_card_body">
                                    <h6>About Our Hosts</h6>
                                    <p>From cherry farms to properties adjoining national parks, Campaway gathers property owners around New Zealand, who want to share their unique outdoor experience.</p>
                                    <p> We verify each of our Hosts, and seek to help support the efforts, including conservational efforts, that owners put into their land.</p>
                                </div>
                                <a href="#" class="btn about_bottom_btn">Learn More About Becoming a Campaway Host</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card about_card_container">
                                <a href="#" class="hover-effect">
                                    <img class="card-img-top" src="./assets/images/about-sunset-poster.png" alt="Card image cap">
                                </a>
                                <div class="card-body about_card_body">
                                    <h6>Have some stunning land but don’t
                                        know what to do with it?</h6>
                                    <p>We can help you set up camp! We are working on setting up Glamping Tents around New Zealand. We’ll help aspiring Hosts design their own Campaway Base Camp, with full support along the way.</p>
                                </div>
                                <a href="#" class="btn about_bottom_btn">Contact Us To Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="card about_card_container">
                                <a href="#" class="hover-effect">
                                    <img class="card-img-top" src="./assets/images/about-camp-poster.png" alt="Card image cap">
                                </a>
                                <div class="card-body about_card_body">
                                    <h6>Health & Safety</h6>
                                    <p>Hosts are committing to enhanced COVID-19 cleaning protocols and listings are rated for cleanliness.</p>
                                    <p> By signing up on Campaway, our Hosts are committing to our Hosting Standards which work to keep a safe and pleasant environment for Campers.</p>
                                </div>
                                <a href="#" class="btn about_bottom_btn">Learn More About Our Hosting Standards</a>
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
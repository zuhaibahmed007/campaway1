<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renter Dashboard</title>
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
    <div class="main_app_renter_dashboard_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_profile_container">
                        <div class="breadcumb_user_content">
                            <h6>Dashboard</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <hr class="renter_line_through">
                <div class="col-md-12">
                    <div class="main_app_renter_greeting_container">
                        <h5>Welcome back <span>[USER NAME]</span></h5>
                    </div>
                </div>
                <hr class="renter_line_through">
                <div class="col-md-12">
                    <div class="main_app_renter_trips_container">
                        <h5>My Upcoming Trips</h5>
                    </div>
                </div>
                <hr class="renter_line_through">
                <div class="col-md-12">
                    <div class="main_app_renter_content_col">
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-10 mx-30">
                            <p>ID</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-30">
                            <p>Status</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-30">
                            <p>Date</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-30">
                            <p>Address</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-30">
                            <p>Check-in</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-30">
                            <p>Check-out</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-30">
                            <p>Campers</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-30">
                            <p>Pets</p>
                        </div>
                    </div>
                </div>
                <hr class="renter_line_through">
                <div class="col-md-12">
                    <div class="main_app_renter_detail_content_col">
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <i><img src="./assets/images/renter/renter-social-user-icon.png"></i>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <span>#1441</span>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <button class="btn renter_booking_btn">Booked</button>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <span>08/11/1990</span>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <span>Abc road</span>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <span>08/11/1990</span>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <span>10/11/1990</span>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <span>1</span>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <span>No</span>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <span style="font-weight: bold;">$12727.73</span>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-2 mx-15">
                            <button class="btn renter_detail_btn">Details</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="main_app_renter_veiw_container">
                        <a href="#">View all</a>
                    </div>
                </div>
                <hr class="renter_line_through">
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./assets/js/app.js"></script>

</html>
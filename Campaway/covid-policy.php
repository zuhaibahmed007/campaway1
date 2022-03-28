<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Covid Policy</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container covid_policy_hero_banner">
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
        <div class="main_app_header_banner_content_container_400vh term_service_container">
            <h2>United Against Covid19</h2>
            <p>A Shared Responsibility</p>
        </div>
    </div>
    <!-- SECTION -->
    <div class="main_app_covid_policy_content_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_nav">
                        <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">Our Covid19 Response</span></p>
                        <h3>Our Covid19 Response</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="covid_travel_message_container ml-40 mb-100">
                        <h6>Don’t travel if you’ve recently been exposed to or have symptoms of COVID-19</h6>
                        <p>To protect the health and safety of our community, we ask that you not check into a listing if any of the following are true:</p>
                        <ul>
                            <li>You are actively infected or have tested positive with COVID-19 in the past 30 days</li>
                            <li> You suspect you are sick or have been exposed and are awaiting test results to confirm or deny a diagnosis of COVID-19</li>
                            <li> You are showing symptoms or are concerned about possible infection of COVID-19</li>
                            <li> You’ve had close, sustained contact with an individual confirmed or suspected to be infected with COVID-19, within the last 14 days*</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="covid_policy_banner_container">
                        <div class="covid_poster_container">
                            <img src="./assets/images/covid-poster-icon.png" width="88">
                            <h6>Enhanced Cleaning</h6>
                            <p>We request that our Campaway Hosts follow a set of enhanced cleaning procedures between guest stays. Any host who does not follow these guidelines may have their calendars blocked or face other consequences.</p>
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
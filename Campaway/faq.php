<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway FAQs</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container faqs_hero_banner">
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
            <h2>Frequently Asked Questions</h2>
        </div>
    </div>
    <!-- SECTION -->
    <div class="main_app_faq_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_nav">
                        <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">FAQ</span></p>
                        <h3>Frequentlty Asked Questions</h3>
                    </div>
                </div>
                <div class="col-md-12 mt-50 faq_content_col">
                    <h6>Host</h6>
                </div>
                <div class="col-md-12 mb-40 faq_content_col">
                    <div id="accordion">
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremOne">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremOne" aria-expanded="true" aria-controls="collapseLoremOne"> <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>

                            <div id="collapseLoremOne" class="collapse" aria-labelledby="headingLoremOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremTwo">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremTwo" aria-expanded="false" aria-controls="collapseLoremTwo">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremTwo" class="collapse" aria-labelledby="headingLoremTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremThree">
                                <h5 class="mb-0">
                                    <span class="collapse_btn" data-toggle="collapse" data-target="#collapseLoremThree" aria-expanded="false" aria-controls="collapseLoremThree">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremThree" class="collapse show" aria-labelledby="headingLoremThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremFour">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremFour" aria-expanded="false" aria-controls="collapseLoremFour">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremFour" class="collapse" aria-labelledby="headingLoremFour" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremFive">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremFive" aria-expanded="false" aria-controls="collapseLoremFive">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremFive" class="collapse" aria-labelledby="headingLoremFive" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremSix">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremSix" aria-expanded="false" aria-controls="collapseLoremSix">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremSix" class="collapse" aria-labelledby="headingLoremSix" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremSeven">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremSeven" aria-expanded="false" aria-controls="collapseLoremSeven">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremSeven" class="collapse" aria-labelledby="headingLoremSeven" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremEight">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremEight" aria-expanded="false" aria-controls="collapseLoremEight">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremEight" class="collapse" aria-labelledby="headingLoremEight" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremNine">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremNine" aria-expanded="false" aria-controls="collapseLoremNine">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremNine" class="collapse" aria-labelledby="headingLoremNine" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremTen">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremTen" aria-expanded="false" aria-controls="collapseLoremTen">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremTen" class="collapse" aria-labelledby="headingLoremTen" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingLoremEleven">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseLoremEleven" aria-expanded="false" aria-controls="collapseLoremEleven">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseLoremEleven" class="collapse" aria-labelledby="headingLoremEleven" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-50 faq_content_col">
                    <h6>Camper</h6>
                </div>
                <div class="col-md-12 mb-40 faq_content_col">
                    <div id="accordion">
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <span class="collapse_btn" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingEight">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingNine">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingTen">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq_left_icon">
                            <div class="card-header" id="headingEleven">
                                <h5 class="mb-0">
                                    <span class="collapse_btn collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        <i class="fa" aria-hidden="true"></i>
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </h5>
                            </div>
                            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at sagittis diam, sit amet feugiat tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Contact Us</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container contact_us_hero_banner">
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
            <h2>Contact Us</h2>
        </div>
    </div>
    <!-- SECTION -->
    <div class="main_app_contact_us_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_nav">
                        <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">Contact Us</span></p>
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
            <div class="row contact_us_form_container">
                <form>
                    <div class="form-group">
                        <label for="name">Your name</label>
                        <input type="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <select class="form-control">
                            <option value="subject">Subject</option>
                            <option value="want_to_host">I want to Host</option>
                            <option value="want_to_book">I want to Book</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="contact_us_check_box_container">
                        <div class="form_check_host">
                            <input type="checkbox" class="form_check_input" id="check_host">
                            <label class="form_check_label" for="check_host">Host</label>
                        </div>
                        <div class="form_check_camper">
                            <input type="checkbox" class="form_check_input" id="check_camper">
                            <label class="form_check_label" for="check_camper">Camper</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_address">Your email</label>
                        <input type="email" class="form-control" id="email_address" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn contact_us_submit_btn">Send</button>
                </form>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include 'footer.php';?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./assets/js/app.js"></script>

</html>
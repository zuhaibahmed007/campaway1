<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaway Standard</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- HEADER -->
    <div class="main_app_navbar_container camper_standards_hero_banner">
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
            <h2>Camper Standards</h2>
            <p>All Campers should review and adhere to these standards for preparation, safety, and respect.</p>
        </div>
    </div>
    <!-- SECTION -->
    <div class="main_app_standard_camper_container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcumb_nav">
                        <p><span class="breadcumb_heading_one">Home</span> <img src="./assets/images/breadcumbs-section-nav-arow.png"><span class="breadcumb_heading_two">Camper Standards</span></p>
                        <h3>Camper Standards</h3>
                    </div>
                </div>
            </div>
            <div class="row grid_center_heading_left_content_row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="grid_center_content">
                        <h3>Prepare Your Stay</h3>
                        <p>Ensure you have all the relevant information before your stay.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 pt-50">
                    <div class="grid_left_content">
                        <h3>Review your Host’s listing details</h3>
                        <p>Carefully read through the information provided on the listing detail page and trip confirmation email. Let your Host know if you have any questions (your Host’s contact details are available on the listing page and booking confirmation
                            email as well).</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 pt-50">
                    <div class="grid_left_content">
                        <h3>Know Where You’re Going</h3>
                        <p>Some Hosts provide detailed directions on how to access their property. Keep this information handy in case you don’t have cell reception once you’re in the area.</p>
                    </div>

                </div>
            </div>
            <div class="row grid_center_heading_left_content_row p-80">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="grid_center_content">
                        <h3>Be A Respectful Guest</h3>
                        <p>Respect your Hosts and Their Land</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 pt-50">
                    <div class="grid_left_content">
                        <h3>Be Familiar and Comply With Host Rules</h3>
                        <p>Stay respectful of your Hosts and their land by taking the time to review any rules or restrictions they may have. Your Host may point out potential hazards or share relevant emergency information such as phone numbers or the location
                            of the nearest hospital</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 pt-50">
                    <div class="grid_left_content">
                        <h3>Limit Noise.</h3>
                        <p>Respect your Host’s quiet hours, and use your best judgment based on privacy and space to avoid being disruptive to others.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="grid_left_content">
                        <h3>Dispose of garbage, recycling, and compost responsibly.</h3>
                        <p>Follow your Host’s directions on where to dispose of trash. Make sure you dispose of your trash in the designated bins or bring compostable trash bags to pack out your trash as per your Host’s instructions. You can find this information
                            on the listing’s detail page.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="grid_left_content">
                        <h3>Dispose of human waste responsibly.</h3>
                        <p>Some Hosts provide detailed directions on how to access their property. Keep this information handy in case you don’t have cell reception once you’re in the area.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="grid_left_content">
                        <h3>Keep your pets under control.</h3>
                        <p>If your Host allows pets, ensure that you keep your pet under control at all times. This includes keeping them from causing harm or discomfort to Hosts, Campers, the land and local fauna and flora. Ensure your pets are kept quiet
                            during quiet hours and follow your Host’s on- or off-leash policies. This information can be found on the listing detail page.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="grid_left_content">
                        <h3>Be inclusive.</h3>
                        <p>Our Campaway community is an open and safe environment for everyone, regardless of race, nationality, gender, sexual orientation, ability, religion, or culture. We expect all our Campers to be inclusive and respectful towards their
                            Hosts and other guests, so that we can foster a community of trust and safety for all.</p>
                    </div>
                </div>
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
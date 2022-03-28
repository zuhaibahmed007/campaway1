<div class="main_app_footer_container">
    <div class="container">
        <div class="row footer_top_wrap">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="main_app_footer_about_container">
                    <img src="./assets/images/Campaway-Logo.png">
                    <p>We are developing a network of unique nature-based campsites and accomodations around New Zealand. We connect landowners who want to make an additional income through land sharing, to travellers seeking a nature-based escape nearby.</p>
                    <span><a href="#">Read More<img src="./assets/images/footer_right_arrow_right.png"></a></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="main_app_footer_explore_container footer_arrow_content_col">
                    <h3>Explore</h3>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./about.php">About</a></span></p>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./become-host.php">Become a Host</a></span></p>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./camper-standards.php">Camper Standards</a></span></p>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./hosting-standards.php">Hosting Standards</a></span></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="main_app_footer_company_details_container footer_arrow_content_col">
                    <h3>Company</h3>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./sustainability.php">Sustainability</a></span></p>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./covid-response.php">Our Covid19 Response</a></span></p>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./privacy-policy.php">Privacy Policy </a></span></p>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./terms-of-service.php">Terms of Service </a></span></p>
                    <p><img src="./assets/images/footer-arrow.png"><span><a href="./faq.php">FAQ</a></span></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="main_app_footer_contact_container footer_arrow_content_col">
                    <h3>Contact Us</h3>
                    <p><img src="./assets/images/footer-location-icon.png"><span>New Zealand</span></p>
                    <p><img src="./assets/images/footer-phone-icon.png"><span>+64 22 584 4260</span></p>
                    <p style="display: flex; align-items:center"><img src="./assets/images/footer-email-icon.png"><span>support@campaway.co.nz</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p>Campaway- All rights reserved - 2021 </p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="footer_social_container">
                            <div class="social_icons social_round">
                                <a class="btn-bg-facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="btn-bg-instagram" target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL  -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">  
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 modal_img_col" style="background-image: url(assets/images/login/Login-Modal-Cover.png);">
                            <h3>Welcome back to Campaway</h3>                
                        </div>
                        <div class="col-md-6 form_modal_col">
                            <h4>Login</h4>
                            <div class="social_btns_col">
                                <a href="#" class="facebook_btn">
                                    <div class="social_icons_col">
                                        <img src="assets/images/login/facebook-btn-logo.png">
                                    </div>
                                    <div class="social_icons_text_col">
                                        <span>Login with Facebook</span>
                                    </div>
                                </a>
                                <a href="#" class="google_btn">
                                    <div class="social_icons_col">
                                        <img src="assets/images/login/google-btn-logo.png">
                                    </div>   
                                    <div class="social_icons_text_col"> 
                                        <span>Login with Google</span>
                                    </div>      
                                </a>
                            </div>
                            <h4 class="text_center">Login</h4>
                            <form>
                                <div class="form-group">
                                    <input type="name" class="form-control" id="name" required placeholder="Username or Email">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email_address" placeholder="Password" required>
                                </div>
                                <div class="login_check_box_container">
                                    <div class="checkbox_col">
                                        <input type="checkbox" class="remember_check">
                                        <label class="remember_check" for="remember_check">Remember me</label>
                                    </div>
                                    <div class="checkbox_col">
                                        <input type="checkbox" class="forgot_check">
                                        <label class="forgot_check" for="forgot_check">Forgot Password?</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn form_sucess_btn">Log In</button>
                            </form>
                            <p>Don't have an account?<a href="#" class="registeration_link" type="button" data-toggle="modal" data-target="#registerModal">Register</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 modal_img_col" style="background-image: url(assets/images/login/Registeration-Modal-Cover.png);">
                            <h3>Welcome to Campaway</h3>                
                        </div>
                        <div class="col-md-6 form_modal_col">
                            <h4>Register</h4>
                            <form>
                                <div class="form-group">
                                    <select>
                                        <option value="gender">Gender</option>
                                        <option value="gender">Male</option>
                                        <option value="gender">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email_address" placeholder="Email" required>
                                </div>
                            
                                <p> We’ll text you a code to confirm your number. Standard message and data rates may apply.</p>
                                <div class="register_check_box_container">
                                    <div class="checkbox_col">
                                        <input type="checkbox" class="agree_check">
                                        <label class="agree_check" for="agree_check">I agree with your <a href="#"> Terms & Conditions</a></label>
                                    </div>
                                    <div class="checkbox_col">
                                        <input type="checkbox" class="privacy_policy_check">
                                        <label class="privacy_policy_check" for="privacy_policy_check">I agree with your <a href="./privacy-policy.php"> Privacy Policy</a></label>
                                    </div>
                                </div>
                                <button type="submit" class="btn form_sucess_btn login_submit_btn" type="button" data-toggle="modal" data-target="#resendCodeModal">Register</button>
                            </form>
                            <p class="text_center">Already have an account? <a href="#">Log In</a></p>
                            <span class="seprator">Or</span>
                            <div class="social_btns_col">
                                <a href="#" class="facebook_btn">
                                    <div class="social_icons_col">
                                        <img src="assets/images/login/facebook-btn-logo.png">
                                    </div>
                                    <div class="social_icons_text_col">
                                        <span>Login with Facebook</span>
                                    </div>
                                </a>
                                <a href="#" class="google_btn">
                                    <div class="social_icons_col">
                                        <img src="assets/images/login/google-btn-logo.png">
                                    </div>   
                                    <div class="social_icons_text_col"> 
                                        <span>Login with Google</span>
                                    </div>      
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="resendCodeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 modal_img_col" style="background-image: url(assets/images/login/Registeration-Modal-Cover.png);">
                            <h3>Welcome to Campaway</h3>                
                        </div>
                        <div class="col-md-6 form_modal_col">
                            <h4>Confirm your number</h4>
                            <h5>Enter the code we sent over SMS to 64 22 584 4260:</h5>
                            <div class="resend_code_container">
                                <div class="resend_col_2 pl-0">
                                    <input type="number" name="resend_code">
                                </div>
                                <div class="resend_col_2">
                                    <input type="number" name="resend_code">
                                </div>
                                <div class="resend_col_2">
                                    <input type="number" name="resend_code">
                                </div>
                                <div class="resend_col_2">
                                    <input type="number" name="resend_code">
                                </div>
                                <div class="resend_col_2">
                                    <input type="number" name="resend_code">
                                </div>
                                <div class="resend_col_2">
                                    <input type="number" name="resend_code">
                                </div>
                            </div>
                            <p> Didn’t get the Code? <a href="#">Contact Us</a>
                    
                            <div class="modal_btns_container">
                                <button type="submit" class="btn form_sucess_btn" type="button" data-toggle="modal" data-target="#registerdetailsModal">Register</button>
                                <button type="submit" class="btn modal_form_back_btn" type="button" data-toggle="modal" data-target="#resendCodeModal">Back</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerdetailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 modal_img_col" style="background-image: url(assets/images/login/Registeration-Modal-Cover.png);">
                            <h3>Welcome to Campaway</h3>                
                        </div>
                        <div class="col-md-6 form_modal_col">
                            <h4>Register</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstname" placeholder="First-name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname" placeholder="Last-name" required>
                                </div>
                                <p>Make sure it matches the name on your government ID.</p>
                                <div class="form-group">
                                    <input type="date" class="form-control" id="date_of_birth" placeholder="Date Of Birth" required>
                                </div>
                                <p>You need to be at least 18 years of age to sign up. Your birthdate will not be shared with other Campaway users</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Email" required>
                                </div>
                                <p>We’ll email you trip confirmations and receipts.</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" placeholder="First-name" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="confirm_password" placeholder="First-name" required>
                                </div>
                                <button type="submit" class="btn form_sucess_btn login_submit_btn" type="button" data-toggle="modal" data-target="#uploadsAvatarModal">Register</button>
                                <p class="text_center">Already have an account? <a href="#">Log In</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadsAvatarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 modal_img_col" style="background-image: url(assets/images/login/Registeration-Modal-Cover.png);">
                            <h3>Welcome to Campaway</h3>                
                        </div>
                        <div class="col-md-6 form_modal_col">
                            <h4>Add a profile photo</h4>
                            <div class="uploads_avatar_modal_container">
                                <img src="assets/images/login/carbon_user-avatar-filled.png">
                                <div class="file_btn">Upload a Photo
                                    <input type="file" name="file"/>
                                </div>
                            </div>
                            <button type="submit" class="btn form_sucess_btn login_submit_btn" type="button" data-toggle="modal" data-target="#successModal">Success</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 modal_img_col" style="background-image: url(assets/images/login/Registeration-Modal-Cover.png);">
                            <h3>Welcome to Campaway</h3>                
                        </div>
                        <div class="col-md-6 form_modal_col">
                            <div class="success_modal_container">
                                <img src="assets/images/login/success-logo.png">
                                <h3>Welcome to <span>Campaway</span></h3>
                                <p>Find your next nature-based <span>escape</span></p>
                                <button type="submit" class="success_modal_btn">Continue</button>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
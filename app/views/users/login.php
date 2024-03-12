
<?php require APPROOT .'/views/inc/header.php';?>



        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section  d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-lg-7">
                        <div class="welcome-intro">
                            <h1 class="text-white">Welcome back!</h1>
                            <p class="text-white my-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-5">
                        <!-- Contact Box -->
                        <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                            <!-- Contact Form -->
                            <form id="contact-form" action="<?php echo URLROOT; ?>/users/login" method="post">
                                <div class="contact-top">
                                    <?php flash('register_success')?>;
                                    <h3 class="contact-title">Sign In</h3>
                                    <h5 class="text-secondary fw-3 py-3">Fill all fields so we can get some info about you. We'll never send you spam</h5>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                    <div class="form-group">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope-open"></i></span>
                                              </div>
                                              <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' :  '';?>" name="email" placeholder="Email" 
                                              value="<?php echo $data['email'];?>">
                                              <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                              </div>
                                              <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' :  '';?>" name="password" placeholder="Password" 
                                              value="<?php echo $data['password'];?>">
                                              <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-bordered w-100 mt-3 mt-sm-4" type="submit">Sign In</button>
                                        <div class="contact-bottom">
                                            <span class="d-inline-block mt-3">By signing up, you accept our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <span class="d-block pt-2 mt-4 border-top">Don't have an account? <a href="<?php echo URLROOT;?>/users/register">Sign Up</a></span>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->
    </div>

    <?php require APPROOT .'/views/inc/footer.php';?>
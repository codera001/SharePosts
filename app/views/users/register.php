<?php require APPROOT .'/views/inc/header.php';?>
       

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section  d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-lg-7">
                        <div class="welcome-intro">
                            <h1 class="text-white">Create an account!</h1>
                            <p class="text-white my-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-5">
                        <!-- Contact Box -->
                        <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                            <!-- Contact Form -->
                            <form id="contact-form" method="post" action="<?php echo URLROOT; ?>/users/register">
                                <div class="contact-top">
                                    <h3 class="contact-title">Sign Up</h3>
                                    <h5 class="text-secondary fw-3 py-3">Fill all fields so we can get some info about you. We'll never send you spam</h5>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                              </div>
                                              <input type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' :  '';?>" name="name" placeholder="Name" 
                                              value="<?php echo $data['name'];?>"          
                                              >
                                              <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
                                            </div>
                                        </div>
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
                                        <div class="form-group">
                                            <div class="input-group">
                                              <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                              </div>
                                              <input type="password" class="form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' :  '';?>" name="confirm_password" placeholder=" Confirm password" 
                                              value="<?php echo $data['confirm_password'];?>">
                                              <span class="invalid-feedback"><?php echo $data['confirm_password_err'];?></span>
                                            </div>
                                        </div>
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input bg-warning" id="exampleCheck1">
                                            <label class="form-check-label contact-bottom" for="exampleCheck1"><span class=" ">By signing up, you accept our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></span></label>
                                          </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-bordered w-100 mt-3" type="submit">Sign Up</button>
                                    </div>
                                    <div class="col-12">
                                        <span class="d-block pt-2 mt-4 border-top">Already have an account? <a href="<?php echo URLROOT;?>/users/login">Sign In</a></span>
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
                <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
                    <title>sApp Shape</title>
                    <desc>Created with Sketch</desc>
                    <defs></defs>
                    <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                            <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                        </g>
                    </g>
                </svg>
            </div>
        </section>
        <!-- ***** Welcome Area End ***** -->
    </div>

    <?php require APPROOT .'/views/inc/footer.php';?>
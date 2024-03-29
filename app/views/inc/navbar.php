<!-- ***** Header Start ***** -->
<header class="navbar navbar-sticky navbar-expand-lg ">
    <div class="container position-relative">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>">
            <?php echo SITENAME; ?>
        </a>

        <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-inner">
            <!--  Mobile Menu Toggler -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav>
                <ul class="navbar-nav" id="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo URLROOT; ?>">
                            Home
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo URLROOT; ?>/pages/about">About</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:;">Inner Pages<span class="badge badge-pill badge-warning ml-2">New</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="pricing.html">Pricing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="download.html">Download</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="newsletter.html">Newsletter</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="thank-you.html">Thank you</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="404.html">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:;">Blog Pages</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="blog-two-column.html">Blog- 2 Column</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="blog-three-column.html">Blog- 3 Column</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="blog-left-sidebar.html">Blog- Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="blog-right-sidebar.html">Blog- Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:;">Blog Details</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="blog-details-left-sidebar.html">Blog Details- Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="blog-details-right-sidebar.html">Blog Details- Right Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:;">Accounts<span class="badge badge-pill badge-warning ml-2">New</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="signup.html">Signup</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="forgot.html">Reset Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="reviews.html">Reviews</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item disabled" href="#">More Coming Soon</a>
                                    </li>
                                </ul>
                            </li> -->
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link " href="#" style="color:#F0EB8D;">Welcome <?php echo $_SESSION['user_name'];?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo URLROOT; ?>/users/logout">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo URLROOT; ?>/users/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo URLROOT; ?>/users/register">Register</a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo URLROOT; ?>/pages/contact">Help</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- ***** Header End ***** -->
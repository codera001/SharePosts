<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container-fluid bg-light py-3">
<a href="<?php echo URLROOT;?>/posts " class="ms-5 btn btn-light text-white"><i class="fa fa-backward"></i>Back</a>
</div>

<!--====== Contact Area Start ======-->
<section id="contact" class="contact-area  ptb_100">

    <div class="container bg-light rounded-top-4">
        <h2 class="text-dark pt-4">Add Post</h2>
        <p class="text-dark">Create a post with this form</p>

        <!-- Contact Box -->
        <div class="contact-box text-center">
            <!-- Contact Form -->
            <form id="contact-form" method="POST" action="<?php echo URLROOT; ?>/posts/add">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group  mb-3">
                            <input type="text"
                                class="form-control w-100 <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>"
                                name="title" placeholder="Title" value="<?php echo $data['title']; ?>">
                            <span class="invalid-feedback">
                                <?php echo $data['title_err']; ?>
                            </span>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea
                                class="form-control w-100 <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"
                                name="body" placeholder="Body text"><?php echo $data['body'] ?></textarea>
                            <span class="invalid-feedback">
                                <?php echo $data['body_err']; ?>
                            </span>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-lg btn-block mt-5 mb-3"><span class="text-white pr-3"><i
                                    class="fas fa-paper-plane"></i></span>Submit</button>
                    </div>
                </div>
            </form>
            <p class="form-message"></p>
        </div>


    </div>
</section>
<!--====== Contact Area End ======-->

<!--====== Map Area Start ======-->
<section class="section map-area">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.596666220624!2d-0.16124461362595294!3d51.46556134684942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487605a25375dfb7%3A0xe0d9fa09dcf932a8!2s15%20Theatre%20St%2C%20Battersea%2C%20London%20SW11%205ND%2C%20UK!5e0!3m2!1sen!2sbd!4v1567427969685!5m2!1sen!2sbd"
        width="100" height="100" style="border:0;" allowfullscreen=""></iframe>
</section>
<!--====== Map Area End ======-->

<?php require APPROOT . '/views/inc/footer-main.php'; ?>
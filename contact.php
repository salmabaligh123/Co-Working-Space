<html>

<head>
    <?php include "header.php" ?>
</head>

<body>
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>Contact Us</h2>

                <ul class="pages-list">
                    <li><a href="HomePage.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Info Area -->
    <div class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Contact Information</span>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info">
                        <div class="image">
                            <img src="contact-info/contact-info-3.png" alt="image">
                        </div>
                        <h3>Working Hours</h3>
                        <p> Everyday , 9:00 am - 11:00 pm
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Get in Touch</span>
                <h2>Fill Up the Form and We will Contact You </h2>
            </div>

            <div class="contact-form">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Submit Now <i class='bx bx-send'></i><span></span></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->
    <?php include "footer.php" ?>
</body>

</html>
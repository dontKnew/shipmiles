<?php include('header.php'); ?>

    <section class="page-title page-title-4 bg-overlay bg-overlay-dark-our bg-parallax" id="page-title">
        <div class="bg-section">
            <!--<img src="assets/images/bg4.png" alt="Background" />-->
            <!--<img src="assets/images/page-titles/10.jpg" alt="Background" />-->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="title text-lg-left">

                        <div class="title-heading">
                            <h1>Contact Us</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb justify-content-lg-start">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="contact-info" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="contact-details">
                                <h6>Contact Details</h6>
                                <ul class="list-unstyled info">
                                    <li><span class="fas fa-map-marker-alt"></span><a href="javascript:void(0)"> 151,
                                            Ground Floor, Sarai Jullena, New Friends Colony, New Delhi, Delhi 110025</a>
                                    </li>
                                    <li><span class="fas fa-envelope"></span><a href="mailto:  support@shipmiles.com">
                                            support@shipmiles.com</a></li>
                                    <li><span class="fas fa-phone-alt"></span><a onclick="gtag_call_conversion();"
                                                                                 href="tel:  +91 8860568430"> +91
                                            8860568430</a></li>
                                    <li><span class="fas fa-phone-alt"></span><a onclick="gtag_call_conversion();"
                                                                                 href="tel: 011-49952494">
                                            011-49952494</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <form onsubmit="gtag_form_conversion();" class="form-bg" method="post" action="sendmail.php">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <input class="form-control" type="text" name="name" placeholder="name" required=""/>
                            </div>
                            <div class="col-12 col-lg-4">
                                <input class="form-control" type="email" name="email" placeholder="email" required=""/>
                            </div>
                            <div class="col-12 col-lg-4">
                                <input class="form-control" type="text" name="phone" placeholder="Phone" required=""/>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" cols="30" rows="2" placeholder="message"
                                          required=""></textarea>
                            </div>
                            <div class="col-12">
                                <input class="btn btn--primary" type="submit" name="contact_submit" value="Submit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>


    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14017.184666304329!2d77.2712298!3d28.560868!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc5cb8fc0f58efa4!2sShipmiles!5e0!3m2!1sen!2sin!4v1640062023247!5m2!1sen!2sin"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


<?php include('footer.php'); ?>
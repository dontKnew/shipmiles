<footer class="footer footer-1 ftr-img">

    <div class="footer-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-about">
                    <div class="footer-widget-title">
                        <h5>About Us</h5>
                    </div>
                    <div class="widget-content">
                        <p>Shipmiles is a leading international courier and cargo company based in Delhi, having
                            operations in Delhi, Noida, Faridabad, Indirapuram, Ghaziabad, and Gurugram. We are a
                            Company with Vision. Encouraging the sharing of new ideas, thoughtful Planning, and
                            responsive Management.</p>

                        <div class="module module-social"><a class="share-facebook"
                                                             href="https://www.facebook.com/Shipmiles/?ref=pages_you_manage"
                                                             target="_blank"><i class="fab fa-facebook-f"> </i></a>
                            <a class="share-instagram" href="https://www.instagram.com/shipmiles_official/"
                               target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="share-twitter" href="https://twitter.com/Shipmiles_" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                            <a class="share-twitter"
                               href=" https://www.linkedin.com/company/shipmiles/about/?viewAsMember=true"
                               target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <!--<a class="share-twitter" href="javascript:void(0)"><i class="fab fa-youtube"></i></a>-->
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-2 footer-widget widget-links">
                    <div class="footer-widget-title">
                        <h5>Quick Links</h5>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">FAQ's</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="term-condition.php">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 footer-widget widget-links">
                    <div class="footer-widget-title">
                        <h5>Our Services</h5>
                    </div>
                    <div class="widget-content">
                        <ul>
                            <li><a href="Our-services.php#international">International Courier Services</a></li>
                            <li><a href="Our-services.php#cargo">Cargo Services</a></li>
                            <li><a href="Our-services.php#parcel">Parcel Delivery</a></li>
                            <li><a href="Our-services.php#medicine">Medicine Delivery</a></li>
                            <li><a href="Our-services.php#food">Food Item Delivery</a></li>
                            <li><a href="Our-services.php#warehouseing">Warehouse & Distribution</a></li>
                            <li><a href="Our-services.php#warehouseing">Import From Overseas</a></li>
                            <li><a href="Our-services.php#E-commerce">E-Commerce Shipping Worldwide</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm-6 col-md-6 col-lg-4 footer-widget widget-contact">
                    <div class="footer-widget-title">
                        <h5>Reach Us</h5>
                    </div>
                    <div class="widget-content">
                        <p><span><strong>Location:</strong></span>


                            <b>151, Ground Floor, Sarai Jullena,</b><br> New Friends Colony, New Delhi,<br> Delhi 110025

                        </p>
                        <p><span><strong>Phone:</strong></span> <a href="tel:+91 8860568430"> +91 8860568430</a></p>
                        <p><span><strong>Landline:</strong></span> <a href="tel:+91 0149952494"> 011- 49952494</a></p>


                        <p><span><strong>Email:</strong></span> <a href="mailto:support@shipmiles.com">
                                support@shipmiles.com</a></p>


                    </div>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="row">
            <div class="col-md-12 col-md-12 text--center footer-copyright">
                <div class="copyright"><span>&copy; <?= date("Y"); ?>  SHIPMILES | All Right Reserved | Contact Us : <a
                                href="tel:+91 8860568430"> +91 8860568430</a> | </span><a target="_blank"
                                                                                          href="https://goo.gl/maps/MGNbHs9bGf7KzDF19">
                        Google Map Direction</a></div>
            </div>
        </div>

    </div>

</footer>
<div class="backtop" id="back-to-top"><i class="fas fa-chevron-up"></i></div>
</div>
<div class="fix-footer">
    <p>
        <a onclick="gtag_call_conversion();" href="tel:+918860568430">
            <img alt="phoneNo" src="assets/images/icon/phone.png"><span>Call</span>
        </a>
    </p>
    <p>
        <a href="contact.php#contact">
            <img alt="email" src="assets/images/icon/email.png"><span>Fill a form</span>
        </a></p>
    <p>
        <a onclick="gtag_whatsapp_conversion();"
           href="https://api.whatsapp.com/send?phone=918860568430&amp;text=Hello,%20I%20am%20interested%20in%20Shipmiles%20International%20Courier%20Please%20get%20in%20touch%20!"><img
                    alt="WhatsApp" src="assets/images/icon/whatsapp.png"><span>Whatsapp</span></a></p>
</div>


<script data-cfasync="false"
        src="https://demo.zytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/functions.js"></script>

<script>
    $(document).ready(function () {
        if ($('#myModal').length) {
            setTimeout(function () {
                $('#myModal').modal('show');
            }, 3000)
        }
    })
</script>
<script>
    $(document).ready(function () {
        $('#submit12').click(function () {
            var len = Number($('#lenght').val());
            var beath = Number($('#breadth').val());
            var height = Number($('#height').val());
            var total = len * beath * height;
            var result = total / 5000;
            $('#results').val(result);
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#submit122').click(function () {
            var len_1 = Number($('#lenght_1').val());
            var beath_1 = Number($('#breadth_1').val());
            var height_1 = Number($('#height_1').val());
            var total_1 = len_1 * beath_1 * height_1;
            var result_1 = total_1 / 305;
            $('#results_1').val(result_1);
        });
    });
</script>

</body>

</html>
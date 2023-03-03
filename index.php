
<?php
    require_once (__DIR__.'/library/config.php');
    $country_list = $db->table("csc_country")->orderBy("name", "asc")->get()->toArray();
    $package_type = $db->table("package_type")->orderBy("sort_order", "asc")->get()->toArray();
?>

<?php include('header.php'); ?>

    <section class="slider slider-3" id="slider-3">
        <div class="container-fluid pr-0 pl-0">
            <div class="carousel owl-carousel custom-carousel carousel-navs" data-slide="1" data-slide-rs="1"
                 data-autoplay="false" data-nav="true" data-dots="false" data-space="0" data-loop="true"
                 data-speed="800" data-slider-id="#custom-carousel">

                <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                    <div class="bg-section"><img src="assets/img/banner/shipmiles_img.jpg" alt="Background"/></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <h1 class="slide-headline">International</br> Courier Service </br>
                                        <span style="font-size:35px">Right From Your Doorstep!</span></h1>
                                    <p class="slide-desc">
                                        <!--Right From Your Doorstep! -->
                                        Global Coverage via established consolidators to meet every service</br>
                                        requirement wheather express or standard </p>
                                    <div class="slide-buttons"><a class="btn btn--white btn--inverse" href="about.php">more
                                            about us</a>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                    <div class="bg-section"><img src="assets/img/banner/shipmiles_banner_011.jpg" alt="Background"/>
                    </div>
                    <!--bg3.png-->
                    <!--shipmiles_img2.jpg-->
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <p class="slide-subheadline"></p>
                                    <h2 class="slide-headline">The Pioneer in International Shipping Services</h2>
                                    <p class="slide-desc">Ship All over the world - USA, UK, Europe, Australia, New
                                        Zealand, Africa, UAE, Middle East and more than 220 other countries.</p>
                                    <div class="slide-buttons"><a class="btn btn--primary" href="about.php">more about
                                            us</a><a class="btn btn--white" href="Our-services.php">our services</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="slide d-flex align-items-center bg-overlay bg-overlay-dark">
                    <div class="bg-section"><img src="assets/img/banner/Shipmiles-New-Banners.jpg" alt="Background"/>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <p class="slide-subheadline"></p>
                                    <h2 class="slide-headline">
                                        Medicines, Parcels & Documents Delivery
                                        <!--Medicine Delivery International  Services-->
                                    </h2>
                                    <p class="slide-desc"> Quality Control System, 100% Satisfaction Guarantee
                                        <br>Highly Professional Staff, Accurate Testing Processes
                                        <br>Unrivalled workmanship, Professional and Qualified

                                    </p>
                                    <!--<p class="slide-desc"> Highly Professional Staff, Accurate Testing Processes</p>-->
                                    <!--<p class="slide-desc"> Unrivalled workmanship, Professional and Qualified</p>-->
                                    <!--<p class="slide-desc">Shipmiles International is one of the best choices for shipping medicines from India. Ship All over the world - USA, UK, Europe, Australia, New Zealand, Africa, UAE, Middle East and more than 220 other countries.</p>-->

                                    <div class="slide-buttons"><a class="btn btn--primary" href="about.php">more about
                                            us</a><a class="btn btn--white" href="Our-services.php">our services</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>

    <div class="top-marquee">
        <div class="container">
            <div class="home-marquee">
                <marquee>
                    <div class="banner-bottom-content">
                        <ul>
                            <li><i class="fas fa-truck"></i>&nbsp;&nbsp;Free Door Step Pick-up |</li>
                            <li> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-home"></i> Door-to-Door Services |</li>
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-gift"></i> Discount Offer Available</li>
                        </ul>
                    </div>
                </marquee>
            </div>
        </div>
    </div>


    <section class="pd-60 cases-clients cta cta-6 fornt-form" id="request-quote">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-6 col-lg-5">
                    <div class="banner-box">
                        <div class="bg-color">

                            <p><b>Flexible, Affordable & Reliable solutions</b></p>


                            <h6>Ship With Best Delivery <br>Service Options!</h6>


                        </div>


                        <div class="row">

                            <div class="col-md-12">
                                <div class="box-content">
                                    <h6>International Express</h6>
                                    <ul>
                                        <li><i class="fas fa-angle-right"> </i> Deliver within 3 to 4 Working days</li>
                                        <li><i class="fas fa-angle-right"></i> Ideal for Priority Deliveries</li>
                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="box-content">
                                    <h6>International Economy</h6>
                                    <ul>
                                        <li><i class="fas fa-angle-right"></i> Deliver within 5 to 8 Working days</li>
                                        <li><i class="fas fa-angle-right"></i> Cost effective solution</li>
                                    </ul>

                                </div>
                            </div>

                        </div>


                    </div>


                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="contact-panel contact-panel-2  f-page contact-ab">
                        <div class="contact-card">
                            <div class="contact-body trackFormActive">
                                <div class="row">
                                    <div class="col-md-12">

                                        <form class="contactForm track-form mb-0" method="get" action="calculate-charge.php">
                                            <div class="row">

                                                <div class="col-12 col-lg-6">
                                                    <div class="select-container">
                                                        <p> Pickup Pincode From</p>
                                                        <input class="form-control" type="number" name="pickup_pincode"
                                                               placeholder="Enter Pickup Pincode" required/>
                                                    </div>
                                                    <div class="select-container">
                                                        <p> Destination</p>
                                                        <select name="destination" class="form-control">
                                                            <option value="">--Select Country--</option>
                                                            <?php foreach($country_list as $cl): ?>
                                                                <option value="<?=$cl->id?>"><?=$cl->name?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="select-container">
                                                        <div class="select-container">
                                                            <p> Package Type?</p>
                                                            <select class="form-control" name="package_type">
                                                                <option value="">Select Package</option>
                                                                <?php foreach($package_type as $pt): ?>
                                                                    <option value="<?=$pt->id?>"><?=$pt->name?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-lg-6">

                                                    <div class="select-container">
                                                        <p> Schedule Pickup</p>
                                                        <select class="form-control" name="freight">
                                                            <option value="As soon as possible">As soon as possible
                                                            </option>
                                                            <option value="upto one week">upto one week</option>
                                                        </select>
                                                    </div>

                                                    <div class="select-container">
                                                        <p> Package Weight?</p>
                                                        <select class="form-control" name="package_weight" required>
                                                            <option value="">-- Select Weight --</option>
                                                            <?php foreach($weightArr as $wk=>$weight): ?>
                                                                <option value="<?=$wk?>" ><?=$weight?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="select-container">
                                                        <div class="select-container">
                                                            <p> Phone No.</p>
                                                            <input class="form-control" type="text" name="phone"
                                                                   placeholder="10 Digit Mobile No."
                                                                   pattern="[7-9]{1}[0-9]{9}" required/>

                                                        </div>
                                                    </div>

                                                </div>



                                                <div class="col-12 text-center">
                                                    <input class="btn btn--secondary btn--block index-fbtn"  type="submit" value="Calculate Charges"/>
                                                </div>
                                                <div class="col-12">
                                                    <div class="contact-result"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="about about-2 about-3" id="about-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="heading heading-9">
                        <p class="p-120" style="color:#007cf9;"><b>Delivering on Value, Service and Experience
                                Worldwide</b></p>
                        <h2 class="heading-title">Welcome to Shipmiles</h2>
                    </div>
                    <div class="about-block">
                        <div class="block-left">
                            <p>Shipmiles is a leading international courier and cargo company based in Delhi, having
                                operations in Delhi, Noida, Faridabad, Indirapuram, Ghaziabad and Gurugram. Our sole aim
                                is to offer a complete logistics solution for both corporate patrons and individual
                                alike. </p>
                            <p>Shipmiles has its own 21+ years of heritage as a leading global logistics service
                                provider for which we pride ourselves on offering the highest possible level of
                                professionalism and personal care.</p>
                            <p> Having tie-ups with the major last-mile delivery companies of the world enables us to
                                offer an exceptional international parcel service that is fast, efficient, and
                                reliable.</p>
                            <div class="slide-buttons aboutus-btn"><a class="btn btn--white" href="about.php">more about
                                    us</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-1">
                    <div class="about-img">
                        <div class="bg-section">
                            <img src="assets/images/about3.png" class="img-fluid" alt="about Image">
                        </div>
                        <div class="about-card">
                            <h6>Flexibile, Improved & Accelerated Solutions!</h6>
                            <p>Providing full range of service in the sphere transportation worldwide.</p><a
                                    href="international-courier-services.php"><i class="icon-arrow-right"></i> Our
                                Services</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="features-bar ic-service" id="features-bar">
        <div class="container">
            <div class="why-choose-h">
                <h2 class="heading-title">
                    Why Choose Shipmiles For International Courier Service?
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-panel">
                        <img src="assets/images/flaticon/trust.png" alt="">
                        <h6>Reliable & Trustworthy</h6>
                        <p>Reliability, Quality and Affordability is crucial to our customers, so it is crucial to us.
                            You can trust us for hassle free shipping experience.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-panel">
                        <img src="assets/images/flaticon/pickup.png" alt="">
                        <h6>Free pickup & packing</h6>
                        <p>We offer free pickup service from anywhere in Delhi/NCR at no extra cost and proper packaging
                            assistance for safe and damage-free transit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-panel">
                        <img src="assets/images/flaticon/fast-delivery.png" alt="">
                        <h6>Fast Transit service</h6>
                        <p>Shipmiles guarantees speedy delivery that values your time, considers your budget, and offers
                            you responsive customer support.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-panel">
                        <img src="assets/images/flaticon/door-to-door.png" alt="">
                        <h6>Door to Door deliveries</h6>
                        <p>Place an order for parcel collection from your home and relax. Your courier will pick up the
                            parcel from your doorstep and deliver it to your destination.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-panel">
                        <img src="assets/images/flaticon/idea.png" alt="">
                        <h6>Solutions for individual and businesses</h6>
                        <p>We have a complete logistics solution for traders, travellers, exporters, importers and
                            individuals. We'll make you a deal tailored right for your business.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-panel">
                        <img src="assets/images/flaticon/transparency.png" alt="">
                        <h6>Transparent (no hidden fee/surcharges)</h6>
                        <p>Shipmiles is committed to providing reliable service with no hidden cost. All our charges are
                            inclusive of Indian tax(IGST), fuel surcharges, and covid charges. </p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-panel">
                        <img src="assets/images/flaticon/tracking.png" alt="">
                        <h6>Real Time Tracking Facility</h6>
                        <p>We provide online tracking facility for your parcel all over the way from pick up to delivery
                            so you’ll be able to keep an eye on every move of your packet.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-panel">
                        <img src="assets/images/flaticon/custom-clearance.png" alt="">
                        <h6>Custom clearance Expertise</h6>
                        <p>We take care of the entire formalities including a hassle-free custom clearance at all major
                            domestic and international airports.</p>

                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="cases-clients bg-parllax" id="cases-clients-1">
        <div class="cases-standard">
            <div class="container">
                <div class="heading text-center">
                    <p class="heading-subtitle">Explore Now</p>
                    <h2 class="heading-title">Our Services</h2>
                </div>
                <div class="row">
                    <div class="col-12">


                        <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1"
                             data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                             data-speed="3000">
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img"><img src="assets/images/work/full/international.png"
                                                               alt="work Item Image"/></div>

                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#international">International Courier
                                                    Services</a></h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>The shipmiles has grown and placed itself as an ultimate service provider
                                                in the Courier industry in India. We have already registered our
                                                presence.</p>

                                        </div>
                                        <div class="case-more"><a href="Our-services.php#international"><i
                                                        class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img"><img src="assets/images/work/full/2.jpg"
                                                               alt="work Item Image"/></div>

                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#cargo">Cargo Services</a></h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>we are involved into providing Exim Cargo Service to our customers.
                                                Furthermore, this service is acknowledged by customer for its timely
                                                execution and reasonable price.</p>
                                            <!--<p>Our flight support centre provides the client-centered service that you should expect at any time.</p>-->
                                        </div>
                                        <div class="case-more"><a href="Our-services.php#cargo"><i
                                                        class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img"><img src="assets/images/work/full/parcel1.png"
                                                               alt="work Item Image"/></div>

                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#parcel">Parcel Delivery</a></h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>Our excellent International Parcel Services have helped us gain the trust
                                                and loyalty of our clients located in different regions of India.</p>

                                        </div>
                                        <div class="case-more"><a href="Our-services.php#parcel"><i
                                                        class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img"><img src="assets/images/work/full/ex.png"
                                                               alt="work Item Image"/></div>

                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#baggage">Excess Baggage</a></h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>We also provide Door-to-Door International Baggage Delivery from your
                                                residence. Get a quick quote now for affordable luggage delivery to any
                                                destination worldwide.</p>
                                            <!--We'll collect from your doorstep and deliver direct to your final destination.</p>-->
                                            <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>-->
                                        </div>
                                        <div class="case-more"><a href="Our-services.php#baggage"><i
                                                        class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img"><img src="assets/images/work/full/food.png"
                                                               alt="work Item Image"/></div>

                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#food">Food Item Delivery</a></h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>Our international food product express ensures that the perishable
                                                commodities reach you in the best of time and best of conditions, right
                                                at your doorstep.</p>

                                        </div>
                                        <div class="case-more"><a href="Our-services.php#food"><i
                                                        class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img"><img src="assets/images/work/full/wherehouse.png"
                                                               alt="work Item Image"/></div>

                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#warehouseing">Warehousing & Distribution</a>
                                            </h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>A warehouse can simply be defined as a planned space usually a large
                                                commercial building for handling and storage of goods. </p>
                                            <!--Therefore warehousing refers to all the processes involved in the storage and handling of goods in such a planned space. </p>-->
                                            <!--<p>We provide Warehousing Service and turnkey distribution facilities that are strategically located to serve you. </p>-->
                                        </div>
                                        <div class="case-more"><a href="Our-services.php#warehouseing"><i
                                                        class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img"><img src="assets/images/work/full/import3.png"
                                                               alt="work Item Image"/></div>

                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#Import">Import From Overseas</a></h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>
                                                Looking for inbound services from any corner of the world.We can
                                                simplify a number of issues for the importers such as language
                                                differences, payment methods, and increased paperwork requirements.</p>

                                        </div>
                                        <div class="case-more"><a href="Our-services.php#Import"><i
                                                        class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>

                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img">
                                        <!--<img src="assets/images/work/full/parcel.png" alt="work Item Image" />-->
                                        <img src="assets/images/work/full/ms.png" alt="work Item Image"/>
                                    </div>

                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#medicine">Medicine Delivery</a></h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>Shipmiles is one of the best choices for shipping medicines from India.
                                                The company understands the intricacies involved in the process and
                                                makes sure that all necessary steps are done with care.</p>

                                        </div>
                                        <div class="case-more"><a href="Our-services.php#medicine
"><i class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>


                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="case-img"><img src="assets/images/work/full/shipping.png"
                                                               alt="work Item Image"/></div>
                                    <!--ecommer.png-->
                                    <div class="case-content">
                                        <div class="case-title">
                                            <h4><a href="Our-services.php#E-commerce">E-commerce Shipping worldwide</a>
                                            </h4>
                                        </div>
                                        <div class="case-cat"></div>
                                        <div class="case-desc">
                                            <p>Putting an effective E-commerce shipping strategy in place is one of the
                                                most impactful steps you can take to grow your business with
                                                Shipmiles.</p>

                                        </div>
                                        <div class="case-more"><a href="Our-services.php#E-commerce"><i
                                                        class="icon-arrow-right"></i> Explore Now</a></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <section class="globe-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="world-img">
                        <img src="assets/images/google-map.png" usemap="#logos">
                        <div class="map-heading">
                            <h4>Connecting The Dots Across The Globe</h4>
                        </div>

                        <div class="map-links">
                            <div class="usa-india">
                                <a href="courier-to-usa.php">Courier to USA from India</a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>

                            <div class="uk-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-uk.php">Courier to UK from India </a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>
                            <div class="n-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-netherlands.php"> Courier to Netherlands from India</a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>

                            <div class="g-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-germany.php"> Courier to Germany from India</a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>
                            <div class="uae-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-uae.php">Courier to UAE from India </a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>
                            <div class="m-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-malasia.php"> Courier to Malaysia from India</a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>
                            <!--<div class="sa-india">-->
                            <!--    <div class="circle-ripple"></div>-->
                            <!--    <a href="courier-to-saudi-arabia.php">Courier to South Africa from India </a>-->
                            <!--    <div class="circle">-->
                            <!--       <p class="text"></p>-->
                            <!--     </div>-->
                            <!--</div>-->
                            <div class="as-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-australia.php">Courier to Australia from India </a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>
                            <div class="nz-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-new-zealand.php"> Courier to New Zealand from India</a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>
                            <!--<div class="usa-india">-->
                            <!--    <a href="courier-to-usa.php"> </a>-->
                            <!--</div>-->
                            <div class="c-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-canada.php"> Courier to Canada from India</a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>
                            <div class="sing-india">
                                <div class="circle-ripple"></div>
                                <a href="courier-to-singapur.php"> Courier to Singapore from India</a>
                                <div class="circle">
                                    <p class="text"></p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="cases-clients bg-parllax" id="cases-clients-1">
        <div class="cases-standard">
            <div class="container">
                <div class="heading text-center">
                    <!--<p class="heading-subtitle">Explore Now</p>-->
                    <h2 class="heading-title">Our Service Partners</h2>
                </div>
                <div class="row">
                    <div class="col-12">


                        <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="1"
                             data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                             data-speed="3000">
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">

                                        <!--<img src="assets/img/new-logo/FedEx.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/Trackon.png" alt="work Item Image"/>
                                    </div>
                                </div>
                            </div>


                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">

                                        <!--<img src="assets/img/new-logo/Aramex.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/UPS.png" alt="work Item Image"/>
                                    </div>


                                </div>
                            </div>
                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">
                                        <!--<img src="assets/img/new-logo/Bluedart.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/TNT.png" alt="work Item Image"/>
                                    </div>


                                </div>
                            </div>

                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">
                                        <!--<img src="assets/img/new-logo/Delhivery.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/Safexpress.png" alt="work Item Image"/>
                                    </div>


                                </div>
                            </div>


                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">
                                        <!--<img src="assets/img/new-logo/dhl.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/FedEx.png" alt="work Item Image"/>
                                    </div>


                                </div>
                            </div>

                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">
                                        <!--<img src="assets/img/new-logo/DTDC.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/DTDC.png" alt="work Item Image"/>
                                    </div>
                                </div>
                            </div>

                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">
                                        <!--<img src="assets/img/new-logo/TNT.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/DHL_Logo.svg.png" alt="work Item Image"/>
                                    </div>
                                </div>
                            </div>


                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">
                                        <!--<img src="assets/img/new-logo/Trackon.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/Bluedart.png" alt="work Item Image"/>
                                    </div>
                                </div>
                            </div>


                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">
                                        <!--<img src="assets/img/new-logo/UPS.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/Aramex.png" alt="work Item Image"/>
                                    </div>


                                </div>
                            </div>


                            <div class="case-item">
                                <div class="case-item-warp">
                                    <div class="p-logos">
                                        <!--<img src="assets/img/new-logo/Safexpress.jpg" alt="work Item Image" />-->

                                        <img src="assets/img/new-logo/Delhivery.png" alt="work Item Image"/>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>


    <!--client slider test-->


    <section class="counters bg-count" id="counters-1">
        <div class="container container-wide">
            <div class="heading heading-light heading-10">
                <div class="row">

                    <div class="col-md-6">

                        <h2 class="heading-title">
                            Comprehensive one stop<br> solution for all your <br>logistics need!

                        </h2>
                        <p style="color:#fff; margin:0 0 30px 0;">A team of qualified professionals with innovative
                            options to<br> accomodate your every need. </p>

                        <div class="btn-search">
                            <ul>
                                <li>
                                    <a href="contact.php"><i class="fas fa-long-arrow-alt-right"></i> Get a quote </a>
                                </li>


                                <span style="color:#fff;">OR</span>
                                <li>
                                    <a href="tel:+91 8860568430"><i class="fas fa-long-arrow-alt-right"></i> Call us now
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="counters-container" style="margin-top: 50px;">

                            <div class="counter counter-2">
                                <div class="counter-icon">
                                    <img src="assets/img/star_icon.svg" alt="work Item Image"/>
                                </div>
                                <div class="counter-num"><span class="counting">21</span>

                                </div>
                                <div class="counter-name">
                                    <h6>years of experience</h6>
                                </div>
                            </div>
                            <div class="counter counter-2">
                                <div class="counter-icon">
                                    <!--<i class="flaticon-026-delivery-man"></i>-->
                                    <img src="assets/img/group like.svg" alt="work Item Image"/>
                                </div>
                                <div class="counter-num"><span class="counting">25,000</span>

                                </div>
                                <div class="counter-name">
                                    <h6>Satisfied customers</h6>
                                </div>
                            </div>
                            <div class="counter counter-2">
                                <div class="counter-icon">
                                    <!--<i class="flaticon-007-shopping-bag"></i>-->
                                    <img src="assets/img/truck.svg" alt="work Item Image"/>
                                </div>
                                <div class="counter-num"><span class="counting">9,716</span>

                                </div>
                                <div class="counter-name">
                                    <h6>delivered goods</h6>
                                </div>
                            </div>

                            <div class="counter counter-2">
                                <div class="counter-icon">
                                    <!--<i class="flaticon-026-delivery-man"></i>-->
                                    <img src="assets/img/world logo.svg" alt="work Item Image"/>
                                </div>
                                <div class="counter-num"><span class="counting">220</span>

                                </div>
                                <div class="counter-name">
                                    <h6>countries serviced</h6>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>


    <section class="testimonial testimonial-4 bg-overlay bg-overlay-theme">
        <div class="bg-section">
            <!--<img src="assets/images/background/1.jpg" alt="background-img" />-->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-light heading-11 text-center">
                        <h2 class="heading-title">What our customers say about us?</h2>
                        <!--<h5 class="heading-title2">What our customers say about us?</h5>-->

                        <p class="heading-desc">we have collected thousands of reviews with feedback from our
                            customers.</p>
                        <p class="heading-desc">We sincerely appreciate every bit of feedback, and we are looking
                            forward to yours.</p>

                    </div>
                </div>
                <div class="col-12">
                    <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1"
                         data-autoplay="false" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                         data-speed="800">
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Pleasantly surprised to receive such a professional service and response from
                                            the Shipmilesteam in Delhi.They were extremely helpful and provided really
                                            good service. I hope that others too have good experiences with them.</p>
                                        <div class="img-meta-container">
                                            <div class="testimonial-meta">
                                                <h4>Irshad Khan</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Super satisfied with the services of Shipmiles! Great value for money as
                                            compared to direct carriers and Ahmad,who I was communicating with, was
                                            always prompt and clear about the procedure or queries I had. Very happy
                                            with the services!</p>
                                        <div class="img-meta-container">
                                            <div class="testimonial-meta">
                                                <h4>Swati Jindal</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Excellent and quick service. Trustworthy.<br>
                                            We sent a parcel from India to UK it was handled and delivered in a safe
                                            way. We were kept updated at each step. We will be very happy to refer this
                                            service to anyone whom we know.
                                        </p>
                                        <div class="img-meta-container">
                                            <div class="testimonial-meta">
                                                <h4>Gurpreet Singh</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p> Professional, good value, and quick service. My parcel reached me in 4 days
                                            including a weekend and in fantastic condition! Cheapest price I could find
                                            anywhere, no damage to parcel or contents. Will definitely be using it
                                            again.</p>
                                        <div class="img-meta-container">
                                            <div class="testimonial-meta">
                                                <h4>Ashok Kundu</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>The best of all International courier services I came across. The staffis
                                            very courteous, knowledgeable, and always willing to help and guide. Above
                                            all, the services are very economical and affordable.Great value for the
                                            money.</p>
                                        <div class="img-meta-container">
                                            <div class="testimonial-meta">
                                                <h4>Ridhima Sagar</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>I recently moved to the Philippines and had a document that I wanted to get
                                            shipped from India.
                                            I got in touch with Shipmiles and am really happy with the experience and
                                            must say they provide very good service at a very minimum price.
                                        </p>
                                        <div class="img-meta-container">
                                            <div class="testimonial-meta">
                                                <h4>T.C Chatterjee</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-panel-warp">
                                <div class="testimonial-icon"><i class="icon-Quote-Icon"></i></div>
                                <div class="testimonial-body">
                                    <div class="testimonial-content">
                                        <div class="testimonial-rating"><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i><i
                                                    class="icon-Star-1"></i><i class="icon-Star-1"></i></div>
                                        <p>Hello, this is the second time I have used Shipmiles. On both shipments it
                                            was completely professional, I am very happy and pleased with the team.
                                            Special thanks to Phool Singh Ji. Great work keep it up.
                                        </p>
                                        <div class="img-meta-container">
                                            <div class="testimonial-meta">
                                                <h4>Rajshekhar Gopal</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </section>


<?php include('footer.php'); ?>
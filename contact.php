<!DOCTYPE html>
<html lang="en">
    <?php include 'shared/head-shim.php';?>
    <body>

<div id="preloader"></div>
    <?php include 'shared/top-bar.php';?>
    <?php include 'shared/header.php';?>


        <div class="page-title pattern">
            <div class="container text-center">
                <h1>Contact us</h1>
            </div>
        </div><!--page title end-->
        <!-- Google Maps -->
       <!--  <section class="google-map">
            <div id="googlemaps" class="google-map" style="height: 450px;width:100%;"></div>
        </section> -->
        <!-- Google Maps End -->
         <div class="space80"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 margin-btm-30">
                    <form method="post" action="#" class="b-contact">
                        <div class="row">
                            <div class="col-sm-12"> 
                                <div class="row">
                                    <div class="col-sm-12 margin-btm-20">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name...." />
                                    </div>
                                    <div class="col-sm-12 margin-btm-20">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address...." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <textarea name="message" class="form-control margin-btm-20" rows="5" placeholder="Message...."></textarea>                                  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="data-status animated fadeInDown"></div> <!-- data submit status -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" name="submit" class="btn btn-xl btn-skin margin-b-20">Submit</button>
                            </div>
                        </div>
                    </form>
                </div><!--contact col end-->
                <div class="col-sm-4 col-sm-offset-1">

                    <div class="sidebar-widget">
                        <h3>Contact info</h3>
                        <hr>
                        <span class="margin-btm-10">
                            Garage Road,Off Dar es Salaam Road <br>
                            P.O.Box 3625-00506.
                        </span><br>
                        <span><b>Phone:</b> +254 20 550760 | +254 708 114 276</span><br>
                        <span><b>Email:</b> customerservice@novelpaints.com</span>
                    </div><!--sidebar widget-->
                    <div class="sidebar-widget">
                        <h3>Social media</h3>
                        <hr>
                        <ul class="list-inline social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                    </div><!--sidebar widget-->
                </div>
            </div>
        </div>

        <div class="space80"></div>
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>Subscribe to our newsletter</h2>
                        <p>Subscribe to our newsletter to day and get latest updates from us</p>
                    </div>
                    <div class="col-sm-5">
                        <form role="form" method="post" action="#" class="subscribe-form  b-newsletter">
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Enter email to subscribe">
                            </div>
                            <div>
                                <button name="submit" type="submit"><i class="ion-ios-email-outline"></i></button>
                            </div>                          
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 margin-btm-30">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                        <div class="space30"></div>
                        <p>
                            Sed ut perspiciatis unde omnis doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                        <a href="#" class="btn btn-link">Read More</a>
                    </div>
                    <div class="col-md-3 margin-btm-30">
                        <h3>Our Services</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Interior Designs</a></li>
                            <li><a href="#">Project Management</a></li>
                            <li><a href="#">House Renovation</a></li>
                            <li><a href="#">Constructions</a></li>
                        </ul>                        
                    </div>
                    <div class="col-md-5">
                        <h3>Latest Projects</h3>
                        <div class="latest-projects">
                            <a href="#">
                                <img src="images/work-1.jpg" alt="" class="img-responsive">
                            </a>
                            <a href="#">
                                <img src="images/work-2.jpg" alt="" class="img-responsive">
                            </a>
                            <a href="#">
                                <img src="images/work-3.jpg" alt="" class="img-responsive">
                            </a>
                            <a href="#">
                                <img src="images/work-4.jpg" alt="" class="img-responsive">
                            </a>
                            <a href="#">
                                <img src="images/work-5.jpg" alt="" class="img-responsive">
                            </a>
                            <a href="#">
                                <img src="images/work-6.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <ul class="list-inline">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>   
                    </div>
                    <div class="col-sm-5 text-right">
                        <span>&copy; 2016. All Right Reserved. Bpress</span> 
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back to top-->
        <a href="#" class="scrollToTop"><i class="ion-android-arrow-dropup-circle"></i></a>
        <!--back to top end-->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/bootstrap-hover-dropdown.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/bootstrap-hover-dropdown.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="owl-carousel/owl.carousel.min.js"></script>
        <script src="lightbox2/dist/js/lightbox.min.js"></script>
        <script src="contact_form/contact.js"></script>
        <script src="js/custom.js"></script>
        <!-- Google Maps -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/jquery.gmaps.min.js"></script>
        <script type="text/javascript">
            (function ($) {
                $(document).ready(function () {

                    $('#googlemaps').gMap({
                        maptype: 'ROADMAP',
                        scrollwheel: false,
                        zoom: 13,
                        markers: [
                            {
                                address: 'Lorem Ipsum, Columbia', // Your Adress Here
                                html: '<strong>Our Office</strong><br>45 Lorem Ipsum, Apt. 303 </br>Columbia, 302012 ',
                                popup: true
                            }
                        ]
                    });

                });

            })(this.jQuery);
        </script>
    </body>
</html>
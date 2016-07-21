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
        <?php include 'shared/footer.php';?>
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
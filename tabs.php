<!DOCTYPE html>
<html lang="en">
   <?php include 'shared/head-shim.php';?>
    <body>

<div id="preloader"></div>
    <?php include 'shared/top-bar.php';?>
    <?php include 'shared/header.php';?>


        <div class="page-title pattern">
            <div class="container text-center">
                <h1>Bootstrap tabs</h1>
            </div>
        </div><!--page title end-->
        <div class="space80"></div>

        <div class="container">
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Tab 1</a></li>
                    <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Tab 2</a></li>
                    <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Tab 3</a></li>
                    <li role="presentation"><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Tab 4</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="row">
                            <div class="col-sm-7">
                                <p>
                                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                </p>
                            </div>
                              <div class="col-sm-5">
                                  <img src="images/s1.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab2">
                      <div class="row">
                            <div class="col-sm-7">
                                <p>
                                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                </p>
                            </div>
                              <div class="col-sm-5">
                                  <img src="images/s4.jpg" alt="" class="img-responsive">
                            </div>
                        </div> </div>
                    <div role="tabpanel" class="tab-pane" id="tab3">
                      <div class="row">
                           
                              <div class="col-sm-5">
                                  <img src="images/s2.jpg" alt="" class="img-responsive">
                            </div>
                           <div class="col-sm-7">
                                <p>
                                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                </p>
                            </div>
                        </div> </div>
                    <div role="tabpanel" class="tab-pane" id="tab4">
                      <div class="row">
                            <div class="col-sm-7">
                                <p>
                                      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                </p>
                            </div>
                              <div class="col-sm-5">
                                  <img src="images/s3.jpg" alt="" class="img-responsive">
                            </div>
                        </div></div>
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
        <script src="js/custom.js"></script>
    </body>
</html>
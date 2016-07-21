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
        <?php include 'shared/footer.php';?>
    </body>
</html>
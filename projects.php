<!DOCTYPE html>
<html lang="en">
    <?php include 'shared/head-shim.php';?>
    <body>
<div id="preloader"></div>
    <?php include 'shared/top-bar.php';?>
    <?php include 'shared/header.php';?>


        <div class="page-title pattern">
            <div class="container text-center">
                <h1>Projects</h1>
            </div>
        </div><!--page title end-->
        <div class="space80"></div>

        <div class="container">
            <ul class="project-filters list-inline text-center">
                <li class="filter active" data-filter="all">all</li>
                <li class="filter" data-filter=".interior">Interior</li>
                <li class="filter" data-filter=".constrcution">Construction</li>
                <li class="filter" data-filter=".project-management">Project management</li>
                <li class="filter" data-filter=".renovation">Renovation</li>
            </ul><!--filter list-->
            <div class="space30"></div>
            <div class="row" id="grid">
                <div class="col-sm-4 margin-btm-30 mix interior">
                    <a class="prject-box" href="#">
                    <img src="images/work-1.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
                <div class="col-sm-4 margin-btm-30 mix renovation">
                    <a class="prject-box" href="#">
                    <img src="images/work-2.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
                <div class="col-sm-4 margin-btm-30 mix project-management">
                    <a class="prject-box" href="#">
                    <img src="images/work-3.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
                <div class="col-sm-4 margin-btm-30 mix constrcution">
                    <a class="prject-box" href="#">
                    <img src="images/work-4.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
                <div class="col-sm-4 margin-btm-30 mix interior constrcution">
                     <a class="prject-box" href="#">
                    <img src="images/work-5.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
                <div class="col-sm-4 margin-btm-30 mix project-management">
                     <a class="prject-box" href="#">
                    <img src="images/work-6.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
                <div class="col-sm-4 margin-btm-30 mix interior">
                    <a class="prject-box" href="#">
                    <img src="images/work-7.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
                <div class="col-sm-4 margin-btm-30 mix constrcution">
                    <a class="prject-box" href="#">
                    <img src="images/work-8.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
                   <div class="col-sm-4 margin-btm-30 mix renovation">
                    <a class="prject-box" href="#">
                    <img src="images/work-9.jpg" alt="" class="img-responsive">
                    <div class="project-overlay">
                        <h4 class="text-capitalize">Project title <i class="ion-android-arrow-forward"></i></h4>
                    </div>
                </a>
                </div><!--col end-->
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
        <script>
            $(function () {
                $('#grid').mixItUp();
            });
        </script>
    </body>
</html>
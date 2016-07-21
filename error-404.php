<!DOCTYPE html>
<html lang="en">
    <?php include 'shared/head-shim.php';?>
    <body>

<div id="preloader"></div>
    <?php include 'shared/top-bar.php';?>
    <?php include 'shared/header.php';?>


        <div class="page-title pattern">
            <div class="container text-center">
                <h1>Page not found</h1>
            </div>
        </div><!--page title end-->
        <div class="space80"></div>

        <div class="container text-center">
            <div class="error-digit">
                <i class="ion-bug"></i>
                <h3>The page you are looking is not found!</h3>
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
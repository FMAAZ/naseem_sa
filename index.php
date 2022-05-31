<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require 'Niv1.php';?>  
    <body>

        <!--main photo-->

        <main>

        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assistances/images/toto.jpg" alt="Los Angeles" class="d-block w-100" height="550px" width="500px">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <p class=""><span class="text-white-50">المدن</span></p>
                            <a href="cities.php">استكشف مدن المملكة</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assistances/images/vc.jpeg" alt="Los Angeles" class="d-block w-100" height="550px" width="500px">
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>الجزر</h1>
                                <p>الوصف--------------------------</p>
                                <p><a class="btn btn-lg btn-danger" href="island.php">island</a></p>
                            </div>
                        </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

            <!--end main photo-->

            <div class="container marketing">
                <br><br>
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 id="scrollspyHeading2" class="featurette-heading">السياحة في <span class="text-muted"> مدن المملكة </span></h2>
                        <p class="lead">وصف مدن المملكة</p>
                    </div>
                    <div class="col-md-5">
                    <a href="Cities.php">
                        <img src="assistances/images/toto.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%"height="100%">
                    </a>
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2  class="featurette-heading">السياحة في<span class="text-muted"> جزر المملكة </span></h2>
                    <p class="lead">وصف الجزر</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <a href="island.php">
                        <img src="assistances/images/vc.jpeg" class="img-thumbnail" alt="Cinque Terre" width="100%" height="100%">
                    </a>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>

    <!-- /.container -->

    <?php require('components/footre.php');?>

    <!--js_button_up-->

</main>
</body>
</html>
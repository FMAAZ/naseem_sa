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
                    <img src="assistances/images/Kingdom_Tower.jpg" alt="Los Angeles" class="d-block w-100" height="500" width="500">
                    <div class="container">
                        <div class="carousel-caption">
                        <h1 class="text-white-50">المدن السياحية</h1>
                        <br>
                        <br>
                         <br>
                         <br>
                        <p><a class="btn btn-success btn-lg" href="Cities.php">اكتشف المدن</a></p>
                        </div>
                     </div>
                 </div>

                <div class="carousel-item">
                    <img src="assistances/images/xx.jpg" alt="Los Angeles" class="d-block w-100" height="500" width="500">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 class="text-white-50">  الجزر السياحية</h1>
                                <br>
                                  <br>
                                   <br>
                                   <br>
                                <p><a class="btn btn-success btn-lg" href="island.php">اكتشف الجزر</a></p>
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
                        <p class="lead">تمتلك المملكة العربية السعودية الكثير من الوجهات السياحية المختلفة من حيث المناطق الساحلية التي تنافس جزر المالديف وأكبر المساحات الخضراء التي تكسي السهول والجبال، وعدد كبير من المنتزهات التي تنافس بها العالم، وغيرها العديد من معالم التراث الإسلامي والأثري.</p>
                    </div>
                    <div class="col-md-5">
                    <a href="Cities.php">
                        <img src="assistances/images/zx.JPG" class="img-thumbnail" alt="Cinque Terre" width="500"height="500">
                    </a>
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2  class="featurette-heading">السياحة في<span class="text-muted"> جزر المملكة </span></h2>
                    <p class="lead">تحتوي المملكة العربية السعودية على مجموعة من الجزر، التي يقدر عددها حسب تقارير "هيئة المساحة الجيولوجية السعودية" بـ1285 جزيرة تتوزع بين البحر الأحمر والخليج العربي، وتتنوع ما بين جزر ذات نشأة مرجانية ورملية وبركانية، إضافه إلى متعة الجزر بالتضاريس الجبلية المرتفعة ذات المناظر الطبيعية الأخاذة التي تجعل منها مقصداً لمحبي المغامرات والاكتشاف. في الآتي، أشهر جزر السعودية وأجملها.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <a href="island.php">
                    <img src="assistances/images/vb.jpeg" class="img-thumbnail" alt="Cinque Terre" width="500"height="500">
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
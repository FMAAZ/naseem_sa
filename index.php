<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require('components/head_inc.php');?>  
<body>
    <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class="active"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="assistances/images/Rj.jpg" class="d-block w-100" alt="Cinque Terre" width="550px"
                    height="555px">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1><span class=" text-white-50">رجال المع ...</span></h1>
                        <p class="lead"><span class="text-decoration-underline">مزيج المراعي الخضراء والتراث الجنوبي الأصيل</span></p>
                        <p><a class="btn btn-outline-light btn-lg" href="Cities.php">اعرض اكثر</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="assistances/images/major.jpg" class="d-block w-100" alt="Cinque Terre" width="550px"
                    height="555px">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1><span class="text-white-50">العاصمة الرياض...</span></h1>
                        <p class="lead"><span class="text-decoration-underline">وجهة سياحية فريدة بفعاليات نوعية عالمية</span></p>
                        <p class="lead"><a class="btn btn-outline-light btn-lg" href="Cities.php">اعرض اكثر</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assistances/images/xz1.jpg" class="d-block w-100" alt="Cinque Terre" width="550px"
                    height="555px">

                <div class="container">
                    <div class="carousel-caption text-end">
                    <h2><span class="text-white-50">تعرفوا على أجمل جزر المملكة الخلابة...</span></h2>
                        <p class="lead"><span class="text-decoration-underline">تحتوي المملكة العربية السعودية على المئات من الجزر المتنوعة والتي تطل على البحر الأحمر والخليج العربي وآلاف الجزر المهيئة للجميع من محبي ركوب الأمواج أو عشاق الغوص بين الشعب المرجانية أو عشاق المناظر الطبيعية للجزر البكر .</span></p>
                            <p><a class="btn btn-outline-light btn-lg" href="island.php">اعرض اكثر</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">السابق</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">التالي</span>
        </button>
    </div>

    <div class="container marketing">
        <br> <br>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 id="scrollspyHeading2" class="featurette-heading">السياحة في <span class="text-muted"> مدن المملكة . </span></h2>
                <p class="lead">تعد السياحة الترفيهية والسياحة الدينية في المملكة العربية السعودية من بين الأنواع
                    الرئيسية للسياحة هناك. بالإضافة إلى ذلك ، قد أدخلت المملكة العربية السعودية قطاع السفر والسياحة من
                    خلال فتح حدودها على العالم ليأتوا لاكتشاف المملكة مع الإطلاق التاريخي للتأشيرة الإلكترونية السياحية.
                    طف.</p>
            </div>
            <div class="col-md-5">
                <a href="Cities.php">
                    <img src="assistances/images/toto.jpg" class="img-thumbnail" alt="Cinque Terre" width="100%"
                        height="100%">
                </a>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2  class="featurette-heading">السياحة في<span class="text-muted"> جزر المملكة . </span></h2>
                <p class="lead">
                مجموعة جزر سياحية في السعودية تعتبر من أجمل المناطق التي يمكن زيارتها في الخليج العربي، ويقدر عدد تلك الجزر في المملكة بحسب هيئة المساحة الجيولوجية السعودية بحوالي ما يقرب إلى 1258 جزيرة سعودية رائعة، وهي تعتبر من عوامل الجذب لجميع السياح حول العالم.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <a href="island.php">
                    <img src="assistances/images/vc.jpeg" class="img-thumbnail" alt="Cinque Terre" width="100%"
                        height="100%">
                </a>
            </div>
        </div>

        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
        <?php require('components/footre.php');?>
    </div><!-- /.container -->
        <!--js_button_up-->
</body>
</html>
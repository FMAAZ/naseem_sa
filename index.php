<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require 'Niv1.php';?>  
<body>

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> -->
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assistances/images/Abha city.jpg" alt="Los Angeles" class="d-block w-100" height="550px" width="500px">
    </div>
    <div class="container">
          <div class="carousel-caption text-end">
            <h1>عنوان مثال آخر.</h1>
            <p>حسب المجلس الثقافي البريطاني فإن تعليم الإنجليزية داخل بريطانيا يسهم في تعزيز اقتصادها بما يتجاوز ملياري جنيه سنوياً، كما أنه وفر أكثر من 26 ألف وظيفة.</p>
            <p><a class="btn btn-lg btn-primary" href="city.php">city</a></p>
          </div>
    </div>

    <div class="carousel-item">
    <img src="assistances/images/Abha city.jpg" alt="Los Angeles" class="d-block w-100" height="550px" width="500px">
    </div>
    <div class="container">
          <div class="carousel-caption text-end">
            <h1>عنوان مثال آخر.</h1>
            <p>حسب المجلس الثقافي البريطاني فإن تعليم الإنجليزية داخل بريطانيا يسهم في تعزيز اقتصادها بما يتجاوز ملياري جنيه سنوياً، كما أنه وفر أكثر من 26 ألف وظيفة.</p>
            <p><a class="btn btn-lg btn-danger" href="island.php">island</a></p>
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

    <div class="container marketing">
        <br> <br>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 id="scrollspyHeading2" class="featurette-heading">السياحة في <span class="text-muted"> مدن المملكة </span></h2>
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
                <h2  class="featurette-heading">السياحة في<span class="text-muted"> جزر المملكة </span></h2>
                <p class="lead">
                مجموعة جزر سياحية في السعودية تعتبر من أجمل المناطق التي يمكن زيارتها في الخليج العربي، ويقدر عدد تلك الجزر في المملكة بحسب هيئة المساحة الجيولوجية السعودية بحوالي ما يقرب إلى 1258 جزيرة سعودية رائعة، وهي تعتبر من عوامل الجذب لجميع السياح حول العالم.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <a href="island.php">
                    <img src="assistances/images/vc.jpeg" class="img-thumbnail" alt="Cinque Terre" width="100%" height="100%">
                </a>
            </div>
        </div>

        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
    <?php require('components/footre.php');?>

        <!--js_button_up-->
</body>
</html>
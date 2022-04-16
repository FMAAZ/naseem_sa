<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require('components/head_inc.php');?>  
<body>
   <?php include ('components/niv.php')?>
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
                <img src="assistances/images/xxw.jpg" class="d-block w-100" alt="Cinque Terre" width="500px"
                    height="500px">

                <div class="container">
                    <div class="carousel-caption">
                        <h5>عنوان المثال.</h5>
                        <p>تشير الدراسات الإحصائية حسب الجمعية الأمريكية للغات بأن الإقبال على العربية زاد %126 في
                            الولايات المتحدة الأمريكية وحدها بين عامي 2002 و2009م.</p>
                        <p><a class="btn btn-lg btn-success" href="#">سجل اليوم</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assistances/images/carrots.jpg" class="d-block w-100" alt="Cinque Terre" width="500px"
                    height="500px">

                <div class="container">
                    <div class="carousel-caption">
                        <h5>عنوان مثال آخر.</h5>
                        <p>حسب المجلس الثقافي البريطاني فإن تعليم الإنجليزية داخل بريطانيا يسهم في تعزيز اقتصادها بما
                            يتجاوز ملياري جنيه سنوياً، كما أنه وفر أكثر من 26 ألف وظيفة.</p>
                        <p><a class="btn btn-lg btn-success" href="#">أعرف أكثر</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="assistances/images/ksa1.jpg" class="d-block w-100" alt="Cinque Terre" width="500px"
                    height="500px">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h5>واحد أكثر لقياس جيد.</h5>
                        <p>الإحصاءات لحجم الاستثمار اللغوي خارج بريطانيا تتفاوت من سنة لأخرى إلا أن المدير التنفيذي
                            للمجلس الثقافي البريطاني إدي بايرز يرى أن استثمار تعليم الإنجليزية في الخارج لا يحسب على
                            المستوى المالي فحسب بل على المستوى السياسي أيضاً.</p>
                        <p><a class="btn btn-lg btn-success" href="#">تصفح المعرض</a></p>
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
                <!-- --------------------------------------------------------------------------------- -->
                <h2 id="scrollspyHeading2" class="featurette-heading">السياحة في_ <span class="text-muted"> مدن المملكة . </span></h2>
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
                <p class="lead">عندما نضحك أو نبكي، فإننا نعرض عواطفنا، مما يسمح للآخرين بإلقاء نظرة خاطفة على أذهاننا
                    أثناء "قراءة" وجوهنا بناءً على التغييرات في مكوّنات الوجه الرئيسة، مثل: العينين والحاجبين والجفنين
                    والأنف والشفتين.</p>
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
    </div><!-- /.container -->
        <?php require('components/footre.php');?>
          <!--js_button_up-->
</body>
</html>
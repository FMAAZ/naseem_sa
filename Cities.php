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
                <img src="assistances/images/xz1.jpg" class="d-block w-100"  alt="Cinque Terre" width="550px"
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
    
 <!-- Bootstrap 5 Cards in Grid -->
 <section class="bg-light py-4 my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 id="scrollspyHeading2"></h2>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assistances/images/major.jpg" class="img-fluid" alt="thumbnail"  width="100%"
                        height="60%">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="all.php" class="text-secondary">العاصمة الرياض</a></h4>
                        
                        <p class="card-text-center">وجهة سياحية فريدة بفعاليات نوعية عالمية تُعدُّ العاصمة الرياض أحد أهم المدن على خارطة المملكة السياحية؛ لاحتضانها العديد من الأنشطة</p>
                        <a href="all.php" class=" btn btn-outline-success">&numsp;عرض&numsp;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assistances/images/jeddah.jpg" class="img-fluid" alt="jeddah" width="100%"
                        height="100%">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#" class="text-secondary">السياحة في جدة</a></h4>
                        <p class="card-text">جدة اجمل مدن السعودية تلقب بعروس البحر الاحمر في السعودية وتعد العاصمة الاقتصادية والسياحية في المملكة</p>
                        <a href="#" class=" btn btn-outline-success">&numsp;عرض&numsp;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assistances/images/dem.jpg" class="img-fluid" alt="thumbnail" width="100%"
                        height="60%">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#" class="text-secondary">السياحة في الدمام</a></h4>
                        <p class="card-text">الدمام واحدة من اجمل مدن السعودية وهي الميناء الرئيسي على البحر في المنطقة الشرقية</p>
                        <a href="#" class=" btn btn-outline-success">&numsp;عرض&numsp;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assistances/images/yanbu1.jpg" class="img-fluid" alt="thumbnail"  width="100%"
                        height="100%">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#" class="text-secondary">السياحة في ينبع</a></h4>
                        <p class="card-text">مدينة ينبع من اهم مدن السياحة في السعودية ، تعد ينبع من مناطق الجذب السياحية الهامة ،</p>
                        <a href="#" class=" btn btn-outline-success">&numsp;عرض&numsp;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assistances/images/Taif.jpg" class="img-fluid" alt="thumbnail"width="100%"
                        height="100%">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#" class="text-secondary">السياحة في الطائف</a></h4>
                        <p class="card-text">الرحلة إلى الطائف متعة في حد ذاتها. فيسافر الزوار على طريق ملتو يتخلل الجبال — مرورًا بأسواق الفاكهة وبساتين الزهور </p>
                        <a href="#" class=" btn btn-outline-success">&numsp;عرض&numsp;</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assistances/images/gt.jpg" class="img-fluid" alt="thumbnail" width="100%"
                        height="100%">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><a href="#" class="text-secondary">السياحة في ابها</a></h4>
                        <p class="card-text">تقع أبها عند الطرف الجنوبي لساحل البحر الأحمر، وهي عاصمة منطقة عسير الغنية ثقافيًا ونقطة انطلاق لاستكشاف</p>
                        <a href="#" class=" btn btn-outline-success">&numsp;عرض&numsp;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <?php require('components/footre.php');?>
</body>
</html>
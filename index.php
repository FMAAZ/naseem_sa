<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require 'Niv1.php';?>  
<body>
    
        <?php
            require_once 'connect_database.php';
            $select_city_photo = $connect_database->prepare('SELECT * FROM city_content');
            $select_city_photo->execute();
            foreach($select_city_photo as $print)
            {
                $_SESSION["index_card_photo_city"] = $print["card_photo"];
                $_SESSION["index_name_city"] = $print["name"];
                $_SESSION["index_card_description_city"] = $print["card_description"];
                $_SESSION["index_city_id"] = $print["city_id"];
            }

            $select_island_photo = $connect_database->prepare('SELECT * FROM island_content');
            $select_island_photo->execute();
            foreach($select_island_photo as $print)
            {
                $_SESSION["index_card_photo_island"] = $print["card_photo"];
                $_SESSION["index_name_island"] = $print["name"];
                $_SESSION["index_card_description_island"] = $print["card_description"];
                $_SESSION["index_island_id"] = $print["island_id"];
            }

            ?>
                    <div id="0" class="carousel slide pointer-event" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                    <?php 
                        for($v=0; $v<($select_city_photo->rowCount() + $select_island_photo->rowCount()); $v++)
                        {
                            echo '
                                <button type="button" data-bs-target="'.$v.'" data-bs-slide-to="'.($v+1).'" class="active" aria-label="Slide'.$v.'"></button>
                            ';
                        }
                    ?>
                </div>
                <div class="carousel-inner">
            <?php
            if($select_city_photo->rowCount() > $select_island_photo->rowCount())
            {
                $max = $select_city_photo->rowCount();
                $min = $select_island_photo->rowCount();

                $max_php = "city_content.php";
                $min_php = "island_content.php";

                if(!empty($_SESSION["index_card_photo_city"]) && !empty($_SESSION["index_name_city"]) && !empty($_SESSION["index_card_description_city"]) && !empty($_SESSION["index_city_id"]))
                {
                    $_SESSION["max_index_card_photo"] = $_SESSION["index_card_photo_city"];
                    $_SESSION["max_index_name"] = $_SESSION["index_name_city"];
                    $_SESSION["max_index_card_description"] = $_SESSION["index_card_description_city"];
                    $_SESSION["max_index_id"] = $_SESSION["index_city_id"];
                }

                if(!empty($_SESSION["index_card_photo_island"]) && !empty($_SESSION["index_name_island"]) && !empty($_SESSION["index_card_description_island"]) && !empty($_SESSION["index_island_id"]))
                {
                    $_SESSION["min_index_card_photo"] = $_SESSION["index_card_photo_island"];
                    $_SESSION["min_index_name"] = $_SESSION["index_name_island"];
                    $_SESSION["min_index_card_description"] = $_SESSION["index_card_description_island"];
                    $_SESSION["min_index_id"] = $_SESSION["index_island_id"];
                }
            }
            elseif($select_city_photo->rowCount() < $select_island_photo->rowCount())
            {
                $min = $select_city_photo->rowCount();
                $max = $select_island_photo->rowCount();
                
                $max_php = "island_content.php";
                $min_php = "city_content.php";

                if(!empty($_SESSION["index_card_photo_city"]) && !empty($_SESSION["index_name_city"]) && !empty($_SESSION["index_card_description_city"]) && !empty($_SESSION["index_city_id"]))
                {
                    $_SESSION["min_index_card_photo"] = $_SESSION["index_card_photo_city"];
                    $_SESSION["min_index_name"] = $_SESSION["index_name_city"];
                    $_SESSION["min_index_card_description"] = $_SESSION["index_card_description_city"];
                    $_SESSION["min_index_id"] = $_SESSION["index_city_id"];
                }

                if(!empty($_SESSION["index_card_photo_island"]) && !empty($_SESSION["index_name_island"]) && !empty($_SESSION["index_card_description_island"]) && !empty($_SESSION["index_island_id"]))
                {
                    $_SESSION["max_index_card_photo"] = $_SESSION["index_card_photo_island"];
                    $_SESSION["max_index_name"] = $_SESSION["index_name_island"];
                    $_SESSION["max_index_card_description"] = $_SESSION["index_card_description_island"];
                    $_SESSION["max_index_id"] = $_SESSION["index_island_id"];
                }

            }
            elseif($select_city_photo->rowCount() == $select_island_photo->rowCount())
            {
                $min = $select_city_photo->rowCount();
                $max = $select_island_photo->rowCount();
                
                $max_php = "island_content.php";
                $min_php = "city_content.php";

                if(!empty($_SESSION["index_card_photo_city"]) && !empty($_SESSION["index_name_city"]) && !empty($_SESSION["index_card_description_city"]) && !empty($_SESSION["index_city_id"]))
                {
                    $_SESSION["min_index_card_photo"] = $_SESSION["index_card_photo_city"];
                    $_SESSION["min_index_name"] = $_SESSION["index_name_city"];
                    $_SESSION["min_index_card_description"] = $_SESSION["index_card_description_city"];
                    $_SESSION["min_index_id"] = $_SESSION["index_city_id"];
                }

                if(!empty($_SESSION["index_card_photo_island"]) && !empty($_SESSION["index_name_island"]) && !empty($_SESSION["index_card_description_island"]) && !empty($_SESSION["index_island_id"]))
                {
                    $_SESSION["max_index_card_photo"] = $_SESSION["index_card_photo_island"];
                    $_SESSION["max_index_name"] = $_SESSION["index_name_island"];
                    $_SESSION["max_index_card_description"] = $_SESSION["index_card_description_island"];
                    $_SESSION["max_index_id"] = $_SESSION["index_island_id"];
                }
            }

            for($i=0; $i<$max; $i++)
            {
                if(!empty($_SESSION["max_index_card_photo"]) && !empty($_SESSION["max_index_name"]) && !empty($_SESSION["max_index_card_description"]) && !empty($_SESSION["max_index_id"]))
                {
                    echo '
                    <div class="carousel-item active">
                        <img src="assistances/images/'.$_SESSION["max_index_card_photo"].'" class="d-block w-100" alt="Cinque Terre" width="550px" height="555px">
                            <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1><span class="text-white-50">'.$_SESSION["max_index_name"].'</span></h1>
                                    <p class="lead"><span class="text-decoration-underline">'.$_SESSION["max_index_card_description"].'</span></p>
                                    <form method="POST" action="'.$max_php.'">
                                        <button type="submit" name="card_city" class=" btn btn-success" value="'.$_SESSION["max_index_id"].'">عرض</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                ';
                }
                if($min <= $max)
                {
                    if(!empty($_SESSION["min_index_card_photo"]) && !empty($_SESSION["min_index_name"]) && !empty($_SESSION["min_index_card_description"]) && !empty($_SESSION["min_index_id"]))
                    {
                        echo '
                        <div class="carousel-item">
                            <img src="assistances/images/'.$_SESSION["min_index_card_photo"].'" class="d-block w-100" alt="Cinque Terre" width="550px" height="555px">
                                <div class="container">
                                    <div class="carousel-caption text-end">
                                        <h1><span class="text-white-50">'.$_SESSION["min_index_name"].'</span></h1>
                                        <p class="lead"><span class="text-decoration-underline">'.$_SESSION["min_index_card_description"].'</span></p>
                                        <form method="POST" action="'.$min_php.'">
                                            <button type="submit" name="card_city" class=" btn btn-success" value="'.$_SESSION["min_index_id"].'">عرض</button>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    ';
                    }
                continue;
                }
            }
            
        ?>

        </div>
        <?php 
            for($s=0; $s<($select_city_photo->rowCount() + $select_island_photo->rowCount()); $s++)
                {
                    echo '
                        <button class="carousel-control-prev" type="button" data-bs-target="#'.$s.'" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
                            <span class="visually-hidden">السابق</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#'.$s.'" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
                            <span class="visually-hidden">التالي</span>
                        </button>
                    ';
                }
        ?>
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
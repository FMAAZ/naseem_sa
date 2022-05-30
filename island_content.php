<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require 'Niv1.php'; ?>

<body>
    <?php
        $_SESSION["destination"] = "island";

        if(isset($_POST["card_island"]))
            $card_id = " = " . $_POST["card_island"];
        else
            $card_id = " IS NOT NULL";

        require_once 'connect_database.php';
        if ($_SESSION["destination"] == "island")
        {
            // content 
            $select_destination_info_content = $connect_database->prepare
            ('
            SELECT i.name name , ic.main_description main_description , ic.weather_description weather_description
            FROM island i , island_content ic 
            WHERE i.ID = ic.island_id AND i.ID '.$card_id.'
            ');
            $select_destination_info_content->execute();
            foreach ($select_destination_info_content as $print)
            {
                $_SESSION["island_name"] = $print["name"];
                $_SESSION["island_main_description"] = $print["main_description"];
                $_SESSION["island_weather_description"] = $print["weather_description"];
            }
            // subtitle
            $select_destination_info_subtitle = $connect_database->prepare
            ('
            SELECT i.name name , iss.subtitle subtitle , iss.subtitle_description subtitle_description , iss.location_description location_description , iss.subtitle_photo subtitle_photo
            FROM island i , island_subtitle iss 
            WHERE i.ID = iss.island_id AND i.ID '.$card_id.'
            ');
            $select_destination_info_subtitle->execute();

            $island_subtitle_array = array();
            $island_subtitle_description_array = array();
            $island_location_description_array = array();
            $island_subtitle_photo_array = array();
            $subtitle_index = 0;

            foreach ($select_destination_info_subtitle as $print)
            {
                $island_subtitle_array[$subtitle_index] = $print["subtitle"];
                $island_subtitle_description_array[$subtitle_index] = $print["subtitle_description"];
                $island_location_description_array[$subtitle_index] = $print["location_description"];
                $island_subtitle_photo_array[$subtitle_index] = $print["subtitle_photo"];
                $subtitle_index ++;
            }
            $_SESSION["island_subtitle_loop"] = $select_destination_info_subtitle->rowCount();

            echo'
            <main class="container">
            <!-- 1row -->
            <div class="row">
                <div class="col-md-8">
                    <!-- 1article -->
                    <article class="blog-post">
                        <h2 class="blog-post-title">افضل الاماكن السياحية<span class="text-muted">في جزيرة '.$_SESSION["island_name"].'</span></h2>
                        <br>
                        <p>'.$_SESSION["island_main_description"].'</p>
                        <hr>
                        <!-- Content -->
                        <div class="col-md-4">
                            <div class="position-sticky">
                                <div class="p-3 mb-3 bg-light rounded">
                                    <h4 class="fst-italic">محتوى</h4>
                                    <ol>
                                        ';
    ?>
                                        <?php
                                            for($i=0; $i<$_SESSION["island_subtitle_loop"]; $i++)
                                            {
                                                echo'
                                                <li><a href="#'.$island_subtitle_array[$i].''.$i.'" class="link-info">'.$island_subtitle_array[$i].'</a></li>
                                                ';
                                            }
                                            echo'
                                            </ol>
                                            </div>
                                            </div>
                                            </div>
                                            <hr>
                                            </article>
                                            ';
                        for($j=0; $j<$_SESSION["island_subtitle_loop"]; $j++)
                        {
                            echo '
                            <article class="blog-post">
                                <br>
                                <div class="row featurette">
                                    <div class="col-md-6">
                                        <h4 id="'.$island_subtitle_array[$j].''.$j.'" class="featurette-heading"><span class="text-muted">'.$island_subtitle_array[$j].'</span></h4>
                                        <p class="lead">'.$island_subtitle_description_array[$j].'</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assistances/images/'.$island_subtitle_photo_array[$j].'" class="img-thumbnail" alt="Cinque Terre" width="100%" height="100%">
                                    </div>
                                </div>
                                <br>
                                <h4 class="blog-post-title">الأنشطة</h4>
                                <ul>';
                                            // activitiy

                                        $select_destination_info_activitiy = $connect_database->prepare
                                        ('
                                        SELECT i.name name , ia.activitiy_description avtivitiy_description
                                        FROM island i , island_activitiy ia
                                        WHERE i.ID = ia.island_id AND i.ID '.$card_id.' AND ia.subtitle = "'.$island_subtitle_array[$j].'"
                                        ');
                                        $select_destination_info_activitiy->execute();
                                        $city_avtivitiy_description_array = array();
    
                                        foreach ($select_destination_info_activitiy as $print)
                                        {
                                            echo '
                                            <li>'.$print["avtivitiy_description"].'</li>
                                            ';
                                        }

                                    $_SESSION["island_avtivitiy_loop"] = $select_destination_info_activitiy->rowCount();
                                
                                echo '
                                </ul>
                                <br>
                                <h4 class="blog-post-title">الموقع</h4>
                                <p class="lead">'.$island_location_description_array[$j].'</p>
                            </article>
                            <hr>
                            ';
                        }
        }
                    ?>
                </div>
                <!-- More tourist destinations -->
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic"><span class="text-muted">المزيد من وجهات سياحية</span></h4>
                            <ul>
                            <?php
                                $select_photo = $connect_database->prepare('SELECT DISTINCT i.ID ID , ic.name name , ic.card_photo card_photo FROM island i , island_content ic WHERE i.ID = ic.island_id');
                                $select_photo->execute();
                                foreach($select_photo as $print)
                                    {
                                        echo '
                                            <div class="list-group">
                                                <form method="POST" action="island_content.php">
                                                    <button type="submit" class="list-group-item list-group-item-action" name="card_island" value="'.$print["ID"].'">
                                                        <div class="d-flex w-100 justify-content-between">
                                                            <h5 class="mb-1">'.$print["name"].'</h5>
                                                            <img src="assistances/images/'.$print["card_photo"].'" alt="mdo" width="68" height="60" class="rounded-3">
                                                        </div>
                                                    </button>
                                                </form>
                                                <hr>
                                            </div>
                                        ';
                                    }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- More tourist destinations// -->
            </div>
            <!-- 1row //-->
            <br>
            </main>
    <?php require('components/footre.php'); ?>

</body>

</html>
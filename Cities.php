<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require 'Niv1.php'; $_SESSION["destination"] = "city"; ?>

<body>
<div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
        <div class="carousel-indicators">

    <?php
    require 'connect_database.php';
    if($connect_database)
    {
        $select_photo = $connect_database->prepare('SELECT * FROM city_content');
        $select_photo->execute();

        for($i=0; $i<$select_photo->rowCount(); $i++)
        echo '<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>';
        ?>
        </div>
        <div class="carousel-inner">
        <?php

        foreach($select_photo as $print)
        {
            echo '
                <div class="carousel-item active">
                    <img src="assistances/images/'.$print["card_photo"].'" class="d-block w-100" alt="Cinque Terre" width="550px" height="555px">
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1><span class="text-white-50">'.$print["name"].'</span></h1>
                                <p class="lead"><span class="text-decoration-underline">'.$print["card_description"].'</span></p>
                                <form method="POST" action="city_content.php">
                                <button type="submit" name="card_city" class=" btn btn-success" value="'.$print["city_id"].'">عرض</button>
                                </form>
                            </div>
                        </div>
                </div>
            ';
        }
    }
    ?>

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
    <main class="container">
        <!-- Bootstrap 5 Cards in Grid -->
        <section class="bg-light py-4 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 id="scrollspyHeading2"></h2>
                    </div>
                    <?php
                    if($_SESSION["destination"] == "city")
                    {
                        require 'connect_database.php';
                        $select_card_info = $connect_database->prepare
                        ('
                        SELECT c.ID ID , c.name name , cc.card_description card_description , cc.card_photo card_photo
                        FROM city c , city_content cc
                        WHERE c.ID = cc.city_id AND c.ID IS NOT NULL
                        ');
                        $select_card_info->execute();
                        foreach($select_card_info as $print)
                        {
                            echo '
                                <div class="col-md-6 col-lg-4">
                                    <div class="card my-3">
                                        <div class="card-thumbnail">
                                            <img src="assistances/images/'.$print["card_photo"].'" class="img-fluid" alt="thumbnail" width="100%" height="100%">
                                        </div>
                                    <div class="card-body">
                                        <h4 class="card-title">'.$print["name"].'</h4>
                                        <p class="card-text-center">'.$print["card_description"].'</p>
                                        <form method="POST" action="city_content.php">
                                        <button type="submit" name="card_city" class=" btn btn-outline-success" value="'.$print["ID"].'">عرض</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            ';
                        }
                    }
                    ?>

                </div>
            </div>
        </section>
    </main>

    <?php require('components/footre.php'); ?>
</body>

</html>
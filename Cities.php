<!DOCTYPE html>
<html lang="en" dir="rtl">
<?php require 'Niv1.php'; $_SESSION["destination"] = "city"; ?>

<body>
<div id="demo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assistances/images/rb.jpeg" alt="Los Angeles" class="d-block w-100" height="400" width="400">
                     <div class="container">
                        <div class="carousel-caption">
                        <h1 class="text-white-50">المدن السياحية</h1>
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                                      <br>
                        <p><a class="btn btn-success" href="#scrollspyHeading2">اكتشف المدن</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                     <img src="assistances/images/xx.jpg" alt="Los Angeles" class="d-block w-100" height="400" width="400">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 class="text-white-50">الجزر السياحية</h1>
                                <br>
                                <br>
                                <br>
                                <br>
                                <p><a class="btn btn-success" href="island.php">اكتشف الجزر</a></p>
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
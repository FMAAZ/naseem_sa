<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title>admin2</title>
    <?php require 'Niv1.php';?>  
</head>

<body>

    <!--/* Field of Age */-->
    <style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }
    </style>
    
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-9">
                <div class="signup-form">

                    <!-- main form -->
                    <form method="POST" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            إضافة وجهة
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">
                            <!-- php main form -->
                            <?php
                                //destination
                                if(empty($_SESSION["destination"]))
                                    {    
                                        ?>
                                            <div class="mb-3 col-md-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio1" value="city" required>
                                                    <label class="form-check-label" for="inlineRadio1">مدينة<span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio2" value="island" required>
                                                    <label class="form-check-label" for="inlineRadio2">جزيرة<span class="text-danger">*</span>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["destination"]))
                                    {
                                        if($_SESSION["destination"] == "city")
                                            {
                                                ?>
                                                    <h6>نوع الوجهة : مدينة </h6>
                                                <?php
                                            }
                                        elseif($_SESSION["destination"] == "island")
                                            {
                                                ?>
                                                    <h6>نوع الوجهة : جزيرة </h6>
                                                <?php
                                            }
                                    }
                                //destination_name
                                if(empty($_SESSION["destination_name"]))
                                    {    
                                        ?>
                                            <div class="mb-3 col-md-5">
                                                <label>اسم الوجهة<span class="text-danger">*</span></label>
                                                <input type="text" name="destination_name" class="form-control" placeholder="اسم الوجهة" required>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["destination_name"]))
                                    {
                                        ?>
                                            <h6>اسم الوجهة : <?php echo $_SESSION["destination_name"]; ?> </h6>
                                        <?php
                                    }
                                //card_photo
                                if(empty($_SESSION["card_photo"]))
                                    {    
                                        ?>
                                            <div class="mb-3 col-md-5">
                                                <label>الصورة الرئيسية<span class="text-danger">*</span></label>
                                                <input type="file" name="card_photo" class="form-control" required>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["card_photo"]))
                                    {
                                        ?>
                                            <h6>الصورة الرئيسية : <?php echo $_SESSION["card_photo"]; ?> </h6>
                                        <?php
                                    }
                                //main_description
                                if(empty($_SESSION["main_description"]))
                                    {    
                                        ?>
                                            <div class="mb-3">
                                                <label>المحتوى الرئيسي للوجهة<span class="text-danger">*</span></label>
                                                <textarea name="main_description" maxlength="1000" class="form-control" placeholder="المحتوى الرئيسي للوجهة" id="floatingTextarea" required></textarea>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["main_description"]))
                                    {
                                        ?>
                                            <h6>المحتوى الرئيسي للوجهة : <?php echo $_SESSION["main_description"]; ?> </h6>
                                        <?php
                                    }
                                //card_description
                                if(empty($_SESSION["card_description"]))
                                    {    
                                        ?>
                                            <div class="mb-3">
                                                <label>وصف قصير للوجهة<span class="text-danger">*</span></label>
                                                <textarea name="card_description" maxlength="100" class="form-control" placeholder="وصف قصير للوجهة" id="floatingTextarea" required></textarea>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["card_description"]))
                                    {
                                        ?>
                                            <h6>وصف قصير للوجهة : <?php echo $_SESSION["card_description"]; ?> </h6>
                                        <?php
                                    }
                                //card_description
                                if(empty($_SESSION["weather_description"]))
                                    {    
                                        ?>
                                            <div class="mb-3">
                                                <label>مناخ الوجهة<span class="text-danger">*</span></label>
                                                <textarea name="weather_description" maxlength="1000" class="form-control" placeholder="مناخ الوجهة" id="floatingTextarea" required></textarea>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["weather_description"]))
                                    {
                                        ?>
                                            <h6>مناخ الوجهة : <?php echo $_SESSION["weather_description"]; ?> </h6>
                                        <?php
                                    }
                                // subtitle loop
                                for($j=1; $j<=4; $j++)
                                    {
                                        ?>
                                            <!-- subtitle form -->
                                            <hr class="featurette-divider">
                                                <h4 class="mb-3 text-center text-secondary">
                                                    إضافة معلم سياحي رقم <?php echo $j; ?>
                                                </h4>
                                                <hr class="featurette-divider">
                                                <div class="row">
                                                    <?php
                                                        //subtitle
                                                        if(empty($_SESSION["subtitle$j"]))
                                                            {
                                                                ?>
                                                                    <div class="mb-3 col-md-5">
                                                                        <label>عنوان فرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                        <input type="text" name="subtitle<?php echo $j; ?>" class="form-control" placeholder="عنوان فرعي رقم (<?php echo $j; ?>)" required>
                                                                    </div>
                                                                <?php
                                                            }
                                                        elseif(!empty($_SESSION["subtitle$j"]))
                                                            {
                                                                ?>
                                                                    <h6>عنوان فرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["subtitle$j"]; ?> </h6>
                                                                <?php
                                                            }
                                                        //subtitle_photo
                                                        if(empty($_SESSION["subtitle_photo$j"]))
                                                            {
                                                                ?>
                                                                    <div class="mb-3 col-md-5">
                                                                        <label>صورة عنوان فرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                        <input type="file" name="subtitle_photo<?php echo $j; ?>" class="form-control" required>
                                                                    </div>
                                                                <?php
                                                            }
                                                        elseif(!empty($_SESSION["subtitle_photo$j"]))
                                                            {
                                                                ?>
                                                                    <h6>صورة عنوان فرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["subtitle_photo$j"]; ?> </h6>
                                                                <?php
                                                            }
                                                        //subtitle_description
                                                        if(empty($_SESSION["subtitle_description$j"]))
                                                            {
                                                                ?>
                                                                    <div class="mb-3">
                                                                        <label>محتوى عنوان فرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                        <textarea name="subtitle_description<?php echo $j; ?>" maxlength="1000" class="form-control" placeholder="محتوى عنوان فرعي رقم (<?php echo $j; ?>)" id="floatingTextarea" required></textarea>
                                                                    </div>
                                                                <?php
                                                            }
                                                        elseif(!empty($_SESSION["subtitle_description$j"]))
                                                            {
                                                                ?>
                                                                    <h6>محتوى عنوان فرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["subtitle_description$j"]; ?> </h6>
                                                                <?php
                                                            }
                                                        //subtitle_description
                                                        if(empty($_SESSION["subtitle_location$j"]))
                                                            {
                                                                ?>
                                                                    <div class="mb-3">
                                                                        <label>موقع عنوان فرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                        <textarea name="subtitle_location<?php echo $j; ?>" maxlength="1000" class="form-control" placeholder="موقع عنوان فرعي رقم (<?php echo $j; ?>)" id="floatingTextarea" required></textarea>
                                                                    </div>
                                                                    <hr class="featurette-divider">
                                                                <?php
                                                            }
                                                        elseif(!empty($_SESSION["subtitle_location$j"]))
                                                            {
                                                                ?>
                                                                    <h6>موقع عنوان فرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["subtitle_location$j"]; ?> </h6>
                                                                <?php
                                                            }
                                                        //activitiy loop
                                                        for($k=1; $k<=3; $k++)
                                                            {
                                                                //activitiy_description
                                                                if(empty($_SESSION["activitiy_description$j$k"]))
                                                                    {
                                                                        ?>
                                                                            <div class="mb-3">
                                                                                <label>محتوى النشاط رقم (<?php echo $k; ?>) للعنوان الفرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                                <textarea name="activitiy_description<?php echo $j.$k; ?>" maxlength="1000" class="form-control" placeholder="محتوى النشاط رقم (<?php echo $k; ?>) للعنوان الفرعي رقم (<?php echo $j; ?>)" id="floatingTextarea" requered></textarea>
                                                                            </div>
                                                                        <?php
                                                                    }
                                                                elseif(!empty($_SESSION["activitiy_description$j$k"]))
                                                                    {
                                                                        ?>
                                                                            <h6>محتوى النشاط رقم (<?php echo $k; ?>) للعنوان الفرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["activitiy_description$j$k"]; ?> </h6>
                                                                        <?php
                                                                    }
                                                                //sessions
                                                                if(isset($_POST["check_destination"]))
                                                                    {
                                                                        $_SESSION["destination"] = $_POST["destination"];
                                                                        $_SESSION["destination_name"] = $_POST["destination_name"];
                                                                        $_SESSION["card_photo"] = $_POST["card_photo"];
                                                                        $_SESSION["main_description"] = $_POST["main_description"];
                                                                        $_SESSION["card_description"] = $_POST["card_description"];
                                                                        $_SESSION["weather_description"] = $_POST["weather_description"];

                                                                        $_SESSION["subtitle$j"] = $_POST["subtitle$j"];
                                                                        $_SESSION["subtitle_photo$j"] = $_POST["subtitle_photo$j"];
                                                                        $_SESSION["subtitle_description$j"] = $_POST["subtitle_description$j"];
                                                                        $_SESSION["subtitle_location$j"] = $_POST["subtitle_location$j"];

                                                                        $_SESSION["activitiy_description$j$k"] = $_POST["activitiy_description$j$k"];

                                                                        $_SESSION["check_destination"] = $_POST["check_destination"];

                                                                        header("Location:admin2.php");
                                                                    }
                                                            }
                                                    ?>
                                                    <hr class="featurette-divider">
                                                </div>
                                            </form>
                                        <?php
                                    }
                                    if(!isset($_SESSION["check_destination"]))
                                    {
                                        ?>
                                            <div class="mb-3 col-md-5">
                                                <br>
                                                <input type="submit" class="btn btn-success" name="check_destination" value="تأكيد الوجهة">
                                            </div>
                                        <?php
                                    }
                                    elseif(isset($_SESSION["check_destination"]))
                                    {
                                        ?>
                                            <div class="mb-3 col-md-5">
                                                <br>
                                                <input type="submit" class="btn btn-success" name="insert_destination" value="إضافة الوجهة">
                                            </div>
                                        <?php
                                    }
                                    
                                ?>
                                </form>
                                <form method="POST"><div class="mb-3 col-md-5">
                                        <input type="submit" class="btn btn-success" name="reset_destination" value="إعادة تعيين الوجهة">
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST["insert_destination"]))
                                    {
                                        require_once 'connect_database.php';
                                        //insertr city
                                        if(!empty($_SESSION["destination"]))
                                        {
                                            if($_SESSION["destination"] == "city")
                                            {
                                                //select ID city
                                                $select_city_id = $connect_database->prepare('SELECT MAX(ID) ID FROM city');
                                                $select_city_id->execute();
                                                foreach($select_city_id as $print)
                                                {
                                                    $_SESSION["new_id_city"] = $print["ID"];
                                                }
                                                
                                                if(empty($_SESSION["new_id_city"]))
                                                    $_SESSION["new_id_city"] = 1;
                                                elseif(!empty($_SESSION["new_id_city"]))
                                                    $_SESSION["new_id_city"] ++;
                
                                                //insert city info
                                                $insert_city_info = $connect_database->prepare('INSERT INTO city VALUES ('.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'")');
                                                $insert_city_info->execute();
                                                
                                                //insert city content
                                                $insert_city_content = $connect_database->prepare
                                                ('
                                                INSERT INTO city_content VALUES
                                                (
                                                '.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["main_description"].'" , "'.$_SESSION["weather_description"].'" ,
                                                "'.$_SESSION["card_description"].'" , "'.$_SESSION["card_photo"].'"
                                                )
                                                ');
                                                $insert_city_content->execute();
                
                                                //insert city subtitle
                                                    
                                                for($q=1; $q<=4; $q++)
                                                {
                                                    $insert_city_subtitle = $connect_database->prepare
                                                    ('
                                                    INSERT INTO city_subtitle VALUES
                                                    (
                                                    '.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle$q"].'" , "'.$_SESSION["subtitle_description$q"].'" ,
                                                    "'.$_SESSION["subtitle_photo$q"].'" ,  "'.$_SESSION["subtitle_location$q"].'" 
                                                    )
                                                    ');
                                                    $insert_city_subtitle->execute();
    
                                                    for($w=1; $w<=3; $w++)
                                                    {
                                                        $insert_city_avtivitiy = $connect_database->prepare
                                                        ('
                                                        INSERT INTO city_activitiy VALUES
                                                        (
                                                        '.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle$q"].'" , "'.$_SESSION["activitiy_description$q$w"].'"
                                                        )
                                                        ');
                                                        $insert_city_avtivitiy->execute();
                                                    }
    
                                                }
                                                if($insert_city_info && $insert_city_content && $insert_city_subtitle && $insert_city_avtivitiy)
                                                {
                                                    echo '
                                                    <center>
                                                        <div class="alert alert-success" role="alert">
                                                            <b>تم إضافة المدينة بنجاح</b> 
                                                        </div>
                                                    </center>
                                                    ';
                                                    session_unset();
                                                    header("refresh:3; url=admin2.php");
                                                }
                                                else
                                                {
                                                    echo '
                                                    <center>
                                                        <div class="alert alert-danger" role="alert">
                                                            <b>حدث خطأ</b> 
                                                        </div>
                                                    </center>
                                                    ';
                                                    header("refresh:3; url=admin2.php");
                                                }
                                            }
                                            //insert island
                                            elseif($_SESSION["destination"] == "island")
                                            {
                                                //select ID city
                                                $select_city_id = $connect_database->prepare('SELECT MAX(ID) ID FROM island');
                                                $select_city_id->execute();
                                                foreach($select_city_id as $print)
                                                {
                                                    $_SESSION["new_id_island"] = $print["ID"];
                                                }
                                                
                                                if(empty($_SESSION["new_id_island"]))
                                                    $_SESSION["new_id_island"] = 1;
                                                elseif(!empty($_SESSION["new_id_island"]))
                                                    $_SESSION["new_id_island"] ++;
                
                                                //insert city info
                                                $insert_city_info = $connect_database->prepare('INSERT INTO island VALUES ('.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'")');
                                                $insert_city_info->execute();
                                                
                                                //insert city content
                                                $insert_city_content = $connect_database->prepare
                                                ('
                                                INSERT INTO island_content VALUES
                                                (
                                                '.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["main_description"].'" , "'.$_SESSION["weather_description"].'" ,
                                                "'.$_SESSION["card_description"].'" , "'.$_SESSION["card_photo"].'"
                                                )
                                                ');
                                                $insert_city_content->execute();
                
                                                //insert city subtitle
                                                    
                                                for($q=1; $q<=4; $q++)
                                                {
                                                    $insert_city_subtitle = $connect_database->prepare
                                                    ('
                                                    INSERT INTO island_subtitle VALUES
                                                    (
                                                    '.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle$q"].'" , "'.$_SESSION["subtitle_description$q"].'" ,
                                                    "'.$_SESSION["subtitle_photo$q"].'" ,  "'.$_SESSION["subtitle_location$q"].'" 
                                                    )
                                                    ');
                                                    $insert_city_subtitle->execute();
    
                                                    for($w=1; $w<=3; $w++)
                                                    {
                                                        $insert_city_avtivitiy = $connect_database->prepare
                                                        ('INSERT INTO island_activitiy VALUES
                                                        (
                                                        '.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle$q"].'" , "'.$_SESSION["activitiy_description$q$w"].'"
                                                        )
                                                        ');
                                                        $insert_city_avtivitiy->execute();
                                                    }
    
                                                }
                                                if($insert_city_info && $insert_city_content && $insert_city_subtitle && $insert_city_avtivitiy)
                                                {
                                                    echo '
                                                    <center>
                                                        <div class="alert alert-success" role="alert">
                                                            <b>تم إضافة المدينة بنجاح</b> 
                                                        </div>
                                                    </center>
                                                    ';
                                                    session_unset();
                                                    header("refresh:3; url=admin2.php");
                                                }
                                                else
                                                {
                                                    echo '
                                                    <center>
                                                        <div class="alert alert-danger" role="alert">
                                                            <b>حدث خطأ</b> 
                                                        </div>
                                                    </center>
                                                    ';
                                                    header("refresh:3; url=admin2.php");
                                                }
                                            }
                                        }
                                    }
                                    if(isset($_POST["reset_destination"]))
                                        {
                                            session_unset();
                                            header("Location:admin2.php");
                                        }
                            ?>
                </div>
                <br>
            </div>
        </div>
    </div>
    </div>
    <!-- form_Check_in -->

    <?php require('components/footre.php'); ?>
</body>
</html>
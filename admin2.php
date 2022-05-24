<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title> الادمن</title>
    <?php require('components/head_inc.php'); ?>
</head>

<body>
    <style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button 
    {
        -webkit-appearance: none;
    }
    </style>

<div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-6">
                <div class="signup-form">
                    <form method="POST" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            إضافة وجهة
                            <i class="bi bi-box-arrow-right"></i>
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">
                        <?php
                            //destination
                            if(empty($_SESSION["destination"]))
                            {
                                echo '
                                    <div class="mb-3 col-md-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="destination" id="inlineRadio1" value="city" required>
                                            <label class="form-check-label" for="inlineRadio1">مدينة<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="destination" id="inlineRadio2" value="island" required>
                                            <label class="form-check-label" for="inlineRadio2">جزيرة<span class="text-danger">*</span></label>
                                        </div>
                                    </div>
                                ';
                            }
                            elseif(!empty($_SESSION["destination"]))
                            {
                                if($_SESSION["destination"] == "city")
                                {
                                    echo '
                                        <h6>نوع الوجهة : مدينة <h6/>
                                    ';
                                }
                                elseif($_SESSION["destination"] == "island")
                                {
                                    echo '
                                        <h6>نوع الوجهة : جزيرة <h6/>
                                    ';
                                }
                            }
                            //destination_name
                            if(empty($_SESSION["destination_name"]))
                            {
                                echo '
                                    <div class="mb-3 col-md-5">
                                        <label>اسم الوجهة<span class="text-danger">*</span></label>
                                        <input type="text" name="destination_name" class="form-control" placeholder="اسم الوجهة" required>
                                    </div>
                                ';
                            }
                            elseif(!empty($_SESSION["destination_name"]))
                            {
                                echo '
                                <h6>اسم الوجهة : '.$_SESSION["destination_name"].' <h6/>
                                ';
                            }
                            //card_photo
                            if(empty($_SESSION["card_photo"]))
                            {
                                echo '
                                    <div class="mb-3 col-md-5">
                                        <label>الصورة الرئيسية<span class="text-danger">*</span></label>
                                        <input type="file" name="card_photo" class="form-control" required>
                                    </div>
                                ';
                            }
                            elseif(!empty($_SESSION["card_photo"]))
                            {
                                echo '
                                <h6>الصورة الرئيسية : '.$_SESSION["card_photo"].' <h6/>
                                ';
                            }
                            //main_description
                            if(empty($_SESSION["main_description"]))
                            {
                                echo '
                                    <div class="mb-3">
                                        <label>المحتوى الرئيسي للوجهة<span class="text-danger">*</span></label>
                                        <textarea name="main_description" maxlength="1000" class="form-control" placeholder="المحتوى الرئيسي للوجهة" id="floatingTextarea" required></textarea>
                                    </div>
                                ';
                            }
                            elseif(!empty($_SESSION["main_description"]))
                            {
                                echo '
                                <h6>المحتوى الرئيسي : '.$_SESSION["main_description"].' <h6/>
                                ';
                            }
                            //card_description
                            if(empty($_SESSION["card_description"]))
                            {
                                echo '
                                    <div class="mb-3">
                                        <label>وصف قصير للوجهة<span class="text-danger">*</span></label>
                                        <textarea name="card_description" maxlength="100" class="form-control" placeholder="وصف قصير للوجهة" id="floatingTextarea" required></textarea>
                                    </div>
                                ';
                            }
                            elseif(!empty($_SESSION["card_description"]))
                            {
                                echo '
                                <h6>وصف قصير للوجهة : '.$_SESSION["card_description"].' <h6/>
                                ';
                            }
                            echo '<hr class="featurette-divider">';
                            //subtitle_number
                            if(empty($_SESSION["subtitle_number"]))
                            {
                                echo '
                                    <div class="mb-3 col-md-5">
                                        <label>أدخل عدد العناوين الفرعية<span class="text-danger">*</span></label>
                                        <select name="subtitle_number" class="form-select" id="specificSizeSelect" required>
                                            <option selected disabled value="">عدد العناوين الفرعية</option>';
                                                for($i=1; $i<=5; $i++)
                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                                echo'
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-5">
                                        <br>
                                        <input type="submit" class="btn btn-success" name="create_subtitle" value="اختر">
                                    </div>
                                ';
                            }
                            elseif(!empty($_SESSION["subtitle_number"]))
                            {
                                echo '
                                <h6> عدد العناوين الفرعية : '.$_SESSION["subtitle_number"].' <h6/>
                                ';
                            }
                            echo '<hr class="featurette-divider">';
                                if(isset($_POST["create_subtitle"]) && !empty($_POST["subtitle_number"]))
                                {
                                    $_SESSION["subtitle_number"] = $_POST["subtitle_number"];
                                    for($j=1; $j<=$_SESSION["subtitle_number"]; $j++)
                                    {
                                        if(empty($_SESSION["subtitle_name$j"]))
                                        {
                                            echo '
                                                <div class="mb-3 col-md-5">
                                                    <label>عنوان فرعي رقم ('.$j.')<span class="text-danger">*</span></label>
                                                    <input type="text" name="subtitle_name'.$j.'" class="form-control" placeholder="عنوان فرعي رقم ('.$j.')" required>
                                                </div>
                                            ';
                                        }
                                        elseif(!empty($_SESSION["subtitle_name$j"]))
                                        {
                                            echo '
                                                <h6> عنوان فرعي رقم ('.$j.') : '.$_SESSION["subtitle_name$j"].' <h6/>
                                            ';
                                        }
                                        if(empty($_SESSION["subtitle_photo$j"]))
                                        {
                                            echo '
                                            <div class="mb-3 col-md-5">
                                                <label>صورة العنوان الفرعي رقم ('.$j.')<span class="text-danger">*</span></label>
                                                <input type="file" name="subtitle_photo'.$j.'" class="form-control" required>
                                            </div>
                                            ';
                                        }
                                        elseif(!empty($_SESSION["subtitle_photo$j"]))
                                        {
                                            echo '
                                                <h6>صورة العنوان الفرعي رقم ('.$j.') : '.$_SESSION["subtitle_photo$j"].' <h6/>
                                            ';
                                        }
                                        if(empty($_SESSION["subtitle_description$j"]))
                                        {
                                            echo '
                                            <div class="mb-3">
                                                <label>محتوى العنوان الفرعي رقم  ('.$j.')<span class="text-danger">*</span></label>
                                                <textarea name="subtitle_description'.$j.'" maxlength="100" class="form-control" placeholder="محتوى العنوان الفرعي رقم ('.$j.')" id="floatingTextarea" required></textarea>
                                            </div>
                                            ';
                                        }
                                        elseif(!empty($_SESSION["subtitle_description$j"]))
                                        {
                                            echo '
                                                <h6>محتوى العنوان الفرعي رقم ('.$j.') : '.$_SESSION["subtitle_description$j"].' <h6/>
                                            ';
                                        }
                                        if(empty($_SESSION["subtitle_location$j"]))
                                        {
                                            echo '
                                                <div class="mb-3">
                                                    <label>موقع العنوان الفرعي رقم  ('.$j.')<span class="text-danger">*</span></label>
                                                    <textarea name="subtitle_location'.$j.'" maxlength="1000" class="form-control" placeholder="موقع العنوان الفرعي رقم ('.$j.')" id="floatingTextarea" required></textarea>
                                                </div>
                                                <hr class="featurette-divider">
                                            ';
                                        }
                                        elseif(!empty($_SESSION["subtitle_location$j"]))
                                        {
                                            echo '
                                                <h6>موقع العنوان الفرعي رقم ('.$j.') : '.$_SESSION["subtitle_location$j"].' <h6/>
                                            ';
                                        }
                                        // for($k=1; $k<=3; $k++)
                                        // {
                                        //         echo '
                                        //             <div class="mb-3">
                                        //                 <label>محتوى النشاط رقم ('.$j.'-'.$k.')<span class="text-danger">*</span></label>
                                        //                 <textarea name="activitiy_description'.$j.''.$k.'" maxlength="1000" class="form-control" placeholder="محتوى النشاط رقم ('.$j.'-'.$k.')" id="floatingTextarea" requered></textarea>
                                        //             </div>
                                        //         ';
                                        //         $activitiy_description = array();
                                        //         $activitiy_description[$j][$k] .= $_POST["activitiy_description$j$k"];
                                        // }
                                        echo '<hr class="featurette-divider">';
                                    }
                                    //weather_description
                                    if(empty($_SESSION["weather_description"]))
                                    {
                                        echo '
                                            <div class="mb-3">
                                                <label>مناخ الوجهة<span class="text-danger">*</span></label>
                                                <textarea name="weather_description" maxlength="1000" class="form-control" placeholder="مناخ الوجهة" id="floatingTextarea" required></textarea>
                                            </div>
                                        ';
                                    }
                                    elseif(!empty($_SESSION["weather_description"]))
                                    {
                                        $_SESSION["weather_description"] = $_POST["weather_description"];
                                        echo '
                                            <div class="mb-3">
                                                <label>مناخ الوجهة<span class="text-danger">*</span></label>
                                                <textarea name="weather_description" maxlength="1000" class="form-control" placeholder="'.$_SESSION["weather_description"].'" id="floatingTextarea" required></textarea>
                                            </div>
                                            <hr class="featurette-divider">
                                        ';
                                    }
                                    $_SESSION["destination"] = $_POST["destination"];
                                    $_SESSION["destination_name"] = $_POST["destination_name"];
                                    $_SESSION["card_photo"] = $_POST["card_photo"];
                                    $_SESSION["main_description"] = $_POST["main_description"];
                                    $_SESSION["card_description"] = $_POST["card_description"];
                                }
                            ?>
                            
                            <div class="col">
                                <input type="submit" class="btn btn-success float-end" name="insert_destination" value="إضافة">
                            </div>
                            </form>
                            <form method="POST">
                            <div class="col">
                                <input type="submit" class="btn btn-success float-end" name="reset_destination" value="إعادىة تعيين">
                            </div>
                            </form>
                        </div>
                </div>
                <?php
                    if(isset($_POST["insert_destination"]))
                        {
                            $_SESSION["weather_description"] = $_POST["weather_description"];
                            require 'connect_database.php';
                            if(!empty($_SESSION["destination"]))
                            {
                            if($_SESSION["destination"] == "city")
                            {
                                for($x=1; $x<=$_SESSION["subtitle_number"]; $x++)
                                {
                                    $_SESSION["subtitle_name$x"] = $_POST["subtitle_name$x"];
                                    $_SESSION["subtitle_photo$x"] = $_POST["subtitle_photo$x"];
                                    $_SESSION["subtitle_description$x"] = $_POST["subtitle_description$x"];
                                    $_SESSION["subtitle_location$x"] = $_POST["subtitle_location$x"];
                                }

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
                                    
                                for($y=1; $y<=$_SESSION["subtitle_number"]; $y++)
                                {
                                    $insert_city_subtitle = $connect_database->prepare
                                    ('
                                    INSERT INTO city_subtitle VALUES
                                    (
                                    '.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle_name$y"].'" , "'.$_SESSION["subtitle_description$y"].'" ,
                                    "'.$_SESSION["subtitle_photo$y"].'" ,  "'.$_SESSION["subtitle_location$y"].'" 
                                    )
                                    ');
                                    $insert_city_subtitle->execute();
                                }
                                if($insert_city_info && $insert_city_content && $insert_city_subtitle)
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
                            elseif($_SESSION["destination"] == "island")
                            {
                                for($x=1; $x<=$_SESSION["subtitle_number"]; $x++)
                                {
                                    $_SESSION["subtitle_name$x"] = $_POST["subtitle_name$x"];
                                    $_SESSION["subtitle_photo$x"] = $_POST["subtitle_photo$x"];
                                    $_SESSION["subtitle_description$x"] = $_POST["subtitle_description$x"];
                                    $_SESSION["subtitle_location$x"] = $_POST["subtitle_location$x"];
                                }

                                //select ID city
                                $select_island_id = $connect_database->prepare('SELECT MAX(ID) ID FROM island');
                                $select_island_id->execute();
                                foreach($select_island_id as $print)
                                {
                                    $_SESSION["new_id_island"] = $print["ID"];
                                }
                                
                                if(empty($_SESSION["new_id_island"]))
                                    $_SESSION["new_id_island"] = 1;
                                elseif(!empty($_SESSION["new_id_island"]))
                                    $_SESSION["new_id_island"] ++;

                                //insert city info
                                $insert_island_info = $connect_database->prepare('INSERT INTO island VALUES ('.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'")');
                                $insert_island_info->execute();
                                
                                //insert city content
                                $insert_island_content = $connect_database->prepare
                                ('
                                INSERT INTO island_content VALUES
                                (
                                '.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["main_description"].'" , "'.$_SESSION["weather_description"].'" ,
                                "'.$_SESSION["card_description"].'" , "'.$_SESSION["card_photo"].'"
                                )
                                ');
                                $insert_island_content->execute();

                                //insert city subtitle
                                    
                                for($y=1; $y<=$_SESSION["subtitle_number"]; $y++)
                                {
                                    $insert_island_subtitle = $connect_database->prepare
                                    ('
                                    INSERT INTO island_subtitle VALUES
                                    (
                                    '.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle_name$y"].'" , "'.$_SESSION["subtitle_description$y"].'" ,
                                    "'.$_SESSION["subtitle_photo$y"].'" ,  "'.$_SESSION["subtitle_location$y"].'" 
                                    )
                                    ');
                                    $insert_island_subtitle->execute();
                                }
                                if($insert_island_info && $insert_island_content && $insert_island_subtitle)
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
                    elseif(isset($_POST["reset_destination"]))
                        {
                            $_SESSION["destination"] ;
                            $_SESSION["destination_name"] ;
                            $_SESSION["card_photo"] ;
                            $_SESSION["main_description"] ;
                            $_SESSION["subtitle_number"] ;
                            $_SESSION["card_description"];
                            session_unset();
                            header("Location:admin2.php");
                        }
                        else
                        {
                        }
                ?>
            </div>
        </div>
    </div>
    <br>
    <?php require('components/footre.php');?>
</body>

</html>
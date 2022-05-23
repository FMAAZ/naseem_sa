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
                            echo '<hr class="featurette-divider">';
                            //subtitle_number
                            if(empty($_SESSION["subtitle_number"]))
                            {
                                echo '
                                    <div class="mb-3 col-md-5">
                                        <label>أدخل عدد العناوين الفرعية<span class="text-danger">*</span></label>
                                        <select name="subtitle_number" class="form-select" id="specificSizeSelect" required>
                                            <option selected disabled value="">عدد العناوين الفرعية</option>';
                                                for($i=1; $i<=10; $i++)
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
                        ?>

                            <hr class="featurette-divider">

                            <?php
                                if(isset($_POST["create_subtitle"]) && !empty($_POST["subtitle_number"]))
                                {
                                    for($j=1; $j<=$_POST["subtitle_number"]; $j++)
                                    {
                                        echo'
                                            <div class="mb-3 col-md-5">
                                                <label>عنوان فرعي رقم ('.$j.')<span class="text-danger">*</span></label>
                                                <input type="text" name="subtitle_name'.$j.'" class="form-control" placeholder="عنوان فرعي رقم ('.$j.')" required>
                                            </div>
                                            <div class="mb-3 col-md-5">
                                                <label>صورة العنوان الفرعي رقم ('.$j.')<span class="text-danger">*</span></label>
                                                <input type="file" name="subtitle_photo'.$j.'" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label>محتوى العنوان الفرعي رقم  ('.$j.')<span class="text-danger">*</span></label>
                                                <textarea name="subtitle_description'.$j.'" maxlength="100" class="form-control" placeholder="محتوى العنوان الفرعي رقم ('.$j.')" id="floatingTextarea" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label>موقع العنوان الفرعي رقم  ('.$j.')<span class="text-danger">*</span></label>
                                                <textarea name="subtitle_location'.$j.'" maxlength="1000" class="form-control" placeholder="موقع العنوان الفرعي رقم ('.$j.')" id="floatingTextarea" required></textarea>
                                            </div>
                                        ';
                                        for($k=1; $k<=3; $k++)
                                        {
                                            if($k == 3)
                                            {
                                                echo '
                                                <div class="mb-3">
                                                <label>محتوى النشاط رقم ('.$k.')</label>
                                                <textarea name="subtitle_description'.$k.'" maxlength="1000" class="form-control" placeholder="محتوى النشاط رقم ('.$k.')" id="floatingTextarea"></textarea>
                                                </div>
                                                ';
                                                continue;
                                            }
                                            echo '
                                            <div class="mb-3">
                                            <label>محتوى النشاط رقم ('.$k.')<span class="text-danger">*</span></label>
                                            <textarea name="subtitle_description'.$k.'" maxlength="1000" class="form-control" placeholder="محتوى النشاط رقم ('.$k.')" id="floatingTextarea"></textarea>
                                            </div>
                                            ';
                                        }
                                        echo '
                                        <hr class="featurette-divider">
                                        '; 
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
                                    $_SESSION["subtitle_number"] = $_POST["subtitle_number"];
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
                            
                        }
                    elseif(isset($_POST["reset_destination"]))
                        {
                            $_SESSION["destination"] ;
                            $_SESSION["destination_name"] ;
                            $_SESSION["card_photo"] ;
                            $_SESSION["main_description"] ;
                            $_SESSION["subtitle_number"] ;
                            session_unset();
                            header("Location:admin2.php");
                        }
                ?>
            </div>
        </div>
    </div>
    <br>
    <?php require('components/footre.php');?>
</body>

</html>
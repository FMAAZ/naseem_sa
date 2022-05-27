<!doctype html>
<html lang="en" dir="rtl">
<head>
    <title> طلبات</title>
    <?php require 'Niv1.php'; ?>
</head>

<body>
    <?php
    if(isset($_SESSION["login"]) && !empty($_SESSION["email"]) && !empty($_SESSION["password"]))
    {
        if(!empty($_SESSION["email_tourist"]) && !empty($_SESSION["password_tourist"]))
            {
            }
        else
            {
                session_unset();
                echo '
                    <center>
                        <div class="alert alert-danger" role="alert">
                            <b> ERROR ! </b>
                        </div>
                    </center>
                ';
                header("refresh:2;url= index.php");
                exit;
            }
    }
    else
    {
        session_unset();
        echo '
            <center>
                <div class="alert alert-danger" role="alert">
                    <b> ERROR ! </b>
                </div>
            </center>
        ';
        header("refresh:2;url= index.php");
        exit;
    }
    ?>
    <!--/* Field of Age */-->
    <style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }
    </style>
    <!--/* Field of Age */ -->
    <!-- form_Chck_in -->
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-6">
                <div class="signup-form">
                    <form method="POST" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            طلب مرشد 
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">

                        
                        <div class="btn  me-2 " role="group" aria-label="First group">
    
                        <div class="form-check form-check-inline">
                                            <span class="text-danger">*</span></label>
    <input class="form-check-input" type="radio" name="wher" id="inlineRadio1" value="island" required>
    <label class="form-check-label" for="inlineRadio1">جزر</label>
</div>
<div class="form-check form-check-inline">

                                    <span class="text-danger">*</span></label>
    <input class="form-check-input" type="radio" name="wher" id="inlineRadio2" value="citie" required>
    <label class="form-check-label" for="inlineRadio2">مدن</label>
</div>
<input type="submit" class="btn btn btn-success" name="ok" value="تاكد">
    </div>

                            <div class="mb-3 col-md-5">
                                <label>  عدد الاشخاص</label>
                                <input type="number" name="first_name" class="form-control" placeholder="عدد الاشخاص " >
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>عدد الايام </label>
                                <input type="number" name="last_name" class="form-control" placeholder="عدد الايام " >
                            </div>
                            <div class="mb-3 col-md-9 col-6 mx-auto">
                            <label> الوجهه<span class="text-danger">*</span></label>
                                <select name="Region" class="form-select" id="language" style="text-align: center;" required>
                                    <option selected disabled value="null" >الوجهه</option>
                                    <?php
                            if(isset($_POST['ok']))
                            {
                                if($_POST['wher']=="citie")
                                {
                                echo"<option value=Riyadh >الرياض</option> <option value=Jaddah >جدة</option><option value=Dammam >الدمام</option><option value=Abha >ابها</option>";}
                                if($_POST['wher']=="island")
                                {
                                    echo"<option value=fursan >فرسان</option> <option value=Umluj >املج</option><option value=umm alqamari >أم القماري</option><option value=umm sanafir > جزيرة أمنة</option>";}
                            }   
                                else
                                    echo"<option>الوجهه</option>";
                                ?>
                                </select>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="Request.php">
                                    <button class="btn btn-success float-end" name="request"> طلب </button>
                                </a>
                                </form>
                                <?php
                                if(isset($_POST["request"]) && !empty($_POST["Region"]))
                                {
                                    require_once 'connect_database.php';
                                    $select_id_request = $connect_database->prepare('SELECT MAX(req_id) ID FROM requests');
                                    $select_id_request->execute();
                                    foreach($select_id_request as $print)
                                    {
                                        $_SESSION["new_id_request"] = $print["ID"];
                                    }
    
                                    if(empty($_SESSION["new_id_request"]))
                                    {
                                        $_SESSION["new_id_request"] = 100;
                                    }
                                    elseif(!empty($_SESSION["new_id_request"]))
                                    {
                                        $_SESSION["new_id_request"] ++;
                                    }
                                    $insert_req_id = $connect_database->prepare('INSERT INTO requests (req_id , tourist_req_id , req_date , req_time)
                                    VALUES ('.$_SESSION["new_id_request"].' , '.$_SESSION["ID"].' , "'.$date.'" , "'.$time.'")');
                                    $insert_req_id->execute();

                                    if($insert_req_id->rowCount()==1)
                                    {
                                        echo 'تم إنشاء الطلب';
                                        header("refresh:2; url=request.php");
                                    }
                                    elseif($insert_req_id->rowCount()==0)
                                    {
                                        var_dump($insert_req_id);
                                        echo 'حدث خطأ أثناء إنشاء الطلب';
                                        header("refresh:2; url=request.php");
                                    }
                                    else
                                    {
                                        var_dump($insert_req_id);
                                        echo 'ERROR';
                                        header("refresh:2; url=request.php");
                                    }
                                }
                                ?>
                            </div>
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
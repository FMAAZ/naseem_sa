<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title> طلبات</title>
    <?php require('components/head_inc.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>

    <?php
    ob_start();
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
    <input class="form-check-input" type="radio" name="wher" id="inlineRadio1" value="island">
    <label class="form-check-label" for="inlineRadio1">جزر</label>
</div>
<div class="form-check form-check-inline">

                                    <span class="text-danger">*</span></label>
    <input class="form-check-input" type="radio" name="wher" id="inlineRadio2" value="citie">
    <label class="form-check-label" for="inlineRadio2">مدن</label>
</div>
<input type="submit" class="btn btn btn-success" name="ok" value="تاكد">
    </div>

                            <div class="mb-3 col-md-5">
                                <label>  عدد الاشخاص</label>
                                <input type="text" name="first_name" class="form-control" placeholder="عدد الاشخاص " required>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>عدد الايام </label>
                                <input type="text" name="last_name" class="form-control" placeholder="عدد الايام " required>
                            </div>
                            <div class="mb-3 col-md-9 col-6 mx-auto">
                            <label> الوجهه<span class="text-danger">*</span></label>
                                <select name="Region" class="form-select" id="language" style="text-align: center;" required>
                                    <option selected disabled value="null" >الوجهه</option>

                                </select>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="Request.php">
                                    <button class="btn btn-success float-end" name="request"> طلب </button>
                                </a>
                                <?php
                                if(isset($_POST["request"]))
                                {
                                    require_once 'connect_database.php';
                                    $select_id_request = $connect_database->prepare('SELECT MAX(ID) ID FROM requests');
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
                                    $type_date = date_default_timezone_set("Asia/Riyadh");
                                    $date = date("Y-m-d");
                                    $time = date("H:i:s");
                                    $insert_req_id = $connect_database->prepare('INSERT INTO requests (req_id , req_date , req_time)
                                    VALUES ('.$_SESSION["new_id_request"].' , "'.$date.'" , "'.$time.'")');
                                    $insert_req_id->execute();
                                    if($insert_req_id->rowCount()==1)
                                    {
                                        echo 'تم إنشاء الطلب';
                                    }
                                    else
                                    {
                                        echo 'Failed !';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
    <!-- form_Check_in -->

<?php require('components/footre.php'); ?>
<?php
ob_end_flush();
?>
</body>

</html>
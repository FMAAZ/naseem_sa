<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title> طلبات</title>
    <?php require 'Niv1.php'; ?>
</head>

<body>
    <?php
    if (isset($_SESSION["login"]) && !empty($_SESSION["email"]) && !empty($_SESSION["password"]))
    {
        if (!empty($_SESSION["email_tourist"]) && !empty($_SESSION["password_tourist"])) {
        } else {
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
        header("Location:index.php");
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
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="signup-form">
                    <form method="POST" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            طلب مرشد
                        </h4>
                        <hr class="featurette-divider">
                        <?php
                            require 'connect_database.php';
                            $check_req_id = $connect_database->prepare
                            ('SELECT MAX(req_id) req_id FROM requests WHERE tourist_req_id = '.$_SESSION["tourist_ID"].'');
                            $check_req_id->execute();
                            foreach($check_req_id as $req_id)
                            {
                                $_SESSION["check_req_id"] = $req_id["req_id"];
                            }

                            if(!empty($_SESSION["check_req_id"]))
                                {
                                    $check_request = $connect_database->prepare
                                    ('SELECT * FROM requests WHERE req_id = '.$_SESSION["check_req_id"].'');
                                    $check_request->execute();
                                    foreach($check_request as $print)
                                    {
                                        if($print["req_status"] == "finished" || $print["req_status"] == "cancel" || $print["req_status"] == "reject")
                                        {
                                            ?>
                                                <div class="row">
                                                    <div class="btn  me-2 " role="group" aria-label="First group">
                                                        <?php
                                                            if(empty($_POST["destination_req"]))
                                                                {
                                                                    ?>
                                                                        <div class="form-check form-check-inline">
                                                                            <span class="text-danger">*</span></label>
                                                                            <input class="form-check-input" type="radio" name="destination_req" id="inlineRadio1" value="island" required>
                                                                            <label class="form-check-label" for="inlineRadio1">جزر</label>
                                                                        </div>
        
                                                                        <div class="form-check form-check-inline">
                                                                            <span class="text-danger">*</span></label>
                                                                            <input class="form-check-input" type="radio" name="destination_req" id="inlineRadio2" value="city" required>
                                                                            <label class="form-check-label" for="inlineRadio2">مدن</label>
                                                                        </div>
                                                                    <?php
                                                                }
                                                            elseif(!empty($_POST["destination_req"]))
                                                                {
                                                                    if($_POST["destination_req"] == "island")
                                                                        {
                                                                            $_SESSION["destination_req"] = "جزيرة";
                                                                            ?>
                                                                                <div class="form-check form-check-inline">
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio1" value="island" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio1">جزر</label>
                                                                                </div>
        
                                                                                <div class="form-check form-check-inline">
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio2" value="city">
                                                                                    <label class="form-check-label" for="inlineRadio2">مدن</label>
                                                                                </div>
                                                                            <?php
                                                                        }
                                                                    elseif($_POST["destination_req"] == "city")
                                                                        {
                                                                            $_SESSION["destination_req"] = "مدينة";
                                                                            ?>
                                                                                <div class="form-check form-check-inline">
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio1" value="island">
                                                                                    <label class="form-check-label" for="inlineRadio1">جزر</label>
                                                                                </div>
        
                                                                                <div class="form-check form-check-inline">
                                                                                    <span class="text-danger">*</span></label>
                                                                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio2" value="city" required checked>
                                                                                    <label class="form-check-label" for="inlineRadio2">مدن</label>
                                                                                </div>
                                                                            <?php
                                                                        }
                                                                }
                                                        ?>
                                                        <input type="submit" class="btn btn btn-success btn-sm" name="show_destination" value="عرض">
                                                    </div>
        
                                                    <div class="mb-3 col-md-5">
                                                        <label> عدد الاشخاص</label>
                                                        <input type="number" name="number_people" class="form-control" placeholder="عدد الاشخاص">
                                                    </div>
        
                                                    <div class="mb-3 col-md-5">
                                                        <label>عدد الايام </label>
                                                        <input type="number" name="number_days" class="form-control" placeholder="عدد الأيام">
                                                    </div>
        
                                                    <div class="mb-3 col-md-10 col-6">
                                                        <label>الوجهة<span class="text-danger">*</span></label>
                                                        <select name="destination_name" class="form-select" id="language" style="text-align: center;" required>
                                                            <option selected disabled value="null">الوجهة</option>
                                                            <?php
                                                                if (isset($_POST['show_destination']))
                                                                    {
                                                                        require 'connect_database.php';
                                                                        $show_destination = $connect_database->prepare('SELECT * FROM '.$_POST['destination_req'].'');
                                                                        $show_destination->execute();
                                                                        foreach($show_destination as $print)
                                                                            {
                                                                                echo '<option value='.$print["name"].'>'.$print["name"].'</option>';
                                                                            }
                                                                    }
                                                            ?>
                                                        </select>
                                                    </div>
        
                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                        <a href="Request.php">
                                                            <button type="submit" name="request" class="btn btn-success float-end"> طلب </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                        elseif(($print["req_status"] == NULL))
                                        {
                                            ?>
                                                <center>
                                                    <div class="spinner-border text-success" role="status">
                                                        <span class="visually-hidden">في انتظار قبول الطلب</span>
                                                    </div>
                                                    في انتظار قبول الطلب رقم : <?php echo $print["req_id"]; ?>
                                                </center>

                                                <br>

                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <input type="submit" class="btn btn-danger btn-sm" name="cancel_trip" value="إلغاء الرحلة">
                                                </div>
                                            <?php
                                                if(isset($_POST["cancel_trip"]))
                                                {
                                                    $cancel_trip = $connect_database->prepare
                                                    ('UPDATE requests SET req_status = "cancel" , req_date_end = "'.$date.'" , req_time_end = "'.$time.'" WHERE req_id = '.$_SESSION["check_req_id"].'');
                                                    $cancel_trip->execute();
                                                    if($cancel_trip)
                                                    {
                                                        echo '
                                                            </div>
                                                            <br>
                                                            <center>
                                                                <div class="alert alert-success" role="alert">
                                                                    <b>تم إلغاء الرحلة بنجاح</b> 
                                                                </div>
                                                            </center>
                                                        ';
                                                        header("refresh:3; url=request.php");
                                                    }
                                                    else
                                                    {
                                                        echo '
                                                            <br>
                                                            <center>
                                                                <div class="alert alert-danger" role="alert">
                                                                    <b>ERROR</b> 
                                                                </div>
                                                            </center>
                                                        ';
                                                        header("refresh:3; url=request.php");
                                                    }
                                                }
                                        }
                                        elseif(($print["req_status"] == "reject"))
                                        {
                                                echo '<center><h6>تم رفض الطلب رقم : '.$print["req_id"].'</h6></center>';
                                                ?>
                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                        <input type="submit" class="btn btn-success btn-sm" name="re_request" value="إنشاء طلب جديد">
                                                    </div>
                                                <?php
                                                if(isset($_POST["re_request"]))
                                                {
                                                    $re_request = $connect_database->prepare
                                                    ('UPDATE requests SET req_status = "reject" , req_date_end = "'.$date.'" , req_time_end = "'.$time.'" WHERE req_id = '.$_SESSION["check_req_id"].'');
                                                    $re_request->execute();
                                                    header("Location: request.php");
                                                }
                                        }
                                        elseif(($print["req_status"] == "accept"))
                                        {
                                            echo '<center><h6>تم قبول الطلب رقم : '.$print["req_id"].'</h6></center>';

                                            $tour_guid_info = $connect_database->prepare
                                            ('
                                            SELECT t.first_name first_name , t.last_name last_name , t.language language , t.gender gender , t.email email , t.phone_number phone_number
                                            FROM tour_guide t , requests r WHERE t.ID = r.tour_guide_req_id AND req_id = '.$_SESSION["check_req_id"].'
                                            ');
                                            $tour_guid_info->execute();

                                            foreach($tour_guid_info as $show_tour_guide_info)
                                                {
                                                    echo '
                                                        <table class="table table-striped table-hover table-bordered">
                                                            <tr>
                                                                <th colspan=5><center>بيانات المرشد</center></th>
                                                            </tr>
                                                            <tr class="table-success">
                                                                <td>الاسم</td>
                                                                <td>اللغة</td>
                                                                <td>الجنس</td>
                                                                <td>رقم الهاتف</td>
                                                                <td>البريد الإلكتروني</td>
                                                                </tr>
                                                    ';
                                                    if($show_tour_guide_info["gender"] == "ذكر")
                                                        {
                                                            echo'
                                                                <tr class="table-primary">
                                                                    <td>'.$show_tour_guide_info["first_name"] . " " . $show_tour_guide_info["last_name"].'</td>
                                                                    <td>'.$show_tour_guide_info["language"].'</td>
                                                                    <td>'.$show_tour_guide_info["gender"].'</td>
                                                                    <td>'.'0'.$show_tour_guide_info["phone_number"].'</td>
                                                                    <td>'.$show_tour_guide_info["email"].'</td>
                                                                </tr>
                                                                </table>
                                                            ';
                                                        }
                                                    elseif($show_tour_guide_info["gender"] == "أنثى")
                                                        {
                                                            echo'
                                                                <tr class="table-danger">
                                                                    <td>'.$show_tour_guide_info["first_name"] . " " . $show_tour_guide_info["last_name"].'</td>
                                                                    <td>'.$show_tour_guide_info["language"].'</td>
                                                                    <td>'.$show_tour_guide_info["gender"].'</td>
                                                                    <td>' .'0'.$show_tour_guide_info["phone_number"].'</td>
                                                                    <td>'.$show_tour_guide_info["email"].'</td>
                                                                </tr>
                                                                </table>
                                                            ';
                                                        }
                                                }
                                                ?>
                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                        <input type="submit" class="btn btn-danger btn-sm" name="finish_trip" value="إنهاء الرحلة">
                                                    </div>
                                                <?php
                                                if(isset($_POST["finish_trip"]))
                                                    {
                                                        $finish_trip = $connect_database->prepare
                                                        ('UPDATE requests SET req_status = "finished" , req_date_end = "'.$date.'" , req_time_end = "'.$time.'" WHERE req_id = '.$_SESSION["check_req_id"].'');
                                                        $finish_trip->execute();
                                                        if($finish_trip)
                                                            {
                                                                echo '
                                                                    </div>
                                                                    <br>
                                                                    <center>
                                                                        <div class="alert alert-success" role="alert">
                                                                            <b>تم إنهاء الرحلة بنجاح</b> 
                                                                        </div>
                                                                    </center>
                                                                ';
                                                                header("refresh:3; url=request.php");
                                                            }
                                                        else
                                                            {
                                                                echo '
                                                                    <br>
                                                                    <center>
                                                                        <div class="alert alert-danger" role="alert">
                                                                            <b>ERROR</b> 
                                                                        </div>
                                                                    </center>
                                                                ';
                                                                header("refresh:3; url=request.php");
                                                            }
                                                    }
                                        }
                                    }
                                }
                            elseif(empty($_SESSION["check_req_id"]))
                                {
                                    ?>
                                        <div class="row">
                                            <div class="btn  me-2 " role="group" aria-label="First group">
                                                <?php
                                                    if(empty($_POST["destination_req"]))
                                                        {
                                                            ?>
                                                                <div class="form-check form-check-inline">
                                                                    <span class="text-danger">*</span></label>
                                                                    <input class="form-check-input" type="radio" name="destination_req" id="inlineRadio1" value="island" required>
                                                                    <label class="form-check-label" for="inlineRadio1">جزر</label>
                                                                </div>

                                                                <div class="form-check form-check-inline">
                                                                    <span class="text-danger">*</span></label>
                                                                    <input class="form-check-input" type="radio" name="destination_req" id="inlineRadio2" value="city" required>
                                                                    <label class="form-check-label" for="inlineRadio2">مدن</label>
                                                                </div>
                                                            <?php
                                                        }
                                                    elseif(!empty($_POST["destination_req"]))
                                                        {
                                                            if($_POST["destination_req"] == "island")
                                                                {
                                                                    $_SESSION["destination_req"] = "جزيرة";
                                                                    ?>
                                                                        <div class="form-check form-check-inline">
                                                                            <span class="text-danger">*</span></label>
                                                                            <input class="form-check-input" type="radio" name="destination_req" id="inlineRadio1" value="island" required checked>
                                                                            <label class="form-check-label" for="inlineRadio1">جزر</label>
                                                                        </div>
        
                                                                        <div class="form-check form-check-inline">
                                                                            <span class="text-danger">*</span></label>
                                                                            <input class="form-check-input" type="radio" name="destination_req" id="inlineRadio2" value="city">
                                                                            <label class="form-check-label" for="inlineRadio2">مدن</label>
                                                                        </div>
                                                                    <?php
                                                                }
                                                            elseif($_POST["destination_req"] == "city")
                                                                {
                                                                    $_SESSION["destination_req"] = "مدينة";
                                                                    ?>
                                                                        <div class="form-check form-check-inline">
                                                                            <span class="text-danger">*</span></label>
                                                                            <input class="form-check-input" type="radio" name="destination_req" id="inlineRadio1" value="island">
                                                                            <label class="form-check-label" for="inlineRadio1">جزر</label>
                                                                        </div>
        
                                                                        <div class="form-check form-check-inline">
                                                                            <span class="text-danger">*</span></label>
                                                                            <input class="form-check-input" type="radio" name="destination_req" id="inlineRadio2" value="city" required checked>
                                                                            <label class="form-check-label" for="inlineRadio2">مدن</label>
                                                                        </div>
                                                                    <?php
                                                                }
                                                        }
                                                ?>
                                                <input type="submit" class="btn btn btn-success btn-sm" name="show_destination" value="عرض">
                                            </div>
        
                                            <div class="mb-3 col-md-5">
                                                <label> عدد الاشخاص</label>
                                                <input type="number" name="first_name" class="form-control" placeholder="عدد الاشخاص">
                                            </div>
        
                                            <div class="mb-3 col-md-5">
                                                <label>عدد الايام </label>
                                                <input type="number" name="last_name" class="form-control" placeholder="عدد الايام">
                                            </div>
        
                                            <div class="mb-3 col-md-10 col-6">
                                                <label>الوجهة<span class="text-danger">*</span></label>
                                                <select name="destination_name" class="form-select" id="language" style="text-align: center;" required>
                                                    <option selected disabled value="null">الوجهة</option>
                                                    <?php
                                                        if (isset($_POST['show_destination']))
                                                            {
                                                                require 'connect_database.php';
                                                                $show_destination = $connect_database->prepare('SELECT * FROM '.$_POST['destination_req'].'');
                                                                $show_destination->execute();
                                                                foreach($show_destination as $print)
                                                                    {
                                                                        echo '<option value='.$print["name"].'>'.$print["name"].'</option>';
                                                                    }
                                                            }
                                                    ?>
                                                </select>
                                            </div>
        
                                            <div class="d-grid gap-2 col-6 mx-auto">
                                                <a href="Request.php">
                                                    <button type="submit" name="request" class="btn btn-success float-end" > طلب </button>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                }
                        ?>
                    </form>
                    <br>
                    <?php
                        if (isset($_POST["request"]) && !empty($_POST["destination_name"]))
                            {
                                require_once 'connect_database.php';
                                $select_id_request = $connect_database->prepare('SELECT MAX(req_id) ID FROM requests');
                                $select_id_request->execute();
                                foreach ($select_id_request as $print)
                                    $_SESSION["new_id_request"] = $print["ID"];

                                //request id
                                if (empty($_SESSION["new_id_request"]))
                                    $_SESSION["new_id_request"] = 100;
                                elseif (!empty($_SESSION["new_id_request"]))
                                    $_SESSION["new_id_request"]++;

                                //number of people 
                                if(empty($_POST["number_people"]))
                                    $_POST["number_people"] = "0";
                                elseif(!empty($_POST["number_people"]))
                                    $_POST["number_people"] = $_POST["number_people"];

                                //number of days
                                if(empty($_POST["number_days"]))
                                    $_POST["number_days"] = "0";
                                elseif(!empty($_POST["number_days"]))
                                    $_POST["number_days"] = $_POST["number_days"];

                                //insert request
                                $insert_req_id = $connect_database->prepare
                                ('
                                INSERT INTO requests (req_id , tourist_req_id , req_date , req_time , destination , number_days , number_people)
                                VALUES ('.$_SESSION["new_id_request"].' , '.$_SESSION["tourist_ID"].' , "'.$date.'" , "'.$time.'" , "'.$_SESSION["destination_req"].' : '.$_POST["destination_name"].'" , '.$_POST["number_days"].' , '.$_POST["number_people"].')
                                ');
                                $insert_req_id->execute();

                                if ($insert_req_id->rowCount() == 1)
                                    {
                                        echo '
                                            <center>
                                                <div class="alert alert-success" role="alert">
                                                    <b>تم إنشاء الطلب بنجاح</b> 
                                                </div>
                                            </center>
                                        ';
                                        header("refresh:2; url=request.php");
                                    }
                                elseif ($insert_req_id->rowCount() == 0)
                                    {
                                        echo '
                                            <center>
                                                <div class="alert alert-danger" role="alert">
                                                    <b>حدث خطأ أثناء إنشاء الطلب</b> 
                                                </div>
                                            </center>
                                        ';
                                        var_dump($insert_req_id);
                                        header("refresh:2; url=request.php");
                                    }
                                else
                                    {
                                        echo '
                                            <center>
                                                <div class="alert alert-danger" role="alert">
                                                    <b>ERROR</b> 
                                                </div>
                                            </center>
                                        ';
                                        header("refresh:2; url=request.php");
                                    }
                            }
                    ?>
                </div>
            </div>
            <br><br>
        </div>
    </div>
    </div>
    </div>
    <!-- form_Check_in -->
    <?php require('components/footre.php'); ?>
</body>

</html>
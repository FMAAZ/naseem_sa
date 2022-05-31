<!DOCTYPE html>
<html lang="ar"dir="rtl">
<head>
    <?php 
        ob_start();
    ?>
    <?php 
        ob_start();
    ?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <!-- Bootstrap 5core CSS 5-->
    <link rel="stylesheet" href="assistances/css/bootstrap.min.css">
    <!--Style all pages-->
    <link rel="stylesheet" href="assistances/css/style.css" >
    <!-- Bootstrap 5core JS 5-->
    <!-- err js 5 -->
    <script src="assistances/js/bootstrap.bundle.min.js"></script>
    
    <style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }
    </style>
    
</head>
    <?php
        session_start();
        $type_date = date_default_timezone_set("Asia/Riyadh");
        $date = date("Y-m-d");
        $time = date("H:i:s");
    ?>
        <!--Icons-->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 16 16">
            <title>نسيم السعودية</title>
            <path fill-rule="evenodd"
                d="m4.736 1.968-.892 3.269-.014.058C2.113 5.568 1 6.006 1 6.5 1 7.328 4.134 8 8 8s7-.672 7-1.5c0-.494-1.113-.932-2.83-1.205a1.032 1.032 0 0 0-.014-.058l-.892-3.27c-.146-.533-.698-.849-1.239-.734C9.411 1.363 8.62 1.5 8 1.5c-.62 0-1.411-.136-2.025-.267-.541-.115-1.093.2-1.239.735Zm.015 3.867a.25.25 0 0 1 .274-.224c.9.092 1.91.143 2.975.143a29.58 29.58 0 0 0 2.975-.143.25.25 0 0 1 .05.498c-.918.093-1.944.145-3.025.145s-2.107-.052-3.025-.145a.25.25 0 0 1-.224-.274ZM3.5 10h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Zm-1.5.5c0-.175.03-.344.085-.5H2a.5.5 0 0 1 0-1h3.5a1.5 1.5 0 0 1 1.488 1.312 3.5 3.5 0 0 1 2.024 0A1.5 1.5 0 0 1 10.5 9H14a.5.5 0 0 1 0 1h-.085c.055.156.085.325.085.5v1a2.5 2.5 0 0 1-5 0v-.14l-.21-.07a2.5 2.5 0 0 0-1.58 0l-.21.07v.14a2.5 2.5 0 0 1-5 0v-1Zm8.5-.5h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Z" />
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <title>الصفحة الرئيسية</title>
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>

        <symbol id="people-circle" viewBox="0 0 16 16">
            <title>!تواصل حياك</title>
            <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z" />

        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <title>!استكشف الاماكن المميزة</title>
            <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>
        <!--Icons/-->
    <!--NAVbar-->
    <main>
        <div class="b-example-divider"></div>
        <div class="container">
            <header
                class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="index.php"
                    class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <img src="assistances/images/log1.png" alt="mdo" width="100" height="100" class="rounded">
                </a>
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 link-success">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#home" />
                            </svg>
                            صفحة الرئيسية
                        </a>
                </li>
                    <!-- tourism.php -->
                    <li><a href="#scrollspyHeading2" class="nav-link px-2 link-success">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#grid" />
                            </svg>
                            الاماكن السياحية
                        </a></li>
                        <li class="nav-item"><a href="#scrollspyHeading1" class="nav-link px-2 link-success">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                <use xlink:href="#people-circle" />
                            </svg>
                            تواصل
                        </a>
                        </li>
                </ul>
        <?php
            if(!empty($_SESSION["email_tourist"]) && !empty($_SESSION["password_tourist"]))
            {
                if(isset($_POST["update"])) 
                {
                    require_once 'connect_database.php';
                    $profile_info = $connect_database->prepare('SELECT * FROM tourist WHERE email = "'.$_SESSION["email_tourist"].'" AND password = "'.$_SESSION["password_tourist"].'"');
                    $profile_info->execute();
                    foreach($profile_info as $print)
                    {
                        $_SESSION["tourist_ID"] = $print["ID"];
                        echo '
                                <!-- profile -->
                                <div class="col-md-3 text-end">
                                <ul class="nav">
                                <div class="dropdown text-end">
                                <a href="#offcanvasExample" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assistances/images/log.jpg" alt="mdo" width="50" height="50" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">عرض الملف</a></li>
                                <li><a class="dropdown-item" href="request.php">طلب مرشد</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="sing_out.php">تسجيل الخروج</a></li>
                                </ul>
                                </div> 
                                </ul>
                                </div>
                                <!-- profile -->
                                </header>
                                </div>
                                </main>
                                <!--NAVbar/-->
                                <!-- ------------------------------------------------------------- -->
                                <!-- offcanvas -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header alert-success">
                                <h6 class="offcanvas-title" id="offcanvasExampleLabel">الملف الشخصي</h6>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                <!-- form -->
                                <div class="container">
                                <div class="card-title text-center border-bottom">
                                <img src="assistances/images/log.jpg" alt="mdo" width="60" height="60" class="rounded-circle">
                                <h2 class="p-0">ID '.$print["ID"].'</h2>
                                </div>
                                <div class="card-body">
                                <form method="POST">
                                <div class="mb-4">   
                                <label for="staticEmail" class="col-sm-4  col-form-label alert-success">(نوع التسجيل):</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="سائح">
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-4">
                                <label for="staticEmail" class="col-sm-6 col-form-label alert-success">(بينات التواصل):</label>
                                </div>
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label">البريد الاكتوني:</label>
                                <input type="email" readonly name="email" class="form-control-plaintext" id="staticPassword" value="'.$print["email"].'">
                                </div>
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label"> رقم الهاتف:</label>
                                <input type="phone_number" name="phone_number" class="form-control-plaintext" id="staticPassword" value="0'.$print["phone_number"].'">
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-3">
                                <label for="staticEmail" class="col-sm-6 col-form-label alert-success">(البيانات الشخصية):</label>
                                </div>
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label">الاسم الاول:</label>
                                <input type="text" name="first_name" class="form-control-plaintext" id="staticPassword" value="'.$print["first_name"].'">
                                </div>
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label">الاسم الاخير:</label>
                                <input type="text" name="last_name" class="form-control-plaintext" id="staticPassword" value="'.$print["last_name"].'">
                                </div>
                                ';?>
                                <?php
                                if($print["gender"] == "أنثى")
                                {
                                    echo'
                                    <div class="mb-3 col-md-6">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="ذكر" required>
                                    <label class="form-check-label" for="inlineRadio3"> ذكر<span
                                    class="text-danger">*</span></label>
                                    </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio4" value="أنثى" required checked>
                                    <label class="form-check-label" for="inlineRadio4">انثى<span
                                    class="text-danger">*</span>
                                    </label>
                                    </div>
                                    </div>
                                    ';
                                }
                                elseif($print["gender"] == "ذكر")
                                {
                                    echo'
                                    <div class="mb-3 col-md-6">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="ذكر" required checked>
                                    <label class="form-check-label" for="inlineRadio3"> ذكر<span
                                    class="text-danger">*</span></label>
                                    </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio4" value="أنثى" required>
                                    <label class="form-check-label" for="inlineRadio4">انثى<span
                                    class="text-danger">*</span>
                                    </label>
                                    </div>
                                    </div>
                                    ';
                                }
                                ?>
                                <?php
                                if($print["language"] == "English")
                                {
                                    echo '
                                    <div class="mb-3 col-md-5">
                                    <label> اللغة<span class="text-danger">*</span></label>
                                    <select name="language" class="form-select" id="language" required>
                                    <option value="English">English</option>
                                    <option value="العربية">العربية</option>
                                    </select>
                                    </div>
                                    ';
                                }
                                elseif($print["language"] == "العربية")
                                {
                                    echo '
                                    <div class="mb-3 col-md-5">
                                    <label> اللغة<span class="text-danger">*</span></label>
                                    <select name="language" class="form-select" id="language" required>
                                    <option value="العربية">العربية</option>
                                    <option value="English">English</option>
                                    </select>
                                    </div>
                                    ';
                                }
                                echo'
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label">  العمر:</label>
                                <input type="number" name="age" class="form-control-plaintext" id="staticPassword" value="'.$print["age"].'">
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-0">
                                <button type="submit" name="update_info" class="btn  btn-success mb-3">تعديل</button>
                                </div>
                                </form>
                                </div>
                                </div>    
                                </div>
                                <!-- form -->
                                </div>
                                <!-- offcanvas -->
                        ';
                        if(empty($_POST["email"]))
                        $_POST["email"] = $print["email"];

                        if(empty($_POST["first_name"]))
                        $_POST["first_name"] = $print["first_name"];

                        if(empty($_POST["last_name"]))
                        $_POST["last_name"] = $print["last_name"];

                        if(empty($_POST["language"]))
                        $_POST["language"] = $print["language"];

                        if(empty($_POST["phone_number"]))
                        $_POST["phone_number"] = $print["phone_number"];

                        if(empty($_POST["age"]))
                        $_POST["age"] = $print["age"];
                        
                        if(empty($_POST["gender"]))
                        $_POST["gender"] = $print["gender"];
                    }
                }
                elseif(!isset($_POST["update"]))
                {
                    require_once 'connect_database.php';
                    $profile_info = $connect_database->prepare('SELECT * FROM tourist WHERE email = "'.$_SESSION["email_tourist"].'" AND password = "'.$_SESSION["password_tourist"].'"');
                    $profile_info->execute();
                    foreach($profile_info as $print)
                    {
                        $_SESSION["tourist_ID"] = $print["ID"];
                        echo '
                                <!-- profile -->
                                <div class="col-md-3 text-end">
                                <ul class="nav">
                                <div class="dropdown text-end">
                                <a href="#offcanvasExample" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assistances/images/log.jpg" alt="mdo" width="50" height="50" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">عرض الملف</a></li>
                                <li><a class="dropdown-item" href="request.php">طلب مرشد</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="sing_out.php">تسجيل الخروج</a></li>
                                </ul>
                                </div> 
                                </ul>
                                </div>
                                <!-- profile -->
                                </header>
                                </div>
                                </main>
                                <!--NAVbar/-->
                                <!-- ------------------------------------------------------------- -->
                                <!-- offcanvas -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header alert-success">
                                <h6 class="offcanvas-title" id="offcanvasExampleLabel">الملف الشخصي</h6>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                <!-- form -->
                                <div class="container">
                                <div class="card-title text-center border-bottom">
                                <img src="assistances/images/log.jpg" alt="mdo" width="60" height="60" class="rounded-circle">
                                <h3 class="p-0">ID '.$print["ID"].'</h3>
                                </div>
                                <div class="card-body">
                                <div class="mb-4">
                                <h5>نوع التسجيل </h5> <h6>سائح</h6>
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-4">
                                <h4>بيانات التواصل</h4><br>
                                </div>
                                <div class="mb-0">
                                <h5>البريد الإلكتروني </h5>
                                <h6>'.$print["email"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5> رقم الهاتف </h5>
                                <h6>0'.$print["phone_number"].'</h6>
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-3">
                                <h4>البيانات الشخصية </h4>
                                </div>
                                <div class="mb-0">
                                <h5>الاسم </h5>
                                <h6>'.$print["first_name"].' '.$print["last_name"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5>الجنس </h5>
                                <h6>'.$print["gender"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5>اللغة </h5>
                                <h6>'.$print["language"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5>العمر </h5>
                                <h6>'.$print["age"].'</h6>
                                </div>
                                <hr class="featurette-divider">
                                <form method="POST">
                                <div class="mb-0">
                                <button type="submit" name="update" class="btn  btn-success mb-3">تعديل</button>
                                </div>
                                </form>
                                </div>
                                </div>    
                                </div>
                                <!-- form -->
                                </div>
                                <!-- offcanvas -->
                        ';
                    }
                }
            }
            elseif(!empty($_SESSION["email_tour_guide"]) && !empty($_SESSION["password_tour_guide"]))
            {
                if(isset($_POST["update"])) 
                {
                    require_once 'connect_database.php';
                    $profile_info = $connect_database->prepare('SELECT * FROM tour_guide WHERE email = "'.$_SESSION["email_tour_guide"].'" AND password = "'.$_SESSION["password_tour_guide"].'"');
                    $profile_info->execute();
                    foreach($profile_info as $print)
                    {
                        $_SESSION["tour_guide_ID"] = $print["ID"];
                        echo '
                                <!-- profile -->
                                <div class="col-md-3 text-end">
                                <ul class="nav">
                                <div class="dropdown text-end">
                                <a href="#offcanvasExample" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assistances/images/log.jpg" alt="mdo" width="50" height="50" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">عرض الملف</a></li>
                                <li><a class="dropdown-item" href="requestm.php">عرض الطلبات</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="sing_out.php">تسجيل الخروج</a></li>
                                </ul>
                                </div> 
                                </ul>
                                </div>
                                <!-- profile -->
                                </header>
                                </div>
                                </main>
                                <!--NAVbar/-->
                                <!-- ------------------------------------------------------------- -->
                                <!-- offcanvas -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header alert-success">
                                <h6 class="offcanvas-title" id="offcanvasExampleLabel">الملف الشخصي</h6>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                <!-- form -->
                                <div class="container">
                                <div class="card-title text-center border-bottom">
                                <img src="assistances/images/log.jpg" alt="mdo" width="60" height="60" class="rounded-circle">
                                <h2 class="p-0">ID '.$print["ID"].'</h2>
                                </div>
                                <div class="card-body">
                                <form method="POST">
                                <div class="mb-4">   
                                <label for="staticEmail" class="col-sm-4  col-form-label alert-success">(نوع التسجيل):</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="مرشد سياحي">
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-4">
                                <label for="staticEmail" class="col-sm-6 col-form-label alert-success">(بينات التواصل):</label>
                                </div>
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label">البريد الاكتوني:</label>
                                <input type="email" readonly name="email" class="form-control-plaintext" id="staticPassword" value="'.$print["email"].'">
                                </div>
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label"> رقم الهاتف:</label>
                                <input type="phone_number" name="phone_number" class="form-control-plaintext" id="staticPassword" value="0'.$print["phone_number"].'">
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-3">
                                <label for="staticEmail" class="col-sm-6 col-form-label alert-success">(البيانات الشخصية):</label>
                                </div>
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label">الاسم الاول:</label>
                                <input type="text" name="first_name" class="form-control-plaintext" id="staticPassword" value="'.$print["first_name"].'">
                                </div>
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label">الاسم الاخير:</label>
                                <input type="text" name="last_name" class="form-control-plaintext" id="staticPassword" value="'.$print["last_name"].'">
                                </div>
                                ';?>
                                <?php
                                if($print["gender"] == "أنثى")
                                {
                                    echo'
                                    <div class="mb-3 col-md-6">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="ذكر" required>
                                    <label class="form-check-label" for="inlineRadio3"> ذكر<span
                                    class="text-danger">*</span></label>
                                    </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio4" value="أنثى" required checked>
                                    <label class="form-check-label" for="inlineRadio4">انثى<span
                                    class="text-danger">*</span>
                                    </label>
                                    </div>
                                    </div>
                                    ';
                                }
                                elseif($print["gender"] == "ذكر")
                                {
                                    echo'
                                    <div class="mb-3 col-md-6">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="ذكر" required checked>
                                    <label class="form-check-label" for="inlineRadio3"> ذكر<span
                                    class="text-danger">*</span></label>
                                    </div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio4" value="أنثى" required>
                                    <label class="form-check-label" for="inlineRadio4">انثى<span
                                    class="text-danger">*</span>
                                    </label>
                                    </div>
                                    </div>
                                    ';
                                }
                                ?>
                                <?php
                                if($print["language"] == "English")
                                {
                                    echo '
                                    <div class="mb-3 col-md-5">
                                    <label> اللغة<span class="text-danger">*</span></label>
                                    <select name="language" class="form-select" id="language" required>
                                    <option value="English">English</option>
                                    <option value="العربية">العربية</option>
                                    </select>
                                    </div>
                                    ';
                                }
                                elseif($print["language"] == "العربية")
                                {
                                    echo '
                                    <div class="mb-3 col-md-5">
                                    <label> اللغة<span class="text-danger">*</span></label>
                                    <select name="language" class="form-select" id="language" required>
                                    <option value="العربية">العربية</option>
                                    <option value="English">English</option>
                                    </select>
                                    </div>
                                    ';
                                }
                                echo'
                                <div class="mb-0">
                                <label for="staticPassword" class="col-sm-4 col-form-label">  العمر:</label>
                                <input type="number" name="age" class="form-control-plaintext" id="staticPassword" value="'.$print["age"].'">
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-0">
                                <button type="submit" name="update_info" class="btn  btn-success mb-3">تعديل</button>
                                </div>
                                </form>
                                </div>
                                </div>    
                                </div>
                                <!-- form -->
                                </div>
                                <!-- offcanvas -->
                        ';
                        if(empty($_POST["email"]))
                        $_POST["email"] = $print["email"];

                        if(empty($_POST["first_name"]))
                        $_POST["first_name"] = $print["first_name"];

                        if(empty($_POST["last_name"]))
                        $_POST["last_name"] = $print["last_name"];

                        if(empty($_POST["language"]))
                        $_POST["language"] = $print["language"];

                        if(empty($_POST["phone_number"]))
                        $_POST["phone_number"] = $print["phone_number"];

                        if(empty($_POST["age"]))
                        $_POST["age"] = $print["age"];

                        if(empty($_POST["gender"]))
                        $_POST["gender"] = $print["gender"];
                    }
                }
                elseif(!isset($_POST["update"]))
                {
                    require_once 'connect_database.php';
                    $profile_info = $connect_database->prepare('SELECT * FROM tour_guide WHERE email = "'.$_SESSION["email_tour_guide"].'" AND password = "'.$_SESSION["password_tour_guide"].'"');
                    $profile_info->execute();
                    foreach($profile_info as $print)
                    {
                        $_SESSION["tour_guide_ID"] = $print["ID"];
                        echo '
                                <!-- profile -->
                                <div class="col-md-3 text-end">
                                <ul class="nav">
                                <div class="dropdown text-end">
                                <a href="#offcanvasExample" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assistances/images/log.jpg" alt="mdo" width="50" height="50" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">عرض الملف</a></li>
                                <li><a class="dropdown-item" href="requestm.php">عرض الطلبات</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="sing_out.php">تسجيل الخروج</a></li>
                                </ul>
                                </div> 
                                </ul>
                                </div>
                                <!-- profile -->
                                </header>
                                </div>
                                </main>
                                <!--NAVbar/-->
                                <!-- ------------------------------------------------------------- -->
                                <!-- offcanvas -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header alert-success">
                                <h6 class="offcanvas-title" id="offcanvasExampleLabel">الملف الشخصي</h6>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                <!-- form -->
                                <div class="container">
                                <div class="card-title text-center border-bottom">
                                <img src="assistances/images/log.jpg" alt="mdo" width="60" height="60" class="rounded-circle">
                                <h3 class="p-0">ID '.$print["ID"].'</h3>
                                </div>
                                <div class="card-body">
                                <div class="mb-4">
                                <h5>نوع التسجيل </h5> <h6>مرشد سياحي</h6>
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-4">
                                <h4>بيانات التواصل</h4><br>
                                </div>
                                <div class="mb-0">
                                <h5>البريد الإلكتروني </h5>
                                <h6>'.$print["email"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5> رقم الهاتف </h5>
                                <h6>0'.$print["phone_number"].'</h6>
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-3">
                                <h4>البيانات الشخصية </h4>
                                </div>
                                <div class="mb-0">
                                <h5>الاسم </h5>
                                <h6>'.$print["first_name"].' '.$print["last_name"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5>الجنس </h5>
                                <h6>'.$print["gender"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5>اللغة </h5>
                                <h6>'.$print["language"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5>العمر </h5>
                                <h6>'.$print["age"].'</h6>
                                </div>
                                <hr class="featurette-divider">
                                <form method="POST">
                                <div class="mb-0">
                                <button type="submit" name="update" class="btn  btn-success mb-3">تعديل</button>
                                </div>
                                </form>
                                </div>
                                </div>    
                                </div>
                                <!-- form -->
                                </div>
                                <!-- offcanvas -->
                        ';
                    }
                }
            }
            elseif(!empty($_SESSION["email_admin"]) && !empty($_SESSION["password_admin"]))
            {
                    require_once 'connect_database.php';
                    $profile_info = $connect_database->prepare('SELECT * FROM admin WHERE email = "'.$_SESSION["email_admin"].'" AND password = "'.$_SESSION["password_admin"].'"');
                    $profile_info->execute();
                    foreach($profile_info as $print)
                    {
                        $_SESSION["admin_ID"] = $print["ID"];
                        $_SESSION["admin_full_name"] = $print["full_name"];
                        echo '
                                <!-- profile -->
                                <div class="col-md-3 text-end">
                                <ul class="nav">
                                <div class="dropdown text-end">
                                <a href="#offcanvasExample" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assistances/images/log.jpg" alt="mdo" width="50" height="50" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">عرض الملف</a></li>
                                <li><a class="dropdown-item" href="admin.php">صفحة الإدارة</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="sing_out.php">تسجيل الخروج</a></li>
                                </ul>
                                </div> 
                                </ul>
                                </div>
                                <!-- profile -->
                                </header>
                                </div>
                                </main>
                                <!--NAVbar/-->
                                <!-- ------------------------------------------------------------- -->
                                <!-- offcanvas -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                <div class="offcanvas-header alert-success">
                                <h6 class="offcanvas-title" id="offcanvasExampleLabel">الملف الشخصي</h6>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                <!-- form -->
                                <div class="container">
                                <div class="card-title text-center border-bottom">
                                <img src="assistances/images/log.jpg" alt="mdo" width="60" height="60" class="rounded-circle">
                                <h3 class="p-0">ID '.$print["ID"].'</h3>
                                </div>
                                <div class="card-body">
                                <div class="mb-4">
                                <h5>نوع التسجيل </h5> <h6>مشرف</h6>
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-4">
                                <h4>بيانات التواصل</h4><br>
                                </div>
                                <div class="mb-0">
                                <h5>البريد الإلكتروني </h5>
                                <h6>'.$print["email"].'</h6>
                                </div>
                                <hr class="featurette-divider">
                                <div class="mb-3">
                                <h4>البيانات الشخصية </h4>
                                </div>
                                <div class="mb-0">
                                <h5>الاسم </h5>
                                <h6>'.$print["full_name"].'</h6>
                                </div>
                                <div class="mb-0">
                                <h5>الجنس </h5>
                                <h6>'.$print["gender"].'</h6>
                                </div>
                                <hr class="featurette-divider">
                                </div>
                                </div>    
                                </div>
                                <!-- form -->
                                </div>
                                <!-- offcanvas -->
                        ';
                    }
            }
            else
            {
                echo '
                <div class="col-md-3 text-end">
                    <ul class="nav">
                        <li class="nav-item"><a href="Log_in.php" class="btn btn-outline-success"> تسجيل الدخول
                            </a>
                        </li>
                        &numsp;
                        <li class="nav-item"><a href="login_new.php" class="btn btn-success"> تسجيل جديد
                            </a>
                        </li> 
                    </ul>
                </div>
                ';
            }
            if(isset($_POST["sing_out"]))
            {
                header("Location: index.php");
                session_unset();
                exit;
            }
            //---------------------------------//
            if(!empty($_SESSION["email_tourist"]) && !empty($_SESSION["password_tourist"]) && isset($_POST["update_info"]))
            {
                require_once 'connect_database.php';
                $update_profile_info = $connect_database->prepare('UPDATE tourist SET first_name = "'.$_POST["first_name"].'" , last_name = "'.$_POST["last_name"].'" ,
                phone_number = '.$_POST["phone_number"].' , age = '.$_POST["age"].' , gender = "'.$_POST["gender"].'" ,
                language = "'.$_POST["language"].'" WHERE ID = '.$_SESSION["tourist_ID"].'');
                $update_profile_info->execute();
                header("Location:request.php");
            }
            elseif(!empty($_SESSION["email_tour_guide"]) && !empty($_SESSION["password_tour_guide"]) && isset($_POST["update_info"]))
            {
                require_once 'connect_database.php';
                $update_profile_info = $connect_database->prepare('UPDATE tour_guide SET first_name = "'.$_POST["first_name"].'" , last_name = "'.$_POST["last_name"].'" ,
                phone_number = '.$_POST["phone_number"].' , age = '.$_POST["age"].' , gender = "'.$_POST["gender"].'" ,
                language = "'.$_POST["language"].'" WHERE ID = '.$_SESSION["tour_guide_ID"].'');
                $update_profile_info->execute();
                header("Location:requestm.php");
            }
        ?>
        </div>
    <?php
        ob_end_flush();
    ?>
</html>
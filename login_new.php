<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title>تسجيل جديد</title>
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
    <?php require('components/niv.php'); ?>
    <!-- form_Chck_in -->
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-6">
                <div class="signup-form">
                    <form method="POST" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            تسجيل جديد
                            <i class="bi bi-box-arrow-right"></i>
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type_user" id="inlineRadio1" value="tour_guide" required>
                                    <label class="form-check-label" for="inlineRadio1">مرشد سياحي<span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type_user" id="inlineRadio2" value="tourist" required>
                                    <label class="form-check-label" for="inlineRadio2"> سائح<span
                                            class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3 col-md-5">
                                <label> الاسم الاول<span class="text-danger">*</span></label>
                                <input type="text" name="first_name" class="form-control" placeholder="الاسم الاول" required>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>الاسم الاخير<span class="text-danger">*</span></label>
                                <input type="text" name="last_name" class="form-control" placeholder="الاسم الاخير"
                                    required>
                            </div>

                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="male" required>
                                    <label class="form-check-label" for="inlineRadio3"> ذكر<span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio4" value="female" required>
                                    <label class="form-check-label" for="inlineRadio4">انثى<span
                                            class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>العمر<span class="text-danger">*</span></label>
                                <input type="text" name="age" min="18" max="99" maxlength="2" class="form-control" placeholder=" ادخل العمر" required>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label> رقم الهاتف<span class="text-danger">*</span></label>
                                <input type="text" name="phone_number" min="10" max="10" placeholder="05xxxxxxxxx" class="form-control" placeholder="ادخل رقم الهاتف"
                                    required>
                            </div>

                            <div class="mb-3 col-md-5">
                            <label> اللغة<span class="text-danger">*</span></label>
                                <select name="language" class="form-select" id="language" required>
                                    <option selected disabled value="null">اللغة</option>
                                    <option value="arabic">العربية</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <hr class="featurette-divider">
                            <div class="mb-3 col-md-5">
                                <label>سؤال الآمان<span class="text-danger">*</span></label>
                                <select name="question" class="form-select" id="specificSizeSelect" required>
                                    <option selected disabled value="null">سؤال</option>
                                    <option value="color">اللون المفضل</option>
                                    <option value="place">المكان المفضل</option>
                                    <option value="friend">الصديق المفضل</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>الاجابة عن السؤال<span class="text-danger">*</span></label>
                                <input type="text" name="answer" class="form-control" placeholder="ادخل  الاجابه هنا"
                                    required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label for="email" class="form-label">عنوان البريد الإلكتروني<span
                                        class="text-danger">*</span></label>
                                <input type="email"   name="email" class="form-control" id="email" placeholder="ادخل البريد الإلكتروني"
                                    required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label> كلمة المرور<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="ادخال كلمة المرور" required>
                            </div>


                            <div class="mb-3 col-md-11">
                                <label> تأكيدكلمة المرور<span class="text-danger">*</span></label>
                                <input type="password"  name="check_password" class="form-control"
                                    placeholder="تأكيد كلمة المرور" required>
                            </div>
                            <div class="col-md-11">
                                <button class="btn btn-success float-end" name="login_new">
                                    تسجيل
                                    <i class="bi bi-box-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">إذا كان لديك حساب ، الرجاء تسجيل
                        <a href="Log_in.php">الدخول الآن&numsp;&numsp;</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- form_Check_in -->
    <?php require('components/footre.php'); ?>
    <?php

require_once "connect_database.php";
if(isset($_POST["login_new"]) && !empty($_POST["first_name"]) && !empty($_POST["last_name"]) && !empty($_POST["email"]) && !empty($_POST["password"]) &&
    !empty($_POST["phone_number"]) && !empty($_POST["age"]) && !empty($_POST["gender"]) && !empty($_POST["language"]) && $_POST["language"] != "null" &&
    $_POST["password"] == $_POST["check_password"]
  )
  {
    if($_POST["type_user"] == "tourist")
    {
    $select_id_tourist = $connect_database->prepare('SELECT MAX(ID) ID FROM tourist');
    $select_id_tourist->execute();

    foreach($select_id_tourist as $print)
    {
      $_SESSION["new_id_tourist"] = $print["ID"];
    }

    if(empty($_SESSION["new_id_tourist"]))
    {
      $_SESSION["new_id_tourist"] = 100;
    }
    elseif(!empty($_SESSION["new_id_tourist"]))
    {
      $_SESSION["new_id_tourist"] ++;
    }
    $login_new_tourist = $connect_database->prepare
    ('
    INSERT INTO tourist
    (
      ID , first_name , last_name , email , password , phone_number , age , gender , language , answer , question
    )
    VALUES 
    (
      '.$_SESSION["new_id_tourist"].' , "'.$_POST["first_name"].'" , "'.$_POST["last_name"].'" , "'.$_POST["email"].'" , "'.$_POST["password"].'" ,
      '.$_POST["phone_number"].' , '.$_POST["age"].' , "'.$_POST["gender"].'" , "'.$_POST["language"].'" , "'.$_POST["answer"].'" , "'.$_POST["question"].'"
    )
    ');
    $login_new_tourist->execute();

    if($login_new_tourist->rowCount()==1)
    {
      echo '
              <center>
                <div class="alert alert-success" role="alert">
                  <b> Succefall Login </b> 
                </div>
              </center>
      ';
      header("refresh:3; url=http://localhost/naseem_sa_1/naseem_sa/login_new.php");
    }
    else
    {
      echo '
            <center>
              <div class="alert alert-danger" role="alert">
                <b> Failed Login x </b> 
              </div>
            </center>
      ';
      header("refresh:3; url=http://localhost/naseem_sa_1/naseem_sa/login_new.php");
    }
    }
    elseif($_POST["type_user"] == "tour_guide")
    {
      $select_id_tour_guide = $connect_database->prepare('SELECT MAX(ID) ID FROM tour_guide');
      $select_id_tour_guide->execute();

      foreach($select_id_tour_guide as $print)
      {
        $_SESSION["new_id_tour_guide"] = $print["ID"];
      }

      if(empty($_SESSION["new_id_tour_guide"]))
      {
        $_SESSION["new_id_tour_guide"] = 100;
      }
      elseif(!empty($_SESSION["new_id_tour_guide"]))
      {
        $_SESSION["new_id_tour_guide"] ++;
      }
      $login_new_tour_guide = $connect_database->prepare
      ('
      INSERT INTO tour_guide
      (
        ID , first_name , last_name , email , password , phone_number , age , gender , language , question , answer
      )
      VALUES 
      (
        '.$_SESSION["new_id_tour_guide"].' , "'.$_POST["first_name"].'" , "'.$_POST["last_name"].'" , "'.$_POST["email"].'" , "'.$_POST["password"].'" ,
        '.$_POST["phone_number"].' , '.$_POST["age"].' , "'.$_POST["gender"].'" , "'.$_POST["language"].'" , "'.$_POST["question"].'" , "'.$_POST["answer"].'"
      )
      ');
      $login_new_tour_guide->execute();

      if($login_new_tour_guide->rowCount()==1)
      {
        echo '
                <center>
                  <div class="alert alert-success" role="alert">
                    <b> Succefall Login </b> 
                  </div>
                </center>
        ';
        header("refresh:3; url=http://localhost/naseem_sa_1/naseem_sa/login_new.php");
      }
      else
      {
        echo '
              <center>
                <div class="alert alert-danger" role="alert">
                  <b> Failed Login xx </b> 
                </div>
              </center>
        ';
        header("refresh:3; url=http://localhost/naseem_sa_1/naseem_sa/login_new.php");
      }
    }
  }
?>

    <?php
    ob_end_flush();
    ?>

</body>

</html>
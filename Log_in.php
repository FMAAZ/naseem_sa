<!doctype html>
<html  lang="en" dir="rtl">
  <head>
  <title>تسجيل الدخول</title>
  <?php require 'Niv1.php'; ?>  
  </head>
  <body>
    <?php
    if(!isset($_SESSION["login"]))
      {
      }
    elseif(isset($_SESSION["login"]))
    {
      header("Location:sing_out.php");
    }
    ?>
      <!-- form_Chck_in -->
      <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-5">
                <div class="signup-form">
                    <form method="POST" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            تسجيل الدخول
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">

                            <div class="mb-3 col-md-11">
                                <label for="email" class="form-label">عنوان البريد الإلكتروني<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="ادخل البريد الإلكتروني"
                                    required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label> كلمة المرور<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="ادخال كلمة المرور" required>
                            </div>

                            <div class="col-md-11">
                                <button class="btn btn-success float-end" name="login">
                                    تسجيل الدخول
                                    <i class="bi bi-box-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <?php

      require_once "connect_database.php";
      if(isset($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"]))
      {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        //select tourist account
        $select_tourist = $connect_database->prepare('SELECT email , password FROM tourist WHERE email = "'.$_POST["email"].'" AND password = "'.$_POST["password"].'"');
        $select_tourist->execute();

        foreach($select_tourist as $print)
        {
          $_SESSION["email_tourist"] = $print["email"];
          $_SESSION["password_tourist"] = $print["password"];
        }

        //select tour guide account
        $select_tour_guide = $connect_database->prepare('SELECT email , password FROM tour_guide WHERE email = "'.$_POST["email"].'" AND password = "'.$_POST["password"].'"');
        $select_tour_guide->execute();

        foreach($select_tour_guide as $print)
        {
          $_SESSION["email_tour_guide"] = $print["email"];
          $_SESSION["password_tour_guide"] = $print["password"];
        }

        //select admin account
        $select_tour_guide = $connect_database->prepare('SELECT email , password FROM admin WHERE email = "'.$_POST["email"].'" AND password = "'.$_POST["password"].'"');
        $select_tour_guide->execute();

        foreach($select_tour_guide as $print)
        {
          $_SESSION["email_admin"] = $print["email"];
          $_SESSION["password_admin"] = $print["password"];
        }

        if(!empty($_SESSION["email_tourist"]) && !empty($_SESSION["password_tourist"]) && $_SESSION["email_tourist"] == $_SESSION['email'] && $_SESSION["password_tourist"] == $_SESSION['password'])
        {
          echo '
          <center>
            <div class="alert alert-success" role="alert">
              <b>تم تسجيل الدخول بنجاح</b> 
            </div>
          </center>
          ';
          header("refresh:3; url=request.php");
        }
        elseif(!empty($_SESSION["email_tour_guide"]) && !empty($_SESSION["password_tour_guide"]) && $_SESSION["email_tour_guide"] == $_SESSION['email'] && $_SESSION["password_tour_guide"] == $_SESSION['password'])
        {
          echo '
          <center>
            <div class="alert alert-success" role="alert">
              <b>تم تسجيل الدخول بنجاح</b> 
            </div>
          </center>
          ';
          header("refresh:3; url=requestm.php");
        }
        elseif(!empty($_SESSION["email_admin"]) && !empty($_SESSION["password_admin"]) && $_SESSION["email_admin"] == $_SESSION['email'] && $_SESSION["password_admin"] == $_SESSION['password'])
        {
          echo '
          <center>
            <div class="alert alert-success" role="alert">
              <b>تم تسجيل الدخول بنجاح</b> 
            </div>
          </center>
          ';
          header("refresh:3; url=admin.php");
        }
        elseif(empty($_SESSION["email_tour_guide"]) || empty($_SESSION["password_tour_guide"]) || empty($_SESSION["email_tourist"]) || empty($_SESSION["password_tourist"]) || empty($_SESSION["email_admin"]) || empty($_SESSION["password_admin"]))
        {
          echo '
          <center>
            <div class="alert alert-danger" role="alert">
              <b>البريد الإلكتروني أو كلمة المرور غير صحيحة</b> 
            </div>
          </center>
          ';
          header("refresh:2; url=log_in.php");
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
          header("refresh:2; url=log_in.php");
        }
      }
      ?>
                    <p class="text-center mt-1 text-secondary">
                        <a href="password.php"> نسيت كلمة المرور</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- form_Check_in -->
    <!-- form_LOG_IN -->
        <?php require('components/footre.php');?>
  </body>
</html>

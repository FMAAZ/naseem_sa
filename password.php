<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title>اعادة كلمة المرور</title>
    <?php require 'Niv1.php'; ?>
</head>

<body>
    <!-- form -->
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-5">
                <div class="signup-form">
                    <form method="POST" class="mt-6 border p-3 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            اعادة كلمة المرور
                            <i class="bi bi-box-arrow-right"></i>
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">

                            <div class="mb-3 col-md-5">
                                <label>أسئلة الآمان<span class="text-danger">*</span></label>
                                <select name="question" class="form-select" id="specificSizeSelect" required>
                                    <option selected disabled value="null">سؤال</option>
                                    <option value="color">اللون المفضل</option>
                                    <option value="place">المكان المفضل</option>
                                    <option value="friend">الصديق المفضل</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>الاجابةعن السؤال<span class="text-danger">*</span></label>
                                <input type="text" name="answer" class="form-control" placeholder="ادخل  الاجابه هنا" required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label for="email" class="form-label">عنوان البريد الإلكتروني<span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="ادخل البريد الإلكتروني" required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label> كلمة المرور الجديدة<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="كلمة المرور الجديدة" required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label> تأكيد كلمة المرورالجديدة <span class="text-danger">*</span></label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="تأكيد كلمة المرور الجديدة" required>
                            </div>
                            <div class="col-md-11">
                                <button class="btn btn-success float-end" name="reset_password">
                                    تسجيل
                                    <i class="bi bi-box-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">
                        <a href="Log_in.php">تسجيل دخول</a>
                    </p>
    <!-- reset password -->
    <?php
    if 
    (
        isset($_POST['reset_password']) && !empty($_POST['answer']) && $_POST['question'] != 'null' &&
        !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && $_POST['password'] ==  $_POST['confirm_password']
    )
    {
        require_once 'connect_database.php';
        $select_tourist = $connect_database->prepare('SELECT * FROM tourist WHERE email = "'.$_POST["email"].'" AND question = "'.$_POST["question"].'" AND answer = "'.$_POST["answer"].'"');
        $select_tourist->execute();
        $select_tour_guide = $connect_database->prepare('SELECT * FROM tour_guide WHERE email = "'.$_POST["email"].'" AND question = "'.$_POST["question"].'" AND answer = "'.$_POST["answer"].'"');
        $select_tour_guide->execute();

        foreach ($select_tourist as $print)
        {
            $_SESSION["email_tourist"] = $print["email"];
            $_SESSION["question_tourist"] = $print["question"];
            $_SESSION["answer_tourist"] = $print["answer"];
        }
        foreach ($select_tour_guide as $print)
        {
            $_SESSION["email_tour_guide"] = $print["email"];
            $_SESSION["question_tour_guide"] = $print["question"];
            $_SESSION["answer_tour_guide"] = $print["answer"];
        }

        if(!empty($_SESSION["email_tourist"]) && !empty($_SESSION["question_tourist"]) && !empty($_SESSION["answer_tourist"]))
        {
            if ($_SESSION["answer_tourist"] == $_POST["answer"] && $_SESSION["email_tourist"] == $_POST["email"])
            {
                $reset_password = $connect_database->prepare('UPDATE tourist SET password = '.$_POST["password"].' WHERE email = "'.$_POST["email"].'" AND question = "'.$_POST["question"].'" AND answer = "'.$_POST["answer"].'"');
                $reset_password->execute();
                if ($reset_password->RowCount() == 1)
                {
                    echo '
                        <center>
                            <div class="alert alert-success" role="alert">
                                <b>تم تغيير كلمة المرور بنجاح</b> 
                            </div>
                        </center>
                    ';
                    header("refresh:3; url=log_in.php");
                }
                else
                {
                    echo '
                        <center>
                            <div class="alert alert-danger" role="alert">
                                <b>فشل تغيير كلمة المرور</b> 
                            </div>
                        </center>
                    ';
                    header("refresh:3; url=password.php");
                }
            }
            elseif($_SESSION["answer_tourist"] != $_POST["answer"] || $_SESSION["email_tourist"] != $_POST["email"])
            {
                echo '
                    <center>
                        <div class="alert alert-danger" role="alert">
                            <b>الإيميل أو سؤال الأمان غير صحيح</b> 
                        </div>
                    </center>
                ';
                header("refresh:3; url=password.php");
            }
        }
        elseif (!empty($_SESSION["email_tour_guide"]) && !empty($_SESSION["question_tour_guide"]) && !empty($_SESSION["answer_tour_guide"]))
        {
            if ($_SESSION["answer_tour_guide"] == $_POST["answer"] && $_SESSION["email_tour_guide"] == $_POST["email"])
            {
                $reset_password = $connect_database->prepare('UPDATE tour_guide SET password = '.$_POST["password"].' WHERE email = "'.$_POST["email"].'" AND question = "'.$_POST["question"] .'" AND answer = "'.$_POST["answer"].'"');
                $reset_password->execute();
                if ($reset_password->RowCount() == 1)
                {
                    echo '
                        <center>
                            <div class="alert alert-success" role="alert">
                                <b>تم تغيير كلمة المرور بنجاح</b> 
                            </div>
                        </center>
                    ';
                    header("refresh:3; url=log_in.php");
                }
                else
                {
                    echo '
                        <center>
                            <div class="alert alert-danger" role="alert">
                                <b>فشل تغيير كلمة المرور</b> 
                            </div>
                        </center>
                    ';
                    // header("refresh:3; url=password.php");
                }
            }
            elseif($_SESSION["answer_tour_guide"] != $_POST["answer"] || $_SESSION["email_tour_guide"] != $_POST["email"])
            {
                echo '
                    <center>
                        <div class="alert alert-danger" role="alert">
                            <b>الإيميل أو سؤال الأمان غير صحيح</b> 
                        </div>
                    </center>
                ';
                header("refresh:3; url=password.php");
            }
        }
        else 
        {
            echo 'ERROR !';
            header("refresh:3; url=password.php");
        }
    }
    elseif
    (isset($_POST['reset_password']) && $_POST['password'] !=  $_POST['confirm_password'])
    {
        echo '
        <center>
            <div class="alert alert-danger" role="alert">
                <b>كلمة المرور غير متطابقة</b>
            </div>
        </center>
    ';
    header("refresh:3; url=password.php");
    }
    ?>
    </div>
    </div>
    </div>
    </div>
    <!-- form -->
    <?php require('components/footre.php'); ?>
</body>

</html>
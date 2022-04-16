<!doctype html>
<html lang="en" dir="rtl">
  <head>
  <title>اعادة كلمة المرو</title>
  <?php require('components/head_inc.php'); ?> 
  </head>
  <body>
  <?php require('components/niv.php'); ?> 
 <!-- form -->
 <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-5">
                <div class="signup-form">
                    <form action="" class="mt-6 border p-3 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                             اعادة كلمة المرور
                            <i class="bi bi-box-arrow-right"></i>
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">

                            <div class="mb-3 col-md-5">
                                <label>أسئلة الآمان<span class="text-danger">*</span></label>
                                <select class="form-select" id="specificSizeSelect" required>
                                    <option selected disabled value="">سؤال</option>
                                    <option value="1">اللوان المفضل</option>
                                    <option value="2">المكان المفضل</option>
                                    <option value="3">صديق المفضل</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>الاجابةعن السؤال<span class="text-danger">*</span></label>
                                <input type="text" name="Lname" class="form-control" placeholder="ادخل  الاجابه هنا"
                                    required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label for="email" class="form-label">عنوان البريد الإلكتروني<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="ادخل البريد الإلكتروني"
                                    required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label> كلمة المرور<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="كلمة المرور الجديدة" required>
                            </div>
                            <div class="col-md-11">
                                <button class="btn btn-success float-end">
                                    تسجيل
                                    <i class="bi bi-box-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">
                        <a href="Log_in.php"> تسجيل دخول&numsp;&numsp;</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- form -->
    <?php require('components/footre.php'); ?> 

  </body>
</html>


 
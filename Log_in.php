<!doctype html>
<html  lang="en" dir="rtl">
  <head>
  <title>تسجيل الدخول</title>
  <?php require('components/head_inc.php'); ?>  

  </head>
  <body>
  <?php require('components/niv.php');?>  


     <!-- form_Chck_in -->
     <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-5">
                <div class="signup-form">
                    <form action="" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                             تسجيل الدخول
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">

                            <div class="mb-3 col-md-11">
                                <label for="email" class="form-label">عنوان البريد الإلكتروني<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="ادخل البريد الإلكتروني"
                                    required>
                            </div>
                            <div class="mb-3 col-md-11">
                                <label> كلمة المرور<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="ادخال كلمة المرور" required>
                            </div>

                            <div class="col-md-11">
                                <button class="btn btn-success float-end">
                                    تسجيل الدخول
                                    <i class="bi bi-box-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-1 text-secondary">
                        <a href="password.php"> نسيت كامة المرور&numsp;&numsp;</a>
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

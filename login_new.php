<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title>تسجيل جديد</title>
    <?php require('components/head_inc.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
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
                    <form action="" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            تسجيل جديد
                            <i class="bi bi-box-arrow-right"></i>
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1" required>
                                    <label class="form-check-label" for="inlineRadio1">مرشد سياحي<span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2" required>
                                    <label class="form-check-label" for="inlineRadio2"> سائح<span
                                            class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3 col-md-5">
                                <label> الاسم الاول<span class="text-danger">*</span></label>
                                <input type="text" name="fname" class="form-control" placeholder="الاسم الاول" required>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>الاسم الاخير<span class="text-danger">*</span></label>
                                <input type="text" name="Lname" class="form-control" placeholder="الاسم الاخير"
                                    required>
                            </div>

                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                        id="inlineRadio3" value="option3" required>
                                    <label class="form-check-label" for="inlineRadio3"> رجل<span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions3"
                                        id="inlineRadio4" value="option4" required>
                                    <label class="form-check-label" for="inlineRadio4">انثى<span
                                            class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>العمر<span class="text-danger">*</span></label>
                                <input type="text" name="fname" class="form-control" placeholder=" ادخل العمر" required>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label> رقم الهاتف<span class="text-danger">*</span></label>
                                <input type="text" name="Lname" class="form-control" placeholder="ادخل رقم الهاتف"
                                    required>
                            </div>


                            <hr class="featurette-divider">
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
                                    placeholder="ادخال كلمة المرور" required>
                            </div>


                            <div class="mb-3 col-md-11">
                                <label> تأكيدكلمة المرور<span class="text-danger">*</span></label>
                                <input type="password" name="confirmpassword" class="form-control"
                                    placeholder="تأكيد كلمة المرور" required>
                            </div>
                            <div class="col-md-11">
                                <button class="btn btn-success float-end">
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

</body>

</html>
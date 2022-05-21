<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title> الادمن</title>
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
    <!-- form_Chck_in -->
    
    
    
    


   <form method="POST">


   <a href="admin.php" class="btn btn-primary btn btn-success">عودة</a>

</form>
<div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-6">
                <div class="signup-form">
                    <form method="POST" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                             تعديل البيانات
                            
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                   
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                  
                                </div>
                            </div>


                            <div class="mb-3 col-md-5">
                                <label> الاسم الاول<span class="text-danger">*</span></label>
                                <input type="text" name="Efirst_name" class="form-control" placeholder="الاسم الاول" required>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>الاسم الاخير<span class="text-danger">*</span></label>
                                <input type="text" name="Elast_name" class="form-control" placeholder="الاسم الاخير"
                                    required>
                            </div>

                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Egender" id="inlineRadio3" value="ذكر" required>
                                    <label class="form-check-label" for="inlineRadio3"> ذكر<span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Egender" id="inlineRadio4" value="أنثى" required>
                                    <label class="form-check-label" for="inlineRadio4">انثى<span
                                            class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>العمر<span class="text-danger">*</span></label>
                                <input type="text" name="Eage" min="18" max="99" maxlength="2" class="form-control" placeholder=" ادخل العمر" required>
                            </div>

                            <div class="mb-3 col-md-5">
                                <label> رقم الهاتف<span class="text-danger">*</span></label>
                                <input type="text" name="Ephone_number" min="10" max="10" placeholder="05xxxxxxxxx" class="form-control" placeholder="ادخل رقم الهاتف"
                                    required>
                            </div>

                            <div class="mb-3 col-md-5">
                            <label> اللغة<span class="text-danger">*</span></label>
                                <select name="language" class="form-select" id="language" required>
                                    <option selected disabled value="null">اللغة</option>
                                    <option value="Eالعربية">العربية</option>
                                    <option value="EEnglish">English</option>
                                </select>
                            </div>
                         
                            <div class="mb-3 col-md-11">
                                <label for="email" class="form-label">عنوان البريد الإلكتروني<span
                                        class="text-danger">*</span></label>
                                <input type="email"  name="Eemail" class="form-control" id="email" placeholder="ادخل البريد الإلكتروني"
                                    required>
                         


                         
                            <div class="col-md-11">
                                <input type="submit" class="btn btn-success float-end" name="edite" value="تعديل">
                            </div>
                        </div>
                    </form>
                   
                    
                </div>
            </div>
        </div>
    </div>
    <?php
   
   $host="localhost";
   $user="root";
   $password="";
   $dbname="naseem_sa";
   $conn=mysqli_connect($host,$user,$password,$dbname);
$id =$_GET['ubdateid'];
if(isset($_POST['edite'])){
$firsname=$_POST['Efirst_name'];
$lastname=$_POST['Elast_name'];
$gan=$_POST['Egender'];
$age=$_POST['Eage'];
$phone=$_POST['Ephone_number'];
$lang=$_POST['Elanguage'];
$email=$_POST['Eemail'];

$sql="UPDATE `tourist` SET `ID=$id`, first_name='$firsname' , last_name='$lastname',gender='$gan',age='$age',phone_number='$phone',language='$lang',email='$email'";

$result=mysqli_query($conn,$sql);

if($result){
    echo'ok ubd';
}






}

?>
                </div>
            </div>
        </div>
        <?php require('components/footre.php'); ?>
    </div>
    <!-- form_Check_in -->
 
                       
                     

</body>

</html>
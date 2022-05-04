<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title> طلبات</title>
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
                                <input type="text" name="first_name" class="form-control" placeholder="عدد الاشخاص " >
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>عدد الايام </label>
                                <input type="text" name="last_name" class="form-control" placeholder="عدد الايام "
                                    >
                            </div>

                      


                            <div class="mb-3 col-md-9 col-6 mx-auto">
                            <label> الوجهه<span class="text-danger">*</span></label>
                                <select name="Region" class="form-select" id="language" style="text-align: center;" required>
                                    <option selected disabled value="null" >الوجهه</option>
                                    <?php
                                    if(isset($_POST['wher'])){
                                    if( $_POST['wher']=="island"){

                               
                                     echo"   <option value=fursan>فرسان</option>
                                    <option value=amlaj>املج</option>
                                    <option value=mm>المالديف</option>
                                    <option value=??>مجهوله</option>";
                                      }  elseif( $_POST['wher']=="citie"){
                                        echo"   <option value=arabic>الرياض</option>
                                        <option value=English>ابها</option>
                                        <option value=arabic>جدة</option>
                                        <option value=English>الباحة</option>";  
                                    }else{
                                        echo"   <option value=arabic>عليك اختيار وجهه</option>";
                                    }
                                    }
                                    
                                    
                                    
                                    ?>
                                 
                                </select>
                            </div>
                         
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success float-end" name="request">   
                                    طلب
                                    
                                </button>
                            </div>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
    <!-- form_Check_in -->
    <?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="naseem_sa";
    $conn=new mysqli($host,$user,$password,$dbname);
    

        $query="insert into requests(fname,lname,numb,emil,lang) select first_name,last_name,phone_number,email,language from tourist where id=1";
        $result=mysqli_query($conn,$query);
        echo"<br><strong style=color:#43a047;>تم الحجز </strong>";
         
   
    

    ?>

<?php require('components/footre.php'); ?>
</body>

</html>
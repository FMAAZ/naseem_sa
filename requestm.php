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
                        <input  type="submit" name='show' class="btn btn-primary btn-sm" value="عرض الطلبات"> 
                        <h4 class="mb-3 text-center text-secondary">
                           طلبات 
                        </h4>
                        <hr class="featurette-divider">
                       <?php
                       if(isset($_POST['show'])){
echo"name is: ,<br>he is ******";
}

                
                       
                       
                       ?>

                            <div class="d-grid gap-2 col-3 mx-auto" >

                                <div class="" role="group" aria-label="Basic example">
  <input type="submit" class="btn btn-success " name="acceptance"  value="قبول">
  <input type="submit" class="btn btn-danger "name="refusal" value="رفض">        
  
                                
                            </div>
                        </div >
                    </form>
                    <?php
if(isset($_POST['acceptance'])){
    echo"<p><a  href=https://accounts.google.com/b/0/AddMailService>"."email"."</a><br><a href=https://web.whatsapp.com/>"."fon"."</a></p>";
}
?>
                </div>
            </div>
        </div>
    </div>
   
  
    <!-- form_Check_in -->
  

   


<?php require('components/footre.php'); ?>
</body>

</html>
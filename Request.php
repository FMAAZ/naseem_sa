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

                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio1" value="islands" required>
                                    <label class="form-check-label" for="inlineRadio1">جزر<span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio2" value="cities" required>
                                    <label class="form-check-label" for="inlineRadio2"> مدن<span
                                            class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3 col-md-5">
                                <label>  عدد الاشخاص</label>
                                <input type="text" name="first_name" class="form-control" placeholder="عدد الاشخاص " >
                            </div>

                            <div class="mb-3 col-md-5">
                                <label>عدد الايام </label>
                                <input type="text" name="last_name" class="form-control" placeholder="عدد الايام ">
                            </div>
                            <div class="mb-3 col-md-9 col-6 mx-auto">
                            <label> الوجهه<span class="text-danger">*</span></label>
                                <select name="Region" class="form-select" id="language" style="text-align: center;" required>
                                    <option selected disabled value="null" >الوجهه</option>
                                    <option value="arabic">العربية</option>
                                    <option value="English">English</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-success float-end" name="request">   
                                    طلب                                </button>
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
$conn=mysqli_connect($host,$user,$password,$dbname);

$query="SELECT `first_name`, `last_name`, `email`, `phone_number`, `age`, `gender`, `language` FROM `tour_guide` WHERE 1";
$result=mysqli_query($conn,$query);

if($result){

while($row =mysqli_fetch_assoc($result)){

if(isset($_POST['request']) &&  !empty($_POST['Region'])) {
 echo"<form  method=post id=p2><div class=card style=width: 18rem;>
<input type=submit name=yas value=طلب>
<input type=submit name=no value=تجاهل onclick=document.getElementById(p2).style.display=none>
<div class=card-body>
<h5 class=card-title>".$row['first_name']." ".$row['last_name']."</h5>
<p class=card-text>".$row['email']." ".$row['phone_number']."".$row['age']." ".$row['gender']." ".$row['language']." ".$_POST['Region']."</p>

</div>
</div>"; 
}
if(isset($_POST['yas'])) {
 echo"<div class=card style=width: 18rem; id=p2 >
<input type=submit value=طلب>
<input type=submit name=no value=تجاهل onclick=document.getElementById(p2).style.display=none>
<div class=card-body>
<h5 class=card-title>hi</h5>
<p class=card-text style=color:green;><a  href=https://accounts.google.com/b/0/AddMailService>".$row['email']."</a><br><a href=https://web.whatsapp.com/>".$row['phone_number']."</a></p>

</div>
</div>"; 
} 

}

}


?>
<?php require('components/footre.php'); ?>
</body>

</html>
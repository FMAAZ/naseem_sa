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
                        $host="localhost";
                        $user="root";
                        $password="";
                        $dbname="naseem_sa";
                        $conn=mysqli_connect($host,$user,$password,$dbname);
                        $type_date=date_default_timezone_set("Asia/Riyadh");
                        $date=date("Y-m-d");
                        
                        $query="SELECT * FROM `tourist` WHERE 1";
                        $result=mysqli_query($conn,$query);
                       
                        if($result){
                            
                            while($row =mysqli_fetch_assoc($result)){
                        
                              
                       if(isset($_POST['show'])){
                        echo $row['first_name']." ".$row['last_name']." ".$row['language'].'</a></p><input type="submit" class="btn btn-success " name="acceptance"  value="قبول">
                        <input type="submit" class="btn btn-danger "name="refusal" value="رفض"><hr>';


}
                            }
                        }
if(isset($_POST['acceptance'])){
    $status='مقبول';
}
if(isset($_POST['refusal'])){
    $status='مرفوض';
}
echo $status;
                
                       
                       
                       ?>

                            <div class="d-grid gap-2 col-3 mx-auto" >

                                <div class="" role="group" aria-label="Basic example">
  <input type="submit" class="btn btn-success " name="acceptance"  value="قبول">
  <input type="submit" class="btn btn-danger "name="refusal" value="رفض">        
  
                                

                            </div>
                        </div >
                    </form>

                </div>
            </div>
        </div>
        <?php require('components/footre.php'); ?>
    </div>
    <!-- form_Check_in -->


</body>

</html>
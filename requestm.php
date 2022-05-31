<!doctype html>
<html lang="en" dir="rtl">

<head>
    <title> طلبات</title>
    <?php require 'Niv1.php'; ?>
</head>

<body>
    <?php
    if(isset($_SESSION["login"]) && !empty($_SESSION["email"]) && !empty($_SESSION["password"]))
    {
        if(!empty($_SESSION["email_tour_guide"]) && !empty($_SESSION["password_tour_guide"]))
            {
            }
        else
            {
                session_unset();
                echo '
                    <center>
                        <div class="alert alert-danger" role="alert">
                            <b> ERROR ! </b>
                        </div>
                    </center>
                ';
                header("Location:index.php");
                exit;
            }
    }
    else
    {
        session_unset();
        echo '
            <center>
                <div class="alert alert-danger" role="alert">
                    <b> ERROR ! </b>
                </div>
            </center>
        ';
        header("refresh:2;url= index.php");
    exit;
    }
    ?>
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
                        <input type="submit" name='show' class="btn btn-primary btn-sm" value="عرض الطلبات">
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
                        mysqli_set_charset($conn,'utf8');
                        $type_date=date_default_timezone_set("Asia/Riyadh");
                        $date=date("Y-m-d");
                        


                        $query="SELECT t.first_name , t.last_name , t.email , t.phone_number, t.language,t.gender, r.req_date ,r.req_time ,r.req_status , r.req_id , r.destination FROM tourist t , requests r WHERE t.ID = r.tourist_req_id and r.req_status is null and req_date='$date'";

                   


                        $result=mysqli_query($conn,$query);

                        if($result){
                            
                            while($row =mysqli_fetch_assoc($result)){
                        
                        if(isset($_POST['show'])){
                        echo '                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">رقم الطلب</th>
                            <th scope="col">الاسم</th>
                            <th scope="col">الوجهه</th>
            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>'.$row['req_id'].'</th>
                            <th>'.$row['first_name']." ".$row['last_name'].'</th>
                            <th>'.$row['destination'].'</th>
                            <th><input type="submit" class="btn btn-success " name="acceptance"  value="قبول">
                            <input type="submit" class="btn btn-danger "name="refusal" value="رفض"></th>
                           
                          
                          </tr>
                        </tbody>
                      </table> ' ;
                          
                        //الاسم'.$row['first_name']." ".$row['last_name']."<br>اللغة المستخدمة: ".$row['language']." الوجهه:".$row['destination']." وقت الطلب".$row['req_time']." ".$row['req_date'].'</a></p><input type="submit" class="btn btn-success " name="acceptance"  value="قبول">
                       // <input type="submit" class="btn btn-danger "name="refusal" value="رفض"><hr>';
                        }
                        $_SESSION['rid']=$row['req_id'];
                     
                        
                            }
                        }  
                        $result=mysqli_query($conn,$query);

                        if($result){
                            while($row =mysqli_fetch_assoc($result)){
if(isset($_POST['acceptance'])){
    
  
       $query1 = "UPDATE requests set req_status = 'accept', tour_guide_req_id= ".$_SESSION['tour_guide_ID']." Where req_id=". $_SESSION['rid']."";
       $result1=mysqli_query($conn,$query1);
       echo  '                      <table class="table">
       <thead>
         <tr>
         <th scope="col">id</th>
           <th scope="col">الاسم</th>
           <th scope="col">للغة</th>
           <th scope="col">الجنس</th>
<th scope="col">للتواصل</th>
<th scope="col">الوقت</th>
<th scope="col">التاريخ</th>

           </tr>
       </thead>
       <tbody>
         <tr>
         <th>'.$row['req_id'].'</th>
           <th>'.$row['first_name']." ".$row['last_name'].'</th>
           <th>'.$row['language'].'</th>
           <th>'.$row['gender'].'</th>
           <th> <a class="btn btn-primary btn-sm" href="tel:'.$row['phone_number'].' role="button">Phone</a></th>
       <th>'.$row['req_time'].'</th>
           <th>'.$row['req_date'].'</th>
           
        
          
         
         </tr>
    
       </tbody>
     </table> <input class="btn btn-primary btn btn-dark" type="submit" value="إنهاء" name="finished">' ;
       
      
       
}
if(isset($_POST['refusal'])){
    $query1 = "UPDATE requests set req_status = 'reject', tour_guide_req_id= ".$_SESSION['tour_guide_ID']." Where req_id=". $_SESSION['rid']."";
    $result1=mysqli_query($conn,$query1);
}

                            }
                        }
                        if(isset($_POST['finished'])){
                            $query2 = "UPDATE requests set req_status = 'finished', tour_guide_req_id= ".$_SESSION['tour_guide_ID'].", req_date_end ='".$date."', req_time_end = '".$time."' Where req_id= ".$_SESSION['rid']."";
                            
                            $result2=mysqli_query($conn,$query2);
                        }
echo @$status;
                
                        ?>
                        
  

                            </div>
                        </div>
                    </form>


                </div>
                <br>
            </div>
        </div>
    </div>
    <!-- form_Check_in -->

    <?php require('components/footre.php'); ?>
</body>

</html>
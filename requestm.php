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
                header("refresh:2;url= index.php");
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
                        $type_date=date_default_timezone_set("Asia/Riyadh");
                        $date=date("Y-m-d");
                        
<<<<<<< HEAD
                        $query="SELECT t.first_name , t.last_name , t.email , t.phone_number, t.language, r.req_date ,r.req_time ,r.req_status FROM tourist t , requests r WHERE t.ID = r.tourist_req_id and r.req_status is null and req_date='$date'";
=======
                        $query="SELECT  t.first_name , t.last_name , t.email , t.phone_number, t.language, r.req_date ,r.req_time ,r.req_status, r.req_id FROM tourist t , requests r WHERE r.req_date ='$date' ";
>>>>>>> c444372f49964b52c5b2e3e45bb7f5f7a1673759
                        $result=mysqli_query($conn,$query);

                        if($result){
                            
                            while($row =mysqli_fetch_assoc($result)){
                        
                        if(isset($_POST['show'])){
                        echo 'الاسم'.$row['first_name']." ".$row['last_name']."<br>اللغة المستخدمة: ".$row['language']."وقت الطلب".$row['req_time']." ".$row['req_date'].'</a></p><input type="submit" class="btn btn-success " name="acceptance"  value="قبول">
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
echo @$status;
                
                        ?>

                            </div>
                        </div>
                    </form>

                    <?php
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $dbname = "naseem_sa";
                    $conn = mysqli_connect($host, $user, $password, $dbname);

                    $query = "SELECT  t.email , t.phone_number, r.req_date ,r.req_time  FROM tourist t , requests r WHERE 1 ";
                    $result = mysqli_query($conn, $query);

                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            if (isset($_POST['acceptance'])) {
                                echo "<p><a  href=https://accounts.google.com/b/0/AddMailService>" . $row['email'] . "</a><br><a href=https://web.whatsapp.com/>" . "0" . $row['phone_number'] . "</a></p>";
                            }
                        }
                    }
                    ?>

                </div>
                <br>
            </div>
        </div>
    </div>
    <!-- form_Check_in -->

    <?php require('components/footre.php'); ?>
</body>

</html>
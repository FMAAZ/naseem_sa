<!doctype html>
<html lang="en" dir="rtl">

<head>
  <title> الادمن</title>
  <?php require 'Niv1.php';?>  
</head>

<body>
<?php
    if (isset($_SESSION["login"]) && !empty($_SESSION["email"]) && !empty($_SESSION["password"]))
    {
        if (!empty($_SESSION["email_admin"]) && !empty($_SESSION["password_admin"]))
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
        header("Location:index.php");
        exit;
    }
    ?>

<form method="POST">
<main class="container">
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom"><?php echo $_SESSION["full_name"]; ?></h2>
    <form method="POST"> 
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
  
      <div class="feature col">
        <div class="feature-icon bg-white">
        <img src="assistances/images/add.png"class="bd-placeholder-img rounded-circle" width="100" height="100"></img>
        </div>
        <h4> &numsp;الطلابات</h4>
        <input  class="btn btn-secondary btn-sm" type="submit" value="عرض التفاصيل" name="tl"></input>
      </div>

<!-- // col1-->
<!-- col_2 -->
      <div class="feature col">
        <div class="feature-icon bg-white">
        <img src="assistances/images/ad1.png"class="bd-placeholder-img rounded-circle" width="100" height="100"></img>
        </div>
        <h4> &numsp;المحتوى</h4>
        <input  class="btn btn-secondary btn-sm" type="submit" name="content" value="عرض التفاصيل"></input>
      </div>
      <!-- //col2 -->
      
      <!-- col_3 -->
      <div class="feature col">
        <div class="feature-icon bg-white">
        <img src="assistances/images/ad.jpg"class="bd-placeholder-img rounded-circle" width="100" height="100"></img>
        </div>
        <h4>المستخدمين</h4>
        <input  class="btn btn-secondary btn-sm" type="submit" value="عرض التفاصيل" name="a"></input>
      </div>
      <!-- //col3 -->
    </div>
    <hr>
    <?php
 if (isset($_POST['tl'])) {
  echo '<table class="table">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">حالة الطلب</th>
<th scope="col">التاريخ</th>
<th scope="col">الوقت</th>
<th scope="col"> الاسم</th>
<th scope="col">الايميل </th>
<th scope="col"> رقم الجوال</th>


</tr>
</thead>';
 }


$host = "localhost";
$user = "root";
$password = "";
$dbname = "naseem_sa";
$conn = mysqli_connect($host, $user, $password, $dbname);
mysqli_set_charset($conn,'utf8');

$query = "SELECT  t.first_name , t.last_name , t.email , t.phone_number, r.req_date ,r.req_time ,r.req_status , r.req_id FROM tourist t , requests r WHERE 1 ";
$result = mysqli_query($conn, $query);

if ($result) {

  while ($row = mysqli_fetch_assoc($result)) {


    if (isset($_POST['tl'])) {
      echo '
  <tr>

  <td class="table-success">' . $row['req_id'] . '</td>';
if($row['req_status']=='accept')
echo'<td class="bg-success ">' . $row['req_status'] . '</td>';
if($row['req_status']=='reject' ||$row['req_status']=='cancel' )
  echo'<td class="bg-danger">' . $row['req_status'] . '</td>';
  if($row['req_status']== null)
    echo'<td class="table-secondary">'.  $row['req_status']  . '</td>';
    if($row['req_status']== "finished")
    echo'<td class="table-success">' . $row['req_status'] . '</td>';
echo'<td class="table-success">' . $row['req_date'] . '</td>
<td class="table-success">' . $row['req_time'] . '</td>
  <td class="table-success">' . $row['first_name'] ." ". $row['last_name'] . '</td>
  <td class="table-success"> ' . $row['email'] . '</td>
  <td class="table-success"> '."0" . $row['phone_number'] . '</td>

 




</tr>
';
    }
  }
}

?>
 <?php




$host = "localhost";
$user = "root";
$password = "";
$dbname = "naseem_sa";
$conn = mysqli_connect($host, $user, $password, $dbname);
mysqli_set_charset($conn,'utf8');

$query = "SELECT * FROM `tourist` where " . @$_POST['x'] . " = '" . @$_POST['t'] . "'";
$result = mysqli_query($conn, $query);
$run = 1;
if ($result) {

  while ($row = mysqli_fetch_assoc($result)) {


    if (isset($_POST['a']) && @$_POST['1'] == 'سائح') {
      echo '<table class="table">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">نوع التسجيل</th>
    <th scope="col">الاسم الاول</th>
    <th scope="col">الاسم الاخير</th>
    <th scope="col">الايميل</th>
    <th scope="col">رقم الجوال</th>
    <th scope="col">العمر</th>
    <th scope="col">اللغة</th>

  </tr>
</thead>';
      echo '   <tr>   <form method="POST">
<td class="table-success"> ' . $row['ID'] . '</td>
<td class="table-success"> سائح</td>
<td class="table-success"> ' . $row['first_name'] . '</td>
<td class="table-success"> ' . $row['last_name'] . '</td>
<td class="table-success"> ' . $row['email'] . '</td>
<td class="table-success"> ' . $row['phone_number'] . '</td>
<td class="table-success"> ' . $row['age'] . '</td>
<td class="table-success"> ' . $row['language'] . '</td>

</form></tr>
';
    }
  }
}

?>

<?php
if(isset($_POST['a'])){
  echo' <input type="text" name="t">
  <select name="x" id="">
    <option value="ID">id</option>
    <option value="first_name">name</option>
    <option value="phone_number">phone</option>
    <option value="email">email</option>
  </select>
  <input type="radio" name="1" value="سائح">سائح
  <input type="radio" name="1" value="مرشد">مرشد
';
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = "naseem_sa";
$conn = mysqli_connect($host, $user, $password, $dbname );
mysqli_set_charset($conn,'utf8');

$query = "SELECT * FROM `tour_guide` where " . @$_POST['x'] . " = '" . @$_POST['t'] . "'";
$result = mysqli_query($conn, $query);


if ($result) {

  while ($row = mysqli_fetch_assoc($result)) {


    if (isset($_POST['a']) && @$_POST['1'] == 'مرشد') {

      echo '<table class="table">
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">نوع التسجيل</th>
    <th scope="col">الاسم الاول</th>
    <th scope="col">الاسم الاخير</th>
    <th scope="col">الايميل</th>
    <th scope="col">رقم الجوال</th>
    <th scope="col">العمر</th>
    <th scope="col">اللغة</th>
   
  </tr>
</thead>';
      echo '   <tr>   <form method="POST">
<td class="table-success">' . $row['ID'] . '</td>
<td class="table-success"> مرشد سياحي</td>
<td class="table-success"> ' . $row['first_name'] . '</td>
<td class="table-success"> ' . $row['last_name'] . '</td>
<td class="table-success"> ' . $row['email'] . '</td>
<td class="table-success"> ' . $row['phone_number'] . '</td>
<td class="table-success"> ' . $row['age'] . '</td>
<td class="table-success"> ' . $row['language'] . '</td>


</form></tr>
';
    }
  }
}


?>
</form>
  </div>
  </tbody>
</table>
</main>
      <?php
        if(isset($_POST["content"]))
        {
          ?>
          <div class="row align-items-center justify-content-center">
            <div class="col-sm-8 col-md-8 col-lg-9">
                <div class="signup-form">

                    <!-- main form -->
                    <form method="POST" class="mt-6 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-center text-secondary">
                            إضافة وجهة
                        </h4>
                        <hr class="featurette-divider">
                        <div class="row">
                            <!-- php main form -->
                            <?php
                                //destination
                                if(empty($_SESSION["destination"]))
                                    {    
                                        ?>
                                            <div class="mb-3 col-md-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio1" value="city" required>
                                                    <label class="form-check-label" for="inlineRadio1">مدينة<span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="destination" id="inlineRadio2" value="island" required>
                                                    <label class="form-check-label" for="inlineRadio2">جزيرة<span class="text-danger">*</span>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["destination"]))
                                    {
                                        if($_SESSION["destination"] == "city")
                                            {
                                                ?>
                                                    <h6>نوع الوجهة : مدينة </h6>
                                                <?php
                                            }
                                        elseif($_SESSION["destination"] == "island")
                                            {
                                                ?>
                                                    <h6>نوع الوجهة : جزيرة </h6>
                                                <?php
                                            }
                                    }
                                //destination_name
                                if(empty($_SESSION["destination_name"]))
                                    {    
                                        ?>
                                            <div class="mb-3 col-md-5">
                                                <label>اسم الوجهة<span class="text-danger">*</span></label>
                                                <input type="text" name="destination_name" class="form-control" placeholder="اسم الوجهة" required>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["destination_name"]))
                                    {
                                        ?>
                                            <h6>اسم الوجهة : <?php echo $_SESSION["destination_name"]; ?> </h6>
                                        <?php
                                    }
                                //card_photo
                                if(empty($_SESSION["card_photo"]))
                                    {    
                                        ?>
                                            <div class="mb-3 col-md-5">
                                                <label>الصورة الرئيسية<span class="text-danger">*</span></label>
                                                <input type="file" name="card_photo" class="form-control" required>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["card_photo"]))
                                    {
                                        ?>
                                            <h6>الصورة الرئيسية : <?php echo $_SESSION["card_photo"]; ?> </h6>
                                        <?php
                                    }
                                //main_description
                                if(empty($_SESSION["main_description"]))
                                    {    
                                        ?>
                                            <div class="mb-3">
                                                <label>المحتوى الرئيسي للوجهة<span class="text-danger">*</span></label>
                                                <textarea name="main_description" maxlength="1000" class="form-control" placeholder="المحتوى الرئيسي للوجهة" id="floatingTextarea" required></textarea>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["main_description"]))
                                    {
                                        ?>
                                            <h6>المحتوى الرئيسي للوجهة : <?php echo $_SESSION["main_description"]; ?> </h6>
                                        <?php
                                    }
                                //card_description
                                if(empty($_SESSION["card_description"]))
                                    {    
                                        ?>
                                            <div class="mb-3">
                                                <label>وصف قصير للوجهة<span class="text-danger">*</span></label>
                                                <textarea name="card_description" maxlength="100" class="form-control" placeholder="وصف قصير للوجهة" id="floatingTextarea" required></textarea>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["card_description"]))
                                    {
                                        ?>
                                            <h6>وصف قصير للوجهة : <?php echo $_SESSION["card_description"]; ?> </h6>
                                        <?php
                                    }
                                //card_description
                                if(empty($_SESSION["weather_description"]))
                                    {    
                                        ?>
                                            <div class="mb-3">
                                                <label>مناخ الوجهة<span class="text-danger">*</span></label>
                                                <textarea name="weather_description" maxlength="1000" class="form-control" placeholder="مناخ الوجهة" id="floatingTextarea" required></textarea>
                                            </div>
                                        <?php
                                    }
                                elseif(!empty($_SESSION["weather_description"]))
                                    {
                                        ?>
                                            <h6>مناخ الوجهة : <?php echo $_SESSION["weather_description"]; ?> </h6>
                                        <?php
                                    }
                                // subtitle loop
                                for($j=1; $j<=4; $j++)
                                    {
                                        ?>
                                            <!-- subtitle form -->
                                            <hr class="featurette-divider">
                                                <h4 class="mb-3 text-center text-secondary">
                                                    إضافة معلم سياحي رقم <?php echo $j; ?>
                                                </h4>
                                                <hr class="featurette-divider">
                                                <div class="row">
                                                    <?php
                                                        //subtitle
                                                        if(empty($_SESSION["subtitle$j"]))
                                                            {
                                                                ?>
                                                                    <div class="mb-3 col-md-5">
                                                                        <label>عنوان فرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                        <input type="text" name="subtitle<?php echo $j; ?>" class="form-control" placeholder="عنوان فرعي رقم (<?php echo $j; ?>)" required>
                                                                    </div>
                                                                <?php
                                                            }
                                                        elseif(!empty($_SESSION["subtitle$j"]))
                                                            {
                                                                ?>
                                                                    <h6>عنوان فرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["subtitle$j"]; ?> </h6>
                                                                <?php
                                                            }
                                                        //subtitle_photo
                                                        if(empty($_SESSION["subtitle_photo$j"]))
                                                            {
                                                                ?>
                                                                    <div class="mb-3 col-md-5">
                                                                        <label>صورة عنوان فرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                        <input type="file" name="subtitle_photo<?php echo $j; ?>" class="form-control" required>
                                                                    </div>
                                                                <?php
                                                            }
                                                        elseif(!empty($_SESSION["subtitle_photo$j"]))
                                                            {
                                                                ?>
                                                                    <h6>صورة عنوان فرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["subtitle_photo$j"]; ?> </h6>
                                                                <?php
                                                            }
                                                        //subtitle_description
                                                        if(empty($_SESSION["subtitle_description$j"]))
                                                            {
                                                                ?>
                                                                    <div class="mb-3">
                                                                        <label>محتوى عنوان فرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                        <textarea name="subtitle_description<?php echo $j; ?>" maxlength="1000" class="form-control" placeholder="محتوى عنوان فرعي رقم (<?php echo $j; ?>)" id="floatingTextarea" required></textarea>
                                                                    </div>
                                                                <?php
                                                            }
                                                        elseif(!empty($_SESSION["subtitle_description$j"]))
                                                            {
                                                                ?>
                                                                    <h6>محتوى عنوان فرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["subtitle_description$j"]; ?> </h6>
                                                                <?php
                                                            }
                                                        //subtitle_description
                                                        if(empty($_SESSION["subtitle_location$j"]))
                                                            {
                                                                ?>
                                                                    <div class="mb-3">
                                                                        <label>موقع عنوان فرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                        <textarea name="subtitle_location<?php echo $j; ?>" maxlength="1000" class="form-control" placeholder="موقع عنوان فرعي رقم (<?php echo $j; ?>)" id="floatingTextarea" required></textarea>
                                                                    </div>
                                                                    <hr class="featurette-divider">
                                                                <?php
                                                            }
                                                        elseif(!empty($_SESSION["subtitle_location$j"]))
                                                            {
                                                                ?>
                                                                    <h6>موقع عنوان فرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["subtitle_location$j"]; ?> </h6>
                                                                <?php
                                                            }
                                                        //activitiy loop
                                                        for($k=1; $k<=3; $k++)
                                                            {
                                                                //activitiy_description
                                                                if(empty($_SESSION["activitiy_description$j$k"]))
                                                                    {
                                                                        ?>
                                                                            <div class="mb-3">
                                                                                <label>محتوى النشاط رقم (<?php echo $k; ?>) للعنوان الفرعي رقم (<?php echo $j; ?>)<span class="text-danger">*</span></label>
                                                                                <textarea name="activitiy_description<?php echo $j.$k; ?>" maxlength="1000" class="form-control" placeholder="محتوى النشاط رقم (<?php echo $k; ?>) للعنوان الفرعي رقم (<?php echo $j; ?>)" id="floatingTextarea" requered></textarea>
                                                                            </div>
                                                                        <?php
                                                                    }
                                                                elseif(!empty($_SESSION["activitiy_description$j$k"]))
                                                                    {
                                                                        ?>
                                                                            <h6>محتوى النشاط رقم (<?php echo $k; ?>) للعنوان الفرعي رقم (<?php echo $j; ?>) : <?php echo $_SESSION["activitiy_description$j$k"]; ?> </h6>
                                                                        <?php
                                                                    }
                                                                //sessions
                                                                if(isset($_POST["check_destination"]))
                                                                    {
                                                                        $_SESSION["destination"] = $_POST["destination"];
                                                                        $_SESSION["destination_name"] = $_POST["destination_name"];
                                                                        $_SESSION["card_photo"] = $_POST["card_photo"];
                                                                        $_SESSION["main_description"] = $_POST["main_description"];
                                                                        $_SESSION["card_description"] = $_POST["card_description"];
                                                                        $_SESSION["weather_description"] = $_POST["weather_description"];

                                                                        $_SESSION["subtitle$j"] = $_POST["subtitle$j"];
                                                                        $_SESSION["subtitle_photo$j"] = $_POST["subtitle_photo$j"];
                                                                        $_SESSION["subtitle_description$j"] = $_POST["subtitle_description$j"];
                                                                        $_SESSION["subtitle_location$j"] = $_POST["subtitle_location$j"];

                                                                        $_SESSION["activitiy_description$j$k"] = $_POST["activitiy_description$j$k"];

                                                                        $_SESSION["check_destination"] = $_POST["check_destination"];

                                                                        header("Location:admin2.php");
                                                                    }
                                                            }
                                                    ?>
                                                    <hr class="featurette-divider">
                                                </div>
                                            </form>
                                        <?php
                                    }
                                    if(!isset($_SESSION["check_destination"]))
                                    {
                                        ?>
                                            <div class="mb-3 col-md-5">
                                                <br>
                                                <input type="submit" class="btn btn-success" name="check_destination" value="تأكيد الوجهة">
                                            </div>
                                        <?php
                                    }
                                    elseif(isset($_SESSION["check_destination"]))
                                    {
                                        ?>
                                            <div class="mb-3 col-md-5">
                                                <br>
                                                <input type="submit" class="btn btn-success" name="insert_destination" value="إضافة الوجهة">
                                            </div>
                                        <?php
                                    }
                                    
                                ?>
                                </form>
                                <form method="POST"><div class="mb-3 col-md-5">
                                        <input type="submit" class="btn btn-success" name="reset_destination" value="إعادة تعيين الوجهة">
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST["insert_destination"]))
                                    {
                                        require_once 'connect_database.php';
                                        //insertr city
                                        if(!empty($_SESSION["destination"]))
                                        {
                                            if($_SESSION["destination"] == "city")
                                            {
                                                //select ID city
                                                $select_city_id = $connect_database->prepare('SELECT MAX(ID) ID FROM city');
                                                $select_city_id->execute();
                                                foreach($select_city_id as $print)
                                                {
                                                    $_SESSION["new_id_city"] = $print["ID"];
                                                }
                                                
                                                if(empty($_SESSION["new_id_city"]))
                                                    $_SESSION["new_id_city"] = 1;
                                                elseif(!empty($_SESSION["new_id_city"]))
                                                    $_SESSION["new_id_city"] ++;
                
                                                //insert city info
                                                $insert_city_info = $connect_database->prepare('INSERT INTO city VALUES ('.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'")');
                                                $insert_city_info->execute();
                                                
                                                //insert city content
                                                $insert_city_content = $connect_database->prepare
                                                ('
                                                INSERT INTO city_content VALUES
                                                (
                                                '.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["main_description"].'" , "'.$_SESSION["weather_description"].'" ,
                                                "'.$_SESSION["card_description"].'" , "'.$_SESSION["card_photo"].'"
                                                )
                                                ');
                                                $insert_city_content->execute();
                
                                                //insert city subtitle
                                                    
                                                for($q=1; $q<=4; $q++)
                                                {
                                                    $insert_city_subtitle = $connect_database->prepare
                                                    ('
                                                    INSERT INTO city_subtitle VALUES
                                                    (
                                                    '.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle$q"].'" , "'.$_SESSION["subtitle_description$q"].'" ,
                                                    "'.$_SESSION["subtitle_photo$q"].'" ,  "'.$_SESSION["subtitle_location$q"].'" 
                                                    )
                                                    ');
                                                    $insert_city_subtitle->execute();
    
                                                    for($w=1; $w<=3; $w++)
                                                    {
                                                        $insert_city_avtivitiy = $connect_database->prepare
                                                        ('
                                                        INSERT INTO city_activitiy VALUES
                                                        (
                                                        '.$_SESSION["new_id_city"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle$q"].'" , "'.$_SESSION["activitiy_description$q$w"].'"
                                                        )
                                                        ');
                                                        $insert_city_avtivitiy->execute();
                                                    }
    
                                                }
                                                if($insert_city_info && $insert_city_content && $insert_city_subtitle && $insert_city_avtivitiy)
                                                {
                                                    echo '
                                                    <center>
                                                        <div class="alert alert-success" role="alert">
                                                            <b>تم إضافة المدينة بنجاح</b> 
                                                        </div>
                                                    </center>
                                                    ';

                                                    if(!empty($_SESSION["new_id_city"]))
                                                    $_SESSION["new_id_city"] = NULL;

                                                    if(!empty($_SESSION["destination"]))
                                                    $_SESSION["destination"] = NULL;

                                                    if(!empty($_SESSION["destination_name"]))
                                                    $_SESSION["destination_name"] = NULL;

                                                    if(!empty($_SESSION["main_description"]))
                                                    $_SESSION["main_description"] = NULL;
                                                    
                                                    if(!empty($_SESSION["weather_description"]))
                                                    $_SESSION["weather_description"] = NULL;

                                                    if(!empty($_SESSION["card_description"]))
                                                    $_SESSION["card_description"] = NULL;

                                                    if(!empty($_SESSION["card_photo"]))
                                                    $_SESSION["card_photo"] = NULL;

                                                    if(!empty($_SESSION["check_destination"]))
                                                    $_SESSION["check_destination"] = NULL;

                                                    for($a=1; $a<=4; $a++)
                                                    {
                                                        if(!empty($_SESSION["subtitle$a"]))
                                                        $_SESSION["subtitle$a"] = NULL;
                                                        
                                                        if(!empty($_SESSION["subtitle_description$a"]))
                                                        $_SESSION["subtitle_description$a"] = NULL;

                                                        if(!empty($_SESSION["subtitle_photo$a"]))
                                                        $_SESSION["subtitle_photo$a"] = NULL;

                                                        if(!empty($_SESSION["subtitle_location$a"]))
                                                        $_SESSION["subtitle_location$a"] = NULL;

                                                        for($b=1; $b<=3; $b++)
                                                        {
                                                            if(!empty($_SESSION["activitiy_description$a$b"]))
                                                            $_SESSION["activitiy_description$a$b"] = NULL;
                                                        }
                                                    }

                                                    header("refresh:3; url=admin2.php");
                                                }
                                                else
                                                {
                                                    echo '
                                                    <center>
                                                        <div class="alert alert-danger" role="alert">
                                                            <b>حدث خطأ</b> 
                                                        </div>
                                                    </center>
                                                    ';
                                                    header("refresh:3; url=admin2.php");
                                                }
                                            }
                                            //insert island
                                            elseif($_SESSION["destination"] == "island")
                                            {
                                                //select ID city
                                                $select_city_id = $connect_database->prepare('SELECT MAX(ID) ID FROM island');
                                                $select_city_id->execute();
                                                foreach($select_city_id as $print)
                                                {
                                                    $_SESSION["new_id_island"] = $print["ID"];
                                                }
                                                
                                                if(empty($_SESSION["new_id_island"]))
                                                    $_SESSION["new_id_island"] = 1;
                                                elseif(!empty($_SESSION["new_id_island"]))
                                                    $_SESSION["new_id_island"] ++;
                
                                                //insert city info
                                                $insert_city_info = $connect_database->prepare('INSERT INTO island VALUES ('.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'")');
                                                $insert_city_info->execute();
                                                
                                                //insert city content
                                                $insert_city_content = $connect_database->prepare
                                                ('
                                                INSERT INTO island_content VALUES
                                                (
                                                '.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["main_description"].'" , "'.$_SESSION["weather_description"].'" ,
                                                "'.$_SESSION["card_description"].'" , "'.$_SESSION["card_photo"].'"
                                                )
                                                ');
                                                $insert_city_content->execute();
                
                                                //insert city subtitle
                                                    
                                                for($q=1; $q<=4; $q++)
                                                {
                                                    $insert_city_subtitle = $connect_database->prepare
                                                    ('
                                                    INSERT INTO island_subtitle VALUES
                                                    (
                                                    '.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle$q"].'" , "'.$_SESSION["subtitle_description$q"].'" ,
                                                    "'.$_SESSION["subtitle_photo$q"].'" ,  "'.$_SESSION["subtitle_location$q"].'" 
                                                    )
                                                    ');
                                                    $insert_city_subtitle->execute();
    
                                                    for($w=1; $w<=3; $w++)
                                                    {
                                                        $insert_city_avtivitiy = $connect_database->prepare
                                                        ('INSERT INTO island_activitiy VALUES
                                                        (
                                                        '.$_SESSION["new_id_island"].' , "'.$_SESSION["destination_name"].'" , "'.$_SESSION["subtitle$q"].'" , "'.$_SESSION["activitiy_description$q$w"].'"
                                                        )
                                                        ');
                                                        $insert_city_avtivitiy->execute();
                                                    }
    
                                                }
                                                if($insert_city_info && $insert_city_content && $insert_city_subtitle && $insert_city_avtivitiy)
                                                {
                                                    echo '
                                                    <center>
                                                        <div class="alert alert-success" role="alert">
                                                            <b>تم إضافة الجزيرة بنجاح</b> 
                                                        </div>
                                                    </center>
                                                    ';

                                                    if(!empty($_SESSION["new_id_island"]))
                                                    $_SESSION["new_id_island"] = NULL;

                                                    if(!empty($_SESSION["destination"]))
                                                    $_SESSION["destination"] = NULL;

                                                    if(!empty($_SESSION["destination_name"]))
                                                    $_SESSION["destination_name"] = NULL;

                                                    if(!empty($_SESSION["main_description"]))
                                                    $_SESSION["main_description"] = NULL;
                                                    
                                                    if(!empty($_SESSION["weather_description"]))
                                                    $_SESSION["weather_description"] = NULL;

                                                    if(!empty($_SESSION["card_description"]))
                                                    $_SESSION["card_description"] = NULL;

                                                    if(!empty($_SESSION["card_photo"]))
                                                    $_SESSION["card_photo"] = NULL;

                                                    if(!empty($_SESSION["check_destination"]))
                                                    $_SESSION["check_destination"] = NULL;

                                                    for($a=1; $a<=4; $a++)
                                                    {
                                                        if(!empty($_SESSION["subtitle$a"]))
                                                        $_SESSION["subtitle$a"] = NULL;
                                                        
                                                        if(!empty($_SESSION["subtitle_description$a"]))
                                                        $_SESSION["subtitle_description$a"] = NULL;

                                                        if(!empty($_SESSION["subtitle_photo$a"]))
                                                        $_SESSION["subtitle_photo$a"] = NULL;

                                                        if(!empty($_SESSION["subtitle_location$a"]))
                                                        $_SESSION["subtitle_location$a"] = NULL;

                                                        for($b=1; $b<=3; $b++)
                                                        {
                                                            if(!empty($_SESSION["activitiy_description$a$b"]))
                                                            $_SESSION["activitiy_description$a$b"] = NULL;
                                                        }
                                                    }

                                                    header("refresh:3; url=admin2.php");
                                                }
                                                else
                                                {
                                                    echo '
                                                    <center>
                                                        <div class="alert alert-danger" role="alert">
                                                            <b>حدث خطأ</b> 
                                                        </div>
                                                    </center>
                                                    ';
                                                    header("refresh:3; url=admin2.php");
                                                }
                                            }
                                        }
                                    }
                                    if(isset($_POST["reset_destination"]))
                                        {
                                            if(!empty($_SESSION["new_id_island"]))
                                            $_SESSION["new_id_island"] = NULL;

                                            if(!empty($_SESSION["destination"]))
                                            $_SESSION["destination"] = NULL;

                                            if(!empty($_SESSION["destination_name"]))
                                            $_SESSION["destination_name"] = NULL;

                                            if(!empty($_SESSION["main_description"]))
                                            $_SESSION["main_description"] = NULL;
                                            
                                            if(!empty($_SESSION["weather_description"]))
                                            $_SESSION["weather_description"] = NULL;

                                            if(!empty($_SESSION["card_description"]))
                                            $_SESSION["card_description"] = NULL;

                                            if(!empty($_SESSION["card_photo"]))
                                            $_SESSION["card_photo"] = NULL;

                                            if(!empty($_SESSION["check_destination"]))
                                            $_SESSION["check_destination"] = NULL;

                                            for($a=1; $a<=4; $a++)
                                            {
                                                if(!empty($_SESSION["subtitle$a"]))
                                                $_SESSION["subtitle$a"] = NULL;
                                                
                                                if(!empty($_SESSION["subtitle_description$a"]))
                                                $_SESSION["subtitle_description$a"] = NULL;

                                                if(!empty($_SESSION["subtitle_photo$a"]))
                                                $_SESSION["subtitle_photo$a"] = NULL;

                                                if(!empty($_SESSION["subtitle_location$a"]))
                                                $_SESSION["subtitle_location$a"] = NULL;

                                                for($b=1; $b<=3; $b++)
                                                {
                                                    if(!empty($_SESSION["activitiy_description$a$b"]))
                                                    $_SESSION["activitiy_description$a$b"] = NULL;
                                                }
                                            }

                                            header("Location:admin2.php");
                                        }
                            ?>
                </div>
                <br>
            </div>
          </div>
          </div>
        <?php 
        }
        ?>
        
        <hr>
<div class="d-flex justify-content-center">

 
   

<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "naseem_sa";
$conn = mysqli_connect($host, $user, $password, $dbname);
mysqli_set_charset($conn,'utf8');

$query = "SELECT COUNT(ID) FROM `tourist` ";
$result = mysqli_query($conn, $query);

if ($result) {

  while ($row = mysqli_fetch_assoc($result)) {

//عدد السياح الدوائر

    
     echo' <tr>
     <td><h1><span class="border border-primary circle" style=" 
     width: 200px;
     height: 200px;
     border-radius: 50%;
     display: flex;
     align-items: center;
     text-align: center;">'.$row['COUNT(ID)'].'</span></h1></td>';
    
;
    }
  }
  echo   '<td> </td>';

$query = "SELECT COUNT(ID) FROM `tour_guide` ";
$result = mysqli_query($conn, $query);

if ($result) {

  while ($row = mysqli_fetch_assoc($result)) {

//عدد المرشدين الدوائر
  
      echo   '<td><h1><span class="border border-primary"  style=" 
      width: 200px;
      height: 200px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      text-align: center;">'.$row['COUNT(ID)'].'</span></h1></td>';
;
    }
  }


?>
 </tbody>
</table>
</div>
<hr>
  <?php require('components/footre.php'); ?>
</body>
</html>
<!doctype html>
<html lang="en" dir="rtl">

<head>
  <title> الادمن</title>
  <?php require 'Niv1.php';?>  
</head>

<body>
<form method="POST">
<main class="container">
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">admin page</h2>
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
if($row['req_status']=='reject' ||$row['req_status']=='canceled' )
  echo'<td class="bg-danger">' . $row['req_status'] . '</td>';
  if($row['req_status']== null)
    echo'<td class="table-secondary">' . $row['req_status'] . '</td>';
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
<!doctype html>
<html lang="en" dir="rtl">

<head>
  <title> الادمن</title>
<<<<<<< HEAD
  <?php require 'Niv1.php';?>  
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

    <input class="btn btn-primary" name="tl" type="submit" value="طلبات">
    <input class="btn btn-primary" name="a" type="submit" value="مستخدمين">

    <input class="btn btn-primary" name='s' type="submit" value="المحتوى">
 <!--/* تعديل التكست */ -->
    <input type="text" name="t">
    <select name="x" id="">
      <option value="ID">id</option>
      <option value="first_name">name</option>
      <option value="phone_number">phone</option>
      <option value="email">email</option>
    </select>
    <input type="radio" name="1" value="سائح">سائح
    <input type="radio" name="1" value="مرشد">مرشد
  </form>





  <?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "naseem_sa";
  $conn = mysqli_connect($host, $user, $password, $dbname);

  $query = "SELECT * FROM `tourist` where " . $_POST['x'] . " = '" . $_POST['t'] . "'";
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

  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "naseem_sa";
  $conn = mysqli_connect($host, $user, $password, $dbname );


  $query = "SELECT * FROM `tour_guide` where " . $_POST['x'] . " = '" . $_POST['t'] . "'";
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
</form>
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

  $query = "SELECT  t.first_name , t.last_name , t.email , t.phone_number, r.req_date ,r.req_time ,r.req_status , r.req_id FROM tourist t , requests r WHERE 1 ";
  $result = mysqli_query($conn, $query);

  if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {


      if (isset($_POST['tl'])) {
        echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">حالة الطلب</th>
      <th scope="col">التاريخ</th>
      <th scope="col">الوقت</th>
      <th scope="col"> الاسم</th>
      <th scope="col">الايميل </th>
      <th scope="col"> رقم الجوال</th>
     
      
    </tr>
  </thead>
    <tr>
    <td class="table-success">' . $row['req_id'] . '</td>
<td class="table-success">' . $row['req_status'] . '</td>
<td class="table-success">' . $row['req_date'] . '</td>
<td class="table-success">' . $row['req_time'] . '</td>
    <td class="table-success">' . $row['first_name'] ." ". $row['last_name'] . '</td>
    <td class="table-success"> ' . $row['email'] . '</td>
    <td class="table-success"> ' . $row['phone_number'] . '</td>
 
   
  
 

</tr>
';
      }
    }
  }

  ?>
  </tbody>
  </table>
  <?php
  if (isset($_POST['s'])) {
    echo ' <form method="POST" class="mt-6 border p-4 bg-light shadow">
    <h4 class="mb-3 text-center text-secondary">
       إضافة محتوى
    </h4>
    <hr class="featurette-divider">
    <div class="row">

        <div class="mb-3 col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type_user" id="inlineRadio1" value="tour_guide" required>
                <label class="form-check-label" for="inlineRadio1">جزر<span
                        class="text-danger">*</span></label>
            </div>
=======
  <?php require('components/head_inc.php'); ?>
</head>

<body>
 
<main class="container">
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">admin page</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
<!-- col_1 -->
      <div class="feature col">
        <div class="feature-icon bg-white">
        <img src="assistances/images/add.png"class="bd-placeholder-img rounded-circle" width="100" height="100"></img>
>>>>>>> c444372f49964b52c5b2e3e45bb7f5f7a1673759
        </div>
        <h4> &numsp;الطلابات</h4>
        <input  class="btn btn-secondary btn-sm" type="button" value="عرض التفاصيل"></input>
      </div>
<!-- // col1-->
<!-- col_2 -->
      <div class="feature col">
        <div class="feature-icon bg-white">
        <img src="assistances/images/ad1.png"class="bd-placeholder-img rounded-circle" width="100" height="100"></img>
        </div>
        <h4> &numsp;المحتوى</h4>
        <input  class="btn btn-secondary btn-sm" type="button" value="عرض التفاصيل"></input>
      </div>
      <!-- //col2 -->
      
      <!-- col_3 -->
      <div class="feature col">
        <div class="feature-icon bg-white">
        <img src="assistances/images/ad.jpg"class="bd-placeholder-img rounded-circle" width="100" height="100"></img>
        </div>
        <h4>المستخدمين</h4>
        <input  class="btn btn-secondary btn-sm" type="button" value="عرض التفاصيل"></input>
      </div>
      <!-- //col3 -->
    </div>
    <hr>
  </div>
</main>
  <?php require('components/footre.php'); ?>
</body>
</html>
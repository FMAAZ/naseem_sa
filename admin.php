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

    <input class="btn btn-primary" name="tl" type="submit" value="طلبات">
    <input class="btn btn-primary" name="a" type="submit" value="مستخدمين">

    <input class="btn btn-primary" name='s' type="submit" value="المحتوى">

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


      if (isset($_POST['a']) && $_POST['1'] == 'سائح') {
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
      <th scope="col">Edit</th>
    </tr>
  </thead>';
        echo '   <tr>   <form method="POST">
  <td class="table-success"><input type="text" name="id" class="form-control" placeholder=" ' . $row['ID'] . '"disabled></td>
  <td class="table-success"> سائح</td>
  <td class="table-success"><input type="text" name="fname" class="form-control" placeholder=" ' . $row['first_name'] . '"></td>
  <td class="table-success"><input type="text" name="lname" class="form-control" placeholder=" ' . $row['last_name'] . '"></td>
  <td class="table-success"><input type="text" name="email" class="form-control" placeholder=" ' . $row['email'] . '"></td>
  <td class="table-success"><input type="text" name="phone" class="form-control" placeholder=" ' . $row['phone_number'] . '"></td>
  <td class="table-success"><input type="text" name="age" class="form-control" placeholder=" ' . $row['age'] . '"></td>
  <td class="table-success"><input type="text" name="lang" class="form-control" placeholder=" ' . $row['language'] . '"></td>
 
  <td> <input  name="edit" class="btn btn-primary btn btn-success" type="button" value="تعديل"></td>
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
  $conn = mysqli_connect($host, $user, $password, $dbname);


  $query = "SELECT * FROM `tour_guide` where " . $_POST['x'] . " = '" . $_POST['t'] . "'";
  $result = mysqli_query($conn, $query);

  if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {


      if (isset($_POST['a']) && $_POST['1'] == 'مرشد') {

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
      <th scope="col">Edit</th>
    </tr>
  </thead>';
        echo '   <tr>   <form method="POST">
  <td class="table-success"><input type="text" name="id" class="form-control" placeholder=" ' . $row['ID'] . '"disabled></td>
  <td class="table-success"> سائح</td>
  <td class="table-success"><input type="text" name="fname" class="form-control" placeholder=" ' . $row['first_name'] . '"></td>
  <td class="table-success"><input type="text" name="lname" class="form-control" placeholder=" ' . $row['last_name'] . '"></td>
  <td class="table-success"><input type="text" name="email" class="form-control" placeholder=" ' . $row['email'] . '"></td>
  <td class="table-success"><input type="text" name="phone" class="form-control" placeholder=" ' . $row['phone_number'] . '"></td>
  <td class="table-success"><input type="text" name="age" class="form-control" placeholder=" ' . $row['age'] . '"></td>
  <td class="table-success"><input type="text" name="lang" class="form-control" placeholder=" ' . $row['language'] . '"></td>
 
  <td> <input  name="edit" class="btn btn-primary btn btn-success" type="button" value="تعديل"></td>
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
  $id = @$_POST['id'];
  $name = @$_POST['fname'];
  $last = @$_POST['lname'];
  $email = @$_POST['email'];
  $phone = @$_POST['phone'];
  $age = @$_POST['age'];
  $lang = @$_POST['lang'];


  $conn = mysqli_connect($host, $user, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  if (isset($_POST['edit'])) {
    $sql = "UPDATE `tourist` SET `first_name`='$name',`last_name`='$last',`email`='$email',`phone_number`=$phone,`age`=$age,`language`='$lang' WHERE `ID`= $id";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
  }
  mysqli_close($conn);
  ?>
  <?php

  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "naseem_sa";
  $conn = mysqli_connect($host, $user, $password, $dbname);

  $query = "SELECT * FROM `requests` WHERE 1";
  $result = mysqli_query($conn, $query);

  if ($result) {

    while ($row = mysqli_fetch_assoc($result)) {


      if (isset($_POST['tl'])) {
        echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">نوع التسجيل</th>
     
      
    </tr>
  </thead>
    <tr>

 
  <td class="table-success">' . $row['req_date'] . '</td>
  <td class="table-success">' . $row['req_time'] . '</td>
  
 

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
        </div>
        <div class="mb-3 col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="type_user" id="inlineRadio2" value="tourist" required>
                <label class="form-check-label" for="inlineRadio2"> مدن<span
                        class="text-danger">*</span>
                </label>
            </div>
        </div>

        <div class="mb-3 col-md-5">
            <label>اسم المكان<span class="text-danger">*</span></label>
            <input type="text" name="last_name" class="form-control" placeholder="اسم المكان"
                required>
        </div>

    <div class="mb-3 col-md-5">
  <label for="formFile" class="form-label">صورة الكرت</label>
  <input class="form-control" type="file" id="formFile">
</div>
      
  <div class="mb-3 col-md-5">
        <label> النص<span class="text-danger">*</span></label>
        <textarea name="txt" id="" cols="100" class="form-control" rows="8">نص المحتوى</textarea>
        </div>
        <div class="mb-3 col-md-5">
        <label for="formFile" class="form-label">صورة المحتوى</label>
        <input class="form-control" type="file" id="formFile">
      </div>
        <div class="mb-3 col-md-5">
            <label> عنوان <span class="text-danger">*</span></label>
            <input type="text" name="phone_number"  class="form-control" placeholder="العنوان  "
                required>
        </div>
        <hr class="featurette-divider">
        <div class="col-md-11">
            <input type="submit" class="btn btn-success float-end" name="addition" value=" اضافة">
        </div>
    </div>
</form>';
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
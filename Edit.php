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

<?php

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

}

?>
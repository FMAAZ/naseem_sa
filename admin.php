<!doctype html>
<html lang="en" dir="rtl">

<head>
  <title> الادمن</title>
  <?php require 'Niv1.php';?>  
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
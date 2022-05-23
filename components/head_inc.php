<head>
    <?php
        ob_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <!-- Bootstrap 5core CSS 5-->
    <link rel="stylesheet" href="assistances/css/bootstrap.min.css">
    <!--Style all pages-->
    <link rel="stylesheet" href="assistances/css/style.css" >
    <!-- Bootstrap 5core JS 5-->
    <script src="assistances/js/bootstrap.min.js"></script>
    <?php session_start(); ?>
    <style>
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }
    </style>
</head>
<?php
    require_once 'Niv1.php';
?>
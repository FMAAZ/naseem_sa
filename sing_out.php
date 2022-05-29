<?php
    require_once 'check_sign_in_.php';
    //
    require_once 'connect_database.php';

    $type_date = date_default_timezone_set("Asia/Riyadh");
    $date = date("Y-m-d");

    session_unset();
    header("Location: log_in.php");
?>
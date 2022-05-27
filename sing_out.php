<?php
    require_once 'check_sign_in_.php';
    //
    require_once 'connect_database.php';

    $type_date = date_default_timezone_set("Asia/Riyadh");
    $date = date("Y-m-d");

    $select_visitor_date = $connect_database->prepare('SELECT MAX(visitor_date) visitor_date FROM visitor');
    $select_visitor_date->execute();
    foreach($select_visitor_date as $print)
        {
            $_SESSION["visitor_date"] = $print["visitor_date"];
        }
    if(empty($_SESSION["visitor_date"]))
        {
            $insert_counter_visitor = $connect_database->prepare('INSERT INTO visitor VALUES ("'.$date.'" , '.$_SESSION["counter_visitor"].')');
            $insert_counter_visitor->execute();
            session_unset();
            header("Location: log_in.php");
        }
    elseif(!empty($_SESSION["visitor_date"]) && $_SESSION["visitor_date"] == ''.$date.'')
        {
            $update_counter_visitor = $connect_database->prepare('UPDATE visitor SET counter_visitor = '.$_SESSION["counter_visitor"].' WHERE visitor_date = "'.$date.'"');
            $update_counter_visitor->execute();
            session_unset();
            header("Location: log_in.php");
        }
    elseif(!empty($_SESSION["visitor_date"]) && $_SESSION["visitor_date"] != ''.$date.'')
        {
            $insert_counter_visitor = $connect_database->prepare('INSERT INTO visitor VALUES ("'.$date.'" , '.$_SESSION["counter_visitor"].')');
            $insert_counter_visitor->execute();
            session_unset();
            header("Location: log_in.php");
        }
?>
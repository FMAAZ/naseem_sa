<?php
require_once 'check_sign_in_.php';
session_unset();
header("Location: index.php");
?>
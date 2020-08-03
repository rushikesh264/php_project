<?php
    session_start();
    unset($_SESSION['userOTP']);
    unset($_SESSION['email']);
    header("Location:signup.php");
?>
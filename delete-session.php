<?php

session_start();

if(!isset($_SESSION['name'])){
    header("location:login-session.php");
}

session_destroy();

header("location:login-session.php");

// unset($_SESSION['hello_world_session']);    
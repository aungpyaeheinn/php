<?php

session_start();

if(!isset($_SESSION['name'])){
    header("location:index.php");
}

session_destroy();

header("location:index.php");

// unset($_SESSION['hello_world_session']);    
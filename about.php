<?php

session_start();

echo "about page";

echo "<br>";

if(!isset($_SESSION['name'])){
    header("location:login-session.php");
}

echo $_SESSION['name'];

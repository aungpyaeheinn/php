<?php

session_start();

echo "content page";

echo "<br>";

if(!isset($_SESSION['name'])){
    header("location:index.php");
}

echo $_SESSION['name'];

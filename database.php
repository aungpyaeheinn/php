<?php

$database = new PDO("mysql:host=localhost;dbname=test_database",'root','');

if($database){
    echo "Database Connection Successed!";
}else{
    echo "Database Connection Failed!";
}
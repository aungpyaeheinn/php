<?php

session_start();

if(isset($_POST['loginBtn'])){
    $name = $_POST['name'];
    if($name == 'aph'){
        $_SESSION['name'] = $name;
        header("location:about.php");
    } else{
        echo "Login Failed!";
    }
}

?>

<form action="" method="post">
    <input type="text" name="name">
    <button name="loginBtn">Login</button>
</form>
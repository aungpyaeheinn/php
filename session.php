<?php
session_start();

$_SESSION['test'] = 'test session';
$_SESSION['hello_world_session'] = 'hello world session';

echo $_SESSION['test'];
echo "<br>";
echo $_SESSION['hello_world_session'];
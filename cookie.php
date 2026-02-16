<?php

// setcookie('test','test cookie',time() + 86400,'/');

setcookie('test','',time() - 3600);

echo $_COOKIE['test'];
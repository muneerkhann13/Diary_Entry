<?php

# start session_cache_expire

session_start();

unset($_SESSION['username']);//delete the username key

//session_destroy();//this would delete all of the sssion

header('Location: login.php');//redirect to login.php


?>

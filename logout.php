<?php

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['login_details_id']);


header('location:index.php');


?>
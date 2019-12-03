<?php

session_start(); 
$_SESSION['user'] = ''; 
unset($_SESSION['user']); 
unset($_SESSION['erro']); 
session_destroy(); 
header('location:../views/login.php'); ?>

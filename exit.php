<?php
session_start();
session_destroy();

//unset($_COOKIE['user_id']);
//unset($_COOKIE['username']);
//setcookie('user_id', '', -3600, '/');
//setcookie('username', '', -3600, '/');
$home_url = 'http://' . $_SERVER['HTTP_HOST'];
 header('Location: ' . $home_url);
?>
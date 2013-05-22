<?php
/*************************************
Menghapus Session
**************************************/
session_start();
$cookie_username = $_SESSION['cookie_username'];
$cookie_username = $_SESSION['cookie_password'];
session_unregister("cookie_username");
session_unregister("cookie_password");
header('Location:../');
?>
<?php
ob_start();
session_start();
$OncekiURL = $_SERVER['HTTP_REFERER'];
unset($_SESSION["Admin"]);
header("Location:" . $OncekiURL);
?>

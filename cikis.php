<?php
ob_start();
session_start();
$OncekiURL = $_SERVER['HTTP_REFERER'];
session_destroy();
header("Location:" . $OncekiURL);
?>

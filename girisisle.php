<?php

include("settings/db.php");

$Email = $_POST["email"];
$Sifre = $_POST["sifre"];

if ($Email == $KullaniciEmail && md5($Sifre) == $KullaniciSifre) {
    $_SESSION["Kullanici"] = $KullaniciKAdi;
    ob_start();
    session_start();
    header("Location:index.php");
} else {
    header("Location:index.php?SS=4");
}

?>
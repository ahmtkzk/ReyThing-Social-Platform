<?php

include("settings/db.php");

$Isim = $_POST["isim"];
$SoyIsim = $_POST["soyisim"];
$Kadi = $_POST["kadi"];
$Sifre = $_POST["sifre"];
$Email = $_POST["email"];
$Gun = $_POST["gun"];
$Ay = $_POST["ay"];
$Yil = $_POST["yil"];
$DogumTarihi = $Gun . " " . $Ay . " " . $Yil;

$InsertKullanici = $Baglanti->prepare("insert into kullanicilar(isim, soyisim, kadi, sifre, email, dogumtarihi)
                                      values (?,?,?,?,?,?)");
$InsertKullanici->execute([$Isim, $SoyIsim, $Kadi, md5($Sifre), $Email, $DogumTarihi]);


?>
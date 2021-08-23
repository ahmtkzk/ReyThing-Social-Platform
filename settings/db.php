<?php

$user = "root";
$pass = "";


if(!isset($_SESSION))
{
    ob_start();
    session_start();
}

try {
    $Baglanti = new PDO("mysql:host=localhost; dbname=reything", $user, $pass);
} catch (Exception $e) {
    echo $e;
}

$SettingKisim = $Baglanti->prepare("SELECT * FROM siteayarlari");
$SettingKisim->execute();
$SettingsSay = $SettingKisim->rowCount();
$Settings = $SettingKisim->fetch(PDO::FETCH_ASSOC);

if ($SettingsSay >= 0) {
    $Title = $Settings["title"];
    $Aciklama = $Settings["aciklama"];
    $AnahtarKelimeler = $Settings["anahtarkelimeler"];
    $Yazar = $Settings["yazar"];
    $Copyright = $Settings["copyright"];
}

$KullaniciKisim = $Baglanti->prepare("SELECT * FROM kullanicilar");
$KullaniciKisim->execute();
$KullaniciSay = $KullaniciKisim->rowCount();
$Kullanici = $KullaniciKisim->fetch(PDO::FETCH_ASSOC);

if ($KullaniciSay >= 0) {
    $KullaniciIsim = $Kullanici["isim"];
    $KullaniciSoyIsim = $Kullanici["soyisim"];
    $KullaniciKAdi = $Kullanici["kadi"];
    $KullaniciSifre = $Kullanici["sifre"];
    $KullaniciEmail = $Kullanici["email"];
    $KullaniciTarih = $Kullanici["dogumtarihi"];
}


?>

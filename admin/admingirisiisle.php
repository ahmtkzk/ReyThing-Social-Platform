<?php
include("../settings/db.php");

$Kadi = $_POST["kemail"];
$Pass = $_POST["sifre"];

$GirisKontrolu = $Baglanti->prepare("select * from yetkilikullanici where email = ? and password = ?");
$GirisKontrolu->execute([$Kadi, md5($Pass)]);

if($GirisKontrolu->rowCount() == 1){
    echo "başarılı";
} else {
    echo "yanlış";
}

?>
<?php
include "settings/db.php";

$OncekiURL = $_SERVER['HTTP_REFERER'];

$Yorum = $_POST["yorum"];
$IcerikID = $_GET["IIDY"];
$KullaniciAdi = $_SESSION["Kullanici"];
$Puan = $_POST["puanver"];

$KullaniciIDCek = $Baglanti->prepare("select * from kullanicilar where kadi = ?");
$KullaniciIDCek->execute([$KullaniciAdi]);
$KullaniciBilgisi = $KullaniciIDCek->fetch(PDO::FETCH_ASSOC);


$Kid = $KullaniciBilgisi["id"];

$YorumSorgu = $Baglanti->prepare("insert into yorumlar(filmid, yorum, kullaniciadi, kullaniciid, puan) values (?,?,?,? ,?)");
$YorumSorgu->execute([$IcerikID, $Yorum, $KullaniciAdi, $Kid, $Puan]);

$FilmPuanGetir = $Baglanti->prepare("select puan from filmler where id = ?");
$FilmPuanGetir->execute([$IcerikID]);
$PuaniCek = $FilmPuanGetir->fetch(PDO::FETCH_ASSOC);
$PuanKac = $PuaniCek["puan"];

$GuncelPuan = $PuanKac + $Puan;
$IcerikGetir = $Baglanti->prepare("update filmler set puan = ? where id = ?");
$IcerikGetir->execute([$GuncelPuan, $IcerikID]);
$Icerikler = $IcerikGetir->fetch(PDO::FETCH_ASSOC);

header("Location:" . $OncekiURL);

?>

<?php
include('settings/sayfalar.php');
include('settings/db.php');
if (isset($_GET["SS"])) {
    $SayfaSayisi = $_GET["SS"];
} else {
    $SayfaSayisi = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $Title; ?></title>

    <meta name="description" content="<?php echo $Aciklama; ?>">
    <meta name="keywords" content="<?php echo $AnahtarKelimeler; ?>">
    <meta name="author" content="<?php echo $Yazar; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <script src="js/first.js"></script>
    <link href="css/ozel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lightslider.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/Jquery.js"></script>
    <script src="js/lightslider.js"></script>
    <link type="text/css" rel="stylesheet" href="css/lightslider.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/sliderConfig.js"></script>
</head>
<body>

<!-- Menü -->
<nav aria-label="Ninth navbar example" class="navbar navbar-expand-lg navbar-dark">
    <div class="container-xl">
        <a class="navbar-brand" href="index.php" id="myLogo"><b>Rey</b>Thing</a>
        <button aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"
                data-bs-target="#navbarsExample07XL" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07XL">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link" href="index.php">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?SS=1">Filmler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?SS=1">Diziler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?SS=1">Kitaplar</a>
                </li>
                <li class="nav-item">
                    <a aria-disabled="true" class="nav-link disabled" href="#" tabindex="-1">Kapalı</a>
                </li>
                <li class="nav-item dropdown">
                    <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                       id="dropdown07XL">Açılır</a>
                    <ul aria-labelledby="dropdown07XL" class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Item-1</a></li>
                        <li><a class="dropdown-item" href="#">Item-1</a></li>
                        <li><a class="dropdown-item" href="#">Item-1</a></li>
                    </ul>
                </li>
            </ul>
            <form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php
                    if (isset($_SESSION["Kullanici"])) {
                        echo $_SESSION["Kullanici"];
                        ?>

                        <a href="cikis.php">Çıkış yap</a>

                        <?php
                    } else {

                        ?>
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                     class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                     class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link" href="index.php?SS=3">Kaydol</a>
                        </li>
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link" href="index.php?SS=4">Giriş Yap</a>
                        </li>

                    <?php } ?>

                </ul>
            </form>
        </div>
    </div>
</nav>
<!-- Menü -->


<?php

if ((!$SayfaSayisi) or ($SayfaSayisi == 0) or ($SayfaSayisi == "")) {

    include($SayfaNumarasi[0]);

} else {

    include($SayfaNumarasi[$SayfaSayisi]);


}

?>


<!-- Footer -->
<div class="container-fluid ">
    <div class="row d-flex flex-wrap justify-content-between align-items-center py-5 border-top"
         style="background-color: #002436">
        <p class="col-md-4 mb-0 text-muted">&copy; 2021 ReyThing</p>

        <a href="/"
           class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none footer-size-yazi">
            <b>Rey</b>Thing
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Anasayfa</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Filmler</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Diziler</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Kitaplar</a></li>
        </ul>
    </div>
</div>
</body>
</html>


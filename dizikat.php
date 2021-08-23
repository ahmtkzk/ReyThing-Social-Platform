<?php
include("settings/db.php");

$KatSayfaSayisi = @$_GET["SayfaSayisi"] + 1;

$FilmCekSorguSay = $Baglanti->prepare("select * from diziler");
$FilmCekSorguSay->execute();
$FilmleriSay = $FilmCekSorguSay->rowCount();

$SayfaSayisi = ceil($FilmleriSay / 12);

if ($KatSayfaSayisi <= $SayfaSayisi) {
    $SorguSayisi = 12 * ($KatSayfaSayisi - 1);
}

$FilmCekSorgu = $Baglanti->prepare("select * from diziler order by id desc limit $SorguSayisi,12");
$FilmCekSorgu->execute();
$Filmler = $FilmCekSorgu->fetchAll(PDO::FETCH_ASSOC);


?>
<!-- İçerikler -->

<div class="container mt-3">
    <div class="row mb-5">
        <div class="col text-center"><h1 class="display-3">İçerikler</h1></div>
    </div>

    <!--https://www.themoviedb.org/t/p/w600_and_h900_bestv2/ZB3EBbF3HHywU7jfcwP8eDnUwn.jpg-->
    <div class="row">

        <div class="col-md-2 me-5 mt-3 position-relative">
            <nav class="nav flex-column border  bg-light mb-3">
                <a class="nav-link disabled" href="#"><h5>Kategoriler</h5>
                    <hr>
                </a>
                <a class="nav-link" href="#">Filmler</a>
                <a class="nav-link" href="#">Diziler</a>
                <a class="nav-link" href="#">Kitaplar</a>
                <a class="nav-link" href="#">Popüler</a>
                <a class="nav-link" href="#">En sevilenler</a>
            </nav>
        </div>

        <div class="col-md-9 mt-3">

            <?php foreach ($Filmler as $Rows) { ?>

                <div class="col-md-4 mb-3 float-start">
                    <a href="#" class="alt-cizgisiz">
                        <div class="card m-auto" style="width: 18rem;">
                            <img src="<?php echo $Rows["poster"]; ?>"
                                 class="card-img-top" style="height: 425px">
                            <div class="card-footer bg-light">
                                <div class="progress mt-1 mb-1">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                         aria-valuemin="0" aria-valuemax="100">25%
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item fw-bold mt-2"><h5><?php echo $Rows["diziadi"]; ?></h5></li>
                            </ul>
                        </div>
                    </a>
                </div>

            <?php } ?>

        </div>

    </div>

    <?php

    if ($KatSayfaSayisi == 1) {
        ?>
        <div class="row mt-5 mb-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item active"><a class="page-link"
                                                    href="index.php?SS=7&SayfaSayisi=<?php echo $KatSayfaSayisi; ?>"><?php echo $KatSayfaSayisi; ?></a>
                    </li>
                    <li class="page-item"><a class="page-link"
                                             href="index.php?SS=7&SayfaSayisi=<?php echo $KatSayfaSayisi; ?>"><?php echo $KatSayfaSayisi + 1; ?></a>
                    </li>
                    <li class="page-item"><a class="page-link"
                                             href="index.php?SS=7&SayfaSayisi=<?php echo $KatSayfaSayisi + 1; ?>"><?php echo $KatSayfaSayisi + 2; ?></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="index.php?SS=7&SayfaSayisi=<?php echo $SayfaSayisi -1?>">Son Sayfa</a>
                    </li>
                </ul>
            </nav>
        </div>

        <?php
    } else if ($KatSayfaSayisi < $SayfaSayisi) {

        ?>


        <div class="row mt-5 mb-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="index.php?SS=7&SayfaSayisi=<?php echo 0 ?>" tabindex="-1">İlk
                            Sayfa</a>
                    </li>

                    <li class="page-item"><a class="page-link"
                                             href="index.php?SS=7&SayfaSayisi=<?php echo $KatSayfaSayisi - 2; ?>"><?php echo $KatSayfaSayisi - 1; ?></a>
                    </li>
                    <li class="page-item active"><a class="page-link"
                                                    href="#"><?php echo $KatSayfaSayisi; ?></a>
                    </li>
                    <li class="page-item"><a class="page-link"
                                             href="index.php?SS=7&SayfaSayisi=<?php echo $KatSayfaSayisi; ?>"><?php echo $KatSayfaSayisi + 1; ?></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="index.php?SS=7&SayfaSayisi=<?php echo $SayfaSayisi - 1 ?>">Son Sayfa</a>
                    </li>
                </ul>
            </nav>
        </div>

        <?php
    } else if ($KatSayfaSayisi == $SayfaSayisi) {
        ?>

        <div class="row mt-5 mb-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="index.php?SS=7&SayfaSayisi=<?php echo 0 ?>" tabindex="-1">İlk
                            Sayfa</a>
                    </li>
                    <li class="page-item"><a class="page-link"
                                             href="index.php?SS=7&SayfaSayisi=<?php echo $KatSayfaSayisi - 3; ?>"><?php echo $KatSayfaSayisi - 2; ?></a>
                    </li>
                    <li class="page-item"><a class="page-link"
                                             href="index.php?SS=7&SayfaSayisi=<?php echo $KatSayfaSayisi - 2; ?>"><?php echo $KatSayfaSayisi - 1; ?></a>
                    </li>
                    <li class="page-item active"><a class="page-link"
                                                    href="index.php?SS=7&SayfaSayisi=<?php echo $KatSayfaSayisi; ?>"><?php echo $KatSayfaSayisi; ?></a>
                    </li>
                </ul>
            </nav>
        </div>

        <?php
    }

    ?>


</div>


<!-- İçerikler -->
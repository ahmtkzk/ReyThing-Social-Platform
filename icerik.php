<?php
include("settings/db.php");
$FilmIDGetir = $_GET["IID"];

$IcerikGetir = $Baglanti->prepare("select * from filmler where id = ?");
$IcerikGetir->execute([$FilmIDGetir]);
$Icerikler = $IcerikGetir->fetch(PDO::FETCH_ASSOC);

?>
<div class="container-fluid" style="background-color: #002436;">
    <div class="container" style="min-height: 500px;">
        <div class="row">

            <div class="col-md-4 mt-4 mb-2">
                <div class="card" style="width: 25rem; background-color: #001B29">
                    <img src="<?php echo $Icerikler["poster"]; ?>"
                         class="card-img-top" alt="...">
                    <div class="card-body beyaz-yazi">
                        <p class="card-text text-center">Buraya yazı</p>

                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-4 beyaz-yazi">
                <div class="row"><h1><?php echo $Icerikler["filmadi"]; ?></h1></div>
                <div class="row"><p class="text-muted"><?php echo $Icerikler["turler"]; ?>
                        (<?php echo substr($Icerikler["yil"], 0, 4); ?>)</p></div>
                <div class="row">
                    <p class="lead fst-italic">
                        <small><?php echo $Icerikler["tagline"]; ?></small>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="progress bg-light" style="height: 25px;">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $Icerikler["puan"]; ?>%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"><?php echo $Icerikler["puan"]; ?>%
                            </div>
                        </div>

                        <button type="button" class="btn btn-secondary mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-secondary mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-secondary mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-chat-fill" viewBox="0 0 16 16">
                                <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                            </svg>
                        </button>
                    </div>

                </div>
                <div class="row mt-3">


                </div>
                <div class="row">

                </div>
                <div class="row"><h5>Özet</h5></div>
                <div class="row"><p><?php echo $Icerikler["ozet"]; ?></p></div>
                <div class="row">
                    <div class="col-6">
                        <p class="text-muted"><b><?php echo $Icerikler["yonetmen"]; ?></b><br>Yönetmen</p>
                    </div>
                    <div class="col-6"><p class="text-muted"><b><?php echo $Icerikler["senarist"]; ?></b><br>Senarist
                        </p></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Tanıtım Bitişi-->


<div class="container">
    <div class="row mt-4">
        <p>
        <h3>Oyuncular</h3>
        <p class="lead text-muted">
            <?php echo $Icerikler["filmadi"]; ?> filminde oynayan oyuncular listelenmiştir.
        </p>
        </p>

    </div>
    <div class="row sag-kaydir flex-row flex-nowrap">


        <?php
        $metin = $Icerikler["oyuncular"];
        $OyuncuSayisi = substr_count($Icerikler["oyuncular"], ',');

        for ($say = 0; $say <= $OyuncuSayisi; $say++) {

            ?>

            <div class="col mb-3">
                <div class="card shadow-sm" style="width: 8rem;">
                    <img src="img/grey.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text fw-bold"><?php print_r(explode(",", $metin)[$say]); ?></p>
                    </div>
                </div>
            </div>

            <?php

        }

        ?>


    </div>
</div>


<div class="container mt-4">
    <hr>


    <div class="row">
        <div class="col-md-8 me-5">


            <div class="row">
                <!--Comment-->
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>

                <!--Comment-->

                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>

                    <p class="pb-3 mb-0 small lh-sm ">
                        <strong class="d-block text-gray-dark">@ahmtkzk
                            <small class="text-muted float-end">17.07.2021</small>
                        </strong>
                        Some representative placeholder content, with some information about this user. Imagine this
                        being some sort of status update, perhaps?
                    </p>
                </div>

                <hr>

                <div class="col">

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                  style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Yorum yap</label>
                    </div>

                    <button type="button" class="btn btn-outline-success mt-3 float-end">Yorum yap</button>

                </div>
            </div>


        </div>
        <div class="col-md-3">
            <ul class="list-group ">
                <li class="list-group-item border-0"><h5>Etiketler</h5></li>

                <li class="list-group-item border-0">
                    <?php
                    $metin2 = $Icerikler["etiketler"];
                    $EtiketSayisi = substr_count($Icerikler["etiketler"], ',');

                    for ($say2 = 0;
                         $say2 <= $EtiketSayisi;
                         $say2++) {

                        ?>

                        <button type="button" class="btn btn-secondary btn-sm mt-2"><?php print_r(explode(",", $metin2)[$say2]); ?></button>

                        <?php
                    }
                    ?>
                </li>
            </ul>


            <ul class="list-group mt-3 ">
                <li class="list-group-item border-0"><h5>En çok yorum yapanlar</h5></li>
                <li class="list-group-item border-0">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>
                    @ahmtkzk
                </li>
                <li class="list-group-item border-0">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>
                    @dragonknight
                </li>
                <li class="list-group-item border-0">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>
                    @50turkishliras
                </li>
                <li class="list-group-item border-0">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                         xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                         preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"/>
                        <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                    </svg>
                    @ucant
                </li>
            </ul>


        </div>
    </div>
</div>

<br><br><br>s
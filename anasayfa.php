<?php

$FilmCekSorgu = $Baglanti->prepare("select * from filmler order by id desc limit 10");
$FilmCekSorgu->execute();
$Filmler = $FilmCekSorgu->fetchAll(PDO::FETCH_ASSOC);

?>
<!--
İlk Kısım
-->
<div class="container-fluid beyaz-yazi" style="background-color: #00496E;"><br>
    <div class="container">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">ReyThing'e Hoş Geldiniz.</h1>
            <p class="col-md-8 fs-4">Filmleri, dizileri ve kitapları keşfedin, kendi listelerinizi oluşturun. Yorum
                yapın,
                puan verin.
            </p>
            <a href="index.php?SS=3"><button class="btn btn-primary btn-lg" type="button">Kaydol</button></a>
            <a href="index.php?SS=4"><button type="button" class="btn btn-outline-primary btn-lg m-2">Giriş Yap</button></a>
        </div>
    </div>
    <br>
</div>
<!--
İlk Kısım
-->

<!--
İkinci Kart Kısmı
-->
<div class="container sag-kaydir">
    <div class="row p-lg-4 mt-2"><h3>
            Yeni Eklenenler
            <small class="text-muted lead">En son eklenen filmler, diziler ve kitaplar.</small>
        </h3></div>
    <div class="col mt-3">
        <ul id="autoWidth" class="cs-hidden">

            <?php
            foreach ($Filmler as $Rows) {
            ?>
            <!--
            Bir tane slide itemi
            -->
            <li class="item-a">
                <div class="box">
                    <div class="slide-img">
                        <img src="<?php echo $Rows["poster"]?>">
                        <div class="overlay">
                            <a href="index.php?SS=2&IID=<?php echo $Rows["id"]?>" class="buy-btn alt-cizgisiz">Detaylar...</a>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $Rows["puan"]; ?>%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"><?php echo $Rows["puan"]; ?>%
                            </div>
                        </div>
                    </div>
                    <div class="detail-box bg-white">
                        <div class="type">
                            <a class="alt-cizgisiz" href=""><?php echo $Rows["filmadi"]?></a>
                            <span></span>
                        </div>
                        <a class="price alt-cizgisiz">Link</a>
                    </div>
                </div>
            </li>
            <!--
            Bir tane slide itemi
            -->
            <?php
            }
            ?>

        </ul>
    </div>
</div>
<!--
İkinci Kart Kısmı
-->


<!--
Üçüncü Ara Katman
-->
<div class="container py-4 mt-5 " style="width: 100% !important;">

    <div class="row align-items-md-stretch ">
        <div class="col-md-6 mt-3 ">
            <div class="h-100 p-5 text-white rounded-3 shadow-lg" style="background-color: #004E75">
                <h2>Tüm içeriklere eriş</h2>
                <p>Kitap, film ve dizi kategorilerindeki tüm içeriklere erişebilir, puan verebilir, yorum
                    yapabilirsin. Daha sonra içerikleri tüketmek için listenizi oluşturabilirsin.</p>
                <button class="btn btn-outline-light" type="button">Kategoriler</button>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="h-100 p-5 bg-light border rounded-3 shadow-lg">
                <h2>Profilini güncelle</h2>
                <p>Profil fotoğrafını güncelleyebilir, kullanıcıları takipe alabilir, profilinde paylaşım
                    yapabilirsin. Hemen profiline erişmek için aşağıdaki butona tıkla ve kendi profilini özelleştir.</p>
                <button class="btn btn-outline-primary" type="button">Profil</button>
            </div>
        </div>
    </div>


</div>

<!--
Üçüncü Ara Katman
-->

<!--
İkinci Slider
-->
<div class="container sag-kaydir">
    <div class="row p-lg-4 mt-2"><h3>
            Diziler
            <small class="text-muted lead">Son eklenen içerikler.</small>
        </h3></div>
    <div class="col mt-3">
        <ul id="lightSlider">
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/6PX0r5TRRU5y0jZ70y1OtbLYmoD.jpg">
                        <div class="overlay">
                            <a href="" class="buy-btn alt-cizgisiz">Detaylar...</a>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                    <div class="detail-box bg-white">
                        <div class="type">
                            <a class="alt-cizgisiz" href="">Peaky Blinders</a>
                            <span></span>
                        </div>
                        <a class="price alt-cizgisiz">Link</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/6PX0r5TRRU5y0jZ70y1OtbLYmoD.jpg">
                        <div class="overlay">
                            <a href="" class="buy-btn alt-cizgisiz">Detaylar...</a>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                    <div class="detail-box bg-white">
                        <div class="type">
                            <a class="alt-cizgisiz" href="">Peaky Blinders</a>
                            <span></span>
                        </div>
                        <a class="price alt-cizgisiz">Link</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/6PX0r5TRRU5y0jZ70y1OtbLYmoD.jpg">
                        <div class="overlay">
                            <a href="" class="buy-btn alt-cizgisiz">Detaylar...</a>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                    <div class="detail-box bg-white">
                        <div class="type">
                            <a class="alt-cizgisiz" href="">Peaky Blinders</a>
                            <span></span>
                        </div>
                        <a class="price alt-cizgisiz">Link</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/6PX0r5TRRU5y0jZ70y1OtbLYmoD.jpg">
                        <div class="overlay">
                            <a href="" class="buy-btn alt-cizgisiz">Detaylar...</a>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                    <div class="detail-box bg-white">
                        <div class="type">
                            <a class="alt-cizgisiz" href="">Peaky Blinders</a>
                            <span></span>
                        </div>
                        <a class="price alt-cizgisiz">Link</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/6PX0r5TRRU5y0jZ70y1OtbLYmoD.jpg">
                        <div class="overlay">
                            <a href="" class="buy-btn alt-cizgisiz">Detaylar...</a>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                    <div class="detail-box bg-white">
                        <div class="type">
                            <a class="alt-cizgisiz" href="">Peaky Blinders</a>
                            <span></span>
                        </div>
                        <a class="price alt-cizgisiz">Link</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/6PX0r5TRRU5y0jZ70y1OtbLYmoD.jpg">
                        <div class="overlay">
                            <a href="" class="buy-btn alt-cizgisiz">Detaylar...</a>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                    <div class="detail-box bg-white">
                        <div class="type">
                            <a class="alt-cizgisiz" href="">Peaky Blinders</a>
                            <span></span>
                        </div>
                        <a class="price alt-cizgisiz">Link</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="https://www.themoviedb.org/t/p/w220_and_h330_face/6PX0r5TRRU5y0jZ70y1OtbLYmoD.jpg">
                        <div class="overlay">
                            <a href="" class="buy-btn alt-cizgisiz">Detaylar...</a>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100">25%
                            </div>
                        </div>
                    </div>
                    <div class="detail-box bg-white">
                        <div class="type">
                            <a class="alt-cizgisiz" href="">Peaky Blinders</a>
                            <span></span>
                        </div>
                        <a class="price alt-cizgisiz">Link</a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>

<!--
İkinci Slider
-->

<!--
Dördüncü Makaleler
-->
<div class="container-fluid px-4 py-5 mt-4" id="custom-cards">
    <h2 class="pb-2 border-bottom">Son haberler</h2>


    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                 style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1615056906974-f167481eadd0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=806&q=80');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Marvel, DC'den daha mı iyi?</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill"/>
                            </svg>
                            <small>Admin</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3"/>
                            </svg>
                            <small>Bugün</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                 style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1590732488817-d34f0d6237a2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">ReyThing yeni nesil sözlük tarzı platform.</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill"/>
                            </svg>
                            <small>Admin</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3"/>
                            </svg>
                            <small>Dün</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                 style="background-size: cover; background-image: url('https://images.unsplash.com/photo-1443926818681-717d074a57af?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Üçüncü haber.</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                        <li class="me-auto">
                        </li>
                        <li class="d-flex align-items-center me-3">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#geo-fill"/>
                            </svg>
                            <small>Admin</small>
                        </li>
                        <li class="d-flex align-items-center">
                            <svg class="bi me-2" width="1em" height="1em">
                                <use xlink:href="#calendar3"/>
                            </svg>
                            <small>Dün</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
Dördüncü Makaleler
-->

<div class="container-fluid bg-light">
    <div class="position-relative overflow-hidden text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Daha kendi listeni oluşturmadın mı?</h1>
            <p class="lead fw-normal">Profiline gidip listeni düzenleyebilir, yeni bir liste oluşturabilirsin. Tek
                yapman aşağıdaki butona tıklamak.</p>
            <a class="btn btn-outline-secondary" href="#">Profilime git</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
</div>
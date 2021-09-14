<?php

if (!isset($_SESSION["Kullanici"])) {
    echo '
        <div class="container mt-4 mb-5">
            <div class="row">
                <div class="col text-center text-muted" style="height: 700px">
                    <p class="lead">Lütfen önce giriş yapınız.</p>
                </div>
            </div>
        </div>
    ';
} else {

    ?>


    <div class="container mt-4 mb-5">
        <div class="row">
            <form>
                <div class="row mb-3 mt-3">
                    <h1 class="display-6">Film ekle</h1>
                </div>

                <div class="row mb-3">
                    <label for="filmadi" class="col-sm-2 col-form-label">Film adı</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="filmadi" name="filmadi">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="yonetmen" class="col-sm-2 col-form-label">Yönetmen</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="yonetmen" name="yonetmen">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tarih" class="col-sm-2 col-form-label">Tarih</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tarih" name="tarih">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="oyuncular" class="col-sm-2 col-form-label">Oyuncular</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="oyuncular" name="oyuncular">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ozet" class="col-sm-2 col-form-label">Özet</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" id="ozet" name="ozet"
                              style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="poster" class="col-sm-2 col-form-label">Poster</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="file" class="form-control" id="poster" aria-describedby="inputGroupFileAddon04"
                                   name="poster"
                                   aria-label="Upload">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="orjinal" class="col-sm-2 col-form-label">Orjinal dil</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="orjinal" name="orjinal">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="turler" class="col-sm-2 col-form-label">Türler</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="turler" name="turler">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="etiketler" class="col-sm-2 col-form-label">Etiketler</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="etiketler" name="etiketler">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Ekle</button>
            </form>
        </div>
    </div>

    <?php

}
?>
<?php

if(isset($_SESSION["Kullanici"])){
    header("Location:index.php");
}

?>
<div class="container">
    <main>
        <div class="py-5 text-center">
            <h2>Kullanıcı Kayıt Formu</h2>
            <p class="lead">ReyThing platformuna kayıt olmak için lütfen aşağıdaki bilgileri giriniz. ReyThing'e kayıt
                olarak profilinizi özelleştirebilir, özel listeler oluşturabilirsiniz. İçerikleri puanlayabilir, yorum
                yapabilirsiniz.</p>
        </div>

        <div class="row g-5">
            <div class="col-md-9 m-auto mt-4">
                <h4 class="mb-3">Kullanıcı Bilgileri</h4>
                <form class="needs-validation" method="post" action="kayitisle.php" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">İsim</label>
                            <input type="text" class="form-control" name="isim" id="firstName" placeholder="" value=""
                                   required>
                            <div class="invalid-feedback">
                                İsim alanı zorunludur.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Soyisim</label>
                            <input type="text" class="form-control" name="soyisim" id="lastName" placeholder="" value=""
                                   required>
                            <div class="invalid-feedback">
                                Soyisim alanı zorunludur.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Kullanıcı Adı</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" name="kadi" id="username"
                                       placeholder="Kullanıcı adı"
                                       required>
                                <div class="invalid-feedback">
                                    Kullanıcı adı alanı zorunludur.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Şifre</label>
                            <input type="password" class="form-control" id="password" name="sifre" required>
                            <div class="invalid-feedback">
                                Şifre alanı zorunludur.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="isim@alan.com"
                                   required>
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="zip" class="form-label">Gün</label>
                            <input type="text" class="form-control" name="gun" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="country" class="form-label">Ay</label>
                            <select name="ay" class="form-select" id="country" required>
                                <option value="">Seçiniz...</option>
                                <option value="Ocak">Ocak</option>
                                <option value="Subat">Şubat</option>
                                <option value="Mart">Mart</option>
                                <option value="Nisan">Nisan</option>
                                <option value="Mayis">Mayıs</option>
                                <option value="Haziran">Haziran</option>
                                <option value="Temmuz">Temmuz</option>
                                <option value="Agustos">Ağustos</option>
                                <option value="Eylul">Eylül</option>
                                <option value="Ekim">Ekim</option>
                                <option value="Kasim">Kasım</option>
                                <option value="Aralik">Aralık</option>
                            </select>
                            <div class="invalid-feedback">
                                Lütfen giriniz.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="zip" class="form-label">Yıl</label>
                            <input type="text" class="form-control" name="yil" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg " type="submit">Kaydol</button>
                </form>
            </div>
        </div>
    </main>

</div>


<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

<script src="form-validation.js"></script>

<br><br>
<br><br>
<br><br>

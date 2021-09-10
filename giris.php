<?php

if (isset($_SESSION["Kullanici"])) {
    header("Location:index.php");
}

?>
<div class="container mt-5">
    <div class="col-md-6 m-auto">

        <h2 class="mb-4">Giriş yap</h2>
        <form action="girisisle.php" method="post">
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">E-Posta adresi</label>
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" name="sifre" id="floatingPassword" placeholder="Şifre">
                <label for="floatingPassword">Şifre</label>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Giriş yap</button>
            <a href="index.php?SS=3"><input type="button" class="btn btn-secondary mt-3" value="Kaydol"></a>
        </form>



    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
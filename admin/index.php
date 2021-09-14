<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/first.js"></script>
    <link href="../css/ozel.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="text-center bg-dark text-white">

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-3 m-auto mt-5   ">
            <form action="admingirisiisle.php" method="POST">
                <img class="mb-4" src="https://image.flaticon.com/icons/png/512/709/709722.png" width="100" height="100">
                <h1 class="h3 mb-3 fw-normal">Yönetici girişi</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="kemail">
                    <label for="floatingInput" class="text-dark">E-Posta adresi</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control mt-2" id="floatingPassword" placeholder="Password" name="sifre">
                    <label for="floatingPassword" class="text-dark">Şifre</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Giriş yap</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
            </form>
        </div>
    </div>
</div>


</body>
</html>

<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <a href="loggerlogin.php" class="btn btn-info">Aktivitas Login</a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Admin</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="jumbotron bg-info text-dark">
            <h1 class="display-4">Hello, sir <b><?= $_SESSION['nama_lengkap'] ?></b></h1>
            <p class="lead"> welkombek <b><?= $_SESSION['username'] ?></b> </p>
            <hr class="my-4">
            <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
        </div>
    </div>
</body>

</html>

<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username']) {
    // Pengguna sudah login
    include_once 'user_navbar.php';
} elseif(isset($_SESSION['email']) && $_SESSION['email']) {
    // Pengguna sudah login
    include_once 'user_navbar.php';
} else {
    // Pengguna belum login
    include 'navbar.php';
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container-fluid banner">
      <div class="container text-center mt-5">
        <h4 class="display-6 fw-bold text-light">Selamat Datang di Website Adesdev</h4>
        <h3 class="display-2">Silahkan lihat-lihat!</h3>
        <a href="about.php">
          <button type="button" class="btn btn-danger btn-lg">
            Selanjutnya
          </button>
        </a>
      </div>
    </div>
    <script src="appdex.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
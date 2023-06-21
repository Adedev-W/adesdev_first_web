<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['username']) {
    // Pengguna sudah login
    include 'user_navbar.php';
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
    <title>TENTANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body class="bg-dark">
    
    <div class="container-fluid banner">
      <div class="container text-center bg-dark pt-4 pb-4 rounded" style="margin-top: 2em">
        <h4 class="display-1 fw-bold border-bottom text-info border-info pb-2">TENTANG SAYA</h4>
        <div class="">
	        <h6 class="display-6 mt-5 text-info bg-info bg-opacity-10 border border-info pt-2 pb-2 rounded">Web ini adalah sebuah platform online yang menampilkan karya dan proyek web development terbaik yang pernah saya kerjakan. 
	        </h6>
            <h6 class="display-6 mt-4 text-info bg-info bg-opacity-10 border border-info pt-2 pb-2 rounded mb-5">Web ini juga memberikan gambaran tentang kemampuan dan kualitas pekerjaan saya kepada calon klien atau pengguna.
            </h6>
	        <a href="project.php">
	          <button type="button" class="btn btn-info btn-lg">
	            Selanjutnya
	          </button>
	        </a>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
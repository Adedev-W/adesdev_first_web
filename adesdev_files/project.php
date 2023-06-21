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
    <title>PROJECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="container-fluid mt-5 banner">
       <div class="bg-dark pt-3 ps-2 pe-2 rounded">
	       <h4 class="display-1 text-center fw-bold border-bottom text-info border-info pb-2">PROJECT</h4>
	       <div class="container text-center rounded pb-3">
			  <div class="row">
			    <div class="col ps-5 pe-5">
				  <div class="mt-3 pb-3 rounded">
				   <div class="card bg-info">
					  <div class="card-header">
					    Aplikasi
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Web Informasi Komoditas</h5>
					    <p class="card-text">Memberikan informasi mengenai harga komoditas di daerah Indonesia</p>
					    <a href="https://adedev-w.github.io/MyProject/webfyi/" class="btn btn-dark">Kunjungi</a>
					  </div>
				   </div>
				  </div>
			    </div>
			    <div class="col ps-5 pe-5">
				  <div class="mt-3 pb-3 rounded">
			        <div class="card bg-info">
					  <div class="card-header">
					    Aplikasi
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Web Translator Suara</h5>
					    <p class="card-text">Membantu anda untuk menerjemahkan bahasa asing melalui suara</p>
					    <a href="https://adedev-w.github.io/MyProject/voiceTs/app.html" class="btn btn-dark">Kunjungi</a>
					  </div>
				    </div>
				  </div>
			    </div>
			    <div class="col ps-5 pe-5">
			      <div class=" mt-3 pb-3 rounded">
				    <div class="card bg-info">
					  <div class="card-header">
					    Aplikasi
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Web Absensi</h5>
					    <p class="card-text">Membantu untuk melakukan absensi</p>
					    <a href="https://adedev-w.github.io/MyProject/absensi/" class="btn btn-dark">Kunjungi</a>
					  </div>
				    </div>
				  </div>
			    </div>
			    <div class="col ps-5 pe-5">
			      <div class="mt-3 pb-3 rounded">
				    <div class="card bg-info">
					  <div class="card-header">
					    Aplikasi
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Web Informasi Seragam</h5>
					    <p class="card-text">Memberikan informasi mengenai seragam hari Jum'at</p>
					    <a href="https://adedev-w.github.io/MyProject/cekSeragam/" class="btn btn-dark">Kunjungi</a>
					  </div>
				    </div>
				  </div>
			    </div>
			  </div>
		   </div>
	   <div>
		 
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>


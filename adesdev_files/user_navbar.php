<?php
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
} elseif(!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
} 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top bg-dark shadow-lg" data-bs-theme="dark">
	  <div class="container-fluid">
	    <a class="navbar-brand fw-bold text-info text-uppercase" href="#"><?php echo $_SESSION['username']; ?></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse mt-2" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active fw-bold" aria-current="page" href="index.php">HOME</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link fw-bold" href="about.php">TENTANG</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link fw-bold" href="project.php">PROJECT</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link fw-bold" href="contact.php">KONTAK</a>
	        </li>
	        <li class="nav-item btn btn-info gap-2 col-6 d-md-block">
	          <a class="nav-link fw-bold text-white" href="logout.php">LOG OUT</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  </body>
</html>
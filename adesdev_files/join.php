<?php
session_start(); 
include_once "cc.php";
/*
CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    nis VARCHAR(50) NOT NULL,
    nisn VARCHAR(50) NOT NULL,
    tahun_lulus VARCHAR(50) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
DELETE FROM users WHERE id IN (3);

*/




if (array_key_exists('submit', $_POST)) {	
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query_check = "SELECT * FROM users WHERE email = '$email';";
    
    $result = mysqli_query($conn, $query_check);
    
    if ($result) {
        if (mysqli_num_rows($result) == 1) { // cek apakah email sudah ada didalam database, jika iya user tidak bisa menginput 
            $_SESSION["error"] = true;   
            header("Location: join.php");
            exit();
        } else {
            $hash_pass = password_hash($password, PASSWORD_DEFAULT);
            $adduserr = "INSERT INTO users (nama, username, email, password) VALUES ('$name', '$username', '$email', '$hash_pass');";   
            if (mysqli_query($conn, $adduserr)) {
                $_SESSION["username"] = $username;    
                header("Location: index.php");
                exit();
            } else {
                echo "Error: " . $adduserr . "<br>" . mysqli_error($conn);
            }
        }
    } 
}

$conn->close();
?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Join Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  	<?php include('navbar.php'); ?>
  	<section class="container-fluid" style="margin-top: 4em;">
		  <div class="row justify-content-center shadow">
		    <div class="col-md-6 bg-light">
		      <form id="myForm" class="justify-content-center" method="POST">
		        <div class="pb-3 pt-3 ps-3 mt-3">
		          <h3 class="fw-bold fs-1 text-dark text-center">REGISTER</h3>
		          <div class="input-group has-validation">
					  <span class="input-group-text"><i class="bi bi-person-circle"></i></span>
					  <div class="form-floating is-invalid">
					    <input name="name" type="text" class="form-control" id="floatingInputGroup1" placeholder="Name">
					    <label for="floatingInputGroup2">Name</label>
					  </div>
					  <div class="invalid-feedback resp">
					    
					  </div>
				  </div>
		          <div class="input-group has-validation">
					  <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
					  <div class="form-floating is-invalid">
					    <input name="username" type="text" class="form-control" id="floatingInputGroup2" placeholder="Username">
					    <label for="floatingInputGroup2">Username</label>
					  </div>
					  <div class="invalid-feedback resp">
					    
					  </div>
				  </div>
		          <div class="input-group has-validation">
					  <span class="input-group-text"><i class="bi bi-envelope-at-fill"></i></span>
					  <div class="form-floating is-invalid">
					    <input name="email" type="email" class="form-control" id="floatingInputGroup3" name="email" placeholder="Username">
					    <label for="floatingInputGroup2">Email</label>
					  </div>
					  <div class="invalid-feedback resp" id="emailCheck">
					    
					  </div>
				  </div>
				  <div class="input-group has-validation">
					  <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
					  <div class="form-floating is-invalid">
					    <input name="password" type="password" class="form-control" id="floatingInputGroup4" placeholder="Username">
					    <label for="floatingInputGroup2">Password</label>
					  </div>
					  <div class="invalid-feedback resp">
					    
					  </div>
				  </div>
		          <div class="form-check mt-3">
		            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback">
		            <label class="form-check-label" for="invalidCheck3">
		              Agree to terms and conditions
		            </label>
		            <div id="invalidCheck3Feedback" class="invalid-feedback">
		              
		            </div>
		          </div>
		          <div class="text-center mt-3">
		            <input class="btn fw-bold btn-dark" id="buttun" value="REGISTER" name="submit" type="submit"></input>
		          </div>
		        </div>
		      </form>
		    </div>
		    <div class="col-md-6 d-none d-sm-block">
				<img src="banner.png" class="img-fluid h-100" alt="...">
		    </div>
		  </div>
	  </section>
	
	  <script src="error.js"></script>
	  <?php if(isset($_SESSION["error"])) { ?>
		  <?php echo "<script>checkMaill();</script>"; ?>
		  <?php unset($_SESSION["error"]); ?>
	  <?php } else { ?>  
		  <?php echo "<script>closecMail();</script>"; ?>
	  <?php } ?>
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>    
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        
  </body>
</html>
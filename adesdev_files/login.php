<?php
session_start(); 
include_once "cc.php";
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$errors = '';
if (array_key_exists('button', $_POST)) {
    $username = $_POST['email'];
    $password = $_POST['password']; 
	$user_name = mysqli_real_escape_string($conn, $username);
	$pass_word = mysqli_real_escape_string($conn, $password);
	$query = "SELECT * FROM users WHERE email = '$user_name';";
	$result = mysqli_query($conn, $query);
	if ($result) {
	    if (mysqli_num_rows($result) == 1) {     
	        $user = mysqli_fetch_assoc($result);  
	        if (password_verify($pass_word, $user['password'])) {  
                $_SESSION["email"] = $user['email'];
                $_SESSION['username'] = $user['username'];
	            header("Location: index.php");
	            exit();
	        } else {                 
	            $errors =  "Password salah"; 
	            $_SESSION["message"] = $errors;
	            header("Location: login.php");
	            exit();        
            }    
	    } else {        
	        $errors =  "Pengguna tidak ditemukan";
	        $_SESSION["message"] = $errors;
	        header("Location: login.php");
	        exit();
	    }  
	} else {
    
	   $errors =  "Kesalahan query: " . mysqli_error($conn);
	   $_SESSION["message"] = $errors;
	   header("Location: login.php");
	   exit();
   } 
   mysqli_close($conn);

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
	<?php include('navbar.php'); ?>
    <section class="login container-fluid col-md-6 max-auto" style="margin-top: 7em;"> 
    	<div class="text-center">
	    	<h3 class="text-dark-50 fs-1 fw-bold">Selamat Datang di<br>Website</h3>
        </div>
        <div class="bg-light ps-3 pb-3 pe-3 shadow-lg rounded">
        	<h4 class="fw-bold fs-5 pt-3 text-center">LOGIN</h4>
            <form method="POST">
		        <div class="form-floating mb-3">
				  <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
				  <label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating">
				  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
				  <label for="floatingPassword">Password</label>
				</div>
				<div class="d-grid gap-2 mt-2">
					<input class="btn bg-dark fs-5 shadow-lg fw-bold text-white" type="submit" name="button" value="LOGIN"></input>
				</div>
			</form>
			    
				<?php if(isset($_SESSION['message'])) { ?>
					    
				<div class="alert alert-danger d-flex justify-content-center ps-3 pe-3 mt-3 align-items-center shadow-lg " role="alert" style="height: 30px; border-radius: 5px;">
				  <i class="bi bi-exclamation-triangle-fill me-2"></i>
				  <div>  
				      <?php echo $_SESSION['message']; ?> 
                      <?php unset($_SESSION['message']); ?>
				  </div>
				</div>    
		        <?php } ?>   
		</div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

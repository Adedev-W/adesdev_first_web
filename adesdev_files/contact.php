<?php
session_start(); 
if (array_key_exists('submit', $_POST)) {
	// function mail() perlu server smtp
	/*
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
	ini_set( 'display_errors', 1 );
	error_reporting( E_ALL );
	$from = $email;
	$to = "ade200551@gmail.com";
	$subject = "Hai, saya $name";
	$message = $comments;
	$headers = "From:" . $from;
	mail($to,$subject,$message, $headers);
	header("Location: contact.php");
    exit();
    */
	
}
?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
    <section class="container-fluid col-md-6 max-auto bg-light pb-3 shadow-lg" style="margin-top: 5em;">
    	<form id="formmail" method="POST">
    	    <h2 class="fw-bold text-center pt-3">KONTAK KAMI</h2>
		    <div class="form-floating is-invalid">
			  <input type="text" class="form-control" name="name" id="floatingInputDisabled" placeholder="name@example.com">
			  <label for="floatingInputDisabled">Name</label>
			</div>
			<div class="invalid-feedback mb-3">  
                
		    </div>
			<div class="form-floating">
			  <input type="email" class="form-control" name="email" id="floatingInputDisabled" placeholder="name@example.com">
			  <label for="floatingInputDisabled">Email address</label>
			</div>
			<div class="invalid-feedback mb-3">
                 
		    </div>
			<div class="form-floating">
			  <textarea class="form-control" name="comments" placeholder="Leave a comment here" id="floatingTextarea2Disabled" style="height: 100px"></textarea>
			  <label for="floatingTextarea2Disabled">Comments</label>
			</div>
			<div class="invalid-feedback mb-3" id="commcheck">
                
		    </div>
			<div class="d-grid gap-2">
			  <input class="btn fw-bold btn-dark" name="submit" type="submit" value="KONTAK"></input>
			</div>
		</form>
    </section>
    <script src="mailresp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
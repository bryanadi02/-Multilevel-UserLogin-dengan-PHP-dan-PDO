<?php

if (isset($_POST['submit'])) {
  $secret = "YOUR_SECRET_KEY";
  $response = $_POST['g-recaptcha-response'];
  $remoteip = $_SERVER['REMOTE_ADDR'];
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
  $data = file_get_contents($url);
  $row = json_decode($data, true);

  if ($row['success'] == "true") {
    echo "<script>alert('Wow you are not a robot 😲');</script>";
  } else {
    echo "<script>alert('Oops you are a robot 😡');</script>";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Login | Bryan Adi Prakoso</title>
  
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/dist/css/floating-labels.css" rel="stylesheet">

</head>

<body style="background-color:powderblue;">
<div  class="card bg-info text-white" class="card mx-auto" style="width: 2000px;">
	<form class="form-signin" method="POST" action="cek_login.php">
		<div class="text-center mb-4">
			<h1>Laman Login</h1>
			<p>Input Username & Password  <br> 🤠🤠🤠🤠</p>
		</div>

		<div class="form-label-group">
			<input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda!"  style="color:#28F1BA" required autofocus>
			<label style="color:#28F1BA">Input Username </label>
		</div>
		
		<div class="form-label-group">
			<input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda!" style="color:#28F1BA" required>
			<label style="color:#28F1BA">Input Password </label>
		</div>

		<div class="form-label-group" >
			<select class="form-control" name="level">
				<option style="color:#FE7000" value="Pegawai">Pegawai</option>
				<option  style="color:#FE7000"value="Operator">Operator</option>
				<option style="color:#FE7000" value="Administrator">Administrator</option>
			</select>
		</div>
		
		<div class="row" style="padding:1px; margin-left:1px" >
			<div class="g-recaptcha" data-sitekey="6Le_IbIfAAAAAMf8zKoWKSk6mb-KErF4Sg8kWkvc"></div>
		</div>
	
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		
		<button class="btn btn-lg btn-dark btn-block" type="submit">Login</button><br>
		<a href="forgot.php" class="button">Lupa Password ?</a>
	</form>
</div>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
</body>
</html>
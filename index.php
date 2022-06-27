<?php
	include 'settings.php';
	session_start();
	if (isset($_SESSION['PcNKwZlg_username']) && isset($_SESSION['PcNKwZlg_password']) && $_SESSION['PcNKwZlg_username'] == settings::$USERNAME && $_SESSION['PcNKwZlg_password'] == settings::$PASSWORD) {
		header('Location: ' . settings::$ON_LOGIN_GO_TO);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/1058/1058927.svg">
</head>
<body>

	<audio id="player" autoplay="" loop="">
		<source src="NIGHTCORE - CHAIR - HVKEN X MURKISH - WASTED (JUICE WRLD).mp3" type="audio/mp3">
	</audio>
	
	
	
	
	
	<script type="text/javascript">
		window.onload=function()
	{
		var luffy=Object.create(glitch_exec);
		luffy.start(document.body);
		var context=new AudioContext();
	}
		document.addEventListener('click',musicPlay);
		function musicPlay()
	{
		document.getElementById('player').play();
		document.removeEventListener('click',musicPlay);
	}
	
	
	</script>



	<img class="wave" src="img/wave.jpg">
	<div class="container">
		<div class="img">
			<img src="img/bg.jpg">
		</div>
		<div class="login-content">
			<form action="login.php" method="POST">
				<img src="img/sdjhedfd.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>USERNAME</h5>
           		   		<input name="username" id="username" type="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>PASSWORD</h5>
           		    	<input name="password" id="password" type="password" class="input">
            	   </div>
            	</div>
            	<a href="https://t.me/+iSWtirIb8f00Yzdk">FORGOT PASSWORD?</a>
            	<input id="btn" type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
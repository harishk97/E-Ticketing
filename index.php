<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<!-- saved from url=(0106)file:///C:/Documents%20and%20Settings/Administrator/Desktop/Compressed/calm-breeze-login-screen/index.html -->
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
	border-radius: 8px;
    moz-border-radius: 8px;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 8px 4px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: white;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}


.button5:hover {
    background-color: #555555;
    color: white;
}
.button6 {
  display: inline-block;
  border-radius: 2px;
  background-color: #4CAF50;
  border: none;
  color: #555555;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button6 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button6 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button6:hover span {
  padding-right: 25px;
}

.button6:hover span:after {
  opacity: 1;
  right: 0;
}
p.small {
    font-variant: small-caps;
}
.body {
	background-image:url("C:\wamp\www\reg\4.jpg");
}


</style>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="./index_files/style.css">
</head>
<body background="4.jpg">
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p class="small">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<a href="style1.html"><button class="button button2">TICKET RESERVATION</button></a><br><br>
			<a href="transport.html"><button class="button button2">TRANSPORT</button></a><br><br>
			<a href="hotels.html"><button class="button button2">HOTELS</button></a>
			<center>
			<p> <a href="index.php?logout='1'" style="color: red;"><button class="button button6">LOGOUT</button></a> </p>
			</center>
			
		<?php endif ?>
	</div>
	
		
</body>
</html>
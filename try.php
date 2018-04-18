<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trains";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE trains SET seats=seats - 1 WHERE tno='$_POST[tno]'"; //'$_POST[seats]-1' WHERE tno='$_POST[tno]'

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<!-- saved from url=(0106)file:///C:/Documents%20and%20Settings/Administrator/Desktop/Compressed/calm-breeze-login-screen/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Confirmation</title>
  <style>
 .but {
    /*adjust the roundness*/
    border-radius: 8px;
    moz-border-radius: 8px;
    webkit-border-radius: 8px;
    /*adjust height and width*/
	 padding: 8px 16px;
    height: 32px;
    width: 150px; 
    /*change border colour*/
    border:1px #245ec6 solid;
}
.button {
    background-color: #4CAF50; /* Green */
	border-radius: 8px;
    moz-border-radius: 8px;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
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
.btn{
 background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

</style>
  
  
  
      <link rel="stylesheet" href="./index_files/style.css">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>You Are Registered Successfully!</h1><br><br>
		

	

<a href="new1.php"><button class="button button1">check the status</button></a><br><br>
<h1>NEW USER</h1>
<p> <a href="index.php?logout='1'" style="color: red;"><button class="but button1">LOGOUT</button></a></p>



</body></html>



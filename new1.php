<html>
<head>
<title>update records</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
th {
    background-color:#555555;
    color: white;
}
body {
	font-size: 120%;
	 background-image: url("4.jpg");
   background-size: 100%;
}
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
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'trains');
$sql="SELECT * FROM trains";
$records = mysqli_query($con,$sql);
?>
<table>
<tr>
<th>tno</th>
<th>tname</th>
<th>seats</th>
</tr>
<?php
while($row = mysqli_fetch_array($records)) 
{
	
echo"<tr><form action=try1.php method=post>";
echo"<td><input type=text name=tno value='".$row['tno']."'></td>";
echo"<td><input type=text name=tname value='".$row['tname']."'></td>";
echo"<td><input type=text name=seats value='".$row['seats']."'></td>";
echo"<td><input type=submit name='cancellation'>";

echo"</form></tr>";

}
?>
<p> <a href="index.php?logout='1'" style="color: red;"></a></p>
<p> <a href="index.php?logout='1'" style="color: red;"><button class="but button1">LOGOUT</button></a></p>
</body>
</html>
<html>
<head>
<title>update records</title>
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
<th>name</th>
<th>age</th>
<th>salary</th>
</tr>
<?php
while($row = mysqli_fetch_array($records)) 
{
	
echo"<tr><form action=update.php method=post>";
echo"<td><input type=text name=pname value='".$row['name']."'></td>";
echo"<td><input type=text name=age value='".$row['age']."'></td>";
echo"<td><input type=text name=salary value='".$row['salary']."'></td>";

echo"<td><input type=submit>";
echo"</form></tr>";
}
?>
</body>
</html>
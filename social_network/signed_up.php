<html>

 
<?php
session_start();
?>
<?php

$connection=mysqli_connect("localhost","root","","facebox");

$query="SELECT User FROM user4";

$result=mysqli_query($connection,$query);
$check=0;
$check1=0;

while ($row=mysqli_fetch_array($result)){
	$check1++;
	
	if ($_POST['username']==$row['User'])
{
	echo "<div align='center'><h1>Error in Entering username</h1> 
<h2> Enter another user name</h2>
</div>";
include "New Text Document.php";
echo "<head>
 <meta http-equiv='refresh' content='5;url=index2.php'>
 </head>";
break;}


else 
$check++;}//while block



if ($check1==$check)
{
	$sql2="INSERT INTO user4 (Name,Family,User,Password)
VALUES('$_POST[name]','$_POST[family]','$_POST[username]','$_POST[password]')";
mysqli_query($connection,$sql2);




$_SESSION['U_User']=$_POST['username'];
echo $_SESSION['U_User'];




echo "<h3>the name is:  </h3>";
echo $_POST['name'];
echo "<br>";
echo "<h3>the lastname is :  </h3>";
echo $_POST['family'];
echo "<br>";
echo "<h3>the username is:  </h3>";
echo $_POST['username'];

echo "<br>";
echo "<h3>the password is :  </h3>";
echo '*************************************';
echo "<br>";
echo "<div align='center'>
<h1>Successfully Signed up</h1></div>";
echo"<head>
 <meta http-equiv='refresh' content='5;url=home1.php'>
 </head>";}

?>
<body>
</body>
</html>



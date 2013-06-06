<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<?php
//include "homs2.php";



$connection=mysqli_connect("localhost","root","","facebox");
session_start();


if (isset($_POST['user_s']))
{echo $_SESSION['U_User'];
echo $_REQUEST['name_searched'];


	$query1="SELECT ID FROM user4 WHERE User='$_SESSION[U_User]'";
$result=mysqli_query($connection,$query1);
$row_of_UserS=mysqli_fetch_array($result);


$query2="SELECT ID FROM user4 WHERE User='$_REQUEST[name_searched]'";
$result2=mysqli_query($connection,$query2);
$row_of_UserR=mysqli_fetch_array($result2);

$query="INSERT INTO friend_request(ID_User_sent_fr,ID_User_recieve_fr,situation_of_fr)
VALUES('$row_of_UserS[ID]','$row_of_UserR[ID]','waiting')";
mysqli_query($connection,$query);


}

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>


<body> <form method="post" action="" >
<input type="hidden" name="user_s"  value="user_s"/>
<input name="Submit" type="submit" value="Submit" />
</form>
</body>
</html>
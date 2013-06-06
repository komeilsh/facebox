<html>
<head>
<script type="text/javascript">
function onbutton(){
  document.form1.action="profile1.php";
  document.form1.method="post";
  document.form1.submit();
  return false;
}
  
</script>


<?php
$connection=mysqli_connect("localhost","root","","facebox");
session_start();

if (isset($_POST['user_in']))
	{
		
		$query="SELECT User FROM user4";
	$query1="SELECT Password FROM user4";
	$query2="SELECT ID FROM user4";

	
	$result3=mysqli_query($connection,$query1);
	$result2=mysqli_query($connection,$query);
	$result4=mysqli_query($connection,$query2);
	

	$check1=0;
	$check=0;
	

	while ($row2=mysqli_fetch_array($result2))//USER IN DATABASE
		{$row3=mysqli_fetch_array($result3);//PASSWORD IN DATABASE
			$row4=mysqli_fetch_array($result4);//ID IN DATABASE
			

			$check1++;//CHECH1 AND CHECK ARE VARIABLES THAT CHECK USERNAME AND PASSWORD MATCHED OR NOT
		


		if ($_POST['user_in']==$row2['User'] AND $_POST['password_in']==$row3['Password'])
				{$_SESSION['U_User']=$_POST['user_in'];
				
				
   

				
				echo $_SESSION['U_User'];
		

				$query3="SELECT ID_User_sent_fr FROM friend_request WHERE ID_User_recieve_fr= '$row4[ID]'  AND situation_of_fr='waiting'";
				$result5=mysqli_query($connection,$query3);


				$row6=mysqli_fetch_array($result5);
				if ($row6!=false)
					{$counter=0;
						while ($row5=mysqli_fetch_array($result5))
						
							{
							$counter++;}
							echo"<button >"."$counter \friend request"."</button>";

					}
				else
					echo"<button >"."\ffriend "."</button>";
			
					
		

					include "home 1 s.php";}
					//echo $_POST['name_searched'];}//if in blocke

		

				else 
					


					{$check++;

					break;}
			}//while block

			
		










		 
			


	


	if ($check1==$check)
		{	echo "<div align='center'><h1>Username and Password dont match</h1> ";
		include "New Text Document.php";
		echo "<head>
 		<meta http-equiv='refresh' content='5;url=index2.php'>
 		</head>";
		}//if block


	}//if block

else 
	


	{include "home 1 s.php";

	echo $_SESSION['U_User'];
	$sql1="SELECT * FROM user4 WHERE User='$_SESSION[U_User]'";
	$result1=mysqli_query($connection,$sql1);
	$row1=mysqli_fetch_array($result1);
	

	
	


}//else block
?>


</head>
<body>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script>
function validate()
{

var a=document.getElementById("name").value;
var b=document.getElementById("family").value;
var c=document.getElementById("username").value;
var d=document.getElementById("password").value;
var e=document.getElementById("re_password").value;
var f=document.getElementById("e-mail").value;
var atpos=f.indexOf("@");
var dotpos=f.lastIndexOf(".");

if (a=="" )
	{alert("First fill the Firstname input");
return false;}
else if(b=="")
	{alert("First fill the Lastname input");
return false;}
else if (c=="")
	{alert("First fill the Username input");
return false;}
else if (d=="")
	{alert("First fill the Password input");
return false;}
else if (e=="")
	{alert("First fill the Re-Password input");
return false;}
else if (f=="")
	{alert("First fill the E-Mail input");
return false;}
else if (d!=e)
	{alert("Re-Password and Password are not equal");
return false;}
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=f.length)
	{alert("Enter the correct E-mail");
return false;}
else if (c.length<6 )
	{alert("Enter at least 6 character for Username");
return false;}
else if(d.length<6)
	{alert("Enter at least 6 character for Password");
return false;}









}
function OnButton1()
{
    document.sign_up.action = "home.php"    // First target
    document.sign_up.target = "_blank";    // Open in a iframe
    document.sign_up.submit();        // Submit the page
      // Submit the page
    return true;
}
function validate_in(){

var a=document.getElementById("user_in").value;
var b=document.getElementById("password_in").value;

if (a=="" )
{alert("Please enter username");
return false;}

else if(b=="")
{alert("Please enter password");
return false;}


}


    </script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
body {
	background-image: url(image/bg_table.jpg);
}
.style1 {font-weight: bold}
.style3 {font-size: 19px}
.style5 {
	font-size: 18;
	font-weight: bold;
	font-style: italic;
}
-->
</style></head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width='1023' border='0' align='center' bordercolor='#660000' background='image/bg_main.jpg' >
  <tr >
    <td width='903' height='362'><div align='center'>
      <table width='289' align='center' >
	  <tr>
	  <td width='118' height='103'> <p class='style10 style5'>User name:</p>
	    <p class='style10'><em><strong>Password: </strong></em></p></td>
	  <td width='159'><form action="home1.php" onsubmit="return validate_in();" method="post"><p>
	      <input name='user_in' type='text' id='user_in' size='25' maxlength='50'  />
	    </p>
	    <p>
	      <input name='password_in' type='password' id='password_in' size='25' maxlength='50'  />
	    </p><input type="submit" value="Submit"/></td>
	  </tr>
	  </table>
      <form id='form1' name='form1' method='post' action="">
        <label></label>
      </form>
      <table width='973' height='278' border='0' align='center'>
        <tr>
          <td width='533' height='274'><div align='center'><img src='image/Untitled-3 copy.jpg' alt='Social network' width='513' height='386' /></div></td>
          <td width='430'><table width='418' border='0' align='center'>
            <tr>
              <td width='120' height='297'>
                                                                                                                        <div align='left' class='style3'><strong>Name:   
                                                                                                                              <label></label>
                                                                                                                        </strong></div>
                                                                                                                        
                                                                                                                          <p><strong>Last Name: 
                                                                                                                          <label></label>
                                                                                                                          </strong></p>
                                                                                                                          <p><strong>E-mail:
                                                                                                                          <label></label>
                                                                                                                          <p><strong>User Name: 
                                                                                                                          <label></label>
                                                                                                                          </strong></p>
                                                                                                                          <p><strong>Password:                                                                                                                          </strong></p>
                                                                                                                          <p><strong>Re-Password: 
                                                                                                                          <label></label>
                                                                                                                          </strong></p>
                                                                                                                          <p><strong>Birth Date: 
                                                                                                                          <label></label>
                                                                                                                          <label></label>
                                                                                                                          <label></label>
                                                                                                                          </strong></p>
                </div>
                                                                                                                        <label></label>
                                                                                                                        <p>&nbsp;</p>           </td>
              <td width="288">

<form action='signed_up.php' onsubmit="return validate();" method='post' name='sign_up' class='style1' id='sign_up'><p>
               
                <input name='name' type='text' id='name' size='25' maxlength='50' data-provide='typeahead' />
              	
				
			  </p>
                <p>
				
                  <input name='family' type='text' id='family' size='25' maxlength='50' data-provide='typeahead' />
                </p>
                
				<p>
				<input name='e-mail' id ='e-mail'	type ='text' size='25' maxlength="25" >

				</p>
                <p>
                  <input name='username' type='text' id='username' size='25' maxlength='15' data-provide='typeahead' />
				 </p>
				
                <p>
                  <input name='password' type='password' id='password' size='25' maxlength='15' data-provide='typeahead' />
                </p>
                <p>
                  <input name='re_password' type='password' id='re_password' size='25' maxlength='15' data-provide='typeahead' style='margin: 0 auto;'/>
                </p>


                
                



			
                <p>
                  <select name='day' id='day'>
				  <option selected='selected'> day </option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                  </select>
                  <select name='month' id='month'>
				  <option selected='selected'> mon </option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                  <select name='year' id='year'>
				  <option selected='selected'> year </option>
                    <option>1340</option>
                    <option>1341</option>
                    <option>1342</option>
                    <option>1343</option>
                    <option>1344</option>
                    <option>1345</option>
                    <option>1346</option>
                    <option>1347</option>
                    <option>1348</option>
                    <option>1349</option>
                    <option>1350</option>
                    <option>1351</option>
                    <option>1352</option>
                    <option>1353</option>
                    <option>1354</option>
                    <option>1355</option>
                    <option>1356</option>
                    <option>1357</option>
                    <option>1358</option>
                    <option>1359</option>
                    <option>1360</option>
                    <option>1361</option>
                    <option>1362</option>
                    <option>1363</option>
                    <option>1364</option>
                    <option>1365</option>
                    <option>1366</option>
                    <option>1367</option>
                    <option>1368</option>
                    <option>1369</option>
                    <option>1370</option>
                    <option>1371</option>
                    <option>1372</option>
                    <option>1373</option>
                    <option>1374</option>
                    <option>1375</option>
                    <option>1376</option>
                    <option>1377</option>
                    <option>1378</option>
                    <option>1379</option>
                    <option>1380</option>
                    <option>1381</option>
                    <option>1382</option>
                    <option>1383</option>
                    <option>1384</option>
                    <option>1385</option>
                  </select>
                </p>
                <p align='center'>
               
                  <input name='Submit' type='submit'  class='style3' value='Submit' data-toggle='buttons-radio'/>
                </p></form></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div></td>
  </tr>
</table>
</body>
</html>
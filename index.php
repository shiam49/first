<html>
<head>
<title>Registration System</title>
</head>
<body>
<?php
if(isset($_POST['userName']) AND isset($_POST['passWord'])) 
{
	$un = $_POST['userName'];
	$pw = $_POST['passWord'];
	
	include'Dbmanager.php';
	$db = new Dbmanager();
	$db->OpenDb();
	$sql = "SELECT * FROM user_info WHERE user_name='$un' AND password='$pw'";
	
	$rs = mysqli_query($sql);
	if( mysqli_num_rows($rs) < 1) 
	echo 'Incorrect Password';
	//else
	//echo 'Incorrect Password';

	$db->CloseDb;
}
?>
<form action='index.php' method='POST'>
User Name : <input type='text' name='userName' value=''/>
<br/>
Password : <input type='password' name='passWord' value=''/>
<br/> <br/>
<input type='submit' value='submit' value=''/>
</form>
<a href='registration.php'> Sign Up</a>
</body>
<html>
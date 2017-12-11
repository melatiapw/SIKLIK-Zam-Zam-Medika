
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['user']) || empty($_POST['password'])) {?>
<script language="javascript">alert("Failed to login"); document.location="login.php";</script>;
<?php
}
else
{
// Define $username and $password
	$user=$_POST['user'];
	$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
	$user = stripslashes($user);
	$password = stripslashes($password);
	$user = mysqli_real_escape_string($connection,$user);
	$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
	$db = mysqli_select_db($connection, "siklikzamzam");
// SQL query to fetch information of registerd users and finds user match.
	$query = mysqli_query($connection, "select * from user where password='$password' AND username='$user'");
	$rows = mysqli_num_rows($query);
if ($rows == 1) {
	$_SESSION['login_user']=$user; // Initializing Session
	$queryline = mysqli_query($connection, "UPDATE user SET last_login = CURRENT_TIMESTAMP() WHERE username = '$user'");
?>
	<script language="javascript">alert("Success!"); document.location="index.php";</script>;
<?php
	header("location: index.php"); //Redirecting To Other Page
}else{
?>
	<script language="javascript">alert("Failed to login"); document.location="login.php";</script>;
<?php
}
mysqli_close($connection); // Closing Connection
}
}
?>

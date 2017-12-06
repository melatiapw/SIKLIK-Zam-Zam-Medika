<?php
//taro ini kalo eror cuy

/*if (!$darisql) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}*/
	$connect = mysqli_connect("localhost", "root", "", "siklikzamzam")
	or die ("Gagal koneksi ke server".mysqli_error());
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"siklikzamzam");

session_start();// Starting Session
if(isset($_SESSION['login_user'])){
// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "select * from user where username='$user_check'");
$row = mysqli_fetch_array($ses_sql);
$login_session =$row['username'];
$getuserid = $row['id_user'];
}
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
 // Redirecting To Home Page
}
?>

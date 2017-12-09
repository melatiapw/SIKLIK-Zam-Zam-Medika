<?php
include 'connect.php';

$queryline = mysqli_query($connection, "UPDATE user SET last_login = CURRENT_TIMESTAMP() WHERE username = '$user_check'");

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login.php"); // Redirecting To Home Page
}
?>
<?php
include'database.php';

$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn,"SELECT * from users where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
$uid = $row['user_id'];

if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: home.php'); // Redirecting To Home Page
}


?>
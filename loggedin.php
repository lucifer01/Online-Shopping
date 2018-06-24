<?php
include'database.php';

session_start(); // Starting Session

if (isset($_POST['submit'])) {

// Define $username and $password
$username=$_POST['uname'];
$password=$_POST['password'];

$sql = ("select * from users where password='$password' AND username='$username'");
$result = mysqli_query($conn,$sql);
$numrows = mysqli_num_rows($result);

if ($numrows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
				
			while($row = mysqli_fetch_array($result)){
				$_SESSION['uid'] = $row['id']; 
				$_SESSION['status'] = $row['status'];
			}

					echo "<script type = \"text/javascript\">";
					echo "alert(\"Succesfully Registered !\");
					window.location.href = 'home.php';";
					echo "</script>";
		}

else {
	echo "<script type = \"text/javascript\">";
					echo "alert(\"Username or password is inavalid.\")";
					echo "</script>";	
}
}

mysqli_close($conn); // Closing Connection
?>

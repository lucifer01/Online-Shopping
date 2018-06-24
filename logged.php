
<?php
include'database.php';

session_start(); // Starting Session

if (isset($_POST['submit'])) {

// Define $username and $password
$username=$_POST['uname'];
$password1=$_POST['password'];
$password=md5($password1);
$pageno=$_POST['pageno'];

$sql = ("SELECT * from users where password='$password' AND username='$username'");
$result = mysqli_query($conn,$sql);
$numrows = mysqli_num_rows($result);

if ($numrows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			

			while($row = mysqli_fetch_array($result)){
				$_SESSION['uid'] = $row['user_id']; 

			}

    
    			if($_SESSION['uid'] == 1){
                    header("location:Admin_home.php");
                }

                else{
                    echo "<script type = \"text/javascript\">";
					echo "alert(\"Succesfully Logged In .\")
					window.location.href = \"home.php\";";
					echo "</script>";	
     	       }
            }	


else {
	echo "<script type = \"text/javascript\">";
					echo "alert(\"Username or password is inavalid.\")
					window.location.href = \"home.php\";";
					echo "</script>";	
}
}


?>



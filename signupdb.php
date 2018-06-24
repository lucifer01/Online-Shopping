<?php
include 'database.php';

$user_name=$_POST['uname'];
$password=$_POST['password'];
$email=$_POST['email'];
$temp = 1;

$sql = "SELECT  username FROM users";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
			$user = $row['username'];
			if($user == $user_name)
			{
				$temp = 0;
				
			}
						}
			

if($temp == '1')
{

$sql = "INSERT INTO users (username, password, email)
VALUES ('$user_name', '$password', '$email')";


if (mysqli_query($conn, $sql)) {
    echo '<p align="center"><font face="Fontin Sans CR SC" size="7px" color="white"><b> Succesfully Registered !</b></font></p>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo'<br /><br />
<br />
<p align="center" ><a class="button" href="SignIN.php" >SignIN </a></p>';

}
else{
		echo "<script type = \"text/javascript\">";
					echo "alert(\"Username is alraedy Taken.\");
					window.location.href = 'home.php';";
					echo "</script>";					

}

mysqli_close($conn);
?>
<?php
include 'database.php';

$user_name=$_POST['uname'];
$password1=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];
$temp = 1;
$password = md5($password1);
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

$sql = "INSERT INTO users (username, password, email, address)
VALUES ('$user_name', '$password', '$email', '$address')";


if (mysqli_query($conn, $sql)) {
    echo "<script type = \"text/javascript\">";
					echo "alert(\"Succesfully Registered !\");
					window.location.href = 'home.php';";
					echo "</script>";	
} 

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}				

}
else{
		echo "<script type = \"text/javascript\">";
					echo "alert(\"Username is alraedy Taken.\");
					window.location.href = 'home.php';";
					echo "</script>";					

}

mysqli_close($conn);
?>
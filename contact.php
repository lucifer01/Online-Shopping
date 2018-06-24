<?php

include 'database.php';

$name=$_POST['name'];
$massage=$_POST['massage'];
$email=$_POST['email'];

$sql = "INSERT INTO contact_request (name, massage, email)
VALUES ('$name', '$massage', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo "<script type = \"text/javascript\">";
					echo "alert(\"Massage has been Sent!\");
					window.location.href = 'home.php';";
					echo "</script>";					


mysqli_close($conn);
?>

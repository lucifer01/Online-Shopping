<?php
include 'database.php';
include 'logged.php';

if(isset($_SESSION['login_user'])){
    $id = $_SESSION['uid']; 
  }

$user_id = $id;

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$pay_method=$_POST['optradio'];
$item_id = $_POST['i_id'];
$total = $_POST['price'];

$sql = "INSERT INTO orders (name, email, address, payment_method, user_id, item_id, Total)
VALUES ('$name', '$email', '$address', '$pay_method', '$user_id', '$item_id' , '$total')";


if (mysqli_query($conn, $sql)) {
   echo "<script type = \"text/javascript\">";
					echo "alert(\"Order Succesfully Placed !\");
					window.location.href = 'item_desc.php?item_id=$item_id';";
					echo "</script>";	
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
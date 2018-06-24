<?php

include 'database.php';

		
$title=$_POST['title'];

$tmp_name = $_FILES["image"]["tmp_name"];
$name = "img/".$_FILES['image']['name'];
$filename=$_FILES['image']['name'];

if(move_uploaded_file($tmp_name,$name))
{
	$sql = "INSERT INTO category (Title,image,img_name)
	VALUES ('$title', 'img/', '$filename')";
	
	if (mysqli_query($conn, $sql)) {
    	echo "<script type = \"text/javascript\">";
					echo "alert(\"Succesfully Added .\")
					window.location.href = \"Admin_home.php\";";
					echo "</script>";
	}
	 else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
mysqli_close($conn);
?>	

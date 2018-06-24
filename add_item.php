<?php

include 'database.php';

		
$title=$_POST['title'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$size=$_POST['size'];
$sub_category=$_POST['sub_category'];
$category=$_POST['category'];

$tmp_name = $_FILES["image"]["tmp_name"];
$name = "img/".$_FILES['image']['name'];
$filename=$_FILES['image']['name'];

if(move_uploaded_file($tmp_name,$name))
{
	$sql = "INSERT INTO t_shirts (name,brand,price,size,sub_id,category_id,image,img_name)
	VALUES ('$title', '$brand', '$price', '$size', '$sub_category', '$category', 'img/', '$filename')";
	
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

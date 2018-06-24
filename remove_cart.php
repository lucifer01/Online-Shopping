<?php
include 'database.php';

$i_id = $_GET['i_id2'];
$item_id = $_GET['item_id'];
$item_id2 = $item_id;

$sql = "DELETE FROM cart
WHERE item_id='$item_id'";

		if (mysqli_query($conn, $sql)) {
    		echo "<script type = \"text/javascript\">";
					echo "alert(\"Item Removed from Cart.\")
					window.location.href = \"item_desc.php?item_id=$i_id&i_id=$item_id2\";";
					echo "</script>";	
		} 

		else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

mysqli_close($conn);
?>
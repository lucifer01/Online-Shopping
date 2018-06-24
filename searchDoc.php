<?php
	//error_reporting(0);
	include 'database.php';
	$query = "SELECT * FROM t_shirts WHERE ";
	$flag = 0;
	if(!empty($_POST['query'])) $query = $query."name like '%".$_POST['query']."%'";
		
	/*if(!empty($_POST['type'])) 
	{
		if($_POST['type'] == 'all')
			$flag++;
		else
			$query = $query."type = '". $_POST['type'] . "' and ";
	}
	else $flag++;
	*/
	$result = mysqli_query($conn,$query);
	if($result != false)
	{
		$i = 0;
		while ($row = mysqli_fetch_array($result))
		{
			$output[$i]['fileName'] = $row['name'];
			$output[$i]['brand'] = $row['brand'];
			$output[$i]['price'] = $row['price'];
			$output[$i]['item_id'] = $row['item_id'];
			$output[$i]['image'] = $row['image'];
			$output[$i]['img_name'] = $row['img_name'];
			$i++;
		}
		echo json_encode($output);
	}
	else
		echo "Item Not Found";
	
?>
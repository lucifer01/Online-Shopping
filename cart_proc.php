<?php
include 'database.php';
include 'logged.php';


$item_id1 = $_GET['item_id'];
$item_id2 = $item_id1;

$temp = 1;

  $sql = ("SELECT * FROM t_shirts WHERE item_id='$item_id1'");
    
    $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($result);
            $name = $row['name'];
            $brand = $row['brand'];
            $price = $row['price'];
            $image = $row['image'];
            $item_id=$row['item_id'];
            $img_name = $row['img_name'];
            

  if(isset($_SESSION['login_user'])){
    $id = $_SESSION['uid']; 
    $quantity = $_GET['quan'];
    $user_id = $id;

    $sql = "SELECT item_id FROM cart WHERE user_id='$id'";

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result)){
        $item_id = $row['item_id'];

      if($item_id == $item_id1){
        $temp = 0;
      }
    }

if($temp == '1'){

$sql = "INSERT INTO cart (name, brand, price, image, img_name, item_id, user_id, quantity)
VALUES ('$name', '$brand', '$price', '$image', '$img_name', '$item_id1', '$user_id', '$quantity')";


  if (mysqli_query($conn, $sql)) {
        echo "<script type = \"text/javascript\">";
          echo "alert(\"Item Added to Cart.\")
          window.location.href = \"item_desc.php?item_id=$item_id2\";";
          echo "</script>";
  }

  else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}

else{
    echo "<script type = \"text/javascript\">";
          echo "alert(\"Item Is already Added.\")
          window.location.href = \"item_desc.php?item_id=$item_id2\";";
          echo "</script>"; 
} 

}

mysqli_close($conn);
?>

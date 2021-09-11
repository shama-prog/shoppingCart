<?php
if(isset($_POST["addToProduct"])){
	$p_id = $_POST["proId"];
	$user_id =$_POST["uid"];
	$sql = "SELECT * FROM cart WHERE p_id ='$p_id' AND user_id ='user_id'";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);
	if($count > 0){
		echo "product is already Add to the cart continue to shopping...";
	}
	else{
		$sql = "SELECT * FROM produts WHERE product_id ='$p_id'";
	    $query = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_array($query);
		$id = $row["product_id"];
		$pro_name = $row["product_title"];
	    $pro_image = $row["product_image"];
		$pro_price = $row["product_price"];
		$sql = "INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `quantity`, `price`, `total_amount`) VALUES ('NULL', '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";
		if(mysqli_query($conn, $sql)){
			echo "Added product successfully....";
		}
	}
	
	
	
}
?>
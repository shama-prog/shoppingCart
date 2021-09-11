
<?php
session_start();
include "connect.php";
if(isset($_POST["category"])){
$category_query = "SELECT * FROM category";
$query = mysqli_query($conn, $category_query);
echo "<div class='nav nav-pills nav-stacked'><li class='active'><a href='#'><h4>Categories</h4></a></li>";
if(mysqli_num_rows($query) > 0){
while($row = mysqli_fetch_array($query)){
$cid = $row["cat_id"];
$cat_name = $row["cat_title"];
echo "<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>";
}
echo "</div>";
}
}
	
	if(isset($_POST["brand"])){
$brand_query = "SELECT * FROM brand";
$query = mysqli_query($conn, $brand_query);
echo "<div class='nav nav-pills nav-stacked'><li class='active'><a href='#'><h4>Brands</h4></a></li>";
if(mysqli_num_rows($query) > 0){
while($row = mysqli_fetch_array($query)){
$bid = $row["brand_id"];
$brand_name = $row["brand_title"];
echo "<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>";
}
echo "</div>";
}
}

if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($run_query);
    $pageno = ceil($count/3);
    for($i=1; $i<=$pageno; $i++){
     echo "<li><a href='#' page='$i' id='page'>$i</a></li>";
    } 
} 
	
if(isset($_POST["getproduct"])){
	$limit = 3;
		if(isset($_POST["setPage"])){
			$pageno = $_POST["pageNumber"];
			$start = ($pageno * $limit) - $limit;
		} else {
    	$start = 0;
    }
$product_query = "SELECT * FROM products LIMIT $start,$limit";
$query = mysqli_query($conn, $product_query);
if(mysqli_num_rows($query) > 0){
while($row = mysqli_fetch_array($query)){
	$pro_id = $row['product_id'];
	$pro_cat = $row['product_cat'];
	$pr_brand = $row['product_brand'];
	$pro_title = $row['product_title'];
	$pro_price = $row['product_price'];
	$pro_image = $row['product_image'];
echo"<div class='col-md-4'><div class='panel panel-info'>
    <div class='panel-heading'>$pro_title</div>
    <div class='panel-body'><img src='images/$pro_image' style='width:200px; height:250px;'/>
	</div>
    <div class='panel-heading'>$.$pro_price.00<button pid='$pro_id'; style='float:right;' class='btn btn-danger btn-xs' id='product'>AddToCart</button>
</div>
  </div>
</div>";
			}
		}
	}
if(isset($_POST["get_selected_category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
		if(isset($_POST["get_selected_category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE product_cat = '$id'";	
		}
		else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";		
		}
	else{
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keyword LIKE '%$keyword%'";
	}
		$query = mysqli_query($conn, $sql);
		
	while($row = mysqli_fetch_array($query)){
	$pro_id = $row['product_id'];
	$pro_cat = $row['product_cat'];
	$pr_brand = $row['product_brand'];
	$pro_title = $row['product_title'];
	$pro_price = $row['product_price'];
	$pro_image = $row['product_image'];
echo"<div class='col-md-4'><div class='panel panel-info'>
    <div class='panel-heading'>$pro_title</div>
    <div class='panel-body'><img src='images/$pro_image' style='width:200px; height:250px;'/>
	</div>
<div class='panel-heading'>$.$pro_price.00
<button pid='$pro_id' style='float:right;' class='btn btn-danger btn-xs' id='product'>AddToCart</button>
</div>
  </div>
</div>";
			}
		}
		

if(isset($_POST["addToProduct"])){
	$p_id = $_POST["proId"];
	$user_id = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);
	if($count > 0){
		echo "product is already Add to the cart continue to shopping...";
	} else {
		$sql = "SELECT * FROM products WHERE product_id = '$p_id'";
	    $query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$id = $row["product_id"];
		$pro_name = $row["product_title"];
	    $pro_image = $row["product_image"];
		$pro_price = $row["product_price"];
												
											
		$sql = "INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `quantity`, `price`, `total_amount`) VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price')";
		if(mysqli_query($conn, $sql)){
			echo "<div class='alert alert-success'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Product is Added.</b>
		</div>";
		}
	}
	
	
	
}
if(isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])){
	$uid = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE user_id = '$uid'";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);
	if($count > 0){
		$no = 1;
		$total_amount = 0;
		while($row = mysqli_fetch_array($query)){
			$id =$row["id"];
		$pro_id = $row["p_id"];
		$pro_name = $row["product_title"];
		$pro_image = $row["product_image"];
			$qty = $row["quantity"];
		$pro_price = $row["price"];
			$total = $row["total_amount"];
			$price_array = array($total);
			$total_sum = array_sum($price_array);
			$total_amount = $total_amount + $total_sum;
			if(isset($_POST["get_cart_product"])){
					echo "<div class='row'>
<div class='col-md-3'>$no</div>
<div class='col-md-3'><img src='images/$pro_image' width='60px' height='50px'></div>
<div class='col-md-3'>$pro_name</div>
<div class='col-md-3'>$.$pro_price.00</div>
</div>";
	$no = $no + 1;	
			} else{
				echo "<div class='row'>
       			<div class='col-md-2'>
       				<div class='btn-group'>
       				<a href='#' remove_id='$pro_id' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></sapn></a>
       				<a href='#' update_id='$pro_id' class='btn btn-primary update'><span class='glyphicon glyphicon-ok-sign'></sapn></a>
       				</div>
       			</div>
 <div class='col-md-2'><img src='images/$pro_image' width='60px' height='60px'></div>
 <div class='col-md-2'>$pro_name</div>
<div class='col-md-2'><input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id'  value='$qty'></div>
<div class='col-md-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id'  value='$pro_price' disabled></div>
<div class='col-md-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id'  value='$total' disabled></div>
       		</div>";
			}
		
		}

		if(isset($_POST["cart_checkout"])) {

			echo "<div class='row'>
                        <div class='col-md-8'></div>
                        <div class='col-md-2'>
                              <b>Total $$total_amount</b>
                        </div>
                  </div>";

	     }
	}
	
}

if(isset($_POST["removeFromCart"]))	{

	$pid = $_POST["removeId"];
	$uid = $_SESSION["uid"];

	$sql = "DELETE FROM cart WHERE user_id = '$uid' AND p_id = '$pid'";

	$run_query = mysqli_query($conn, $sql);
	

	if($run_query) {

		echo "<div class='alert alert-danger'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<b>Product is Removed from Cart continue shopping ..!</b>
		</div>";
    }
}
	
if(isset($_POST["updateProduct"]))	{
    $uid = $_SESSION["uid"];
	$pid = $_POST["updateId"];
	$qty = $_POST["quantity"];
	$price = $_POST["price"];
	$total = $_POST["total_amount"];

	$sql = "UPDATE cart SET quantity = '$qty',price = '$price',total_amount = '$total' WHERE user_id = '$uid' AND p_id = '$pid'";

	$run_query = mysqli_query($conn, $sql);

	if($run_query) {

		echo "<div class='alert alert-success'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<b>Product is update from Cart continue shopping ..!</b>
		</div>";
    }

	}	
?>

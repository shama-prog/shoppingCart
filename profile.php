<?php 
session_start();
if(!isset($_SESSION["uid"])){
header("location:index.php");	
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src=""></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="main1.js"></script>
</head>

<body>
<div class="navbar navbar-inverse navbar-fix-top">
  <div class="container-fluid">
    <div class="navbar-header">
<a class="navbar-brand" href="#">WebSiteName</a>
</div>
<ul class="nav navbar-nav">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="#">Product</a></li>
      <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
      <li style="left:20px;top:10px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
    </ul>
<ul class="nav navbar-nav navbar-right">
      <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
<div class="dropdown-menu" style="width:400px;">
<div class="panel panel-success">
    <div class="panel-heading">
<div class="row">
<div class="col-md-3">SI.No</div>
<div class="col-md-3">Product Image</div>
<div class="col-md-3">Product Name</div>
<div class="col-md-3">Price In $.</div>
</div>
</div>
    <div class="panel-body">
    <div id="cart_product">
<!--<div class="row">
<div class="col-md-3">SI.No</div>
<div class="col-md-3">Product Image</div>
<div class="col-md-3">Product Name</div>
<div class="col-md-3">Price In $.</div>
</div>-->
   </div>
    </div>
    <div class="panel-footer"></div>
  </div>
</div>
</li>
      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
      <ul class="dropdown-menu">
      <li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
      <li class="divider"></li>
       <li><a href="#" style="text-decoration:none; color:blue;">Change Password</a></li>
        <li class="divider"></li>
        <li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
     </ul>
</li>

</ul>
  </div>
  </div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-2">
<div id="get_category">
</div>
<!--<div class="nav nav-pills nav-stacked">
<li class="active"><a href="#"><h4>Categories</h4></a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Categories</a></li>
</div> -->
<div id="get_brand">
</div>
<!--<div class="nav nav-pills nav-stacked">
<li class="active"><a href="#"><h4>Brand</h4></a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">Categories</a></li>
</div>--> 
</div>
<div class="col-md-8">
<div class="row">
<div class="col-md-12" id="product_msg">
</div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">Products</div>
    <div class="panel-body">
    <div id="get_product">
    </div>
    <!-- we request the product with jquery ajax-->
<!--<div class="col-md-4">
<div class="panel panel-info">
    <div class="panel-heading">Samsung Galaxy</div>
    <div class="panel-body"><img style="width:200px;height:250px;" src="images/galaxy.jpg"/></div>
    <div class="panel-heading">$500.00
<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
</div>
  </div>
</div>-->
   </div>
    <div class="panel-footer">& copy; 2016</div>
  </div>

</div>
<div class="col-md-1"></div>
</div>
<div class="row">
  <div class="col-md-12">
    <center>
      <ul class="pagination" id="pageno">
         <!-- <li><a href="#">1</a></li> -->
         
      </ul>
    </center>
  </div>
</div>
</div>
</body>
</html>

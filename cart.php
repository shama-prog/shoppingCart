
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
      <li class="active"><a href="profile.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="#">Product</a></li>
      </ul>
      
      </div>
      </div>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <div class="container-fluid">
            <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8" id="cart_msg">
                        <!-- Cart Message -->
                  </div>
                  <div class="col-md-2"></div>
            </div>
      <div class="row">
      <div class="col-md-2"></div>
       <div class="col-md-8">
       	<div class="panel panel-primary">
       	<div class="panel panel-heading">Cart Checkout</div>
       	<div class="panel panel-body">
       		<div class="row">
       			<div class="col-md-2"><b>Action</b></div>
       			<div class="col-md-2"><b>Product Image</b></div>
       			<div class="col-md-2"><b>Product Name</b></div>
       			<div class="col-md-2"><b>Quantity</b></div>
       			<div class="col-md-2"><b>Product Price</b></div>
       			<div class="col-md-2"><b>Price in $</b></div>
       		</div>
       		<div id="cart_checkout"></div>
       		<!--<div class="row">
       			<div class="col-md-2">
       				<div class="btn-group">
       				<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></sapn></a>
       				<a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></sapn></a>
       				</div>
       			</div>
       			<div class="col-md-2"><img src='product_images/images.jpg'></div>
       			<div class="col-md-2">Product Name</div>
       			<div class="col-md-2"><input type="text" class="form-control" value="1" disabled></div>
       			<div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
       			<div class="col-md-2"><input type="text" class="form-control" value="5000" disabled></div>
       		</div>-->
                  
       	</div>
       	<div class="panel-footer">copy right 2016</div>
       </div>
        <div class="col-md-2"></div>
      </div>
      </div>
      </body>
      </html>
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
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
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
      		<div class="col-md-8" id="signup_msg"></div>
      		<div class="col-md-2"></div>
      		</div>
      <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      	<div class="panel panel-primary">
      		<div class="panel-heading">Customer Signup Form</div>
      		<div class="panel-body">
      		<form method="post">
      		<div class="row">
      			<div class="col-md-6">
      				<label for="f_name">First Name</label>
      				<input type="text" id="f_name" name="f_name" class="form-control">
      			</div>
      			<div class="col-md-6">
      				<label for="l_name">Last Name</label>
      				<input type="text" id="l_name" name="l_name" class="form-control">
      			</div>
      		</div>
      		<div class="row">
      		<div class="col-md-12">
      				<label for="email">Email</label>
      				<input type="text" id="email" name="email" class="form-control">
      			</div>
      		</div>
      		<div class="row">
      		<div class="col-md-12">
      				<label for="password">Password</label>
      				<input type="password" id="password" name="password" class="form-control">
      			</div>
      		</div>
      		<div class="row">
      		<div class="col-md-12">
      				<label for="repassword">Re-enter Password</label>
      				<input type="password" id="repassword" name="repassword" class="form-control">
      			</div>
      		</div>
      		<div class="row">
      		<div class="col-md-12">
      				<label for="mobile">Mobile</label>
      				<input type="text" id="mobile" name="mobile" class="form-control">
      			</div>
      			</div>
      			<div class="row">
      		<div class="col-md-12">
      				<label for="address1">Address Line1</label>
      				<input type="text" id="address1" name="address1" class="form-control">
      			</div>
      		</div>
      		<div class="row">
      		<div class="col-md-12">
      				<label for="address2">Address Line2</label>
      				<input type="text" id="address2" name="address2" class="form-control">
      			</div>
      		</div>
      		<p><br/></p>
      		<div class="row">
      		<div class="col-md-12">
      				<input style="float:right" type="button" value="SignUP" id="signup_button" name="signup_button" class="btn btn-success btn-lg">
      			</div>
      		</div>
      		</form>
      		<div class="panel-footer">& copy; 2016</div>
      	</div>
      </div>
      <div class="col-md-2"></div>
      </div>
      </div>
      </body>
      </html>
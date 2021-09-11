<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
	include "connect.php";
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	
	 if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2)) {
		echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all the fields.</b>
		</div>";
		exit();
	} else {
	// check if name only contains letters and whitespace
  if(!preg_match("/^[a-zA-Z ]*$/",$f_name)) {
	  echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This $f_name is not valid.</b>
		</div>";
	  exit();
      
    }
		 if(!preg_match("/^[a-zA-Z ]*$/",$l_name)) {
	  echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This $l_name is not valid.</b>
		</div>";
		exit();
      
    }
  // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
	  echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Invalid $email format.</b>
		</div>";
		exit();
      
      }
  
	if(strlen($password) < 9){
		echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This password is weak.</b>
		</div>";
		
		exit();
	}
	if(strlen($repassword) < 9){
		echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This password is weak.</b>
		</div>";
		
		exit();
	}
	if($password != $repassword){
		echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>password is not same.</b>
		</div>";
		}
	if(!preg_match("/^[0-9]*$/",$mobile)){
		echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Mobile number $mobile is not valid.</b>
		</div>";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo "<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Mobile number must be in 10 digits.</b>
		</div>";
		exit();
	}
		$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		$count_email = mysqli_num_rows($query);
		if($count_email > 0){
			echo "<div class='alert alert-danger'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Email Address is already exist please try another email.</b>
		</div>";
		exit();
		} 
	 
	else{	
		$password = md5($password);
		$sql = "INSERT INTO `cart_db`.`user_info` 
		(`user_id`, `f_name`, `l_name`, `email`, `password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', '$password', '$mobile', '$address1', '$address2')";
		
		if (mysqli_query($conn, $sql)) {
			echo "<div class='alert alert-success'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>New record created successfully.</b>
		</div>";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
		
	}
	 }
	?>
	
</body>
</html>
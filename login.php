<?php 
include "connect.php";
session_start();
if(isset($_POST["userLogin"])){
	$email = mysqli_real_escape_string($conn, $_POST["userEmail"]);
	$password = md5($_POST["userPassword"]);
	$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);
	if($count == 1){
		$row = mysqli_fetch_array($query);
		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["name"] = $row["f_name"];
		
		echo "true2344df";
		
		}
	
}		

?>
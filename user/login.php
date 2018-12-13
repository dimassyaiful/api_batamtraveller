<?php
    include '../api_permit.php';
    include '../conn.php';
	$post = file_get_contents("php://input");
	$data = json_decode($post);
	$username = $data->col1;
	$password = $data->col2;

	$query 		= "SELECT * FROM tbl_user where username = '$username' and password = '$password' ";
	$execute 	= mysqli_query($conn,$query);
	$count		= mysqli_num_rows($execute);
	
	if($count > 0){
		echo '1';
	}else{
		echo '0';
	}
?>
<?php
    include '../api_permit.php';
    include '../conn.php';
	$post = file_get_contents("php://input");
	$data = json_decode($post);
	$col1 = $data->col1;
	$col2 = $data->col2;

	$query 		= "INSERT INTO testcrud(col1,col2) VALUES('".$col1."','".$col2."')";
	$execute 	= mysqli_query($conn,$query);
	if($execute){
		echo 1;
	}else{
		echo mysqli_error($conn);
	}
?>
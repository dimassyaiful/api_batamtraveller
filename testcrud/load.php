<?php
    include '../api_permit.php';
    include '../conn.php';

	$query 		= "select * from testcrud ORDER BY id DESC";
	$execute 	= mysqli_query($conn,$query);

	$hasil = array();
	while($row = mysqli_fetch_object($execute)){
    	$dataFromDB = array("id"=>$row->id,"col1"=>$row->col1,"col2"=>$row->col2);
		array_push($hasil, $dataFromDB); 
	}

	echo json_encode($hasil);
	// foreach ($hasil as $col1)
	// {
	//     echo $col1['col1']." - ".$col1['col2'].'<br \>';
	// }
?>

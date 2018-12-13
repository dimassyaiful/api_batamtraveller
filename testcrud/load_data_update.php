<?php
    include '../api_permit.php';
    include '../conn.php';

    $id_update = $_GET['id_update'];
	$query 		= "select * from testcrud where id='".$id_update."'";
	$execute 	= mysqli_query($conn,$query);

	$hasil = array();
	while($row = mysqli_fetch_object($execute)){
    	$dataFromDB = array("id_tempat"=>$row->id_tempat,
    		"nama_tempat"=>$row->nama_tempat,
    		"alamat"=>$row->alamat,
    		"kategori"=>$row->kategori,
    		"foto_tempat"=>$row->foto_tempat,
    		"status"=>$row->status,
    		"jam_buka"=>$row->jam_buka,
    		"jam_tutup"=>$row->jam_tutup
    	);
		array_push($hasil, $dataFromDB); 
	}

	echo json_encode($hasil);
	// foreach ($hasil as $col1)
	// {
	//     echo $col1['col1']." - ".$col1['col2'].'<br \>';
	// }
?>

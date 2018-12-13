<?php
    include '../api_permit.php';
    include '../conn.php';

    $id_tempat = file_get_contents("php://input");
    //echo $id_tempat;
	$query 		= "select * from tbl_tempat where id_tempat='".$id_tempat."'";
    //echo $query;
	$execute 	= mysqli_query($conn,$query);

	$hasil = array();
	while($row = mysqli_fetch_object($execute)){
    	$dataFromDB = array("id_tempat"=>$row->id_tempat,
    		"nama_tempat"=>$row->nama_tempat,
    		"alamat"=>$row->alamat,
    		"kategori"=>$row->kategori,
    		"foto_tempat"=>$row->foto_tempat,
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

<?php
    include '../api_permit.php';
    include '../conn.php';

    $id_tempat = file_get_contents("php://input");
    //echo $id_tempat;
	$query 		= "delete from tbl_tempat where id_tempat='".$id_tempat."'";
    //echo $query;
	$execute 	= mysqli_query($conn,$query);

	if($execute){
        echo '1';
    }else{
        echo mysqli_error($conn);
    }
?>

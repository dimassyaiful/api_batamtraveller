<?php
    include '../api_permit.php';
    include '../conn.php';
	$post = file_get_contents("php://input");
	$data = json_decode($post);

	$nama_tempat = $data->nama_tempat;
	$alamat = $data->alamat;
	$kategori = $data->kategori;
	$foto_tempat = $data->foto_tempat;
	$jam_buka = $data->jam_buka;
	$jam_tutup = $data->jam_tutup;

	/* //cek data dikirim atau tidak
	$br = " - ";
	echo $br.$nama_tempat;
	echo $br.$alamat;
	echo $br.$kategori;
	echo $br.$foto_tempat;
	echo $br.$jam_buka;
	echo $br.$jam_tutup; */

	$query 		= "INSERT INTO tbl_tempat(nama_tempat,alamat,kategori,foto_tempat,jam_buka,jam_tutup) VALUES('".$nama_tempat."','".$alamat."','".$kategori."','".$foto_tempat."','".$jam_buka."','".$jam_tutup."')";
	$execute 	= mysqli_query($conn,$query);
	if($execute){
		echo '1';
	}else{
		echo mysqli_error($conn);
	}
?>
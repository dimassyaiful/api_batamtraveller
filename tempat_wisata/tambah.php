<?php
    include '../api_permit.php';
    include '../conn.php';
	$post = file_get_contents("php://input");
	$data = json_decode($post);

	$nama_tempat = $data->nama_tempat;
	$alamat = $data->alamat;
	$kategori = $data->kategori;
	
	if($kategori == 'Pantai'){
		$foto_tempat = 'pantai.jpg';
	}elseif($kategori == 'Wisata Alam'){
		$foto_tempat = 'alam.jpg';
	}elseif($kategori == 'Budaya dan Sejarah'){
		$foto_tempat = 'budaya.jpg';
	}elseif($kategori == 'Museum'){
		$foto_tempat = 'museum.jpg';
	}elseif($kategori == 'Taman Hiburan'){
		$foto_tempat = 'taman.jpg';
	}elseif($kategori == 'Wisata Minat Khusus'){
		$foto_tempat = 'minat.jpg';
	}elseif($kategori == 'Restoran'){
		$foto_tempat = 'restoran.jpg';
	}else{
		$foto_tempat = 'lainya.jpg';
	}

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
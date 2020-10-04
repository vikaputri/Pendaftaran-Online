<?php

include("config.php");

if(isset($_POST['daftar'])){
	$jurusan = $_POST['jurusan'];
	$nama = $_POST['nama'];
	$jekel = $_POST['jekel'];
    $ttl = $_POST['ttl'];
	$agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
	$telepon = $_POST['telepon'];
	$un = $_POST['un'];

	$sql = "INSERT INTO siswa (jurusan, nama, jekel, ttl, agama, alamat, telepon, un) VALUE ('$jurusan','$nama', '$jekel', '$ttl', '$agama', '$alamat', '$telepon', '$un')";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: form.php?status=sukses');
	} else {
		header('Location: form.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>

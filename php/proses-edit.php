<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
    $nama = $_POST['nama'];
    $nama_lengkap = $_POST['nama_lengkap'];
	$alamat = $_POST['alamat'];
	$institusi = $_POST['institusi'];
	
	// buat query update
	$sql = "UPDATE siswa SET nama_lengkap='$nama_lengkap', nama='$nama', alamat='$alamat', institusi='$institusi'  WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: list-siswa.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
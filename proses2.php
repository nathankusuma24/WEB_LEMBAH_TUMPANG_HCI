<?php
//Include file koneksi ke database
include 'koneksi.php';

//menerima nilai dari kiriman form pendaftaran
$nama = $_POST['nama'];
$email = $_POST['email']; //menampung data yang dikirim dari input username
$password = $_POST['password']; //menampung data yang dikirim dari input password



//Query input menginput data kedalam tabel anggota
  $sql="insert into customer (nama,email,password) values
		('$nama','$email','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header("location:sukses.php"); 
  }
else {
  // alert("Gagal simpan Data");
	exit;
}  

?>
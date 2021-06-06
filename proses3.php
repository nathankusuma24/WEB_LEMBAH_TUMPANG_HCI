<?php
session_start();
//Include file koneksi ke database
include 'koneksi.php';

//menerima nilai dari kiriman form pendaftaran
$id_user=$_SESSION['id'];
$nama=$_GET['nama'];
$email=$_GET['email'];
$tanggal_tiket = $_GET['tanggaltiket'];
$jumlah_tiket_dewasa = $_GET['tiketdewasa']; 
$jumlah_tiket_anak_anak = $_GET['tiketanak']; 
$total_harga_tiket_dewasa= $_GET['hargadewasa']; 
$total_harga_tiket_anak_anak= $_GET['hargaanak'];
$total_harga = $_GET['total'];




//Query input meginput data kedalam tabel anggota
  $sql="INSERT INTO data_customer VALUES (NULL, $id_user,'$tanggal_tiket',$jumlah_tiket_dewasa,$jumlah_tiket_anak_anak,$total_harga_tiket_dewasa,$total_harga_tiket_anak_anak,$total_harga)";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);
    require_once('phpmailer.php');

    $to       = "$email";
    $subject  = 'Your Recepient';
    $message  =  " Nama Pemesan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;$nama<br>
                  Tanggal Pemesanan&nbsp;:&nbsp;$tanggal_tiket<br>
                  Tiket Dewasa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;$jumlah_tiket_dewasa pcs  X Rp.20.000 = Rp.&nbsp;$total_harga_tiket_dewasa,00<br>
                  Tiket Anak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;$jumlah_tiket_anak_anak pcs X Rp.30.000 = Rp.$total_harga_tiket_anak_anak,00<br>
                  Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= Rp.$total_harga,00
                    ";
   smtp_mail($to, $subject, $message,  0, 0, true);

//Kondisi apakah berhasil atau tidak
  if ($hasil){  
 
  // mail($email,$subyek,$header); 

	header("location:selesai.php"); 
  
  // echo $tanggal_tiket;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>
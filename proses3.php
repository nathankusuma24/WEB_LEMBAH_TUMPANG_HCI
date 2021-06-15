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
    // require_once('phpmailer.php');
$email_from = 'noreply@lembahtumpang.xyz';


    $to       = "$email";
    $subject  = 'Your Recepient';
    $message  =  "Nama Pemesan: $nama.\n".
                    "Tanggal Pemesanan: $tanggal_tiket.\n".
                    "Tiket Dewasa:$jumlah_tiket_dewasa pcs  X Rp.20.000 = Rp.$total_harga_tiket_dewasa,00.\n".
                    "Tiket Anak     : $jumlah_tiket_anak_anak pcs X Rp.30.000 = Rp.$total_harga_tiket_anak_anak,00.\n".
                    "Total                                    = Rp.$total_harga,00.\n";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";



//Kondisi apakah berhasil atau tidak
  if ($hasil){  
 mail($to,$subject,$message,$headers);


	header("location:selesai.php"); 
  
  // echo $tanggal_tiket;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>

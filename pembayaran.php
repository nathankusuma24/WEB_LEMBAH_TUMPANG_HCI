<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="image/logo1.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Home</title>
    <link rel="stylesheet" href="css/pembayaran.css" />
</head>


<body>
<nav class="sticky">
            <div class="logo">
            <a href="index.php"><img src="image/Logo.png" width="110px" /></a>
            </div>

            <ul>
                <li class="btn btn-left">
                    <a href="index.php"><i class="fas fa-home"></i> Home </a>
                </li>
                <li class="btn btn-left">
                    <a href="about.php"><i class="fas fa-book"></i> About </a>
                </li>
                <li class="btn btn-left">
                    <a href="Facilities.php"><i class="fas fa-campground"></i> Facilities </a>
                </li>
                <li class="btn btn-left">
                    <a href="gallery.php"><i class="far fa-images"></i> Gallery </a>
                </li>
                <li class="btn btn-left">
                    <a href="event.php"><i class="far fa-calendar"></i> Event </a>
                </li>
                <li class="btn btn-left">
                    <a href="news.php"><i class="far fa-newspaper"></i> News </a>
                </li>
                <li class="btn btn-left">
                    <a href="eatanddrink.php"><i class="fas fa-utensils"></i> Eat and Food </a>
                </li>
                        <li class="login">
                        <?php 
                            if (isset($_SESSION["id"])) {              
                            echo "<a href='logout.php'>Log Out</a>";
                            }
                            else {
                            echo "<a href='signup.php'>Sign In</a>";
                            }
                            ?>
                        </li>
            </ul>
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    <center>
        <br /><br /><br />
        <div class="box1">
            <br />
            <h3>Pembayaran</h3>
        </div>
    </center>
    
    <section class="box">
    <?php  
    $nama=$_SESSION['nama'];
    $email=$_SESSION['email'];
    $tanggaltiket=$_POST['tanggaltiket'];
    $newDate = date("d-m-Y", strtotime($tanggaltiket));  
    $tiketanak=$_POST['tiketanak'];
    $tiketdewasa=$_POST['tiketdewasa'];
    $hargaanak=$tiketanak * 20000;
    $hargadewasa=$tiketdewasa * 30000;
    $total=$hargaanak+$hargadewasa;
    $_POST['hargaanak']=$hargaanak;
    $_POST['hargadewasa']=$hargaanak;
    $_POST['total']=$total;
     ?>

   
        <table border="0">
            <tr>
                <td class="td1">
                    Tanggal Tiket
                </td>
                <td>
                :<?php echo $newDate; ?>
                </td>
            </tr>
            <tr>
                <td class="td1">
                    Tiket dewasa
                </td>
                <td>
                    :<?php echo $tiketdewasa; ?> pcs X Rp. 30.000,00
                </td>
                <td>
                    =<?php echo "Rp. ".number_format($hargadewasa); ?>,00
                </td>
            </tr>
            <tr>
                <td class="td1">
                    Tiket anak-anak
                </td>
                <td>
                    :<?php echo $tiketanak; ?> pcs X Rp. 20.000,00
                </td>
                <td>
                    =<?php echo "Rp. ".number_format($hargaanak); ?>,00
                </td>
            </tr>
            <tr>
                <td class="td1">
                    Total
                </td>
                <td>
                </td>
                <td>
                    =<?php echo "Rp. ".number_format($total); ?>,00
                </td>
            </tr>
        </table> 
        <br>
        <center>
        <a href="proses3.php?tanggaltiket=<?=$tanggaltiket?>&tiketdewasa=<?=$tiketdewasa?>&tiketanak=<?=$tiketanak?>&hargadewasa=<?=$hargadewasa?>&hargaanak=<?=$hargaanak?>&total=<?=$total?>&nama=<?=$nama?>&email=<?=$email?>" class="tombol1">BAYAR</a>
     </center>

    </section>
    <script src="script.js"></script>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    <center>
        <br />
        <br />
        <footer>Copyright&copy; 2021 - Lembah Tumpang. All Rights Reserved.</footer>
    </center>
   
</body>

</html>
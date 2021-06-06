<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="image/logo1.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="css/news.css" rel="stylesheet" />
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
        <br /><br /><br><br><br>
        <h1>News And Activities</h1>
        <br />
       
    </center>

    <section class="container">
        <div class="info">
            <h1>Acara Sarahsehan Ibu Camat Se-Kabupaten Malang</h1>
            <p>Pada tanggal 23 Febuari 2021, diadakan acara sarasehan yang dihadiri oleh para Ibu Camat se Kabupaten Malang di Lembah Tumpang.</p>
            <a href="#kontak"><button class="btn2">Contact and plan your event</button></a>
        </div>     
        <div class="image">
            <img src="image/news1.jpg" alt="" />
        </div>
    </section>

    <section class="container">
        <div class="image">
            <img src="image/news2.jpg" alt="" />
        </div>
        <div class="info">
            <h1>Pertemuan HIMPAUID Kecamatan Tumpang</h1>
            <p>HIMPAUDI (Himpunan Pendidikan dan Tenaga Kependidikan Anak Usia Dini Indonesia) Kecamatan Tumpang Kabupaten Malang mengadakan pertemuan di Lembah Tumpang pada hari Selasa, tanggal 23 Februari 2021.</p>
            <a href="#kontak"><button class="btn2">Contact and plan your event</button></a>
        </div>
    </section>

    <section class="container">
        <div class="info">
            <h1>Fullday Outbond BPLP Brawijaya Malang</h1>
            <p>Balai Pusat Latihan Perhotelan (BPLP) Brawijaya Malang pada tanggal 13 Januari 2021 mengadakan Full Day Outbound di Lembah Tumpang yang dihadiri oleh para mahasiswa angkatan pertama BPLP Brawijaya. Outbound ini dilakukan sebelum mahasiswa mulai bekerja ke hotel berbintang di Surabaya.</p>
            <a href="#kontak"><button class="btn2">Contact and plan your event</button></a>        
        </div>
        <div class="image">
            <img src="image/news3.jpg" alt="" />
        </div>
    </section>

    <section class="container">
        <div class="image">
            <img src="image/news4.jpg" alt="" />
        </div>
        <div class="info">
            <h1>Barbeque dan Candle Light Dinner di Lembah Tumpang</h1>
            <p>Waktu romantis anda dengan orang terkasih atau dengan kerabat sambil menikmati waktu malam di Lembah Tumpang. Nikmati hidangan lezat kami dan paket Barbeque dengan bahan baku yang berkualitas khusus untuk anda. Dapatkan diskon spesial untuk tiket masuk ke Lembah Tumpang khusus untuk reservasi paket Barbeque kami. </p>
            <a href="#kontak"><button class="btn2">Contact and plan your event</button></a>        
        </div>
    </section>

    <section class="container">
        <div class="info">
            <h1>Penginapan Di Lembah Tumpang</h1>
            <p>Nikmati suasana indahnya pemandangan di Wisata Lembah Tumpang ketika matahari terbit atau jelajahi tempat-tempat terbaik sambil bersantai saat matahari terbenam bersama keluarga dan orang-orang terkasih anda dengan menginap di penginapan kami. Segera reservasi untuk hilangkan penat dan ciptakan momen anda yang tak terlupakan di Lembah Tumpang.</p>
            <a href="#kontak"><button class="btn2">Contact and plan your event</button></a>
        </div>
        <div class="image">
            <img src="image/news5.jpg" alt="" />
        </div>
    </section>

    <section class="peta">
        <center>
            <p>Our Location</p>
            <br />
            <br>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0443482139804!2d112.7358395138387!3d-7.9943573942426065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62f5fc449cb59%3A0x6b91d024b877e708!2sLembah%20Tumpang%20Resort!5e0!3m2!1sen!2sid!4v1622276228816!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>"
            </div>
        </center>
    </section>

    <section id="kontak">
        <ul>
            <li>

                <h3>Our Address</h3>
                <br>
                <h4>Jl. Slamet Gg. Gumuk Agung Slamet, Kec. Tumpang Malang - Jawa Timur</h4>
                <br><br>
            </li>
            <li>
                <h3>Contact Us</h3>
                <br><a href="https://www.instagram.com/lembah_tumpang/?hl=id" target=_blank><i class="fab fa-instagram"> @lembah_tumpang </i></a><br><br>
                <a href="https://www.facebook.com/LembahTumpangResort" target=_blank><i class="fab fa-facebook"> LembahTumpangResort </i></a><br><br>
                <i class="fab fa-whatsapp"></i> <a href="https://wa.me/+62811320700" target=_blank><b>Wahyu +62811320700</b></a> <br><br>
                <i class="fab fa-whatsapp"></i> <a href="https://wa.me/+6281555877770" target=_blank><b>BBQ Dhika +6281555877770</b></a><br><br>
            </li>
        </ul>
    </section>
        <script src="script.js"></script>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    </body>
    <br /><br /><br />

    <footer>Copyright&copy; 2021 - Lembah Tumpang. All Rights Reserved.</footer>




    </html>
<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="image/logo1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Facilities</title>
    <link rel="stylesheet" href="css/Facilities.css" />
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

    <div class="container1">
        <div class="image1">
            <img src="image/bg1.jpg">
        </div>
        <div class="info1">
            <p class="title"><b>Facilities at Lembah Tumpang</b></p>
            <p class="text">Berbagai fasilitas terbaik yang siap memanjakan anda dan keluarga anda dalam menikmati setiap momen terbaik dengan beberapa fasilitas yang kami tawarkan di lembah tumpang ini.</p>
            <a href="#kontak"><button class="btn2">Contact and plan your event</button></a>
        </div>
    </div>

    <div class="container2">
        <div class="info2">
            <p class="title"><b>Convention hall and Gazebo</b></h2>
            <p class="text">Kami menyediakan Convention Hall dan gazebo untuk bersantai dan menikmati aneka ragam candi yang terdapat di lembah tumpang, candi terbsebut diantaranya Pendopo Sagita, Pendopo Arya Dita, dan pendopo Sananta 1 dan Sananta 2. </p>
            <a href="#kontak"><button class="btn2">Contact and plan your event</button></a>
        </div>
        <div class="image2">
            <img src="image/bg2.jpg">
        </div>
    </div>

    <div class="container3">
        <div class="image3">
            <img src="image/bg3.jpg">
        </div>
        <div class="info3">
            <h2 class="title">Play and Leisure</h2>
            <p class="text">Tidak Hanya bersantai, dalam Wisata Lembah Tumpang ini juga menyediakan fasilitas untuk bermain</p>
            <a href="#kontak"><button class="btn2">Contact and plan your event</button></a>
        </div>
    </div>
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
</body>
<script src="script.js"></script>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
<footer>Copyright&copy; 2021 - Lembah Tumpang. All Rights Reserved.</footer>
<!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src="java.js"></script> -->

</html>
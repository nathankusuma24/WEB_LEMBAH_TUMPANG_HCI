<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery</title>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="image/logo1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/b625fb2999.js" crossorigin="anonymous"></script>
    <script>
        function parking() {
            document
                .getElementById("peta")
                .setAttribute(
                    "src",
                    "https://www.google.com/maps/embed?pb=!4v1617257354775!6m8!1m7!1sCAoSLEFGMVFpcFBPdDZ6WnJ0eUN1SmJPeVcyTzFsakJpcEVQeUM0dnpXUDM1Mi1a!2m2!1d-7.9961667!2d112.7390747!3f303.3868620576468!4f-5.470910575391784!5f0.7820865974627469"
                );
        }

        function swimming() {
            document
                .getElementById("peta")
                .setAttribute(
                    "src",
                    "https://www.google.com/maps/embed?pb=!4v1617259909564!6m8!1m7!1sCAoSLEFGMVFpcFBUVExlclA1MU80aDlBRzR4VnZSVHA0dUpoSC12dnZLQ1drOGJi!2m2!1d-7.9945545!2d112.7379986!3f239.3232115272972!4f-12.13253692333241!5f0.7820865974627469"
                );
        }

        function utensil() {
            document
                .getElementById("peta")
                .setAttribute(
                    "src",
                    "https://www.google.com/maps/embed?pb=!4v1617260099991!6m8!1m7!1sCAoSLEFGMVFpcE54dDRRbTdWakdpbXhiWnRxdzVjWjZTTzd4dmFVdlBsTGJDRDFk!2m2!1d-7.994357399999998!2d112.7380282!3f275.76787713697087!4f-5.883495835072665!5f0.7820865974627469"
                );
        }

        function gopuram() {
            document
                .getElementById("peta")
                .setAttribute(
                    "src",
                    "https://www.google.com/maps/embed?pb=!4v1617366961621!6m8!1m7!1sCAoSLEFGMVFpcE5TMld3dXdJVG12WEo2d1lBOWhmR1BuT1R2R2FMWnE4d29XbzRW!2m2!1d-7.994872399999999!2d112.7388356!3f105.92928940209518!4f-8.994316470314686!5f0.7820865974627469"
                );
        }

        function sign() {
            document
                .getElementById("peta")
                .setAttribute(
                    "src",
                    "https://www.google.com/maps/embed?pb=!4v1617260300542!6m8!1m7!1sCAoSLEFGMVFpcE05dmdTYndKdFFnQnBUaFpJQVZhS1FHLVdKc2toUDZMOGw2d2xf!2m2!1d-7.9969789!2d112.7398561!3f42.43928449061568!4f-5.7394624611901435!5f0.7820865974627469"
                );
        }
    </script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
    <link href="css/gallery.css" rel="stylesheet" />
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
    <br><br><br><br>
    <center>
      <div class="title">
        <h1>360° View</h1>
        <br><br>
    </div>  
    </center>
    
    <div class="vr">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1617257354775!6m8!1m7!1sCAoSLEFGMVFpcFBPdDZ6WnJ0eUN1SmJPeVcyTzFsakJpcEVQeUM0dnpXUDM1Mi1a!2m2!1d-7.9961667!2d112.7390747!3f303.3868620576468!4f-5.470910575391784!5f0.7820865974627469" width="600" height="450"
                style="border: 0" allowfullscreen="" loading="lazy" id="peta" ;></iframe>
        <ul>
            <li onclick="parking()"><i class="fas fa-parking"></i></li>
            <li onclick="swimming()"><i class="fas fa-swimming-pool"></i></li>
            <li onclick="utensil()"><i class="fas fa-utensils"></i></li>
            <li onclick="gopuram()"><i class="fas fa-gopuram"></i></li>
            <li onclick="sign()"><i class="fas fa-map-signs"></i></li>
        </ul>
    </div>
 <center>
     <section class="foto">
            <br>
            <h1> Our Gallery</h1>
        </section>
 </center>
        

        <section class="galery">
            <div class="gallery">
                <a target="_blank" href="image/image1.jpg">
                    <img src="image/image1.jpg" alt="">
                </a>

            </div>

            <div class="gallery">
                <a target="_blank" href="image/image2.jpg">
                    <img src="image/image2.jpg" alt="">
                </a>

            </div>

            <div class="gallery">
                <a target="_blank" href="image/image3.jpg">
                    <img src="image/image3.jpg" alt="">
                </a>

            </div>

            <div class="gallery">
                <a target="_blank" href="image/image8.jpg">
                    <img src="image/image8.jpg" alt="">
                </a>

            </div>
            <div class="gallery">
                <a target="_blank" href="image/image5.jpg">
                    <img src="image/image5.jpg" alt="">
                </a>

            </div>
            <div class="gallery">
                <a target="_blank" href="image/image6.jpg">
                    <img src="image/image6.jpg" alt="">
                </a>

            </div>
            <div class="gallery">
                <a target="_blank" href="image/image7.jpg">
                    <img src="image/image7.jpg" alt="">
                </a>

            </div>
            <div class="gallery">
                <a target="_blank" href="image/image3.jpg">
                    <img src="image/image13.jpg" alt="">
                </a>

            </div>
            <div class="gallery">
                <a target="_blank" href="image/image10.jpg">
                    <img src="image/image10.jpg" alt="">
                </a>
            </div>
            <div class="gallery">
                <a target="_blank" href="image/image9.jpg">
                    <img src="image/image9.jpg" alt="">
                </a>
            </div>
            <div class="gallery">
                <a target="_blank" href="image/image11.jpg">
                    <img src="image/image11.jpg" alt="">
                </a>
            </div>
            <div class="gallery">
                <a target="_blank" href="image/image12.jpg">
                    <img src="image/image12.jpg" alt="">
                </a>
            </div>
        </section>
    </center>

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
</div>

</body>

<script src="script.js"></script>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
<footer>Copyright&copy; 2021 - Lembah Tumpang. All Rights Reserved.</footer>

</html>
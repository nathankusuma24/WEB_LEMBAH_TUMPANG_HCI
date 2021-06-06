<?php 
  session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="image/logo1.png" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <title>Home</title>
        <link rel="stylesheet" href="css/signup.css" />
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
        <!-- banner -->
        <?php 
        if(isset($_GET['pesan']))
            {
            if($_GET['pesan'] == "gagal")
            {
                echo "<div class='alert alert-danger'>Gagal Login karena Username atau Password Salah</div>";
            }
            else if($_GET['pesan'] == "logout")
            {
                echo "<div class='alert alert-success'>Anda Berhasil Logout dari Sistem</div>";
            }else if($_GET['pesan'] == "belum_login")
            {
                echo "<div class='alert alert-warning'>Anda Belum Melakukan Login ke dalam Sistem</div>";
            }
        }
        ?>
    <!-- Content -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post" action="proses2.php" >
                <h1>Sign Up</h1>
                <input type="nama" name="nama" id="nama" placeholder="Name" required/>
                <input type="email" name="email" id="email" placeholder="Email" required/>
                <input type="password" name="password" id="password"  placeholder="Password"required />
                <br><br>
                <button name="submit" id="submit" class="btn2">Sign up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="post" action="proses.php">
                <h1>Sign In</h1>
                <input name="email"type="email" placeholder="Email" required />
                <input name="password"type="password" placeholder="Password"required />
                <br><br>
                <button type="submit" class="btn2">Sign in</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    
</body>
        <script src="script.js"></script>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    </body>
    <br /><br /><br />


    <script type="text/javascript" src="try.js"></script>
    <footer>Copyright&copy; 2021 - Lembah Tumpang. All Rights Reserved.</footer>




    </html>
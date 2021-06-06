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
        <link rel="stylesheet" href="css/dashboard.css" />
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
    <h1>Welcome <?=$_SESSION['nama'] ?></h1>
  <center>
    <div class="box3">
      <br>
      Pemesanan Tiket
    </div>    
  </center>

  <center>
    <section class="box">
      <div class="table">
      <p>
        Jadwal Buka
      </p>
      <table>
        <tr>
          <td>
            Jam Buka
          </td>
          <td>
            : Senin - Jumat
          </td>
          <td>
            : 08.00 - 17.00
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            : Sabtu - Minggu
          </td>
          <td>
            : 06.00 - 17.00
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td>
            Tiket Dewasa
          </td>
          <td>
            : IDR 30.000 / Orang
          </td>
        </tr>
        <tr>
          <td>
            Tiket Anak Anak
          </td>
          <td>
            : IDR 20.000 / Orang
          </td>
        </tr>
      </table>
      </div>

      <div class="box2">
      <form method="post" action="pembayaran.php" onsubmit="return validasi();">
        <table>
          <tr>
            <td class="td1">
            <label for="user-lahir">  Tanggal</label>
            </td>
            <td class="td2">
              <input name="tanggaltiket" class="form-content" type="date"  required />
            </td>
          </tr>
          <tr>
            <td class="td1">
              Tiket Dewasa
            </td>
            <td class="td2">
              <input type="button" value="-" onclick="kurang()" class="tombol"/>
              <input id="number" value="0" onkeyup="validate()"  name="tiketdewasa"class="angka" >
              <input type="button" value="+" onclick="tambah()" class="tombol" />
            </td>
          </tr>
          <tr>
            <td class="td1">
              Tiket Anak Anak
            </td>
            <td class="td2">
              <input type="button" value="-" onclick="kurang1()" class="tombol" />
              <input id="number1"  value="0" onkeyup="validate1()" name="tiketanak"class="angka">
              <input type="button" value="+" onclick="tambah1()" class="tombol" />
            </td>
          </tr>
        </table>    
        <center>
          <button type="submit" class="tombol1">PESAN</button>
       </center>
       </div>
      </form>
    </section>
  </center>


    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
  </body>
  <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var nav = document.querySelector("nav");
            nav.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
  
  <script>
          var num = document.getElementById("number");
      function tambah(){
        if(Number(num.value)<10){
        num.value= Number(num.value) + 1;
        }
        else{
          alert("Tiket yang dipesan Angka maksimal 10 buah");
        }
      
      }
      function kurang(){
        if(Number(num.value)>0){
          num.value= Number(num.value) - 1;
        }
        else{
          alert("Tiket yang dipesan Angka minimal 1 buah");
        }
      }
      var num1 = document.getElementById("number1");
      function tambah1(){
 
      if(Number(num1.value)<10){
            num1.value= Number(num1.value) + 1;
        }
      else{
        alert("Tiket yang dipesan maksimal 10");
       }
      }
      function kurang1(){
      if(Number(num1.value)>0){
         num1.value= Number(num1.value) - 1;
        }
      else{
         alert("Tiket yang dipesan minimal 10");
       }
      }
      function validate(){
        var pola = /^\d+$/;
        if(Number(num.value)>10 || Number(num.value)<0 ||!pola.test(num.value)){
          num.value=0;
        }

      }
      function validate1(){
        var pola1 = /^\d+$/;
        if(Number(num1.value)>10 || Number(num1.value)<0 ||!pola1.test(num1.value)){
          num1.value=0;
        }
      }


      function validasi(){
        if(num.value=='0' && num1.value=='0'){
          alert("Tiket tidak boleh kosong");
          return false;
        }
      }
  </script>
</html>
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
       



      
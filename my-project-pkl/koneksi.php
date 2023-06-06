<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "inbis";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data gambar
$query = "SELECT * FROM Artikel LIMIT 3 OFFSET 0" ;
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INC ASIA</title>

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- Awesome Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="#" class="logo">
          <img src="img/Picture1.png" alt="">
        </a>
        <div class="navbar-nav">
          <ol>
            <li><a href="#home" onclick="navToggle();">beranda</a></li>
            <li><a href="#program" onclick="navToggle();">program</a></li>
            <li><a href="#visi" onclick="navToggle();">visi & misi</a></li>
            <li><a href="#tim" onclick="navToggle();">tim</a></li>
            <li><a href="#galeri" onclick="navToggle();">galeri</a></li>
            <li><a href="#artikel" onclick="navToggle();">artikel</a></li>
            <li><a href="#pengumuman" onclick="navToggle();">pengumuman</a></li>
            <li><a href="#kontak" onclick="navToggle();">kontak</a></li>
            <li><a href="#tentang" onclick="navToggle();">tentang kami</a></li>
          </ol>
        </div>
        <div class="toggle" onclick="navToggle();"></div>
    </div>

    <!-- Home -->
    <section class="home view" id="home">
        <div class="highlights">
            <h3>feel the powered with</h3>
            <h1><b>INC</b>ASIA</h1><br>
            <p class="tagline">
                Bergabung dengan kami di "Inkubasi Bisnis Institut Asia Malang" dan buat usahamu lebih menguntungkan untuk investasi dan masa depan
            </p>
            <button class="join">Gabung bersama kami</button>
        </div>
        <div class="banner"> </div>
    </section>

    <!-- Program -->
    <section class="program view" id="program">
      <div class="main">
        <h2><span>A</span>pa <span>S</span>aja <span>P</span>rogram <span>K</span>ami?</h2>
      </div>
      <div class="content">
        <div class="row">
          <div class="cols a">
            <div class="heading">1. Pra Inkubasi</div>
            <p>Ikuti bootcamp, matrikulasi bisnis dan workshop yang kami selenggarakan.</p>
          </div>
          <div class="cols b">
            <div class="boxes">
              <img src="img/prog1.svg" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="cols c">
            <div class="heading">2. Inkubasi</div>
            <p>Tahap Inkubasi merupakan tahap dimana tenant akan mendapatkan berbagai macam mekanisme dan metode pendampingan serta berbagai materi yang dibutuhkan. Inkubasi tahap awal meliputi pelatihan teknis dan manajemen, pendampingan legalitas usaha, pembuatan business plan, uji coba produksi, dan pendampingan pendaftaran HKI.</p>
          </div>
          <div class="cols b">
            <div class="boxes">
              <img src="img/prog2.svg" alt="">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="cols a">
            <div class="heading">3. Pasca Inkubasi</div>
            <p>Pada tahap pasca Inkubasi adalah proses setelah tenant melalui program Inkubasi yang dijalankan.</p>
          </div>
          <div class="cols b">
            <div class="boxes">
              <img src="img/prog3.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Visi & Misi -->
    <section class="visi view" id="visi">
      <div class="main">
        <h2><span>V</span>isi dan <span>M</span>isi</h2>
      </div>
      <div class="content">
        <div class="row">
          <div class="cols">
            <div class="heading">Visi</div>
            <p>"Menjadi inkubator bisnis yang mampu mencetak wirausaha mandiri berbasis teknologi yang unggul, terpecaya dan berintegrasi."</p>
          </div>
          <div class="cols">
            <div class="heading">Misi</div>
            <p>1. Memfasilitasi calon wirausaha mandiri yang terdiri dari mahasiswa, alumni, dosen dan masyarakat umum berbasis teknologi,</p>
            <p>2. Melakukan inkubasi terhadap tenant untuk menghasilkan produk berbasis teknologi yang berdaya saing dan berkualitas,</p>
            <p>3. Memperluas jaringan bisnis berbasis teknologi baik di skala nasional maupun internasional serta memfasilitasi inkubasi bisnis teknologi bagi semua elemen.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Tim -->
    <section class="tim view" id="tim">
        <div class="main">
          <h2><span>T</span>im <span>I</span>nbis <span>A</span>sia</h2>
        </div>
        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col">
                  <div class="card">
                      <img class="puji pic" src="img/PUJII.jpeg" alt="">
                  </div>
                  <div class="layer">
                      <img class="puji" src="img/PUJII.jpeg" alt="">
                  </div>
                  <div class="info">
                      <h2>Puji Subekti, S.Si.,</h2>
                      <h2>M.Si</h2>
                      <p>ketua inkubasi</p>
                      <div class="icons">
                          <a class="fa" href=""><i class="fa fa-facebook"></i></a>
                          <a class="fa" href=""><i class="fa fa-youtube-play"></i></a>
                          <a class="fa" href=""><i class="fa fa-twitter"></i></a>
                          <a class="fa" href=""><i class="fa fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card">
                      <img class="pic" src="img/pakEzzy.jpeg" alt="">
                  </div>
                  <div class="layer">
                      <img class="" src="img/pakEzzy.jpeg" alt="">
                  </div>
                  <div class="info">
                      <h2>Abdulloh Eizzi Irsyada, S.Kom., M.Ds</h2>
                      <p>sekretaris inkubasi</p>
                      <div class="icons">
                          <a class="fa" href=""><i class="fa fa-facebook"></i></a>
                          <a class="fa" href=""><i class="fa fa-youtube-play"></i></a>
                          <a class="fa" href=""><i class="fa fa-twitter"></i></a>
                          <a class="fa" href=""><i class="fa fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card">
                      <img class="pic" src="img/ODE.jpeg" alt="">
                  </div>
                  <div class="layer">
                      <img class="" src="img/ODE.jpeg" alt="">
                  </div>
                  <div class="info">
                      <h2>Wa Ode Irma Sari, S.Ak., M.S.A</h2>
                      <p>bendahara inkubasi</p>
                      <div class="icons">
                          <a class="fa" href=""><i class="fa fa-facebook"></i></a>
                          <a class="fa" href=""><i class="fa fa-youtube-play"></i></a>
                          <a class="fa" href=""><i class="fa fa-twitter"></i></a>
                          <a class="fa" href=""><i class="fa fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card">
                      <img class="pic" src="img/DINDA.jpeg" alt="">
                  </div>
                  <div class="layer">
                      <img class="" src="img/DINDA.jpeg" alt="">
                  </div>
                  <div class="info">
                      <h2>Erdinda Rifelda Mariaulfa S.M</h2>
                      <p>manager administratif inkubasi</p>
                      <div class="icons">
                          <a class="fa" href=""><i class="fa fa-facebook"></i></a>
                          <a class="fa" href=""><i class="fa fa-youtube-play"></i></a>
                          <a class="fa" href=""><i class="fa fa-twitter"></i></a>
                          <a class="fa" href=""><i class="fa fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          </div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="galeri view" id="galeri">
        <div class="main">
          <h2><span>G</span>aleri <span>I</span>nbis <span>A</span>sia</h2>
        </div>
        <div class="container">
          <div class="img-box active">
            <img src="img/img1.jpeg" alt="">
          </div>
          <div class="img-box">
              <img src="img/img2.jpeg" alt="">
          </div>
          <div class="img-box">
              <img src="img/img6.jpeg" alt="">
          </div>
          <div class="img-box">
              <img src="img/img4.jpeg" alt="">
          </div>
          <div class="img-box">
              <img src="img/img5.jpeg" alt="">
          </div>
          <div class="img-box">
              <img src="img/img6.jpeg" alt="">
          </div>
        </div>
    </section>

    <!-- Artikel -->
    <section class="artikel view" id="artikel">
      <div class="main">
        <h2><span>A</span>rtikel</h2>
        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
      </div>
      <div class="content">
        <!-- <div class="frame">
          <div class="box">
            <img src="img/artikel1.jpeg" alt="">
          </div>
          <p class="date">09 Mar 2023</p>
          <div class="title">Memulai bisnis</div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div> -->
        <?php
    // Menampilkan gambar
    while ($row = $result->fetch_assoc()) {
      
      $imageData = $row['picture'];
      $imageType = 'image/jpeg'; // Change the image type as per your data
      $dateFromDatabase = $row['date'];

      // Step 2: Convert the date to Indonesian format
      $indonesianDate = date('d F Y', strtotime($dateFromDatabase));
      echo ' <div class="frame">';
      echo '<div class="box">';
      echo '<img src="data:' . $imageType . ';base64,' . base64_encode($imageData) . '" alt="Image">';
      echo '</div>';
      echo '<p class="date">' . $indonesianDate . '</p>';
      echo '<div class="title">' . $row['title'] . '</div>';
      echo '<p>' . $row['content'] . '</p>';
      // You can add more data fields as per your database structure
      echo '</div>';
  }

// Step 4: Close the connection
$conn->close();

    ?>
      
      </div>
      <div class="lainnya">
        <a href="lainnya.php">Lainnya...</a>
      </div>
      
    </section>

    <!-- Pengumuman -->
    <section class="pengumuman view" id="pengumuman">
      <div class="main">
        <h2><span>P</span>engumuman</h2>
      </div>
      <div class="content">
        <!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="img/artikel1.jpeg" alt=""></div>
    <div class="swiper-slide"><img src="img/img1.jpeg" alt=""></div>
    <div class="swiper-slide"><img src="img/img2.jpeg" alt=""></div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>
      </div>
    </section>

    <!-- Contact -->
    <section class="kontak" id="kontak">
        <div class="container" id="tentang">
            <span class="big-circle"></span>
            <img src="img/shape.png" class="square" alt="" />
            <div class="form">
              <div class="contact-info">
                <h3 class="title">Inbis Institut Asia</h3>
                <p class="text">
                  Kami adalah lembaga inkubator bisnis yang bertujuan membina dan mempercepat keberhasilan pengembangan bisnis melalui rangkaian program permodalan yang diikuti oleh dukungan kemitraan dengan tujuan menjadikan usaha tersebut memiliki dampat positif bagi masyarakat.
                </p>
                <h3 class="title">Kerja Kami</h3>
                <p class="text">1. Membantu menyiapkan fasilitas dan sarana yang dibutuhkan oleh tenant</p>
                <p class="text">2. Menyelenggarakan layanan inkubasi sesuai dengan 7S (Space, Share, Services, Support, Skill Development, Seed Capital dan Synergy)</p>
                <p class="text">3. Menyelenggarakan program inkubasi sesuai standar AIBI</p>
                <div class="info">
                  <div class="information">
                    <img src="img/location.png" class="icon" alt="" />
                    <p>Jl. Soekarno Hatta Rembuksari 1 A Malang</p>
                  </div>
                  <div class="information">
                    <img src="img/email.png" class="icon" alt="" />
                    <p>inbis@asia.ac.id</p>
                  </div>
                  <div class="information">
                    <img src="img/phone.png" class="icon" alt="" />
                    <p>(0341) 478877</p>
                  </div>
                </div>
      
                <div class="social-media">
                  <p>Connect with us :</p>
                  <div class="social-icons">
                    <a href="https://www.facebook.com/inbis.asia">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/inc.85asia/">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </div>
                </div>
              </div>
      
              <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
      
                <form action="index.html" autocomplete="off">
                  <h3 class="title">Contact us</h3>
                  <div class="input-container">
                    <input type="text" name="name" class="input" placeholder="Username"
                    />
                  </div>
                  <div class="input-container">
                    <input type="email" name="email" class="input"  placeholder="email" />
                    
                  </div>
                  <div class="input-container">
                    <input type="tel" name="phone" class="input" placeholder="phone"/>
                
                  </div>
                  <div class="input-container textarea">
                    <textarea name="message" class="input" placeholder="message"></textarea>
                    
                  </div>
                  <input type="submit" value="Send" class="btn" />
                </form>
              </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
         <div class="col">
            <div class="logo-inc">
              <img src="img/logo.png" alt="">
              <a href="#" class="title">Inbis Institut Asia</a>
            </div>
            <br>
            <p>Kami adalah inkubator bisnis yang bertujuan membina dan mempercepat keberhasilan pengembangan bisnis melalui rangkaian program permodalan yang diikuti oleh dukungan kemitraan dengan tujuan menjadikan usaha tersebut memiliki dampat positif bagi masyarakat.</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
          </div>
         <div class="col">
        <h3>Kerja Kami</h3>
        <br>
        <p>1. Membantu menyiapkan fasilitas dan sarana yang dibutuhkan oleh tenant</p>
        <br>
        <p>2. Menyelenggarakan layanan inkubator sesuai dengan 7S (Space, Share, Services, Support, Skill Development, Seed Capital dan Synergy)</p>
        <br>
        <p>3. Menyelenggarakan program inkubator sesuai standar AIBI</p>
          </div>
       </div>
      </div>
        <div class="footer-bottom">
        <p> &copy; Copyright <span>PKL Institut ASIA Malang</span> 2023 arnandoroy@gmail.com - 
          <a href="admin.php">administrator</a>
          </p>
      </div>
    </footer>
    <div class="wa-logo">
      <a href="https://api.whatsapp.com/send?phone=+6281357375909&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202. " target="
      "><img src="img/whatsapp.png" alt=""></a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script>const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});</script>
    <script>

      const togglebar = document.querySelector('.toggle')
      const menu = document.querySelector("ol")

      function navToggle(){
        togglebar.classList.toggle("active")
        menu.classList.toggle("active")
      }
    </script>
    <!-- Js Bootstrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-quiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DummyClinic</title>

    <!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,700&display=swap" rel="stylesheet">
<!-- Feather icons-->
 <script src="https://unpkg.com/feather-icons"></script>
<!-- My Style -->
<link rel="stylesheet" href="css/beranda.css">
</head>
<body>
     <!-- Navbar start-->
    <nav class="navbar">
        <a href="#Home" class="navbar-logo">Klinik<span>Gaspol</span></a>

        <div class="navbar-nav">
            <a href="#Home">Beranda</a>
            <a href="Masuk.php">Login</a>
            <a href="#menu">Article</a>
            <a href="contact.php">Contact Us</a>
            <!--<marquee direction="left"> 1 Dari 100 Orang marah saat kepalanya DiPukul</marquee> -->
        </div>
        <div class="navbar-extra">
            <a href="Masuk.php" id="search"><i data-feather="arrow-right"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    </center>
    <div class="profile">
        <center>
            <!-- <h2>Selamat Datang, <?php echo ($userData['username']), "!"; ?> </h2> -->
        </center>
    </div>
     <!--Navbar end-->
     <!-- Hero Section start-->
      <section class="hero" id="Home">
      <main class="content">
        <h1>Your health <span>is our priority</span></h1>
        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, commodi!</p> -->
        <a href="contact.php" class="cta">Contact Us</a>
        </section>
      </main>
      <!-- Hero Section end-->

    <!-- Menu Section starts-->
    <section id="menu" class="menu">
     <h2><span>Our</span> Article</h2>
     <div class="row">
      <div class="menu-card">
        <img src="image/maag.jpg"
        alt="Artikel" class="menu-card-img">
        <h3 class="menu-card-title"> Gejala Kanker Lambung </h3>
        <p style="color:black">Dokter spesialis penyakit dalam konsultan hematologi onkologi, menjelaskan gejala awal kanker lambung sangat mirip dengan... </p>
        <p class="menu-card-price"><a href="https://health.detik.com/berita-detikhealth/d-7648555/waspadai-gejala-kanker-lambung-sekilas-mirip-dengan-sakit-maag">Selengkapnya</a></p>
      </div>
         
      <div class="menu-card">
        <img src="image/demam.jpg"
        alt="Artikel" class="menu-card-img">
        <h3 class="menu-card-title"> 5 Cara Menurunkan Demam </h3>
        <p style="color:black">Demam sering kali sembuh dengan sendirinya tanpa pengobatan. Namun, ada beberapa cara...</p>
        <p class="menu-card-price"><a href="https://www.alodokter.com/5-cara-menurunkan-demam-tinggi-dengan-mudah">Selengkapnya</a></p>
      </div>

      <div class="menu-card">
        <img src="image/insomnia.jpg"
        alt="Artikel" class="menu-card-img">
        <h3 class="menu-card-title">Insomnia dan Penyembuhannya</h3>
        <p style="color:black">Insomnia adalah jenis gangguan tidur yang terjadi ketika seseorang mengalami kesulitan atau tidak bisa tidur. Penyebab...</p>
        <p class="menu-card-price"><a href=" ">Selengkapnya</a></p>
      </div>

      <div class="menu-card">
        <img src="image/stress.jpg"
        alt="Artikel" class="menu-card-img">
        <h3 class="menu-card-title">Gejala Stres</h3>
        <p style="color:black">Stres adalah perubahan reaksi tubuh ketika menghadapi ancaman, tekanan, atau situasi yang baru. Ketika menghadapi stress...</p>
        <p class="menu-card-price"><a href="https://www.alodokter.com/stres">Selengkapnya</a></p>
      </div>

      <div class="menu-card">
        <img src="image/makan.jpg"
        alt="Artikel" class="menu-card-img">
        <h3 class="menu-card-title">Konsumsi Makanan Sehat</h3>
        <p style="color:black">Konsumsi makanan sehat setiap hari sangat diperlukan guna memenuhi asupan nutrisi sehari-har...i</p>
        <p class="menu-card-price"><a href="https://www.alodokter.com/ini-makanan-sehat-yang-perlu-dikonsumsi-setiap-hari">Selengkapnya</a></p>
      </div>
      <div class="menu-card">
        <img src="image/olahraga.jpg"
        alt="Artikel" class="menu-card-img">
        <h3 class="menu-card-title">Dosis Olahraga yang Baik</h3>
        <p style="color:black">Tidak jauh berbeda dengan mengonsumsi obat-obatan, olahraga juga punya takaran alias dosisnya agar tetap aman...</p>
        <p class="menu-card-price"><a href="https://www.halodoc.com/artikel/dosis-olahraga-yang-dianjurkan-agar-tetap-sehat?srsltid=AfmBOoof9ZKPRKQs9DevKco62_NyVcT61Lbj2OAXwaMlykpsBRSoeOAf">Selengkapnya</a></p>
      </div>
            <div class="menu-card">
        <img src="image/minum.jpeg"
        alt="Artikel" class="menu-card-img">
        <h3 class="menu-card-title">Peran Air Putih</h3>
        <p style="color:black">Air putih memiliki banyak manfaat untuk kesehatan tubuh. Selain membantu menghilangkan rasa haus, nyatanya...</p>
        <p class="menu-card-price"><a href="https://www.halodoc.com/artikel/6-manfaat-rutin-minum-air-putih-untuk-kesehatan-1?utm_source=google&utm_medium=cpc&utm_campaign=&utm_content=151268030042&utm_term=&gad_source=1&gclid=CjwKCAiA65m7BhAwEiwAAgu4JCnsinEwjfQdK8S7SgC276cVCn1fCdPkJ46ta6xmeCunONzGih_1xhoCUZQQAvD_BwE">Selengkapnya</a></p>
      </div>
            <div class="menu-card">
        <img src="image/mandi.jpeg"
        alt="Artikel" class="menu-card-img">
        <h3 class="menu-card-title">Banyaknya Manfaat Mandi Pagi</h3>
        <p style="color:black">Salah satu cara agar tubuh lebih segar dan bersemangat sepanjang hari adalah mandi pagi. Sayangnya, beberapa orang...</p>
        <p class="menu-card-price"><a href="https://www.halodoc.com/artikel/12-manfaat-mandi-pagi-dengan-air-dingin-untuk-kesehatan?utm_source=google&utm_medium=cpc&utm_campaign=&utm_content=173298271642&utm_term=&gad_source=1&gclid=CjwKCAiA65m7BhAwEiwAAgu4JAaXZ7nIKSVsAw83oyoBssSedQhMejKWZYwg2iH7ESKfonLjoDVoZxoC_ZwQAvD_BwE">Selengkapnya</a></p>
      </div>

     </div>
     </section>
    <!-- Menu Section end-->


     <!--Footer start-->
     <footer>
      <div class="social">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>
      <div class="links">
        <a href="#Home">Beranda</a>
        <a href="Masuk.php">Login</a>
        <a href="#contact.php">Contact Us</a>
        <a href="#menu">Article</a>
        <p>Alamat: Jl. Kesehatan No. 123, Kota Sehat</p>
        <p>Telepon: (021) 123-4567</p>
      </div>
      <div class="credit">
        <P> Created by <a href="">Klinik Simpel</a>. | &copy; 2024.</P>
      </div>
     </footer>
     <!--Footer end-->

    <!-- Feather Icons-->
    
     <script>
      feather.replace();
    </script>

    <!-- My Java script-->
     <script src="JS/script.js"></script>
</body>
</html>
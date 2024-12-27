<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DummyClinic</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,700&display=swap" rel="stylesheet">
    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- My Style -->
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <a href="index.php" class="navbar-logo">Klinik<span>Gaspol</span></a>
        <div class="navbar-nav">
            <a href="index.php">Beranda</a>
            <a href="Masuk.php">Login</a>
            <a href="#contact">Contact Us</a>
        </div>
        <div class="navbar-extra">
            <a href="Masuk.php" id="search"><i data-feather="arrow-right"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <!-- About Section start -->
    <section id="about" class="about">
        <h2><span>About</span> Us</h2>
        <div class="row">
            <div class="about-img">
                <img src="image/Klinik08.webp" alt="Demam">
            </div>
            <div class="content">
                <!-- <h3>Our product advantages</h3> -->
                <p>
                    This hospital was founded on January 1 2024 and we will always dedicate the best service to all customers.</p>
                <p>At this hospital we have 500+ rooms with Economy, VIP and priority classes. Equipped with various advanced equipment and accompanied by 41 specialist doctors, 57 general doctors and 112 nuns who are always ready and ready to serve.</p>
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
        <h2><span>Contact</span> Us</h2>
        <p>
            Contact us if you encounter any issues while creating an account for the "Klinik Gaspol" application or have other application-related problems. We are continuously working to improve our services for your comfort and recovery!
        </p>
        <center>
            <div class="row">
                <!-- Google Map -->
                <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7932.288133389175!2d106.78483131215235!3d-6.244737666101872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f113a09c5925%3A0xfae2c8f99ae07f0f!2sKramat%20Pela%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1723027576915!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map" style="min-width: 600px;"></iframe>

                    <!-- Contact Form -->
                    <form action="contact.php" method="POST">
                        <div class="input-group">
                            <i data-feather="user"></i>
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="input-group">
                            <i data-feather="mail"></i>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-group">
                            <i data-feather="phone"></i>
                            <input type="text" name="number" placeholder="Number Phone" required>
                        </div>
                        <div class="input-group">
                            <i data-feather="message-square"></i>
                            <textarea name="message" placeholder="Type your message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send</button>
                    </form>
                </center>
            </div>
        </center>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
        <div class="social">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>
        <div class="links">
            <a href="index.php">Beranda</a>
            <a href="Masuk.php">Login</a>
            <a href="#contact">Contact Us</a>
            <p>Alamat: Jl. Kesehatan No. 123, Kota Sehat</p>
            <p>Telepon: (021) 123-4567</p>
        </div>
        <div class="credit">
            <p>Created by <a href="">Klinik Simpel</a>. | &copy; 2024.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
    <!-- My Java script-->
    <script src="JS/script.js"></script>
</body>

</html>

<?php
// Proses PHP untuk menyimpan data form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "klinik";

    // Buat koneksi
    $conn = new mysqli($server, $user, $pass, $database);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Tangkap data dari form
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $nomor = $_POST['number'];
    $pesan = $_POST['message'];

    // Query untuk menyimpan data ke tabel
    $sql = "INSERT INTO contact (nama, email, nomor, pesan) 
            VALUES ('$nama', '$email', '$nomor', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pesan berhasil dikirim!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
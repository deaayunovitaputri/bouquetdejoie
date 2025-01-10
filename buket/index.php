<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bouquet de Joie</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Bouquet<span>deJoie</span>.</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#products">Produk</a>
        <a href="#contact">Kontak</a>
        <a href="SignIn.html">SignIn</a>
      </div>
      <div class="navbar-extra">
        <a href="keranjang.html"><i data-feather="shopping-cart"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Selamat Datang di <span>BouquetdeJoie</span></h1>
        <p>Temukan Kebahagiaanmu Disini</p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/tentang_kami.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Buket Kebahagiaan, Lebih dari Sekadar Bunga</h3>
          <p>
            Di BouquetdeJoie, kami percaya bahwa setiap momen istimewa layak
            dirayakan dengan cara yang luar biasa Tidak hanya dengan bunga yang
            memukau, tapi juga dengan buket unik yang dirangkai dari cokelat
            manis, boneka lucu, hingga hadiah-hadiah spesial lainnya. Setiap
            buket kami bukan sekadar hadiah, melainkan ekspresi cinta,
            kebahagiaan, dan kehangatan yang siap menyentuh hati orang terkasih.
          </p>
          <p>
            Apakah Anda ingin menyampaikan rasa syukur, ucapan selamat, atau
            sekadar membuat seseorang tersenyum? Kami hadir untuk mewujudkannya!
            Pilih dari beragam pilihan buket yang kami tawarkan dan biarkan
            setiap momen Anda menjadi lebih berarti. Setiap buket adalah karya
            seni, dirancang khusus untuk mencerminkan perasaan Anda dan membuat
            orang yang menerimanya merasa istimewa.
          </p>
          <p>
            Kami di BouquetdeJoie siap mewujudkan buket impian Anda. Dengan
            pilihan bunga langka dan detail personal, setiap buket kami
            dirancang khusus agar menjadi kenangan yang tak terlupakan.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Products Section Start -->
<?php
// Koneksi database
$host = "localhost";
$dbname = "uas_web";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Mengambil data produk
    $stmt = $pdo->query("SELECT * FROM products");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    $products = [];
}
?>
<section class="products" id="products">
    <h2><span>Produk</span> Kami</h2>
    <p>
        Di Bouquet de Joie, kami menghadirkan berbagai pilihan buket yang siap
        menyempurnakan setiap momen spesial Anda.
    </p>
    <div class="row">
        <?php if (!empty($products)) { ?>
            <?php foreach($products as $product) { ?>
                <div class="product-card">
                    <div class="product-icons">
                        <a href="#"><i data-feather="shopping-cart"></i></a>
                        <a href="#" class="item-detail-button">
                            <i data-feather="eye"></i>
                        </a>
                    </div>
                    <div class="product-image">
                        <img src="<?php echo $product['image_path']; ?>" 
                             alt="<?php echo $product['name']; ?>" />
                    </div>
                    <div class="product-content">
                        <h3><?php echo $product['name']; ?></h3>
                    </div>
                    <div class="product-price">
                        Rp. <?php echo number_format($product['price'], 0, ',', '.'); ?>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>Tidak ada produk yang tersedia.</p>
        <?php } ?>
    </div>
</section>
<!-- Products Section End -->
    <!-- Products Section End -->
    <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Kami sangat senang dapat terhubung dengan Anda! Jika Anda memiliki
        pertanyaan, saran, atau ingin mengetahui lebih lanjut tentang produk
        kami, jangan ragu untuk menghubungi kami.
      </p>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2209.5274425249363!2d112.72557807670522!3d-7.312378978181593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb36853c3caf%3A0xc8b1886df4fb71c!2sFakultas%20Vokasi%20UNESA!5e0!3m2!1sid!2sid!4v1730130168035!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <!-- Form Contact -->
        <form action="process.php" method="POST">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" name="name" placeholder="Nama" required />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="email" name="email" placeholder="E-mail" required />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" name="phone" placeholder="No HP" required />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="phone"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
      </div>
      <div class="credit">
        <p>Created by <a href="">Kelompok 6</a> | &copy; 2024</p>
      </div>
    </footer>
    <!-- Footer End -->
     
     <!-- Modal Box Item Detail Start -->
<!-- Tombol untuk membuka modal -->
<a href="#" class="item-detail-button">Detail Produk</a>

<!-- Modal Box -->
<div class="modal" id="item-detail-modal">
  <div class="modal-container">
    <!-- Tombol Tutup -->
    <a href="#" class="close-icon">✖</a>
    <div class="modal-content">
      <img src="img/buket_boneka_small.jpg" alt="Product Image" />
      <div class="product-content">
        <h3>Product Name</h3>
        <p>Product Description</p>
        <div class="product-price">Rp. 0</div>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Box Item Detail End -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>

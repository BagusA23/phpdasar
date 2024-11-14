<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./img/logo1.png" alt="Logo" width="30" height="30"> 
                Waste Management
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <!-- Menu Publik -->
                    <li class="nav-item">
                        <a class="nav-link" href="navbar.php">Beranda</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Tentang Kami</a>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Edukasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="jenis-sampah.php">Jenis Sampah</a></li>
                            <li><a class="dropdown-item" href="cara-pilah.php">Cara Memilah</a></li>
                            <li><a class="dropdown-item" href="daur-ulang.php">Daur Ulang</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="bank-sampah.php">Bank Sampah</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="laporan.php">Lapor Sampah</a>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Kontak</a>
                    </li>
                </ul>
    
                <!-- Menu Login/Register -->
                <ul class="navbar-nav">
                    <?php if(!isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profile.php">Profil</a></li>
                                <li><a class="dropdown-item" href="riwayat.php">Riwayat</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Carousel -->
<div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/back1.jpeg" alt="Slide 1" class="d-block w-100">
            <div class="carousel-caption">
                <h2>Kelola Sampah dengan Bijak</h2>
                <p>Mari bersama menjaga lingkungan untuk masa depan yang lebih baik.</p>
                <a href="register.php" class="btn btn-success btn-lg">Bergabung Sekarang</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/back1.jpeg" alt="Slide 2" class="d-block w-100">
            <div class="carousel-caption">
                <h2>Bank Sampah</h2>
                <p>Ubah sampahmu menjadi penghasilan tambahan.</p>
                <a href="bank-sampah.php" class="btn btn-success btn-lg">Mulai Sekarang</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./img/back1.jpeg" alt="Slide 3" class="d-block w-100">
            <div class="carousel-caption">
                <h2>Edukasi Pengelolaan Sampah</h2>
                <p>Pelajari cara mengelola sampah dengan benar.</p>
                <a href="edukasi.php" class="btn btn-success btn-lg">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<!-- Statistik Sederhana -->
<section class="statistics bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <i class="fas fa-users mb-3 text-success" style="font-size: 2rem;"></i>
                    <h3>1,234</h3>
                    <p>Total Nasabah</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <i class="fas fa-recycle mb-3 text-success" style="font-size: 2rem;"></i>
                    <h3>5,678 kg</h3>
                    <p>Sampah Terkelola</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <i class="fas fa-check-circle mb-3 text-success" style="font-size: 2rem;"></i>
                    <h3>234</h3>
                    <p>Laporan Selesai</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <i class="fas fa-building mb-3 text-success" style="font-size: 2rem;"></i>
                    <h3>56</h3>
                    <p>Bank Sampah</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Program Unggulan -->
<section class="featured-programs bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Program Unggulan</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-bank text-success mb-3" style="font-size: 3rem;"></i>
                        <h4>Bank Sampah</h4>
                        <p>Mengubah sampah menjadi penghasilan tambahan melalui program bank sampah.</p>
                        <a href="bank-sampah.php" class="btn btn-outline-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-book text-success mb-3" style="font-size: 3rem;"></i>
                        <h4>Edukasi</h4>
                        <p>Program edukasi pengelolaan sampah untuk masyarakat umum.</p>
                        <a href="edukasi.php" class="btn btn-outline-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-hands-helping text-success mb-3" style="font-size: 3rem;"></i>
                        <h4>Lapor Sampah</h4>
                        <p>Laporkan tumpukan sampah di sekitarmu untuk ditindaklanjuti.</p>
                        <a href="laporan.php" class="btn btn-outline-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bagian akhir dari index.php -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-grid">
                    <!-- Informasi Kontak -->
                    <div class="footer-section">
                        <h3>Kontak Kami</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Jl. Contoh No. 123, Kota, Provinsi</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>+62 123 4567 890</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>info@banksampah.com</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Menu Cepat -->
                    <div class="footer-section">
                        <h3>Menu Cepat</h3>
                        <ul class="quick-links">
                            <li><a href="about.php">Tentang Kami</a></li>
                            <li><a href="bank-sampah.php">Bank Sampah</a></li>
                            <li><a href="edukasi.php">Edukasi</a></li>
                            <li><a href="laporan.php">Lapor Sampah</a></li>
                            <li><a href="contact.php">Kontak</a></li>
                        </ul>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="footer-section">
                        <h3>Jam Operasional</h3>
                        <ul class="operation-hours">
                            <li>
                                <span class="day">Senin - Jumat:</span>
                                <span class="hours">08:00 - 16:00</span>
                            </li>
                            <li>
                                <span class="day">Sabtu:</span>
                                <span class="hours">08:00 - 13:00</span>
                            </li>
                            <li>
                                <span class="day">Minggu:</span>
                                <span class="hours">Tutup</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Social Media -->
                    <div class="footer-section">
                        <h3>Media Sosial</h3>
                        <div class="social-links">
                            <a href="https://facebook.com/" target="_blank" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com/" target="_blank" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://youtube.com/" target="_blank" class="social-link">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p class="copyright">
                        &copy; <?php echo date('Y'); ?> Bank Sampah. Hak Cipta Dilindungi.
                    </p>
                    <div class="footer-links">
                        <a href="privacy-policy.php">Kebijakan Privasi</a>
                        <a href="terms-conditions.php">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>
</html>
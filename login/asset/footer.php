<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- includes/footer.php -->
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
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
    <script src="js/main.js"></script>
</footer>
</body>
</html>
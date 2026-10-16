<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Nyonya Ahwei</title>

   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <a href="#home" class="brand">
            <div class="brand-icon">🔧</div>
            <div>
                <h2>Bengkel Nyonya Ahwei</h2>
                <p>Servis Motor &amp; Spare Part</p>
            </div>
        </a>

        <nav class="nav-menu">
            <a href="#home">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#sparepart">Spare Part</a>
            <a href="#booking">Booking</a>
            <a href="#tentang">Tentang</a>
        </nav>

        <a href="#booking" class="login-btn">Login / Daftar</a>
    </header>

    <!-- HERO -->
    <section class="hero" id="home">
        <div class="hero-copy">
            <span class="hero-label">Selamat Datang di</span>
            <h1>Bengkel Nyonya Ahwei</h1>
            <h2>Spare Part &amp; Servis Motor</h2>
            <p>
                Solusi lengkap untuk kebutuhan servis dan spare part
                motor kesayanganmu. Cepat, terpercaya, dan harga terbaik!
            </p>
            <a href="#layanan" class="btn">Lihat Layanan →</a>
        </div>

        <div class="hero-visual">
            <div class="motor">🏍️</div>
            <h3>Motor Sehat, Perjalanan Lancar!</h3>
            <p>Rawat motor kesayanganmu bersama kami.</p>
        </div>
    </section>

    <!-- MENU LAYANAN -->
    <section class="quick-menu" id="layanan">
        <a href="#booking" class="quick-item">
            <div class="quick-icon">🔧</div>
            <h3>Booking Servis</h3>
            <p>Pesan jadwal servis dengan mudah.</p>
        </a>

        <a href="#sparepart" class="quick-item">
            <div class="quick-icon">⚙️</div>
            <h3>Spare Part</h3>
            <p>Berbagai kebutuhan motor.</p>
        </a>

        <a href="#sparepart" class="quick-item">
            <div class="quick-icon">🛒</div>
            <h3>Belanja Produk</h3>
            <p>Pilih spare part favoritmu.</p>
        </a>

        <a href="#riwayat" class="quick-item">
            <div class="quick-icon">📋</div>
            <h3>Riwayat Servis</h3>
            <p>Pantau catatan servis motor.</p>
        </a>

        <a href="#kontak" class="quick-item">
            <div class="quick-icon">📍</div>
            <h3>Lokasi Bengkel</h3>
            <p>Temukan lokasi bengkel kami.</p>
        </a>
    </section>
<!-- PRODUK -->
    <section class="section" id="sparepart">
        <div class="section-heading">
            <div>
                <h2>Rekomendasi Produk</h2>
                <p>Spare part pilihan untuk motor kamu.</p>
            </div>
            <a href="#kategori" class="see-all">Lihat Semua →</a>
        </div>

        <div class="product-grid">
            <article class="product-card">
                <div class="product-picture">🔩</div>
                <h3>Busi NGK</h3>
                <p>Busi motor berkualitas</p>
                <div class="product-bottom">
                    <span class="price">Rp 35.000</span>
                    <button class="cart-btn" data-product="Busi NGK">+</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-picture">🛞</div>
                <h3>Ban Tubeless</h3>
                <p>Ban untuk kebutuhan harian</p>
                <div class="product-bottom">
                    <span class="price">Rp 160.000</span>
                    <button class="cart-btn" data-product="Ban Tubeless">+</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-picture">🔋</div>
                <h3>Aki Motor</h3>
                <p>Aki motor berkualitas</p>
                <div class="product-bottom">
                    <span class="price">Rp 275.000</span>
                    <button class="cart-btn" data-product="Aki Motor">+</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-picture">⚙️</div>
                <h3>Shockbreaker</h3>
                <p>Nyaman untuk berkendara</p>
                <div class="product-bottom">
                    <span class="price">Rp 125.000</span>
                    <button class="cart-btn" data-product="Shockbreaker">+</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-picture">🛠️</div>
                <h3>Kampas Rem</h3>
                <p>Komponen pengereman motor</p>
                <div class="product-bottom">
                    <span class="price">Rp 55.000</span>
                    <button class="cart-btn" data-product="Kampas Rem">+</button>
                </div>
            </article>
        </div>
    </section>

    <!-- KATEGORI -->
    <section class="category-section" id="kategori">
        <div class="section-heading">
            <div>
                <h2>Kategori Spare Part</h2>
                <p>Pilih kebutuhan motor kamu.</p>
            </div>
        </div>

        <div class="category-grid">
            <a href="#sparepart" class="category-card">
                <span>🛢️</span><p>Oli Mesin</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>🛞</span><p>Ban</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>🔋</span><p>Aki</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>🔩</span><p>Busi</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>💡</span><p>Lampu</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>🪖</span><p>Aksesori</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>⚙️</span><p>Kampas Rem</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>⛓️</span><p>Rantai &amp; Gir</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>🧰</span><p>Peralatan</p>
            </a>
            <a href="#sparepart" class="category-card">
                <span>•••</span><p>Lainnya</p>
            </a>
        </div>
    </section>

    <!-- KEUNGGULAN -->
    <section class="why-us" id="tentang">
        <h2>Kenapa Pilih Kami?</h2>

        <div class="benefit-grid">
            <div class="benefit">
                <span>🔧</span>
                <h3>Mekanik Berpengalaman</h3>
                <p>Pelayanan servis yang profesional.</p>
            </div>

            <div class="benefit">
                <span>✓</span>
                <h3>Produk Berkualitas</h3>
                <p>Pilihan komponen untuk motor kamu.</p>
            </div>

            <div class="benefit">
                <span>◷</span>
                <h3>Proses Praktis</h3>
                <p>Pemesanan servis lebih mudah.</p>
            </div>

            <div class="benefit">
                <span>◇</span>
                <h3>Harga Transparan</h3>
                <p>Informasi harga yang jelas.</p>
            </div>

            <div class="benefit">
                <span>♡</span>
                <h3>Pelayanan Ramah</h3>
                <p>Siap membantu kebutuhan motor.</p>
            </div>
        </div>
    </section>

    <!-- BOOKING -->
    <section class="booking-section" id="booking">
        <div>
            <span class="hero-label">Booking Servis</span>
            <h2>Servis Motor Lebih Mudah!</h2>
            <p>Isi formulir untuk mengajukan jadwal servis motor.
                Konfirmasi jadwal tetap perlu dilakukan dengan pihak bengkel.</p>
        </div>

        <form class="booking-form" id="bookingForm">
            <label>
                Nama Lengkap
                <input type="text" id="nama"
                    placeholder="Nama kamu" required>
            </label>

            <label>
                Nomor WhatsApp
                <input type="tel" id="telepon"
                    placeholder="08xxxxxxxxxx" required>
            </label>

            <label>
                Jenis Servis
                <select id="jenisServis" required>
                    <option value="">Pilih servis</option>
                    <option>Ganti Oli</option>
                    <option>Servis Mesin</option>
                    <option>Servis Rem</option>
                    <option>Servis Ban</option>
                    <option>Pemeriksaan Motor</option>
                </select>
            </label>

            <label>
                Tanggal Servis
                <input type="date" id="tanggal" required>
            </label>

            <button type="submit" class="btn">Kirim Booking →</button>
            <p id="bookingMessage" role="status"></p>
        </form>
    </section>

    <!-- RIWAYAT DEMO -->
    <section class="section" id="riwayat">
        <div class="section-heading">
            <div>
                <h2>Riwayat Servis</h2>
                <p>Fitur riwayat servis dapat dikembangkan dengan database.</p>
            </div>
        </div>
        <p>Silakan login setelah fitur akun dan database tersedia.</p>
    </section>

    <!-- FOOTER -->
    <footer id="kontak">
        <div>
            <h3>🔧 Bengkel Nyonya Ahwei</h3>
            <p>Servis Motor &amp; Spare Part</p>
            <p>Alamat: isi dengan alamat bengkel yang benar.</p>
        </div>

        <div class="footer-slogan">
            <strong>Motor Sehat, Perjalanan Lancar!</strong>
        </div>

        <a href="#booking" class="btn">Booking Sekarang →</a>

        <small>© 2026 Bengkel Nyonya Ahwei</small>
    </footer>

</body>
</html>
    
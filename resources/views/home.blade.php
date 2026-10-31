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
            <img src="{{ asset('images/logo.png') }}"
                 alt="Logo Bengkel Nyonya Ahwei"
                 class="brand-logo">

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

        <div class="nav-actions">
            <a href="#sparepart" class="search-btn">
                ⌕ Cari spare part...
            </a>
            <a href="#sparepart" class="cart-link">🛒</a>
            <a href="#footer" class="login-btn">♟ Login / Daftar</a>
        </div>
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
    </section>   

    <!-- MENU LAYANAN -->
    <section class="quick-menu" id="layanan">
        <a href="#footer" class="quick-item">
            <span class="quick-icon">🔧</span>
            <div>
            <h3>Booking Servis</h3>
            <p>Pesan jadwal servis dengan mudah.</p>
            </div>
            <span class="arrow">➜</span>
        </a>

        <a href="#footer" class="quick-item">
            <span class="quick-icon">⚙️</span>
            <div>
                <h3>Spare Part</h3>
                <p>Berbagai kebutuhan motor.</p>
            </div>
            <span class="arrow">➜</span>
        </a>

        <a href="#footer" class="quick-item">
            <span class="quick-icon">🛒</span>
            <div>
                <h3>Belanja Produk</h3>
                <p>Pilih spare part favoritmu.</p>
            </div>
            <span class="arrow">➜</span>
        </a>

        <a href="#footer" class="quick-item">
            <span class="quick-icon">📋</span>
            <div>
                <h3>Riwayat Servis</h3>
                <p>Pantau catatan servis motor.</p>
            </div>
            <span class="arrow">➜</span>
        </a>

        <a href="#footer" class="quick-item">
            <span class="quick-icon">📍</span>
            <div>
                <h3>Lokasi Bengkel</h3>
                <p>Temukan lokasi bengkel kami.</p>
            </div>
            <span class="arrow">➜</span>
        </a>
    </section>

<!-- REKOMENDASI PRODUK -->
    <section class="section" id="sparepart">
        <div class="section-heading">
            <div>
                <h2>🌿 Rekomendasi Produk</h2>
                <p>Spare part pilihan untuk motor kamu.</p>
            </div>
            <button class="see-all" id="showAll">Lihat Semua →</button>
        </div>

        <div class="product-grid" id="productGrid">

            <article class="product-card" data-category="busi">
                <img src="{{ asset('images/busi.jpg') }}" alt="Busi NGK">
                <div class="product-info">
                    <h3>Busi NGK</h3>
                    <p>Honda Beat / Vario 110</p>
                    <div class="product-bottom">
                        <strong>Rp 35.000</strong>
                        <button class="cart-btn" data-product="Busi NGK">+</button>
                    </div>
                </div>
            </article>

            <article class="product-card" data-category="ban">
                <img src="{{ asset('images/ban.jpg') }}" alt="Ban Tubeless">
                <div class="product-info">
                    <h3>Ban Tubeless</h3>
                    <p>90/90 - 14 (Depan/Belakang)</p>
                    <div class="product-bottom">
                        <strong>Rp 160.000</strong>
                        <button class="cart-btn" data-product="Ban Tubeless">+</button>
                    </div>
                </div>
            </article>

            <article class="product-card" data-category="aki">
                <img src="{{ asset('images/aki.jpg') }}" alt="Aki Motor">
                <div class="product-info">
                    <h3>Aki Motor</h3>
                    <p>GS Astra GTZ5S</p>
                    <div class="product-bottom">
                        <strong>Rp 275.000</strong>
                        <button class="cart-btn" data-product="Aki Motor">+</button>
                    </div>
                </div>
            </article>

            <article class="product-card" data-category="shockbreaker">
                <img src="{{ asset('images/shockbreaker.jpg') }}" alt="Shockbreaker">
                <div class="product-info">
                    <h3>Shockbreaker</h3>
                    <p>Honda Beat</p>
                    <div class="product-bottom">
                        <strong>Rp 125.000</strong>
                        <button class="cart-btn" data-product="Shockbreaker">+</button>
                    </div>
                </div>
            </article>

            <article class="product-card" data-category="kampas-rem">
                <img src="{{ asset('images/kampas-rem.jpg') }}" alt="Kampas Rem">
                <div class="product-info">
                    <h3>Kampas Rem</h3>
                    <p>Honda Vario 110</p>
                    <div class="product-bottom">
                        <strong>Rp 55.000</strong>
                        <button class="cart-btn" data-product="Kampas Rem">+</button>
                    </div>
                </div>
            </article>

            <!-- PRODUK OLI -->
            <article class="product-card" data-category="oli">
                <img src="{{ asset('images/oli-a.jpg') }}" alt="Oli Mesin A">
                <div class="product-info">
                    <h3>Oli Mesin Matic</h3>
                    <p>Oli untuk motor matic</p>
                    <div class="product-bottom">
                        <strong>Rp 45.000</strong>
                        <button class="cart-btn" data-product="Oli Mesin Matic">+</button>
                    </div>
                </div>
            </article>

            <article class="product-card" data-category="oli">
                <img src="{{ asset('images/oli-b.jpg') }}" alt="Oli Mesin B">
                <div class="product-info">
                    <h3>Oli Mesin Premium</h3>
                    <p>Perlindungan mesin harian</p>
                    <div class="product-bottom">
                        <strong>Rp 60.000</strong>
                        <button class="cart-btn" data-product="Oli Mesin Premium">+</button>
                    </div>
                </div>
            </article>

            <article class="product-card" data-category="oli">
                <img src="{{ asset('images/oli-c.jpg') }}" alt="Oli Mesin C">
                <div class="product-info">
                    <h3>Oli Mesin 10W-40</h3>
                    <p>Pelumas mesin motor</p>
                    <div class="product-bottom">
                        <strong>Rp 55.000</strong>
                        <button class="cart-btn" data-product="Oli Mesin 10W-40">+</button>
                    </div>
                </div>
            </article>

            <article class="product-card" data-category="lampu">
                <img src="{{ asset('images/lampu.jpg') }}" alt="Lampu Motor">
                <div class="product-info">
                    <h3>Lampu Motor LED</h3>
                    <p>Penerangan motor</p>
                    <div class="product-bottom">
                        <strong>Rp 40.000</strong>
                        <button class="cart-btn" data-product="Lampu Motor LED">+</button>
                    </div>
                </div>
            </article>

            <article class="product-card" data-category="rantai">
                <img src="{{ asset('images/rantai.jpg') }}" alt="Rantai dan Gir">
                <div class="product-info">
                    <h3>Rantai &amp; Gir</h3>
                    <p>Komponen penggerak motor</p>
                    <div class="product-bottom">
                        <strong>Rp 95.000</strong>
                        <button class="cart-btn" data-product="Rantai dan Gir">+</button>
                    </div>
                </div>
            </article>
        </div>

        <p class="product-message" id="productMessage" role="status"></p>
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
            <a href="#sparepart"
             class="category-card"
             data-filter="oli">
            <span>🛢️</span>
            <p>Oli Mesin</p>
            </a>
            <a href="#sparepart"
             class="category-card"
             data-filter="ban">
                <span>🛞</span><p>Ban</p>
            </a>
            <a href="#sparepart" 
            class="category-card" 
            data-filter="aki">
                <span>🔋</span><p>Aki</p>
            </a>
            <a href="#sparepart" 
            class="category-card" 
            data-filter="busi">
                <span>🔩</span><p>Busi</p>
            </a>
            <a href="#sparepart" 
            class="category-card" 
            data-filter="lampu">
                <span>💡</span><p>Lampu</p>
            </a>
            <a href="#sparepart" 
            class="category-card"
            data-filter="aksesori">
                <span>🪖</span><p>Aksesori</p>
            </a>
            <a href="#sparepart" 
            class="category-card" 
            data-filter="kampas">
                <span>⚙️</span><p>Kampas Rem</p>
            </a>
            <a href="#sparepart" 
            class="category-card" 
            data-filter="shockbreaker">
                <span>⛓️</span><p>Rantai &amp; Gir</p>
            </a>
            <a href="#sparepart" 
            class="category-card" 
            data-filter="peralatan">
                <span>🧰</span><p>Peralatan</p>
            </a>
            <a href="#sparepart" 
            class="category-card" 
            data-filter="lainnya">
                <span>•••</span><p>Lainnya</p>
            </a>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="footer">
        <div class="footer-brand">
            <h3>📍 Bengkel Nyonya Ahwei 🔧</h3>
            <p>Jl. Pemuda No. 123, Semarang</p>
        </div>

        <div class="footer-slogan">
            Servis Sekarang,<br>
            Perjalanan Lebih Aman! ♡
        </div>

        <a href="https://wa.me/" class="footer-btn">
            Booking Sekarang →
        </a>

        <div class="footer-social">
            <span>◎</span>
            <span>♪</span>
            <span>☏</span>
        </div>

        <small>© 2026 Bengkel Nyonya Ahwei</small>
    </footer>

    <!-- INTERAKSI KATEGORI DAN KERANJANG DEMO -->
    <script>
        const cards = document.querySelectorAll('.product-card');
        const message = document.getElementById('productMessage');

        function filterProducts(category) {
            let found = 0;

            cards.forEach(card => {
                const match =
                    category === 'semua' ||
                    card.dataset.category === category;

                card.hidden = !match;

                if (match) found++;
            });

            document.getElementById('sparepart').scrollIntoView({
                behavior: 'smooth'
            });

            message.textContent = found
                ? `${found} produk ditampilkan.`
                : 'Produk kategori ini belum tersedia.';
        }

        document.querySelectorAll('.category-card').forEach(button => {
            button.addEventListener('click', () => {
                filterProducts(button.dataset.filter);
            });
        });

        document.getElementById('showAll').addEventListener('click', () => {
            filterProducts('semua');
        });

        document.getElementById('showCategories').addEventListener('click', () => {
            filterProducts('semua');
        });

        document.querySelectorAll('.cart-btn').forEach(button => {
            button.addEventListener('click', () => {
                const product = button.dataset.product;
                message.textContent =
                    `${product} dipilih. Fitur keranjang masih berupa demo.`;
            });
        });
    </script>

</body>
</html>
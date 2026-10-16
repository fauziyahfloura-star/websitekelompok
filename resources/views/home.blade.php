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

    
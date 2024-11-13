<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="{{ asset('lightbox2/dist/css/lightbox.min.css') }}">
</head>
<body>

    <header>
        <h1>Selamat Datang di Situs Kami</h1>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#services">Layanan</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Beranda</h2>
            <p>Ini adalah bagian beranda dari situs kami.</p>
        </section>

        <section id="about">
            <h2>Tentang Kami</h2>
            <p>Deskripsi singkat tentang perusahaan atau situs Anda.</p>
        </section>

        <section id="services">
            <h2>Layanan Kami</h2>
            <ul>
                <li>Layanan 1</li>
                <li>Layanan 2</li>
                <li>Layanan 3</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Perusahaan Anda. Semua Hak Dilindungi.</p>
        <ul>
            <li><a href="#privacy">Kebijakan Privasi</a></li>
            <li><a href="#terms">Syarat & Ketentuan</a></li>
        </ul>
    </footer>

    <script src="{{ asset('lightbox2/dist/js/lightbox-plus-jquery.min.js') }}"></script>
</body>
</html>

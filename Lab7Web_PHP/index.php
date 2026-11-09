
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LAB 7 | Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f1f5f9;
            color: #1e293b;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: #111827;
            color: white;
            position: fixed;
            padding: 25px 18px;
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .subtitle {
            font-size: 11px;
            color: #94a3b8;
            margin-bottom: 35px;
        }

        .menu-title {
            font-size: 11px;
            color: #64748b;
            margin: 20px 10px 10px;
        }

        .sidebar a {
            display: block;
            padding: 13px;
            margin-bottom: 7px;
            color: #cbd5e1;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #2563eb;
            color: white;
        }

        .main {
            margin-left: 250px;
            padding: 35px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }

        .status {
            background: #dcfce7;
            color: #15803d;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 12px;
        }

        .welcome {
            background: linear-gradient(120deg, #1d4ed8, #4338ca);
            color: white;
            padding: 35px;
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 29px;
            margin-bottom: 12px;
        }

        .welcome p {
            color: #dbeafe;
            line-height: 1.6;
        }

        .section-title {
            margin-bottom: 18px;
            font-size: 20px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .card {
            background: white;
            padding: 23px;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            transition: 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px #00000010;
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .card p {
            color: #64748b;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 18px;
        }

        .card a {
            display: inline-block;
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 9px 15px;
            border-radius: 7px;
            font-size: 12px;
        }

        footer {
            margin-top: 35px;
            color: #94a3b8;
            font-size: 12px;
            text-align: center;
        }

        @media (max-width: 750px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main {
                margin-left: 0;
                padding: 20px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <aside class="sidebar">
        <div class="logo">PHP LAB 7</div>
        <div class="subtitle">PRAKTIKUM PEMROGRAMAN WEB</div>

        <div class="menu-title">MENU UTAMA</div>
        <a href="index.php" class="active">Dashboard</a>

        <div class="menu-title">LATIHAN PHP</div>
        <a href="latihan1.php">Latihan 1 - PHP</a>
        <a href="latihan2.php">Latihan 2 - Nilai</a>
        <a href="latihan3.php">Latihan 3 - Array</a>
        <a href="latihan4.php">Latihan 4 - Function</a>
        <a href="cari.php">Latihan 5 - GET</a>
        <a href="latihan6.php">Latihan 6 - POST</a>
        <a href="latihan7.php">Latihan 7 - Transaksi</a>

        <div class="menu-title">MINI PROJECT</div>
        <a href="mahasiswa.php">Data Mahasiswa</a>
    </aside>

    <main class="main">

        <div class="topbar">
            <h2>Dashboard</h2>
            <span class="status">● Sistem Aktif</span>
        </div>

        <section class="welcome">
            <h1>Selamat Datang di PHP LAB 7</h1>
            <p>
                Aplikasi pembelajaran Pemrograman Server-Side
                menggunakan PHP. Pilih latihan yang ingin
                kamu pelajari melalui menu di bawah ini.
            </p>
        </section>

        <h2 class="section-title">Daftar Praktikum</h2>

        <section class="cards">

            <div class="card">
                <h3>Latihan 1 - Menjalankan PHP</h3>
                <p>Mempelajari cara menjalankan PHP melalui server lokal.</p>
                <a href="latihan1.php">Buka Latihan</a>
            </div>

            <div class="card">
                <h3>Latihan 2 - Variabel dan Nilai</h3>
                <p>Menggunakan variabel, operator, dan percabangan.</p>
                <a href="latihan2.php">Buka Latihan</a>
            </div>

            <div class="card">
                <h3>Latihan 3 - Array</h3>
                <p>Mempelajari array dan perulangan foreach.</p>
                <a href="latihan3.php">Buka Latihan</a>
            </div>

            <div class="card">
                <h3>Latihan 4 - Function</h3>
                <p>Membuat fungsi untuk menghitung harga diskon.</p>
                <a href="latihan4.php">Buka Latihan</a>
            </div>

            <div class="card">
                <h3>Latihan 5 - GET</h3>
                <p>Mengolah data menggunakan metode GET.</p>
                <a href="cari.php">Buka Latihan</a>
            </div>

            <div class="card">
                <h3>Latihan 6 - POST</h3>
                <p>Mengirim dan memproses data formulir mahasiswa.</p>
                <a href="latihan6.php">Buka Latihan</a>
            </div>

            <div class="card">
                <h3>Latihan 7 - Transaksi</h3>
                <p>Menghitung subtotal berdasarkan harga dan jumlah barang.</p>
                <a href="latihan7.php">Buka Latihan</a>
            </div>

            <div class="card">
                <h3>Mini Project - Data Mahasiswa</h3>
                <p>Mengelola formulir mahasiswa dengan validasi PHP.</p>
                <a href="mahasiswa.php">Buka Project</a>
            </div>

        </section>

        <footer>
            © 2026 PHP LAB 7 | Praktikum Pemrograman Web
        </footer>

    </main>

</body>
</html>

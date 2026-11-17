<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard DPMPTSP')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Source+Serif+4:opsz,wght@8..60,600;8..60,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="bg-shape bg-shape-a" aria-hidden="true"></div>
    <div class="bg-shape bg-shape-b" aria-hidden="true"></div>

    <div class="app">
        <aside class="sidebar">
            <div class="brand">
                <p class="brand-kicker">Kabupaten Bandung</p>
                <h1>DPMPTSP</h1>
                <p class="brand-sub">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</p>
            </div>

            <nav class="menu" aria-label="Menu utama">
                <p class="menu-section">Dashboard</p>
                <a href="#" class="active" data-view="ringkasan">Ringkasan</a>

                <p class="menu-section">Layanan</p>
                <a href="#" data-view="perizinan">Data Perizinan</a>
                <a href="#" data-view="nonberusaha">Perizinan Non-Berusaha</a>

                <div class="menu-subgroup">
                    <a href="#" class="submenu-toggle" data-view="oss-rba" aria-expanded="false" aria-controls="submenu-oss-rba">
                        OSS RBA
                        <span class="submenu-arrow" aria-hidden="true">&#9656;</span>
                    </a>
                    <div class="submenu" id="submenu-oss-rba" hidden>
                        <a href="#" class="submenu-item" data-view="oss-rba-nib">NIB</a>
                        <a href="#" class="submenu-item" data-view="oss-rba-dp-proyek">DP Proyek</a>
                        <a href="#" class="submenu-item" data-view="oss-rba-list-izin">List Izin</a>
                    </div>
                </div>

                <a href="#" data-view="pbg">Persetujuan Bangun Gedung</a>
                <a href="#" data-view="lingkungan">Persetujuan Lingkungan</a>

                <p class="menu-section">Informasi</p>
                <a href="#" data-view="lacak">Lacak Permohonan</a>
                <a href="#" data-view="pelayanan">Alur Pelayanan</a>
                <a href="#" data-view="laporan">Laporan &amp; Statistik</a>
                <a href="#" data-view="investasi">Data Investasi</a>
                <a href="#" data-view="pengaduan">Pengaduan</a>
                <a href="#" data-view="dokumen">Dokumen &amp; Regulasi</a>
                <a href="#" data-view="survey">Survei Kepuasan</a>

                <p class="menu-section">Sistem</p>
                <a href="#" data-view="realisasi-investasi">Realisasi Investasi</a>
                <a href="#" data-view="peta-potensi">Peta Potensi</a>
                <a href="#" data-view="kemitraan">Kemitraan</a>
                <a href="#" data-view="pengawasan">Pengawasan</a>
                <a href="#" data-view="pengaduan-data">Data Pengaduan</a>
                <a href="#" data-view="dasar-hukum">Dasar Hukum</a>
                <a href="#" data-view="ikm">Data IKM</a>
                <a href="#" data-view="ikm-index">Indeks IKM</a>
                <a href="#" data-view="pengaturan">Pengaturan</a>
            </nav>

            <div class="side-note">
                <p class="side-note-title">Layanan hari ini</p>
                <p class="side-note-value">08.00 &ndash; 16.00 WIB</p>
                <p class="side-note-time" id="serviceClock">--:-- WIB</p>
            </div>
        </aside>

        <div class="main">
            <header class="topbar" id="topbar">
                <div id="welcomeBlock">
                    <p class="eyebrow">Dashboard Layanan</p>
                    <h2>Selamat Datang di DPMPTSP</h2>
                    <p class="subtitle">Pantau permohonan, perizinan, dan realisasi investasi Kabupaten Bandung dalam satu dasbor.</p>
                </div>
                <div class="top-actions" id="topActions">
                    <button class="btn btn-light" type="button" id="openLoginBtn">Login Dinas</button>
                    <button class="btn btn-light" type="button" id="refreshBtn">Perbarui Data</button>
                    <button class="btn btn-dark" type="button" id="downloadReportBtn">Unduh Laporan</button>
                </div>
            </header>

            @yield('content')
        </div>
    </div>

    <footer class="site-footer">&copy; 2026 DPMPTSP Kabupaten Bandung &middot; Sistem Informasi Perizinan Terpadu</footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

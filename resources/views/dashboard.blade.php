@extends('layouts.app')

@section('title', 'Dashboard DPMPTSP')

@section('content')
<section class="view-panel active" data-panel="ringkasan">

        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Statistik Layanan</p><h4>Rekap Perizinan per Kategori</h4></div><span class="chip">Tahun 2026</span></div>
          <div class="stats-grid stats-compact" aria-label="Statistik kategori">
            <article class="stat-card"><p class="stat-label">Perizinan Kesehatan</p><h3>1.284</h3><p class="stat-trend up">Terbit & proses</p></article>
            <article class="stat-card"><p class="stat-label">Perizinan Reklame</p><h3>326</h3><p class="stat-trend neutral">Berjalan</p></article>
            <article class="stat-card"><p class="stat-label">Perizinan Pendidikan</p><h3>412</h3><p class="stat-trend up">Terdata</p></article>
            <article class="stat-card"><p class="stat-label">PBG / Bangunan</p><h3>958</h3><p class="stat-trend up">Permohonan</p></article>
          </div>
        </section>

        <p class="subtitle" style="margin-bottom:0.2rem;">Data ringkasan harian ditampilkan per tahun: pilih tahun di panel <b>Tren Mingguan</b> (2021–2026).</p>
        <section class="stats-grid" aria-label="Ringkasan statistik">
          <article class="stat-card">
            <p class="stat-label">Permohonan Hari Ini</p>
            <h3 id="permohonanHariIni">128</h3>
            <p class="stat-trend up">+12% dari kemarin</p>
          </article>
          <article class="stat-card">
            <p class="stat-label">Izin Terbit</p>
            <h3 id="izinTerbit">96</h3>
            <p class="stat-trend up">+8% dari kemarin</p>
          </article>
          <article class="stat-card">
            <p class="stat-label">Dalam Proses</p>
            <h3 id="dalamProses">27</h3>
            <p class="stat-trend neutral">Perlu tindak lanjut cepat</p>
          </article>
          <article class="stat-card">
            <p class="stat-label">Waktu Rata-rata</p>
            <h3 id="waktuRataRata">1.8 Hari</h3>
            <p class="stat-trend up">Lebih cepat 0.4 hari</p>
          </article>
        </section>

        <section class="content-grid">
          <article class="panel panel-chart">
          <div class="panel-head">
            <div>
              <p class="eyebrow">Tren Mingguan</p>
              <h4>Permohonan Masuk</h4>
            </div>
            <div style="display:flex;gap:0.5rem;align-items:center;flex-wrap:wrap;">
              <label for="yearFilter" style="font-size:0.78rem;color:var(--muted);font-weight:700;">Tahun</label>
              <select id="yearFilter" class="chip" style="padding:0.35rem 0.5rem;">
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026" selected>2026</option>
              </select>
            </div>
          </div>
          <div class="bars bars-values" id="weeklyBars">
            <div class="bar-item"><span class="bar-val">46</span><span class="bar" style="height: 46%"></span><small>Sen</small></div>
            <div class="bar-item"><span class="bar-val">58</span><span class="bar" style="height: 58%"></span><small>Sel</small></div>
            <div class="bar-item"><span class="bar-val">39</span><span class="bar" style="height: 39%"></span><small>Rab</small></div>
            <div class="bar-item"><span class="bar-val">66</span><span class="bar" style="height: 66%"></span><small>Kam</small></div>
            <div class="bar-item"><span class="bar-val">74</span><span class="bar" style="height: 74%"></span><small>Jum</small></div>
            <div class="bar-item"><span class="bar-val">51</span><span class="bar" style="height: 51%"></span><small>Sab</small></div>
            <div class="bar-item"><span class="bar-val">82</span><span class="bar" style="height: 82%"></span><small>Min</small></div>
          </div>
          <div class="yearly-trend">
            <p class="yearly-title">Ringkasan per Tahun (2021–2026)</p>
            <div class="yearly-grid" id="yearlyTrendGrid">
              <div class="yearly-item"><span>2021</span><strong>3.240</strong></div>
              <div class="yearly-item"><span>2022</span><strong>3.680</strong></div>
              <div class="yearly-item"><span>2023</span><strong>4.120</strong></div>
              <div class="yearly-item"><span>2024</span><strong>4.590</strong></div>
              <div class="yearly-item"><span>2025</span><strong>5.010</strong></div>
              <div class="yearly-item active"><span>2026</span><strong>5.430</strong></div>
            </div>
          </div>
          </article>

          <article class="panel panel-list">
            <div class="panel-head">
              <div>
                <p class="eyebrow">Antrian Layanan</p>
                <h4>Pengajuan Terbaru</h4>
              </div>
            </div>
            <ul class="request-list" id="requestList">
              <li>
                <div>
                  <p class="req-name">PT Maju Berjaya</p>
                  <p class="req-type">Izin Usaha Perdagangan</p>
                </div>
                <span class="status s-progress">Proses</span>
              </li>
              <li>
                <div>
                  <p class="req-name">CV Sumber Niaga</p>
                  <p class="req-type">Izin Lokasi</p>
                </div>
                <span class="status s-done">Selesai</span>
              </li>
              <li>
                <div>
                  <p class="req-name">UD Karya Mandiri</p>
                  <p class="req-type">OSS RBA</p>
                </div>
                <span class="status s-review">Verifikasi</span>
              </li>
              <li>
                <div>
                  <p class="req-name">PT Harmoni Investama</p>
                  <p class="req-type">Perubahan Data Perusahaan</p>
                </div>
                <span class="status s-progress">Proses</span>
              </li>
            </ul>
          </article>
        </section>

        <section class="panel panel-map">
          <div class="panel-head">
            <div>
              <p class="eyebrow">Peta Lokasi</p>
              <h4>Kabupaten Bandung, Jawa Barat</h4>
            </div>
            <span class="chip">Pusat Pemerintahan: Soreang</span>
          </div>
          <div class="map-wrap">
            <iframe title="Peta Kabupaten Bandung" src="https://www.openstreetmap.org/export/embed.html?bbox=107.05%2C-7.35%2C108.00%2C-6.80&layer=mapnik&marker=-7.025%2C107.518" loading="lazy"></iframe>
          </div>
          <p class="subtitle">Wilayah layanan DPMPTSP mencakup Kabupaten Bandung. <a href="https://www.openstreetmap.org/?mlat=-7.025&mlon=107.518#map=11/-7.025/107.518" target="_blank" rel="noopener">Buka peta lebih besar</a>.</p>
        </section>
      </section>

      <section class="view-panel" data-panel="perizinan">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Data Perizinan Berusaha (OSS/NIB)</h4></div><span class="chip">Data tahun 2021–2026</span></div>
          <p class="subtitle" style="margin-top:-0.4rem;">Informasi dan rekap perizinan berusaha berdasarkan tahun.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Nama Pemohon</th><th>Jenis Izin</th><th>Tahun</th><th>Status</th></tr></thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="nonberusaha">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Data Perizinan Non-Berusaha</h4></div><span class="chip">Rekap 2021–2026</span></div>
          <p class="subtitle" style="margin-top:-0.4rem;">Akses informasi perizinan non-berusaha (kesehatan, pendidikan, reklame, PBG, dll.) beserta status dan tahun permohonan.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Jenis Perizinan</th><th>Pemohon</th><th>Tahun</th><th>Status</th></tr></thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="oss-rba">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Layanan</p><h4>OSS RBA</h4></div><span class="chip">Online Single Submission</span></div>
          <p class="subtitle" style="margin-top:-0.4rem;">Layanan perizinan berusaha terintegrasi secara elektronik (Risk Based Approach) untuk pelaku usaha di Kabupaten Bandung.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Nama Usaha</th><th>Skala Usaha</th><th>Tahun</th><th>Status</th></tr></thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="oss-rba-dp-proyek">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">OSS RBA</p><h4>DP Proyek</h4></div><span class="chip">Daftar Proyek</span></div>
          <p class="subtitle" style="margin-top:-0.4rem;">Daftar proyek usaha yang terdaftar pada sistem OSS RBA di Kabupaten Bandung.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Nama Proyek</th><th>Pelaku Usaha</th><th>Lokasi</th><th>Nilai Investasi</th><th>Status</th></tr></thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="oss-rba-nib">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">OSS RBA</p><h4>NIB</h4></div><span class="chip">Nomor Induk Berusaha</span></div>
          <p class="subtitle" style="margin-top:-0.4rem;">Daftar Nomor Induk Berusaha (NIB) yang diterbitkan melalui sistem OSS RBA.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Nomor NIB</th><th>Nama Usaha</th><th>Skala Usaha</th><th>Tanggal Terbit</th><th>Status</th></tr></thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="oss-rba-list-izin">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">OSS RBA</p><h4>List Izin</h4></div><span class="chip">Perizinan Berusaha</span></div>
          <p class="subtitle" style="margin-top:-0.4rem;">Daftar izin berusaha yang diterbitkan melalui sistem OSS RBA.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Jenis Izin</th><th>Nama Usaha</th><th>Kode KBLI</th><th>Tahun</th><th>Status</th></tr></thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="pbg">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Layanan</p><h4>Persetujuan Bangun Gedung (PBG)</h4></div><span class="chip">2021–2026</span></div>
          <p class="subtitle" style="margin-top:-0.4rem;">Layanan persetujuan bangunan gedung sesuai rencana tata ruang dan ketentuan teknis bangunan.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Nama Pemohon</th><th>Jenis Bangunan</th><th>Tahun</th><th>Status</th></tr></thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="lingkungan">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Layanan</p><h4>Persetujuan Lingkungan</h4></div><span class="chip">2021–2026</span></div>
          <p class="subtitle" style="margin-top:-0.4rem;">Layanan persetujuan lingkungan untuk kegiatan usaha yang memiliki dampak terhadap lingkungan.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Nama Pemohon</th><th>Jenis Dokumen</th><th>Tahun</th><th>Status</th></tr></thead>
              <tbody></tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="lacak">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Lacak Permohonan</h4></div><span class="chip">Online</span></div>
          <p class="subtitle">Masukkan nomor pendaftaran untuk memantau posisi berkas dan status perizinan Anda.</p>
          <form class="form" id="trackForm" onsubmit="return false;" style="max-width:520px;">
            <label>Nomor Pendaftaran<input type="text" id="trackNo" placeholder="Contoh: REG-2026-00123" /></label>
            <button class="btn btn-dark" type="submit">Cek Status</button>
          </form>
          <div class="panel" id="trackResult" style="margin-top:1rem;display:none;background:var(--surface-soft);box-shadow:none;">
            <p class="req-name" id="trackTitle" style="margin-bottom:0.25rem;"></p>
            <p class="subtitle" id="trackDetail" style="margin:0;"></p>
          </div>
        </section>
      </section>
      <section class="view-panel" data-panel="pelayanan">
        <section class="stats-grid">
          <article class="stat-card"><p class="stat-label">Jam Layanan</p><h3>08:00–15:00</h3><p class="stat-trend neutral">Senin–Jumat</p></article>
          <article class="stat-card"><p class="stat-label">Loket Aktif</p><h3>4</h3><p class="stat-trend up">Siap melayani</p></article>
          <article class="stat-card"><p class="stat-label">Antrian Saat Ini</p><h3>12</h3><p class="stat-trend neutral">Estimasi 30 menit</p></article>
        </section>
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Alur Pelayanan Perizinan</h4></div><span class="chip">Online & Offline</span></div>
          <ol class="list-simple">
            <li>Pendaftaran/permohonan online atau pengambilan nomor antrean.</li>
            <li>Unggah & verifikasi berkas persyaratan oleh petugas.</li>
            <li>Proses pemeriksaan teknis, koordinasi, dan input sistem.</li>
            <li>Penerbitan izin/persetujuan serta unduh dokumen secara online.</li>
          </ol>
        </section>
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Informasi</p><h4>Kontak & Layanan</h4></div></div>
          <ul class="list-simple">
            <li><b>Alamat:</b> Komplek Perkantoran Pemerintah Kabupaten Bandung, Soreang, Jawa Barat.</li>
            <li><b>Telepon:</b> (022) 000-0000 &nbsp;|&nbsp; <b>Email:</b> dpmptsp@bandungkab.go.id</li>
            <li><b>Jam Kerja:</b> Senin–Kamis 07:30–16:00 WIB, Jumat 07:30–11:30 WIB.</li>
          </ul>
        </section>
      </section>
      <section class="view-panel" data-panel="laporan">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Laporan & Statistik</h4></div><span class="chip">Ringkasan 2021–2026</span></div>
          <div class="stats-grid stats-compact" style="margin-bottom:1rem;">
            <article class="stat-card"><p class="stat-label">Total Permohonan 2026</p><h3>5.430</h3><p class="stat-trend up">YTD</p></article>
            <article class="stat-card"><p class="stat-label">Izin Terbit</p><h3>4.812</h3><p class="stat-trend up">88,6%</p></article>
            <article class="stat-card"><p class="stat-label">Rata-rata Waktu</p><h3>1,9 Hari</h3><p class="stat-trend up">Membaik</p></article>
            <article class="stat-card"><p class="stat-label">IKM Kepuasan</p><h3>89,4</h3><p class="stat-trend up">Sangat Baik</p></article>
          </div>
          <ul class="list-simple">
            <li>Laporan harian permohonan perizinan dan antrean layanan.</li>
            <li>Laporan bulanan realisasi pelayanan dan penerbitan izin.</li>
            <li>Laporan kinerja waktu penyelesaian (SLA) per jenis izin.</li>
            <li>Rekap pengaduan, tindak lanjut, dan survei kepuasan masyarakat.</li>
          </ul>
        </section>
      </section>
      <section class="view-panel" data-panel="investasi">
        <section class="stats-grid">
          <article class="stat-card"><p class="stat-label">Realisasi Investasi (YTD)</p><h3>Rp 1,2T</h3><p class="stat-trend up">+5% YoY</p></article>
          <article class="stat-card"><p class="stat-label">Proyek Masuk</p><h3>34</h3><p class="stat-trend neutral">Periode berjalan</p></article>
          <article class="stat-card"><p class="stat-label">Penyerapan Tenaga Kerja</p><h3>1.240</h3><p class="stat-trend up">Orang</p></article>
        </section>
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Data & Realisasi Investasi</h4></div><span class="chip">2021–2026</span></div>
          <p class="subtitle">Eksplorasi data statistik realisasi investasi dan sebaran proyek di wilayah Kabupaten Bandung (contoh tampilan).</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>Tahun</th><th>Realisasi</th><th>Proyek</th><th>Tenaga Kerja</th></tr></thead>
              <tbody>
                <tr><td>2026</td><td>Rp 1,2T</td><td>34</td><td>1.240</td></tr>
                <tr><td>2025</td><td>Rp 4,8T</td><td>128</td><td>4.980</td></tr>
                <tr><td>2024</td><td>Rp 4,1T</td><td>115</td><td>4.320</td></tr>
                <tr><td>2023</td><td>Rp 3,6T</td><td>102</td><td>3.870</td></tr>
                <tr><td>2022</td><td>Rp 3,1T</td><td>94</td><td>3.410</td></tr>
                <tr><td>2021</td><td>Rp 2,7T</td><td>86</td><td>3.050</td></tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>
      <section class="view-panel" data-panel="pengaduan">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Pengaduan Masyarakat</h4></div><span class="chip">Layanan</span></div>
          <ul class="list-simple">
            <li>Saluran pengaduan: kantor DPMPTSP, telepon, dan email resmi.</li>
            <li>Pengaduan diproses sesuai SOP dan ditindaklanjuti maksimal 3x24 jam (contoh).</li>
          </ul>
          <form class="form" onsubmit="return false;">
            <label>Nama Pelapor<input type="text" placeholder="Nama lengkap" /></label>
            <label>Isi Pengaduan<textarea rows="4" placeholder="Tulis pengaduan..." style="width:100%;padding:0.7rem 0.75rem;border:1px solid var(--line);border-radius:10px;font:inherit;"></textarea></label>
            <button class="btn btn-dark" type="submit">Kirim Pengaduan</button>
          </form>
        </section>
      </section>
      <section class="view-panel" data-panel="dokumen">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Dokumen & Regulasi</h4></div><span class="chip">Unduhan</span></div>
          <p class="subtitle">Kumpulan regulasi, SOP, dan formulir terkait pelayanan perizinan dan penanaman modal.</p>
          <ul class="list-simple">
            <li>Peraturan Daerah tentang Penanaman Modal dan Pelayanan Terpadu.</li>
            <li>SOP Pelayanan Perizinan Berusaha dan Non-Berusaha.</li>
            <li>Standar Pelayanan (SP) dan Maklumat Pelayanan.</li>
            <li>Daftar Persyaratan Perizinan per Sektor/Jenis Izin.</li>
            <li>Formulir Permohonan dan Checklist Berkas (contoh).</li>
          </ul>
        </section>
      </section>

      <section class="view-panel" data-panel="survey">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Survei Kepuasan Masyarakat</h4></div><span class="chip">IKM</span></div>
          <p class="subtitle">Bantu kami meningkatkan kualitas layanan dengan mengisi survei kepuasan berikut.</p>
          <div class="stats-grid stats-compact" style="margin-bottom:1rem;">
            <article class="stat-card"><p class="stat-label">Nilai IKM</p><h3>89,4</h3><p class="stat-trend up">Sangat Baik</p></article>
            <article class="stat-card"><p class="stat-label">Responden</p><h3>3.452</h3><p class="stat-trend neutral">Tahun 2026</p></article>
          </div>
          <form class="form" id="surveyForm" onsubmit="return false;" style="max-width:560px;">
            <label>Jenis Layanan
              <select id="surveyService" style="width:100%;padding:0.7rem 0.75rem;border:1px solid var(--line);border-radius:10px;font:inherit;background:var(--surface-soft);color:var(--ink);">
                <option>Perizinan Berusaha</option>
                <option>Perizinan Non-Berusaha</option>
                <option>Pengaduan</option>
                <option>Informasi & Konsultasi</option>
              </select>
            </label>
            <label>Penilaian Kepuasan
              <select id="surveyScore" style="width:100%;padding:0.7rem 0.75rem;border:1px solid var(--line);border-radius:10px;font:inherit;background:var(--surface-soft);color:var(--ink);">
                <option>Sangat Puas</option>
                <option>Puas</option>
                <option>Cukup</option>
                <option>Kurang</option>
              </select>
            </label>
            <label>Saran/Masukan<textarea id="surveyNote" rows="3" placeholder="Tulis saran Anda..."></textarea></label>
            <button class="btn btn-dark" type="submit">Kirim Survei</button>
            <p class="subtitle login-msg" id="surveyMsg"></p>
          </form>
        </section>
      </section>
      <section class="view-panel" data-panel="login">
        <div class="login-wrap">
          <div class="login-card">
            <aside class="login-aside">
              <div class="login-logo" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 3l7 3v5c0 4.4-2.9 8.3-7 9.5-4.1-1.2-7-5.1-7-9.5V6l7-3z" />
                  <path d="M9 12l2 2 4-4" />
                </svg>
              </div>
              <p class="login-kicker">Pemerintah Kabupaten Bandung</p>
              <h4 class="login-aside-title">DPMPTSP</h4>
              <p class="login-aside-sub">Dinas Penanaman Modal &amp; Pelayanan Terpadu Satu Pintu</p>
              <ul class="login-points">
                <li>Kelola permohonan &amp; perizinan</li>
                <li>Pantau antrean layanan</li>
                <li>Akses laporan &amp; statistik</li>
              </ul>
              <p class="login-aside-foot">Akses terbatas untuk pegawai berwenang.</p>
            </aside>

            <div class="login-main">
              <div class="login-head">
                <span class="login-badge">Area Dinas</span>
                <h4 class="login-title">Masuk ke Akun</h4>
                <p class="login-sub">Gunakan akun resmi OPD untuk melanjutkan ke sistem.</p>
              </div>

              <form class="form login-form" id="loginForm" onsubmit="return false;">
                <label class="field">
                  <span class="field-label">Username / NIP</span>
                  <span class="field-control">
                    <svg class="field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <circle cx="12" cy="8" r="3.4" />
                      <path d="M5 20a7 7 0 0 1 14 0" />
                    </svg>
                    <input type="text" id="loginUser" placeholder="contoh: admin.dpmptsp" autocomplete="username" required />
                  </span>
                </label>

                <label class="field">
                  <span class="field-label">Password</span>
                  <span class="field-control">
                    <svg class="field-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <rect x="4.5" y="10.5" width="15" height="9.5" rx="2.5" />
                      <path d="M8 10.5V8a4 4 0 0 1 8 0v2.5" />
                    </svg>
                    <input type="password" id="loginPass" placeholder="Masukkan password" autocomplete="current-password" required />
                    <button class="field-toggle" id="togglePass" type="button" aria-label="Tampilkan password">Lihat</button>
                  </span>
                </label>

                <div class="login-row">
                  <label class="login-remember"><input type="checkbox" id="rememberMe" /> Ingat saya</label>
                  <a class="login-forgot" href="#" onclick="return false;">Lupa password?</a>
                </div>

                <button class="btn btn-dark btn-login" type="submit">
                  <span>Masuk ke Sistem</span>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14" />
                    <path d="M13 6l6 6-6 6" />
                  </svg>
                </button>

                <p class="login-hint">Akses diaudit untuk keamanan data.</p>
                <p class="subtitle login-msg" id="loginMsg" role="status"></p>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="view-panel" data-panel="realisasi-investasi">
        <section class="stats-grid">
          <article class="stat-card"><p class="stat-label">Realisasi Investasi (YTD)</p><h3>Rp 1,2T</h3><p class="stat-trend up">+5% YoY</p></article>
          <article class="stat-card"><p class="stat-label">Target Tahunan</p><h3>Rp 4,8T</h3><p class="stat-trend neutral">Realisasi 25%</p></article>
          <article class="stat-card"><p class="stat-label">Proyek Aktif</p><h3>34</h3><p class="stat-trend up">Berjalan</p></article>
        </section>
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Statistik</p><h4>Realisasi Investasi per Tahun</h4></div><span class="chip">2021–2026</span></div>
          <div class="yearly-grid">
            <div class="yearly-item"><span>2021</span><strong>Rp 2,7T</strong></div>
            <div class="yearly-item"><span>2022</span><strong>Rp 3,1T</strong></div>
            <div class="yearly-item"><span>2023</span><strong>Rp 3,6T</strong></div>
            <div class="yearly-item"><span>2024</span><strong>Rp 4,1T</strong></div>
            <div class="yearly-item"><span>2025</span><strong>Rp 4,8T</strong></div>
            <div class="yearly-item active"><span>2026</span><strong>Rp 1,2T</strong></div>
          </div>
        </section>
        <section class="panel panel-chart">
          <div class="panel-head" style="flex-wrap:wrap;">
            <div><p class="eyebrow">Diagram</p><h4>Diagram Batang Realisasi Investasi</h4></div>
            <div class="year-filter" id="realisasiYearFilter">
              <button class="year-btn" type="button" data-year="2021">2021</button>
              <button class="year-btn" type="button" data-year="2022">2022</button>
              <button class="year-btn" type="button" data-year="2023">2023</button>
              <button class="year-btn" type="button" data-year="2024">2024</button>
              <button class="year-btn" type="button" data-year="2025">2025</button>
              <button class="year-btn active" type="button" data-year="2026">2026</button>
            </div>
          </div>
          <div class="bars bars-values" id="realisasiBars" style="grid-template-columns: repeat(6, 1fr);"></div>
          <p class="subtitle" id="realisasiCaption" style="margin-top:0.9rem;"></p>
        </section>
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Data Realisasi Investasi</h4></div><span class="chip">2021–2026</span></div>
          <p class="subtitle">Rekap realisasi investasi PMDN dan PMA di Kabupaten Bandung (contoh data).</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>Tahun</th><th>PMDN</th><th>PMA</th><th>Total Realisasi</th><th>Proyek</th></tr></thead>
              <tbody>
                <tr><td>2026</td><td>Rp 900M</td><td>Rp 300M</td><td>Rp 1,2T</td><td>34</td></tr>
                <tr><td>2025</td><td>Rp 3,6T</td><td>Rp 1,2T</td><td>Rp 4,8T</td><td>128</td></tr>
                <tr><td>2024</td><td>Rp 3,1T</td><td>Rp 1,0T</td><td>Rp 4,1T</td><td>115</td></tr>
                <tr><td>2023</td><td>Rp 2,7T</td><td>Rp 0,9T</td><td>Rp 3,6T</td><td>102</td></tr>
                <tr><td>2022</td><td>Rp 2,4T</td><td>Rp 0,7T</td><td>Rp 3,1T</td><td>94</td></tr>
                <tr><td>2021</td><td>Rp 2,1T</td><td>Rp 0,6T</td><td>Rp 2,7T</td><td>86</td></tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="peta-potensi">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Data Peta Potensi</h4></div><span class="chip">Kabupaten Bandung</span></div>
          <p class="subtitle">Sebaran potensi investasi dan sektor unggulan di wilayah Kabupaten Bandung.</p>
          <div class="stats-grid stats-compact" style="margin-bottom:1rem;">
            <article class="stat-card"><p class="stat-label">Sektor Pertanian</p><h3>18</h3></article>
            <article class="stat-card"><p class="stat-label">Sektor Pariwisata</p><h3>24</h3></article>
            <article class="stat-card"><p class="stat-label">Sektor Industri</p><h3>31</h3></article>
            <article class="stat-card"><p class="stat-label">Sektor Perdagangan</p><h3>27</h3></article>
          </div>
          <div class="map-wrap">
            <iframe title="Peta Potensi Kabupaten Bandung" src="https://www.openstreetmap.org/export/embed.html?bbox=107.05%2C-7.35%2C108.00%2C-6.80&layer=mapnik&marker=-7.025%2C107.518" loading="lazy"></iframe>
          </div>
          <ul class="list-simple" style="margin-top:0.8rem;">
            <li><b>Pertanian & Hortikultura:</b> sentra sayur dan buah di kawasan dataran tinggi.</li>
            <li><b>Pariwisata:</b> wisata alam, agrowisata, dan desa wisata.</li>
            <li><b>Industri:</b> kawasan industri tekstil, makanan olahan, dan kerajinan.</li>
            <li><b>Perdagangan & Jasa:</b> pusat perdagangan dan jasa di kawasan perkotaan.</li>
          </ul>
        </section>
      </section>

      <section class="view-panel" data-panel="kemitraan">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Data Kemitraan</h4></div><span class="chip">Investasi</span></div>
          <p class="subtitle">Daftar kemitraan usaha dan kerja sama investasi daerah (contoh data).</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Mitra</th><th>Sektor</th><th>Bentuk Kemitraan</th><th>Tahun</th><th>Status</th></tr></thead>
              <tbody>
                <tr><td>1</td><td>PT Bandung Agro Lestari</td><td>Pertanian</td><td>Kerja Sama Operasi</td><td>2026</td><td><span class="status s-progress">Proses</span></td></tr>
                <tr><td>2</td><td>CV Wisata Nusantara</td><td>Pariwisata</td><td>Joint Venture</td><td>2025</td><td><span class="status s-done">Aktif</span></td></tr>
                <tr><td>3</td><td>UD Karya Bersama</td><td>Perdagangan</td><td>Kemitraan UMKM</td><td>2024</td><td><span class="status s-done">Aktif</span></td></tr>
                <tr><td>4</td><td>PT Industri Sejahtera</td><td>Industri</td><td>Kerja Sama Operasi</td><td>2023</td><td><span class="status s-review">Verifikasi</span></td></tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="pengawasan">
        <section class="stats-grid">
          <article class="stat-card"><p class="stat-label">Objek Pengawasan</p><h3>214</h3><p class="stat-trend neutral">Periode 2026</p></article>
          <article class="stat-card"><p class="stat-label">Temuan</p><h3>37</h3><p class="stat-trend neutral">Perlu tindak lanjut</p></article>
          <article class="stat-card"><p class="stat-label">Tindak Lanjut</p><h3>32</h3><p class="stat-trend up">86% selesai</p></article>
        </section>
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Data Pengawasan</h4></div><span class="chip">2026</span></div>
          <p class="subtitle">Hasil pengawasan pelayanan dan kepatuhan perizinan (contoh data).</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Objek Pengawasan</th><th>Tanggal</th><th>Temuan</th><th>Tindak Lanjut</th><th>Status</th></tr></thead>
              <tbody>
                <tr><td>1</td><td>Izin Reklame PT Media Jaya</td><td>2026-02-10</td><td>Reklame tidak sesuai izin</td><td>Peringatan tertulis</td><td><span class="status s-progress">Proses</span></td></tr>
                <tr><td>2</td><td>Klinik Sehat Sentosa</td><td>2026-01-22</td><td>Administrasi belum lengkap</td><td>Pembinaan</td><td><span class="status s-done">Selesai</span></td></tr>
                <tr><td>3</td><td>CV Karya Baja (PBG)</td><td>2026-01-15</td><td>Kesesuaian bangunan</td><td>Verifikasi lapangan</td><td><span class="status s-review">Verifikasi</span></td></tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="pengaduan-data">
        <section class="stats-grid">
          <article class="stat-card"><p class="stat-label">Total Pengaduan</p><h3>86</h3><p class="stat-trend neutral">Tahun 2026</p></article>
          <article class="stat-card"><p class="stat-label">Diproses</p><h3>14</h3><p class="stat-trend neutral">Dalam penanganan</p></article>
          <article class="stat-card"><p class="stat-label">Selesai</p><h3>72</h3><p class="stat-trend up">83,7%</p></article>
        </section>
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Data Pengaduan</h4></div><span class="chip">2026</span></div>
          <p class="subtitle">Rekap pengaduan masyarakat beserta status tindak lanjut (contoh data).</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>No</th><th>Tanggal</th><th>Kategori</th><th>Ringkasan</th><th>Status</th></tr></thead>
              <tbody>
                <tr><td>1</td><td>2026-03-04</td><td>Pelayanan</td><td>Antrean loket terlalu lama</td><td><span class="status s-progress">Diproses</span></td></tr>
                <tr><td>2</td><td>2026-02-19</td><td>Perizinan</td><td>Keterlambatan penerbitan izin</td><td><span class="status s-done">Selesai</span></td></tr>
                <tr><td>3</td><td>2026-02-02</td><td>Informasi</td><td>Informasi persyaratan belum jelas</td><td><span class="status s-done">Selesai</span></td></tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="dasar-hukum">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Informasi</p><h4>Dasar Hukum</h4></div><span class="chip">Regulasi</span></div>
          <p class="subtitle">Landasan hukum penyelenggaraan pelayanan perizinan dan penanaman modal.</p>
          <ul class="list-simple">
            <li>UU No. 25 Tahun 2007 tentang Penanaman Modal.</li>
            <li>UU No. 23 Tahun 2014 tentang Pemerintahan Daerah.</li>
            <li>Perpres No. 91 Tahun 2017 tentang Percepatan Pelaksanaan Berusaha.</li>
            <li>PP No. 24 Tahun 2018 tentang Pelayanan Perizinan Berusaha Terintegrasi Secara Elektronik.</li>
            <li>Perda Kabupaten Bandung tentang Penyelenggaraan Pelayanan Terpadu Satu Pintu.</li>
            <li>Perbup Kabupaten Bandung tentang Standar Pelayanan Perizinan.</li>
          </ul>
        </section>
      </section>

      <section class="view-panel" data-panel="ikm">
        <section class="stats-grid">
          <article class="stat-card"><p class="stat-label">Nilai IKM 2026</p><h3>89,4</h3><p class="stat-trend up">Sangat Baik</p></article>
          <article class="stat-card"><p class="stat-label">Responden</p><h3>3.452</h3><p class="stat-trend neutral">Tahun 2026</p></article>
          <article class="stat-card"><p class="stat-label">Kenaikan</p><h3>+2,1</h3><p class="stat-trend up">Dari tahun lalu</p></article>
        </section>
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Informasi</p><h4>Data IKM</h4></div><span class="chip">2021–2026</span></div>
          <p class="subtitle">Indeks Kepuasan Masyarakat (IKM) terhadap pelayanan DPMPTSP per tahun.</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>Tahun</th><th>Nilai IKM</th><th>Responden</th><th>Kategori</th></tr></thead>
              <tbody>
                <tr><td>2026</td><td>89,4</td><td>3.452</td><td><span class="status s-done">Sangat Baik</span></td></tr>
                <tr><td>2025</td><td>87,3</td><td>3.210</td><td><span class="status s-done">Sangat Baik</span></td></tr>
                <tr><td>2024</td><td>85,1</td><td>2.980</td><td><span class="status s-done">Baik</span></td></tr>
                <tr><td>2023</td><td>83,7</td><td>2.740</td><td><span class="status s-done">Baik</span></td></tr>
                <tr><td>2022</td><td>81,9</td><td>2.510</td><td><span class="status s-done">Baik</span></td></tr>
                <tr><td>2021</td><td>80,2</td><td>2.260</td><td><span class="status s-done">Baik</span></td></tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="ikm-index">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Informasi</p><h4>Indeks Kepuasan Masyarakat</h4></div><span class="chip">2026</span></div>
          <p class="subtitle">Nilai per unsur pelayanan berdasarkan survei kepuasan masyarakat (contoh data).</p>
          <div class="table-wrap">
            <table class="table">
              <thead><tr><th>Unsur Pelayanan</th><th>Nilai</th><th>Mutu</th></tr></thead>
              <tbody>
                <tr><td>Persyaratan Pelayanan</td><td>90,2</td><td><span class="status s-done">A</span></td></tr>
                <tr><td>Prosedur Pelayanan</td><td>88,7</td><td><span class="status s-done">A</span></td></tr>
                <tr><td>Waktu Penyelesaian</td><td>86,5</td><td><span class="status s-done">B</span></td></tr>
                <tr><td>Biaya/Tarif</td><td>91,0</td><td><span class="status s-done">A</span></td></tr>
                <tr><td>Produk Pelayanan</td><td>89,3</td><td><span class="status s-done">A</span></td></tr>
                <tr><td>Kompetensi Pelaksana</td><td>88,1</td><td><span class="status s-done">B</span></td></tr>
                <tr><td>Perilaku Pelaksana</td><td>90,4</td><td><span class="status s-done">A</span></td></tr>
                <tr><td>Penanganan Pengaduan</td><td>87,6</td><td><span class="status s-done">B</span></td></tr>
              </tbody>
            </table>
          </div>
        </section>
      </section>

      <section class="view-panel" data-panel="pengaturan">
        <section class="panel">
          <div class="panel-head"><div><p class="eyebrow">Menu</p><h4>Pengaturan</h4></div></div>
          <form class="form" onsubmit="return false;">
            <label>Nama Operator<input type="text" value="Admin DPMPTSP" /></label>
            <label>Unit Kerja<input type="text" value="Pelayanan Perizinan" /></label>
            <label>Notifikasi Email<input type="email" value="dpmptsp@daerah.go.id" /></label>
            <button class="btn btn-dark" type="submit">Simpan Pengaturan</button>
          </form>
        </section>
      </section>
@endsection

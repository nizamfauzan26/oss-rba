function updateClock() {
  const now = new Date();
  const timeText = new Intl.DateTimeFormat("id-ID", {
    timeZone: "Asia/Jakarta",
    hour: "2-digit",
    minute: "2-digit"
  }).format(now);
  const el = document.getElementById("serviceClock");
  if (el) el.textContent = `${timeText} WIB`;
}

function randomBetween(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

const weeklyData = {
  2021: [32, 40, 28, 45, 52, 38, 60],
  2022: [35, 44, 31, 49, 58, 41, 65],
  2023: [38, 50, 34, 55, 63, 46, 72],
  2024: [42, 54, 37, 60, 68, 49, 76],
  2025: [44, 57, 40, 64, 73, 52, 80],
  2026: [46, 58, 39, 66, 74, 51, 82],
};

function renderWeeklyBars(year) {
  const data = weeklyData[year] || weeklyData[2026];
  const bars = document.querySelectorAll("#weeklyBars .bar");
  const values = document.querySelectorAll("#weeklyBars .bar-val");
  bars.forEach((bar, i) => {
    const height = data[i] ?? 0;
    bar.style.height = `${height}%`;
    if (values[i]) values[i].textContent = String(height);
  });

  const yearlyItems = document.querySelectorAll("#yearlyTrendGrid .yearly-item");
  yearlyItems.forEach((item) => {
    const y = Number(item.querySelector("span")?.textContent || "0");
    item.classList.toggle("active", y === year);
  });
}

function refreshData() {
  const a = document.getElementById("permohonanHariIni");
  const b = document.getElementById("izinTerbit");
  const c = document.getElementById("dalamProses");
  const d = document.getElementById("waktuRataRata");
  if (a) a.textContent = String(randomBetween(90, 170));
  if (b) b.textContent = String(randomBetween(70, 150));
  if (c) c.textContent = String(randomBetween(10, 45));
  if (d) d.textContent = `${(Math.random() * 1.8 + 1).toFixed(1)} Hari`;

  const yearEl = document.getElementById("yearFilter");
  const year = yearEl ? Number(yearEl.value) : 2026;
  renderWeeklyBars(year);
}

function initMenu() {
  const menuLinks = document.querySelectorAll(".menu a[data-view]");
  const panels = document.querySelectorAll(".view-panel");
  const topbar = document.getElementById("topbar");
  const welcomeBlock = document.getElementById("welcomeBlock");
  const topActions = document.getElementById("topActions");

  function showView(view) {
    menuLinks.forEach((l) => l.classList.toggle("active", l.getAttribute("data-view") === view));
    panels.forEach((p) => {
      p.classList.toggle("active", p.getAttribute("data-panel") === view);
    });
    const isDashboard = view === "ringkasan";
    if (welcomeBlock) welcomeBlock.hidden = !isDashboard;
    if (topActions) topActions.hidden = !isDashboard;
    if (topbar) topbar.hidden = !isDashboard;
    document.querySelectorAll(".menu .submenu-toggle").forEach((toggle) => {
      toggle.classList.toggle("active", view.startsWith("oss-rba"));
    });

    if (view === "realisasi-investasi") {
      const active = document.querySelector("#realisasiYearFilter .year-btn.active");
      if (active) renderRealisasiBars(Number(active.getAttribute("data-year")));
    }
  }
  menuLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const view = link.getAttribute("data-view");
      if (view) showView(view);
    });
  });
  document.querySelectorAll(".menu .submenu-toggle").forEach((toggle) => {
    const group = toggle.closest(".menu-subgroup");
    const submenu = group ? group.querySelector(".submenu") : null;
    if (!submenu) return;
    toggle.addEventListener("click", () => {
      const isOpen = toggle.getAttribute("aria-expanded") === "true";
      toggle.setAttribute("aria-expanded", String(!isOpen));
      submenu.hidden = isOpen;
    });
  });
  const openLoginBtn = document.getElementById("openLoginBtn");
  if (openLoginBtn) {
    openLoginBtn.addEventListener("click", () => showView("login"));
  }
}

function initLogin() {
  const form = document.getElementById("loginForm");
  const msg = document.getElementById("loginMsg");
  if (!form) return;
  const user = document.getElementById("loginUser");
  const pass = document.getElementById("loginPass");
  const remember = document.getElementById("rememberMe");
  const toggle = document.getElementById("togglePass");

  if (toggle && pass) {
    toggle.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      const show = pass.type === "password";
      pass.type = show ? "text" : "password";
      toggle.textContent = show ? "Sembunyi" : "Lihat";
      toggle.setAttribute("aria-label", show ? "Sembunyikan password" : "Tampilkan password");
    });
  }

  try {
    const saved = localStorage.getItem("dpmptsp_user");
    if (saved && user && remember) {
      user.value = saved;
      remember.checked = true;
    }
  } catch (e) {}

  form.addEventListener("submit", () => {
    const u = user?.value?.trim();
    const p = pass?.value?.trim();
    if (!u || !p) {
      if (msg) { msg.style.color = "#b7791f"; msg.textContent = "Username dan password wajib diisi."; }
      return;
    }
    try {
      if (remember?.checked) {
        localStorage.setItem("dpmptsp_user", u);
      } else {
        localStorage.removeItem("dpmptsp_user");
      }
    } catch (e) {}
    if (msg) { msg.style.color = "#2f7f56"; msg.textContent = `Login berhasil (demo): ${u}`; }
  });
}

function initTracking() {
  const form = document.getElementById("trackForm");
  const result = document.getElementById("trackResult");
  if (!form || !result) return;
  form.addEventListener("submit", () => {
    const no = document.getElementById("trackNo")?.value?.trim();
    const title = document.getElementById("trackTitle");
    const detail = document.getElementById("trackDetail");
    if (!no) {
      result.style.display = "block";
      if (title) title.textContent = "Nomor belum diisi";
      if (detail) detail.textContent = "Masukkan nomor pendaftaran untuk melihat status permohonan.";
      return;
    }
    result.style.display = "block";
    if (title) title.textContent = `Status: ${no}`;
    if (detail) detail.textContent = "Berkas dalam tahap verifikasi dokumen (contoh/demo). Estimasi penyelesaian 2–3 hari kerja.";
  });
}

function initSurvey() {
  const form = document.getElementById("surveyForm");
  const msg = document.getElementById("surveyMsg");
  if (!form) return;
  form.addEventListener("submit", () => {
    if (msg) { msg.style.color = "#2f7f56"; msg.textContent = "Terima kasih. Survei kepuasan Anda telah tercatat (demo)."; }
    form.reset();
  });
}

const realisasiData = {
  2021: 2700,
  2022: 3100,
  2023: 3600,
  2024: 4100,
  2025: 4800,
  2026: 1200
};

const yearList = [2021, 2022, 2023, 2024, 2025, 2026];

function formatTriliun(value) {
  return `${(value / 1000).toFixed(1).replace(".", ",")}T`;
}

function renderRealisasiBars(year) {
  const container = document.getElementById("realisasiBars");
  const caption = document.getElementById("realisasiCaption");
  if (!container) return;

  const maxTotal = Math.max(...Object.values(realisasiData), 1);

  container.innerHTML = "";
  yearList.forEach((y) => {
    const value = realisasiData[y] || 0;

    const item = document.createElement("div");
    item.className = `bar-item${y === year ? " active" : ""}`;

    const valueEl = document.createElement("span");
    valueEl.className = "bar-val";
    valueEl.textContent = formatTriliun(value);

    const bar = document.createElement("span");
    bar.className = "bar";
    bar.style.height = "6%";

    const label = document.createElement("small");
    label.textContent = String(y);

    item.append(valueEl, bar, label);
    container.appendChild(item);

    requestAnimationFrame(() => {
      const height = Math.min(96, Math.max(6, (value / maxTotal) * 96));
      bar.style.height = `${height}%`;
    });
  });

  if (caption) {
    caption.textContent = `Realisasi tahun ${year}: Rp ${formatTriliun(realisasiData[year] || 0)}. Tinggi batang disesuaikan dengan total realisasi setiap tahun.`;
  }
}

function initRealisasiChart() {
  const filter = document.getElementById("realisasiYearFilter");
  const container = document.getElementById("realisasiBars");
  if (!filter || !container) return;

  const buttons = filter.querySelectorAll(".year-btn");
  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      buttons.forEach((b) => b.classList.toggle("active", b === button));
      renderRealisasiBars(Number(button.getAttribute("data-year")));
    });
  });

  const active = filter.querySelector(".year-btn.active") || buttons[0];
  if (active) renderRealisasiBars(Number(active.getAttribute("data-year")));
}

updateClock();
setInterval(updateClock, 1000 * 30);
initMenu();
initLogin();
initTracking();
initSurvey();
initRealisasiChart();

function downloadReport() {
  const get = (id) => document.getElementById(id)?.textContent?.trim() || "-";
  const year = document.getElementById("yearFilter")?.value || "2026";
  const rows = [
    ["Laporan Ringkasan DPMPTSP"],
    ["Tanggal", new Date().toLocaleString("id-ID")],
    ["Tahun", year],
    [],
    ["Indikator", "Nilai"],
    ["Permohonan Hari Ini", get("permohonanHariIni")],
    ["Izin Terbit", get("izinTerbit")],
    ["Dalam Proses", get("dalamProses")],
    ["Waktu Rata-rata", get("waktuRataRata")]
  ];
  const csv = rows
    .map((row) => row.map((cell) => `"${String(cell).replace(/"/g, '""')}"`).join(","))
    .join("\r\n");
  const blob = new Blob(["\uFEFF" + csv], { type: "text/csv;charset=utf-8;" });
  const url = URL.createObjectURL(blob);
  const link = document.createElement("a");
  link.href = url;
  link.download = `laporan-dpmptsp-${year}.csv`;
  document.body.appendChild(link);
  link.click();
  link.remove();
  URL.revokeObjectURL(url);
}

const refreshBtn = document.getElementById("refreshBtn");
if (refreshBtn) {
  refreshBtn.addEventListener("click", () => {
    refreshData();
    const original = refreshBtn.textContent;
    refreshBtn.textContent = "Diperbarui";
    refreshBtn.disabled = true;
    setTimeout(() => {
      refreshBtn.textContent = original;
      refreshBtn.disabled = false;
    }, 1200);
  });
}
const downloadBtn = document.getElementById("downloadReportBtn");
if (downloadBtn) downloadBtn.addEventListener("click", downloadReport);
const yearFilter = document.getElementById("yearFilter");
if (yearFilter) {
  yearFilter.addEventListener("change", refreshData);
  renderWeeklyBars(Number(yearFilter.value) || 2026);
}
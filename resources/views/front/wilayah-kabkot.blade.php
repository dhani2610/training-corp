@extends('layouts.front')

@section('title', 'Training Corp ' . $kabkotName . ' | Pelatihan & Sertifikasi Profesional')
@section('meta_description', 'Pusat informasi dan pendaftaran resmi program pelatihan Training Corp di ' . $kabkotName . ', ' . $province['name'] . '. Hubungi WhatsApp 081399810272.')

@section('content')

    <!-- HERO KABKOT -->
    <section class="hero-section" style="padding: 48px 0 44px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #34d399; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('wilayah.provinsi', $province['slug']) }}" style="color: #cbd5e1;">Provinsi {{ $province['name'] }}</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">{{ $kabkotName }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-geo-alt-fill"></i> {{ $kabkotName }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(37, 99, 235, 0.2); border-color: #38bdf8; color: #34d399;">
                    <i class="bi bi-diagram-3-fill"></i> {{ count($kecamatanList) }} Kecamatan
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(37, 99, 235, 0.2); border-color: #2563eb; color: #34d399;">
                    <i class="bi bi-shield-check"></i> 350+ Program Pelatihan & Sertifikasi
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.35rem; line-height: 1.25; margin-bottom: 14px;">
                Training Corp <span>{{ $kabkotName }}</span>
            </h1>

            <p class="hero-lead" style="margin-left: 0; max-width: 880px; margin-bottom: 22px;">
                Penyelenggaraan program training kompetensi Operator Keselamatan & Kesehatan Kerja Korporat (Training Corp) di {{ $kabkotName }}, Provinsi {{ $province['name'] }}. Menguasai standar manajemen keselamatan kerja, keselamatan tempat kerja (Auditor SMK3), operasional menara (Analis Risiko HIRADC), pengendalian tekanan sumur (Manajemen Risiko K3 ISO 45001 & IADC), pengujian BOP bertekanan tinggi, dan formulasi keselamatan proses industri (Pengurus P2K3 Bipartit).
            </p>

            <div class="hero-cta" style="justify-content: flex-start; margin-bottom: 0;">
                <a href="{{ $waLink }}" target="_blank" class="btn-primary-green">
                    <i class="bi bi-whatsapp"></i>
                    Konsultasi Wilayah {{ $kabkotName }}
                </a>
                <a href="#kecamatan-list" class="btn-outline-white">
                    <i class="bi bi-pin-map-fill"></i>
                    Lihat Daftar Kecamatan
                </a>
            </div>
        </div>
    </section>

    <!-- PROGRAM PROGRAM TRAINING DI KABKOT INI -->
    <section class="section-py">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">6 Program Resmi di {{ $kabkotName }}</span>
                <h2 class="section-title">Pilih Jenjang Program Training Pelatihan & Sertifikasi Kompetensi Profesional Terpadu</h2>
                <p class="section-desc">
                    Tersedia 8 program training profesional yang masing-masing memiliki panduan lingkup pengerjaan dan spesifikasi teknis di {{ $kabkotName }}:
                </p>
            </div>

            <div class="programs-grid" style="margin-bottom: 48px;">
                @foreach($programs as $prog)
                    @php
                        $progObj = (object)$prog;
                        $progDetailUrl = route('wilayah.kabkot.program', [$province['slug'], $kabkotSlug, $progObj->slug]);
                    @endphp
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="{{ $progObj->image ?? 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $progObj->title }}" class="program-img" loading="lazy">
                            <span class="program-badge">{{ $progObj->badge ?? 'Sertifikasi Resmi' }}</span>
                        </div>

                        <div class="program-body">
                            <div class="program-level">{{ $progObj->level_name ?? 'Training Corp & Rekayasa Sistem Daya' }}</div>
                            <h3 class="program-title">{{ $progObj->title }}</h3>
                            <p class="program-desc">
                                {{ Str::limit($progObj->short_description ?? ($progObj->full_description ?? ''), 125) }}
                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-geo-alt" style="color: #2563eb;"></i> {{ $kabkotName }}</div>
                                <div><i class="bi bi-journal-check" style="color: #2563eb;"></i> Modul Panduan Lengkap</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ $progDetailUrl }}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.84rem; padding: 10px 14px;">
                                    <i class="bi bi-collection-play-fill"></i> Buka Direktori Panduan {{ $kabkotName }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- 4 WHATSAPP HOTLINES -->
            <div class="wa-hotlines-box" style="margin-bottom: 48px;">
                <div class="wa-hotlines-header">
                    <h3><i class="bi bi-telephone-inbound-fill" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan di {{ $kabkotName }}</h3>
                    <p>Hubungi petugas spesialis kami untuk survei lokasi, estimasi anggaran proyek, atau pengerjaan on-site di pabrik Anda:</p>
                </div>

                <div class="wa-hotlines-grid">
                    @foreach($waNumbers as $hotline)
                        <a href="{{ $hotline['url'] }}" target="_blank" class="wa-hotline-card">
                            <div class="wa-hotline-top">
                                <div class="wa-hotline-icon">
                                    <i class="bi {{ $hotline['icon'] }}"></i>
                                </div>
                                <span class="wa-hotline-badge">{{ $hotline['badge'] }}</span>
                            </div>
                            <div class="wa-hotline-title">{{ $hotline['title'] }}</div>
                            <div class="wa-hotline-desc">{{ $hotline['desc'] }}</div>
                            <div class="wa-hotline-phone">
                                <i class="bi bi-whatsapp"></i> {{ $hotline['number'] }}
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- DAFTAR KECAMATAN (SEBELUM ARTIKEL AGAR AKSES CEPAT TANPA SCROLL JAUH) -->
            <div id="kecamatan-list" style="background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%); border: 2px solid #34d399; border-radius: var(--radius-xl); padding: 32px; margin-bottom: 48px; box-shadow: 0 10px 30px -5px rgba(37, 99, 235, 0.1);">
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px; flex-wrap: wrap; gap: 12px;">
                    <div>
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                            <a href="{{ route('wilayah.provinsi', $province['slug']) }}" style="font-size: 0.78rem; font-weight: 700; color: #064e3b; background: #ecfdf5; border: 1px solid #34d399; padding: 4px 10px; border-radius: 6px; text-decoration: none;">
                                <i class="bi bi-arrow-left"></i> Provinsi {{ $province['name'] }}
                            </a>
                            <span style="font-size: 0.78rem; font-weight: 800; background: #0a0e1a; color: #34d399; padding: 4px 12px; border-radius: 20px;">
                                <i class="bi bi-pin-map-fill"></i> {{ count($kecamatanList) }} Kecamatan
                            </span>
                        </div>
                        <h2 style="font-size: 1.45rem; font-weight: 800; color: #0a0e1a; margin: 0;">
                            Pilih Kecamatan di {{ $kabkotName }}
                        </h2>
                    </div>
                    <div style="font-size: 0.84rem; color: #064e3b; font-weight: 700; background: #ecfdf5; padding: 6px 14px; border-radius: 8px; border: 1px solid #34d399;">
                        <i class="bi bi-geo-alt-fill"></i> Langsung ke materi & layanan lokal
                    </div>
                </div>

                <p style="font-size: 0.88rem; color: #475569; line-height: 1.6; margin-bottom: 20px;">
                    Pilih kecamatan di bawah ini untuk membuka lingkup pengerjaan, spesifikasi teknis, dan jadwal pelaksanaan program training Training Corp (Training Corp, Akuntansi, Perpajakan, Offshore Migas, Teknik Sipil, Mesin & Manajemen Mutu) khusus area {{ $kabkotName }}:
                </p>

                <!-- Filter Pencarian Cepat Nama Kecamatan -->
                <div style="margin-bottom: 20px; position: relative; max-width: 480px;">
                    <i class="bi bi-search" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #94a3b8;"></i>
                    <input type="text" id="filterKecamatanInput" class="form-control" placeholder="Cari nama Kecamatan di {{ $kabkotName }}..." style="padding: 10px 14px 10px 38px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.88rem; width: 100%;">
                </div>

                <!-- Grid Buttons Kecamatan -->
                <div id="kecamatanGridContainer" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(210px, 1fr)); gap: 12px;">
                    @foreach($kecamatanList as $kec)
                        @php
                            $kecSlug = Str::slug($kec);
                            $kecUrl = route('wilayah.kecamatan', [$province['slug'], $kabkotSlug, $kecSlug]);
                        @endphp
                        <a href="{{ $kecUrl }}" class="province-chip kecamatan-card-item" data-name="{{ strtolower($kec) }}" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 12px 16px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; text-decoration: none; transition: all 0.2s ease;">
                            <span style="font-size: 0.88rem; font-weight: 700; color: #131b2e;"><i class="bi bi-pin-map-fill" style="color: #2563eb; margin-right: 8px;"></i> Kec. {{ $kec }}</span>
                            <i class="bi bi-arrow-right-short" style="color: #2563eb; font-size: 1.25rem;"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- MODUL ARTIKEL REGIONAL DIRECTORY VIA JS -->
            <div id="daftar-artikel-wilayah" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; margin-bottom: 48px; box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                <!-- Quick Anchor Banner to Kecamatan -->
                <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 12px 18px; margin-bottom: 22px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
                    <div style="display: flex; align-items: center; gap: 10px; font-size: 0.86rem; color: #1e1b4b;">
                        <i class="bi bi-compass-fill" style="color: #2563eb; font-size: 1.1rem;"></i>
                        <span>Ingin memilih kecamatan spesifik di {{ $kabkotName }}?</span>
                    </div>
                    <a href="#kecamatan-list" class="btn-sm" style="background: #ecfdf5; color: #064e3b; border: 1px solid #34d399; border-radius: 6px; padding: 6px 14px; font-weight: 700; font-size: 0.82rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                        <i class="bi bi-arrow-up-circle-fill"></i> Lihat Daftar Kecamatan di Atas
                    </a>
                </div>

                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px; border-bottom: 1px solid #f1f5f9; padding-bottom: 16px; flex-wrap: wrap; gap: 10px;">
                    <div>
                        <span class="section-tag" style="margin-bottom: 6px;">Direktori Panduan Teknis</span>
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #0a0e1a; margin: 0;">
                            Direktori Panduan Training Corp di {{ $kabkotName }}
                        </h2>
                    </div>
                    <span style="font-size: 0.8rem; font-weight: 700; color: #064e3b; background: #ecfdf5; padding: 6px 14px; border-radius: 20px; border: 1px solid #34d399;">
                        <i class="bi bi-shield-check"></i> Sertifikasi Kompetensi Training Corp
                    </span>
                </div>

                <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin-bottom: 24px;">
                    Pilih salah satu topik di bawah ini untuk membaca ulasan panduan komprehensif mengenai keselamatan manajemen keselamatan kerja pemboran, pengendalian tekanan sumur (Manajemen Risiko K3 ISO 45001/IADC), sirkulasi lumpur keselamatan kerja, pencegahan kick formasi, dan penanganan pipa bor di {{ $kabkotName }}:
                </p>

                @php
                    $articlesJson = [];
                    if(isset($articles) && count($articles) > 0) {
                        foreach($articles as $idx => $art) {
                            $artObj = is_array($art) ? (object)$art : $art;
                            $u = route('article.detail', $artObj->slug);
                            $articlesJson[] = [
                                'index' => $idx + 1,
                                'title' => $artObj->title,
                                'url' => $u,
                                'excerpt' => $artObj->excerpt ?? Str::limit(strip_tags($artObj->content ?? ''), 140),
                                'region' => $kabkotName ?? ($province['name'] ?? 'Indonesia'),
                            ];
                        }
                    }
                @endphp

                <!-- Controls: Live Search + Items Per Page -->
                <div style="display: flex; gap: 12px; margin-bottom: 20px; flex-wrap: wrap;">
                    <div style="flex: 1; min-width: 240px; position: relative;">
                        <i class="bi bi-search" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #94a3b8;"></i>
                        <input type="text" id="articleSearchInput" class="form-control" placeholder="Cari topik modul di {{ $kabkotName }} (misal: Training Corp, Manajemen Risiko K3, Auditor SMK3, Pengurus P2K3 Bipartit, BOP)..." style="padding: 11px 16px 11px 38px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.9rem; width: 100%;">
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <label style="font-size: 0.82rem; font-weight: 700; color: #475569; white-space: nowrap;">Tampilkan:</label>
                        <select id="perPageSelect" class="form-control" style="width: auto; padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; font-size: 0.86rem; font-weight: 600;">
                            <option value="10" selected>10 Modul / Hal</option>
                            <option value="20">20 Modul / Hal</option>
                            <option value="50">50 Modul / Hal</option>
                        </select>
                    </div>
                </div>

                <!-- Info Count -->
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; font-size: 0.82rem; color: #64748b;">
                    <div id="pagingInfoText">Memuat direktori panduan teknis...</div>
                    <div id="activePageBadge" style="font-weight: 700; color: #064e3b;">Halaman 1</div>
                </div>

                <!-- DYNAMIC FAST JS CONTAINER (0 LAG) -->
                <div id="articlesListContainer" style="display: flex; flex-direction: column; gap: 14px; min-height: 200px;">
                    <!-- Rendered cleanly by JS without DOM bloat -->
                </div>

                <!-- PAGINATION CONTROLS -->
                <div id="paginationNav" style="display: flex; align-items: center; justify-content: center; gap: 6px; margin-top: 26px; flex-wrap: wrap;">
                    <!-- Generated by JS -->
                </div>
            </div>

            <!-- GOOGLE MAPS EMBED -->
            <div style="margin-top: 56px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 24px;">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0a0e1a; margin-bottom: 14px;">
                    <i class="bi bi-map-fill" style="color: #2563eb;"></i> Peta Wilayah {{ $kabkotName }}
                </h3>
                <div style="height: 320px; border-radius: 12px; overflow: hidden; border: 1px solid #e2e8f0;">
                    <iframe src="{{ $mapsUrl ?? 'https://maps.google.com/maps?q=' . urlencode($kabkotName . ', ' . $province['name'] . ', Indonesia') . '&t=&z=11&ie=UTF8&iwloc=&output=embed' }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
(function() {
    // RAW ARTICLES DATA (200 ITEMS IN MEMORY VIA JS - 0 LAG)
    const rawArticles = @json($articlesJson);
    let filteredArticles = [...rawArticles];
    let currentPage = 1;
    let perPage = 10;

    const container = document.getElementById('articlesListContainer');
    const paginationNav = document.getElementById('paginationNav');
    const searchInput = document.getElementById('articleSearchInput');
    const perPageSelect = document.getElementById('perPageSelect');
    const pagingInfoText = document.getElementById('pagingInfoText');
    const activePageBadge = document.getElementById('activePageBadge');

    function renderPage(page, scrollUp = false) {
        currentPage = page;
        const total = filteredArticles.length;
        const totalPages = Math.ceil(total / perPage) || 1;

        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        const startIndex = (currentPage - 1) * perPage;
        const endIndex = Math.min(startIndex + perPage, total);
        const currentItems = filteredArticles.slice(startIndex, endIndex);

        // Update info text
        if (total === 0) {
            if (pagingInfoText) pagingInfoText.textContent = "Tidak ditemukan modul artikel yang sesuai.";
            if (activePageBadge) activePageBadge.textContent = "0 Hasil";
            container.innerHTML = `
                <div style="text-align: center; padding: 48px 20px; background: #f8fafc; border-radius: 12px; border: 1px dashed #cbd5e1;">
                    <i class="bi bi-search" style="font-size: 2.2rem; color: #94a3b8; display: block; margin-bottom: 10px;"></i>
                    <h4 style="font-size: 1rem; font-weight: 700; color: #1e1b4b;">Tidak ada modul yang cocok dengan kata kunci</h4>
                    <p style="font-size: 0.84rem; color: #64748b; margin-top: 4px;">Coba gunakan kata kunci lain seperti: Pelatihan & Sertifikasi Kompetensi Profesional (Training Corp Crew), K3 Corporate & Manajemen Risiko K3, LOTO, Izin Masuk, atau Penyelamat.</p>
                </div>
            `;
            paginationNav.innerHTML = '';
            return;
        }

        if (pagingInfoText) pagingInfoText.innerHTML = `Menampilkan <strong>${startIndex + 1} - ${endIndex}</strong> dari <strong>${total}</strong> modul artikel`;
        if (activePageBadge) activePageBadge.textContent = `Halaman ${currentPage} dari ${totalPages}`;

        // Render Cards via lightweight document fragment
        let html = '';
        currentItems.forEach(item => {
            html += `
                <div class="article-topic-item" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 18px 20px; transition: all 0.2s ease; box-shadow: 0 1px 3px rgba(0,0,0,0.02);">
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 8px; flex-wrap: wrap; gap: 8px;">
                        <span style="font-size: 0.72rem; font-weight: 800; background: #ecfdf5; color: #064e3b; padding: 3px 10px; border-radius: 4px; border: 1px solid #34d399;">
                            MODUL PANDUAN #${item.index}
                        </span>
                        <span style="font-size: 0.74rem; font-weight: 700; color: #064e3b; background: #eff6ff; padding: 2px 8px; border-radius: 4px;">
                            <i class="bi bi-journal-check"></i> Spesifikasi Silabus Berstandar Nasional & Global
                        </span>
                    </div>

                    <h4 style="font-size: 1.02rem; font-weight: 800; color: #0a0e1a; margin-bottom: 8px; line-height: 1.4;">
                        <a href="${item.url}" style="color: inherit; text-decoration: none;" class="article-link-title" onmouseover="this.style.color='#2563eb'" onmouseout="this.style.color='#0a0e1a'">
                            ${item.title}
                        </a>
                    </h4>

                    <p style="font-size: 0.84rem; color: #64748b; line-height: 1.6; margin-bottom: 12px;">
                        ${item.excerpt}
                    </p>

                    <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px dashed #e2e8f0; padding-top: 10px;">
                        <span style="font-size: 0.76rem; color: #94a3b8;">
                            <i class="bi bi-geo-alt"></i> ${item.region}
                        </span>
                        <a href="${item.url}" style="font-size: 0.82rem; font-weight: 700; color: #2563eb; display: inline-flex; align-items: center; gap: 4px; text-decoration: none;">
                            Baca Modul Lengkap <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            `;
        });
        container.innerHTML = html;

        // Render Pagination Buttons
        renderPaginationButtons(totalPages);

        if (scrollUp) {
            const anchor = document.getElementById('daftar-artikel-wilayah');
            if (anchor) {
                anchor.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    function renderPaginationButtons(totalPages) {
        if (totalPages <= 1) {
            paginationNav.innerHTML = '';
            return;
        }

        let navHtml = '';

        // Previous button
        const prevDisabled = currentPage === 1 ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-page-ctrl" data-page="${currentPage - 1}" ${prevDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #1e1b4b; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                <i class="bi bi-chevron-left"></i> Prev
            </button>
        `;

        // Page numbers logic (sliding window)
        const delta = 2;
        const range = [];
        for (let i = Math.max(2, currentPage - delta); i <= Math.min(totalPages - 1, currentPage + delta); i++) {
            range.push(i);
        }

        // Always show page 1
        range.unshift(1);
        if (totalPages > 1 && !range.includes(totalPages)) {
            range.push(totalPages);
        }

        // Insert dots
        let prevNum = 0;
        range.forEach(num => {
            if (prevNum && num - prevNum > 1) {
                navHtml += `<span style="padding: 6px 10px; color: #94a3b8; font-weight: 700;">...</span>`;
            }
            const isActive = num === currentPage;
            const activeStyle = isActive 
                ? 'background: #2563eb; color: #ffffff; border-color: #2563eb; font-weight: 800;' 
                : 'background: #ffffff; color: #1e1b4b; border-color: #cbd5e1; font-weight: 600;';
            navHtml += `
                <button type="button" class="btn-page-ctrl" data-page="${num}" style="padding: 7px 13px; border-radius: 6px; border: 1px solid; ${activeStyle} font-size: 0.82rem; cursor: pointer;">
                    ${num}
                </button>
            `;
            prevNum = num;
        });

        // Next button
        const nextDisabled = currentPage === totalPages ? 'disabled style="opacity: 0.4; pointer-events: none;"' : '';
        navHtml += `
            <button type="button" class="btn-page-ctrl" data-page="${currentPage + 1}" ${nextDisabled} style="padding: 7px 14px; border-radius: 6px; border: 1px solid #cbd5e1; background: #ffffff; color: #1e1b4b; font-size: 0.82rem; font-weight: 700; cursor: pointer;">
                Next <i class="bi bi-chevron-right"></i>
            </button>
        `;

        paginationNav.innerHTML = navHtml;

        // Attach clicks
        paginationNav.querySelectorAll('.btn-page-ctrl').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const p = parseInt(this.getAttribute('data-page'));
                if (!isNaN(p)) {
                    renderPage(p, true);
                }
            });
        });
    }

    // Search filter event with debounce
    let searchTimeout = null;
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                const q = searchInput.value.toLowerCase().trim();
                if (!q) {
                    filteredArticles = [...rawArticles];
                } else {
                    filteredArticles = rawArticles.filter(item => {
                        return item.title.toLowerCase().includes(q) || 
                               item.excerpt.toLowerCase().includes(q) ||
                               ("modul " + item.index).includes(q);
                    });
                }
                renderPage(1, false);
            }, 120);
        });
    }

    // Per Page Select event
    if (perPageSelect) {
        perPageSelect.addEventListener('change', function() {
            perPage = parseInt(this.value) || 10;
            renderPage(1, false);
        });
    }

    // Kecamatan Live Filter
    const filterKecamatanInput = document.getElementById('filterKecamatanInput');
    const kecamatanItems = document.querySelectorAll('.kecamatan-card-item');
    if (filterKecamatanInput) {
        filterKecamatanInput.addEventListener('input', function() {
            const kw = this.value.toLowerCase().trim();
            kecamatanItems.forEach(el => {
                const name = el.getAttribute('data-name') || '';
                if (!kw || name.includes(kw)) {
                    el.style.display = 'flex';
                } else {
                    el.style.display = 'none';
                }
            });
        });
    }

    // Initial render
    renderPage(1, false);
})();
</script>
@endpush

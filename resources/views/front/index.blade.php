@extends('layouts.front')

@section('title', 'Training Corp | Pusat Pelatihan & Sertifikasi Profesional, Keuangan, Migas & Rekayasa Korporasi')
@section('meta_description', 'Lembaga resmi pelatihan dan sertifikasi kompetensi korporasi Training Corp: Akuntansi & Perpajakan (Brevet AB/C, USKP), Keselamatan Offshore Migas (BOSIET, HUET), Teknik Sipil, Mesin Industri, dan Manajemen Mutu Pangan 38 Provinsi.')

@section('content')
        <!-- HERO SLIDER SECTION (TANPA FOTO - HIGH-TECH CORPORATE TELEMETRY HUD & CERTIFICATION METRICS) -->
    <section class="gas-hero-wrapper" style="background: radial-gradient(circle at 85% 15%, rgba(16, 185, 129, 0.22) 0%, transparent 45%), radial-gradient(circle at 15% 85%, rgba(37, 99, 235, 0.2) 0%, transparent 50%), radial-gradient(circle at 50% 50%, rgba(220, 38, 38, 0.08) 0%, transparent 60%), #0a1410; color: #ffffff; padding: 65px 0 75px; position: relative; overflow: hidden;">
        <!-- Background Grid Pattern -->
        <div style="position: absolute; inset: 0; background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 36px 36px; pointer-events: none;"></div>

        <div class="container" style="position: relative; z-index: 2;">
            
            <!-- Hero Slider Container -->
            <div class="hero-slider-container" id="heroSlider" style="position: relative; min-height: 480px;">
                
                <!-- SLIDE 1: Pusat Pelatihan & Sertifikasi Multi-Disiplin Korporasi -->
                <div class="hero-slide active" data-slide="1" style="display: block; transition: all 0.5s ease;">
                    <div class="hero-slide-grid">
                        <div>
                            <div class="hero-badge" style="background: rgba(16, 185, 129, 0.15); border: 1px solid rgba(16, 185, 129, 0.4); color: #34d399; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-patch-check-fill"></i> Lembaga Pelatihan & Sertifikasi Resmi Terakreditasi
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.22; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Pusat Pelatihan & Sertifikasi Kompetensi Resmi <span style="background: linear-gradient(135deg, #34d399 0%, #38bdf8 50%, #f87171 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Training Corp</span>
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Mentransformasikan keahlian profesional korporasi di bidang Akuntansi & Perpajakan (Brevet AB/C, USKP), Keselamatan Offshore Migas (BOSIET, HUET, NEBOSH), Rekayasa Sipil & Konstruksi, Teknik Mesin & Otomasi, serta Manajemen Mutu Pangan HACCP & ISO di seluruh 38 provinsi di Indonesia.
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Utama Training Corp, saya ingin konsultasi pendaftaran resmi program Training Corp.') }}" target="_blank" class="btn-primary-green" style="box-shadow: 0 4px 18px rgba(16, 185, 129, 0.45); background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                                    <i class="bi bi-whatsapp"></i> Hotline Utama: 0813-9981-0272
                                </a>
                                <a href="#program" class="btn-outline-white" style="border: 1px solid rgba(255,255,255,0.25); background: rgba(255,255,255,0.06);">
                                    <i class="bi bi-grid-fill"></i> 350+ Program Pelatihan & Sertifikasi
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #34d399;"></i> Standar IAI, BNSP, OPITO & ISO
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #38bdf8;"></i> Instruktur Master Senior 15+ Tahun
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #f87171;"></i> Sertifikat Terverifikasi Online
                                </div>
                            </div>
                        </div>

                        <!-- SIMULATED CORPORATE TELEMETRY HUD -->
                        <div>
                            <div style="background: linear-gradient(145deg, #11261e 0%, #0a1410 100%); border: 2px solid rgba(16, 185, 129, 0.4); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.55), inset 0 1px 0 rgba(255,255,255,0.1); position: relative;">
                                <!-- Top Status Bar -->
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #34d399; border-radius: 50%; box-shadow: 0 0 10px #34d399; animation: pulse 2s infinite;"></span>
                                        <span style="font-size: 0.78rem; font-weight: 800; color: #a7f3d0; text-transform: uppercase; letter-spacing: 0.8px;">CORPORATE TRAINING TELEMETRY HUD</span>
                                    </div>
                                    <span style="font-size: 0.72rem; background: rgba(16, 185, 129, 0.2); color: #6ee7b7; padding: 3px 10px; border-radius: 12px; border: 1px solid rgba(16, 185, 129, 0.4); font-weight: 700;">AKREDITASI NASIONAL & GLOBAL &bull; 38 PROVINSI</span>
                                </div>

                                <!-- Metric Cards Grid -->
                                <div class="hud-metrics-grid">
                                    <div style="background: rgba(10, 20, 16, 0.75); border: 1px solid rgba(16, 185, 129, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #a7f3d0; text-transform: uppercase; margin-bottom: 4px;">Alumni Lulus Sertifikasi</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #34d399;">28,500+ <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">PESERTA</span></div>
                                        <div style="font-size: 0.68rem; color: #6ee7b7; margin-top: 2px;">Akuntansi, Pajak, HSE, Teknik & Mutu</div>
                                    </div>

                                    <div style="background: rgba(10, 20, 16, 0.75); border: 1px solid rgba(37, 99, 235, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #bfdbfe; text-transform: uppercase; margin-bottom: 4px;">Mitra Korporasi Nasional</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #38bdf8;">1,450+ <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">PERUSAHAAN</span></div>
                                        <div style="font-size: 0.68rem; color: #93c5fd; margin-top: 2px;">Multinasional, BUMN, Finansial & Migas</div>
                                    </div>

                                    <div style="background: rgba(10, 20, 16, 0.75); border: 1px solid rgba(16, 185, 129, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #a7f3d0; text-transform: uppercase; margin-bottom: 4px;">Tingkat Kelulusan & Kepuasan</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #34d399;">99.6% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">RATING</span></div>
                                        <div style="font-size: 0.68rem; color: #6ee7b7; margin-top: 2px;">Evaluasi Mutu Silabus & Instruktur Master</div>
                                    </div>

                                    <div style="background: rgba(10, 20, 16, 0.75); border: 1px solid rgba(220, 38, 38, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #fecaca; text-transform: uppercase; margin-bottom: 4px;">Jangkauan In-House On-Site</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #f87171;">100% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">COVERAGE</span></div>
                                        <div style="font-size: 0.68rem; color: #fca5a5; margin-top: 2px;">Siap Hadir di Seluruh 38 Provinsi RI</div>
                                    </div>
                                </div>

                                <!-- Lower Status Highlights -->
                                <div style="background: rgba(10, 20, 16, 0.6); border-radius: 10px; padding: 12px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.78rem;">
                                    <span style="color: #cbd5e1;"><i class="bi bi-shield-check text-success"></i> Standar Akreditasi Internasional:</span>
                                    <span style="font-weight: 700; color: #34d399;">IAI &bull; BNSP &bull; OPITO &bull; OSHA &bull; ISO &bull; ASME &bull; SNI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2: In-House Corporate Training & Tailor-Made 38 Provinsi -->
                <div class="hero-slide" data-slide="2" style="display: none; transition: all 0.5s ease;">
                    <div class="hero-slide-grid">
                        <div>
                            <div class="hero-badge" style="background: rgba(37, 99, 235, 0.2); border: 1px solid rgba(37, 99, 235, 0.4); color: #38bdf8; font-size: 0.78rem; font-weight: 800; padding: 6px 16px; border-radius: 30px; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">
                                <i class="bi bi-building-gear"></i> In-House Corporate Training 38 Provinsi
                            </div>

                            <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.22; margin-bottom: 18px; color: #ffffff; letter-spacing: -0.5px;">
                                Program In-House Tailor-Made: <span style="background: linear-gradient(135deg, #38bdf8 0%, #34d399 50%, #fca5a5 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Solusi Terarah Sesuai Kebutuhan Spesifik Perusahaan</span>
                            </h1>

                            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 28px; max-width: 620px;">
                                Instruktur master kami hadir langsung ke kantor, pabrik, pertambangan, atau rig lepas pantai perusahaan Anda. Silabus, jadwal pelaksanaan, studi kasus industri, dan simulasi data dirancang 100% mengikuti target operasional tim Anda.
                            </p>

                            <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px;">
                                <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Divisi In-House Training Corp, kami ingin mengajukan penawaran program in-house training tim korporasi kami.') }}" target="_blank" class="btn-primary-green" style="background: linear-gradient(135deg, #2563eb 0%, #10b981 100%);">
                                    <i class="bi bi-whatsapp"></i> Ajukan Penawaran In-House: 0813-9981-0272
                                </a>
                                <a href="{{ route('contact') }}" class="btn-outline-white">
                                    <i class="bi bi-file-earmark-text-fill"></i> Proposal & Silabus Lengkap
                                </a>
                            </div>

                            <div style="display: flex; align-items: center; gap: 24px; color: #94a3b8; font-size: 0.85rem; flex-wrap: wrap;">
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #38bdf8;"></i> Jadwal Fleksibel (On-Site / Online)
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #34d399;"></i> Analisis Studi Kasus Riil Internal
                                </div>
                                <div style="display: flex; align-items: center; gap: 6px;">
                                    <i class="bi bi-check-circle-fill" style="color: #f87171;"></i> Evaluasi ROTI Terukur
                                </div>
                            </div>
                        </div>

                        <!-- SLIDE 2 TELEMETRY HUD -->
                        <div>
                            <div style="background: linear-gradient(145deg, #11261e 0%, #0a1410 100%); border: 2px solid rgba(37, 99, 235, 0.4); border-radius: 20px; padding: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.55), inset 0 1px 0 rgba(255,255,255,0.1); position: relative;">
                                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 12px; margin-bottom: 18px;">
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <span style="display: inline-block; width: 10px; height: 10px; background: #38bdf8; border-radius: 50%; box-shadow: 0 0 10px #38bdf8; animation: pulse 2s infinite;"></span>
                                        <span style="font-size: 0.78rem; font-weight: 800; color: #bae6fd; text-transform: uppercase; letter-spacing: 0.8px;">IN-HOUSE CORPORATE CAPABILITY</span>
                                    </div>
                                    <span style="font-size: 0.72rem; background: rgba(37, 99, 235, 0.2); color: #93c5fd; padding: 3px 10px; border-radius: 12px; border: 1px solid rgba(37, 99, 235, 0.4); font-weight: 700;">ON-SITE EXPERT MENTORING</span>
                                </div>

                                <div class="hud-metrics-grid">
                                    <div style="background: rgba(10, 20, 16, 0.75); border: 1px solid rgba(37, 99, 235, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #bfdbfe; text-transform: uppercase; margin-bottom: 4px;">Katalog Program Resmi</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #38bdf8;">350+ <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">MODUL</span></div>
                                        <div style="font-size: 0.68rem; color: #93c5fd; margin-top: 2px;">Kurikulum Terapan Standar Global</div>
                                    </div>

                                    <div style="background: rgba(10, 20, 16, 0.75); border: 1px solid rgba(16, 185, 129, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #a7f3d0; text-transform: uppercase; margin-bottom: 4px;">Jam Terbang Instruktur</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #34d399;">15+ <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">TAHUN</span></div>
                                        <div style="font-size: 0.68rem; color: #6ee7b7; margin-top: 2px;">Praktisi Senior & Lead Assessor</div>
                                    </div>

                                    <div style="background: rgba(10, 20, 16, 0.75); border: 1px solid rgba(220, 38, 38, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #fecaca; text-transform: uppercase; margin-bottom: 4px;">Pendampingan Pasca-Training</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #f87171;">3 <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">BULAN</span></div>
                                        <div style="font-size: 0.68rem; color: #fca5a5; margin-top: 2px;">Konsultasi Gratis Pemecahan Kasus</div>
                                    </div>

                                    <div style="background: rgba(10, 20, 16, 0.75); border: 1px solid rgba(16, 185, 129, 0.25); border-radius: 12px; padding: 14px;">
                                        <div style="font-size: 0.72rem; color: #a7f3d0; text-transform: uppercase; margin-bottom: 4px;">Verifikasi Sertifikat</div>
                                        <div style="font-size: 1.55rem; font-weight: 800; color: #34d399;">100% <span style="font-size: 0.8rem; font-weight: 600; color: #cbd5e1;">ONLINE</span></div>
                                        <div style="font-size: 0.68rem; color: #6ee7b7; margin-top: 2px;">Barcode Validitas Database Pusat</div>
                                    </div>
                                </div>

                                <div style="background: rgba(10, 20, 16, 0.6); border-radius: 10px; padding: 12px 14px; display: flex; justify-content: space-between; align-items: center; font-size: 0.78rem;">
                                    <span style="color: #cbd5e1;"><i class="bi bi-lightning-charge-fill text-warning"></i> Solusi Tailor-Made Korporasi:</span>
                                    <span style="font-weight: 700; color: #38bdf8;">ON-SITE 38 PROVINSI &bull; SIAP PENAWARAN 1x24 JAM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Slider Controls (Dots + Prev/Next) -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 24px; padding-top: 18px; border-top: 1px solid rgba(255,255,255,0.08);">
                <div style="display: flex; gap: 8px;">
                    <button type="button" class="hero-dot active" data-slide="1" style="width: 28px; height: 8px; border-radius: 4px; border: none; background: #10b981; cursor: pointer; transition: all 0.3s;"></button>
                    <button type="button" class="hero-dot" data-slide="2" style="width: 10px; height: 8px; border-radius: 4px; border: none; background: rgba(255,255,255,0.3); cursor: pointer; transition: all 0.3s;"></button>
                </div>

                <div style="display: flex; gap: 8px;">
                    <button type="button" id="prevHeroBtn" aria-label="Slide Sebelumnya" style="width: 38px; height: 38px; border-radius: 8px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: #ffffff; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button type="button" id="nextHeroBtn" aria-label="Slide Selanjutnya" style="width: 38px; height: 38px; border-radius: 8px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.15); color: #ffffff; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.2s;">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

        <!-- KEUNGGULAN SECTION (INTERACTIVE SLIDER / CAROUSEL) -->
    <section class="section-py" style="background: #ffffff; border-bottom: 1px solid #e2e8f0; position: relative;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 38px;">
                <span class="section-tag" style="background: #ecfdf5; color: #059669; border: 1px solid #a7f3d0;">Keunggulan Lembaga Training Corp</span>
                <h2 class="section-title">Mengapa 1.450+ Korporasi Nasional Memilih Kami?</h2>
                <p class="section-desc" style="max-width: 780px; margin: 0 auto;">
                    Kami mengintegrasikan kurikulum berstandar multi-akreditasi resmi, pendampingan instruktur master praktisi industri senior, penguasaan lembar kerja praktis, serta jangkauan in-house training on-site di seluruh 38 provinsi di Indonesia:
                </p>
            </div>

            <!-- Keunggulan Carousel Slider Container -->
            <div class="keunggulan-slider-container" style="position: relative; overflow: hidden; padding: 10px 4px 20px;">
                
                <!-- Track -->
                <div class="keunggulan-track" id="keunggulanTrack" style="display: flex; gap: 24px; transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1);">
                    
                    <!-- Card 1 -->
                    <div class="keunggulan-slide-card" style="flex: 0 0 calc(33.333% - 16px); background: #f0fdf4; border: 1px solid #a7f3d0; border-radius: 18px; padding: 28px 24px; box-shadow: 0 4px 16px rgba(16, 185, 129, 0.08); display: flex; flex-direction: column; transition: transform 0.3s, box-shadow 0.3s;">
                        <div style="width: 52px; height: 52px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.45rem; margin-bottom: 18px; box-shadow: 0 4px 14px rgba(16, 185, 129, 0.35);">
                            <i class="bi bi-patch-check-fill"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Standar Akreditasi Nasional & Global</h3>
                        <p style="font-size: 0.9rem; color: #334155; line-height: 1.65; margin: 0; flex-grow: 1;">
                            Kurikulum disusun selaras dengan standar resmi Ikatan Akuntan Indonesia (IAI), BNSP, OPITO & OSHA (Keselamatan Migas), ACI & SNI (Konstruksi), ASME, serta ISO 9001/22000.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="keunggulan-slide-card" style="flex: 0 0 calc(33.333% - 16px); background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 18px; padding: 28px 24px; box-shadow: 0 4px 16px rgba(37, 99, 235, 0.08); display: flex; flex-direction: column; transition: transform 0.3s, box-shadow 0.3s;">
                        <div style="width: 52px; height: 52px; background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.45rem; margin-bottom: 18px; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.35);">
                            <i class="bi bi-person-workspace"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #1e3a8a; margin-bottom: 8px;">Instruktur Master Praktisi Senior</h3>
                        <p style="font-size: 0.9rem; color: #334155; line-height: 1.65; margin: 0; flex-grow: 1;">
                            Dididik langsung oleh akuntan beregister, konsultan pajak berlisensi, lead auditor ISO, master engineer, dan praktisi industri senior dengan jam terbang lebih dari 15-25 tahun di korporasi.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="keunggulan-slide-card" style="flex: 0 0 calc(33.333% - 16px); background: #fef2f2; border: 1px solid #fecaca; border-radius: 18px; padding: 28px 24px; box-shadow: 0 4px 16px rgba(220, 38, 38, 0.08); display: flex; flex-direction: column; transition: transform 0.3s, box-shadow 0.3s;">
                        <div style="width: 52px; height: 52px; background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.45rem; margin-bottom: 18px; box-shadow: 0 4px 14px rgba(220, 38, 38, 0.35);">
                            <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #991b1b; margin-bottom: 8px;">Template Kerja & Worksheet Otomasi</h3>
                        <p style="font-size: 0.9rem; color: #334155; line-height: 1.65; margin: 0; flex-grow: 1;">
                            Setiap peserta mendapatkan paket template Excel formula profesional, checklist audit kesiapan dokumen kerja, SOP baku industri, dan format working paper berstandar eksekutif.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="keunggulan-slide-card" style="flex: 0 0 calc(33.333% - 16px); background: #f0fdf4; border: 1px solid #a7f3d0; border-radius: 18px; padding: 28px 24px; box-shadow: 0 4px 16px rgba(16, 185, 129, 0.08); display: flex; flex-direction: column; transition: transform 0.3s, box-shadow 0.3s;">
                        <div style="width: 52px; height: 52px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.45rem; margin-bottom: 18px; box-shadow: 0 4px 14px rgba(16, 185, 129, 0.35);">
                            <i class="bi bi-qr-code-scan"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Sertifikat Resmi Ber-Barcode Online</h3>
                        <p style="font-size: 0.9rem; color: #334155; line-height: 1.65; margin: 0; flex-grow: 1;">
                            Sertifikat kompetensi resmi dengan verifikasi barcode online yang terhubung ke basis data resmi, diakui penuh untuk evaluasi tender korporasi, kenaikan jenjang karir, dan audit kepatuhan.
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div class="keunggulan-slide-card" style="flex: 0 0 calc(33.333% - 16px); background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 18px; padding: 28px 24px; box-shadow: 0 4px 16px rgba(37, 99, 235, 0.08); display: flex; flex-direction: column; transition: transform 0.3s, box-shadow 0.3s;">
                        <div style="width: 52px; height: 52px; background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.45rem; margin-bottom: 18px; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.35);">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #1e3a8a; margin-bottom: 8px;">In-House Training di 38 Provinsi</h3>
                        <p style="font-size: 0.9rem; color: #334155; line-height: 1.65; margin: 0; flex-grow: 1;">
                            Kami melayani pelatihan in-house on-site ke kantor pusat, pabrik, pertambangan, dan fasilitas industri klien di seluruh pelosok Indonesia dengan jadwal dan materi yang dapat disesuaikan.
                        </p>
                    </div>

                    <!-- Card 6 -->
                    <div class="keunggulan-slide-card" style="flex: 0 0 calc(33.333% - 16px); background: #fef2f2; border: 1px solid #fecaca; border-radius: 18px; padding: 28px 24px; box-shadow: 0 4px 16px rgba(220, 38, 38, 0.08); display: flex; flex-direction: column; transition: transform 0.3s, box-shadow 0.3s;">
                        <div style="width: 52px; height: 52px; background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 1.45rem; margin-bottom: 18px; box-shadow: 0 4px 14px rgba(220, 38, 38, 0.35);">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #991b1b; margin-bottom: 8px;">Mentoring Pasca-Pelatihan 3 Bulan</h3>
                        <p style="font-size: 0.9rem; color: #334155; line-height: 1.65; margin: 0; flex-grow: 1;">
                            Alumni dan perwakilan perusahaan memperoleh hak konsultasi teknis lanjutan secara cuma-cuma selama 3 bulan bersama instruktur master untuk memastikan eksekusi kerja berjalan lancar.
                        </p>
                    </div>

                </div>

            </div>

            <!-- Slider Controls (Prev, Dots, Next) -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 18px;">
                <button type="button" id="prevKeunggulanBtn" aria-label="Sebelumnya" style="width: 44px; height: 44px; border-radius: 50%; background: #ffffff; border: 1px solid #cbd5e1; color: #0f172a; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.06); transition: all 0.2s;">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <div id="keunggulanDots" style="display: flex; gap: 8px;">
                    <!-- Injected dynamically by JS -->
                </div>

                <button type="button" id="nextKeunggulanBtn" aria-label="Selanjutnya" style="width: 44px; height: 44px; border-radius: 50%; background: #ffffff; border: 1px solid #cbd5e1; color: #0f172a; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 8px rgba(0,0,0,0.06); transition: all 0.2s;">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>

        </div>
    </section>

    ection>

    <!-- 120 PROGRAM RESMI TRAINING CORP (PAGINATED VIA JS FETCH) -->
    <section class="section-py" id="program" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0; scroll-margin-top: 80px;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 30px;">
                <span class="section-tag">Katalog Program Pelatihan & Sertifikasi Resmi</span>
                <h2 class="section-title">350+ Program Keahlian Training Corp</h2>
                <p class="section-desc" style="max-width: 780px; margin: 0 auto;">
                    Program komprehensif berstandar regulasi internasional ISO 50001, IEEE 519, dan NFPA 70E. Temukan kurikulum yang Anda butuhkan melalui filter dan pencarian instan di bawah:
                </p>
            </div>

            <!-- SEARCH & FILTER CONTROLS -->
            <div class="program-filter-bar" style="max-width: 980px; margin: 0 auto 34px; background: #ffffff; padding: 22px 24px; border-radius: 18px; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px rgba(37, 99, 235, 0.06);">
                <div style="display: flex; gap: 12px; align-items: center; margin-bottom: 16px; flex-wrap: wrap;">
                    <div style="position: relative; flex: 1; min-width: 260px;">
                        <i class="bi bi-search" style="position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b; font-size: 1rem;"></i>
                        <input type="text" id="programSearchInput" placeholder="Cari dari 120 program (contoh: Vibration, Rotating, PLC, Hidrolik, RCM, Refrigerasi)..." style="width: 100%; padding: 11px 40px 11px 42px; border: 1px solid #cbd5e1; border-radius: 10px; font-size: 0.92rem; outline: none; transition: all 0.2s;" onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.15)'" onblur="this.style.borderColor='#cbd5e1'; this.style.boxShadow='none'">
                        <button type="button" id="programSearchClear" style="display: none; position: absolute; right: 12px; top: 50%; transform: translateY(-50%); background: none; border: none; color: #94a3b8; cursor: pointer; font-size: 1.1rem;"><i class="bi bi-x-circle-fill"></i></button>
                    </div>
                    <div id="programCountInfo" style="font-size: 0.85rem; font-weight: 700; color: #2563eb; background: #eff6ff; padding: 10px 16px; border-radius: 10px; border: 1px solid #bfdbfe; white-space: nowrap;">
                        Menampilkan 1 - 6 dari {{ $totalPrograms ?? 120 }} Program
                    </div>
                </div>

                <!-- CATEGORY PILLS -->
                <div style="display: flex; gap: 8px; flex-wrap: wrap; align-items: center;" id="programCategoryPills">
                    <span style="font-size: 0.78rem; font-weight: 700; color: #64748b; text-transform: uppercase; margin-right: 4px;">Kategori:</span>
                    <button type="button" class="prog-cat-btn active" data-cat="all" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #2563eb; background: linear-gradient(135deg, #2563eb, #7c3aed); color: #fff; cursor: pointer; transition: all 0.2s;">Semua Program</button>
                    <button type="button" class="prog-cat-btn" data-cat="Rotating" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">Rotating & Vibrasi</button>
                    <button type="button" class="prog-cat-btn" data-cat="Hidrolik" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">Hidrolik & Pneumatik</button>
                    <button type="button" class="prog-cat-btn" data-cat="Otomasi" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">PLC, HMI & SCADA</button>
                    <button type="button" class="prog-cat-btn" data-cat="Reliability" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">RCM & TPM</button>
                    <button type="button" class="prog-cat-btn" data-cat="Refrigerasi" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">HVAC & Chiller</button>
                    <button type="button" class="prog-cat-btn" data-cat="Electrical" style="padding: 6px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; border: 1px solid #e2e8f0; background: #f8fafc; color: #475569; cursor: pointer; transition: all 0.2s;">Kelistrikan MV/LV</button>
                </div>
            </div>

            <!-- PROGRAMS GRID -->
            <div class="programs-grid" id="programsGridContainer" style="position: relative; min-height: 420px; transition: opacity 0.2s ease;">
                @foreach($programs as $prog)
                    <div class="program-card">
                        <div class="program-img-wrapper">
                            <img src="{{ $prog->image ?? 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $prog->title }}" class="program-img" loading="lazy">
                            <span class="program-badge">{{ $prog->badge ?? 'Sertifikasi Resmi' }}</span>
                        </div>

                        <div class="program-body">
                            <div class="program-level">{{ $prog->level_name ?? 'Rekayasa Energi Industri' }}</div>
                            <h3 class="program-title">{{ $prog->title }}</h3>
                            <p class="program-desc">
                                {{ Str::limit($prog->short_description ?? ($prog->full_description ?? ''), 130) }}
                            </p>

                            <div class="program-meta">
                                <div><i class="bi bi-clock-history" style="color: #2563eb;"></i> {{ $prog->duration ?? '3 Hari' }}</div>
                                <div><i class="bi bi-mortarboard-fill" style="color: #2563eb;"></i> {{ $prog->method ?? 'Tatap Muka & In-House' }}</div>
                            </div>

                            <div class="program-footer-btn">
                                <a href="{{ route('program.detail', $prog->slug) }}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.88rem; padding: 11px 16px;">
                                    <i class="bi bi-info-circle-fill"></i> Detail Layanan & Lingkup Kerja
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- PAGINATION CONTROLS -->
            <div id="programsPaginationWrapper" style="display: flex; justify-content: center; align-items: center; gap: 8px; margin-top: 40px; flex-wrap: wrap;"></div>
        </div>
    </section>

    <!-- STATISTIK (DIBIKIN KEREN DENGAN GLOW HIJAU MUDA & SLATE DARK) -->
    <section class="section-py" style="background: linear-gradient(135deg, #0a0e1a 0%, #131b2e 50%, #1e1b4b 100%); color: #ffffff; position: relative;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px;">
                @foreach($statistics as $stat)
                    <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(37, 99, 235, 0.25); border-radius: 18px; padding: 28px 22px; text-align: center; position: relative; overflow: hidden; backdrop-filter: blur(8px);">
                        <div style="width: 56px; height: 56px; background: rgba(37, 99, 235, 0.2); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; color: #38bdf8; font-size: 1.6rem; border: 1px solid rgba(37, 99, 235, 0.4);">
                            <i class="bi {{ $stat->icon ?? 'bi-bar-chart-fill' }}"></i>
                        </div>
                        <div style="font-size: 2.6rem; font-weight: 800; color: #38bdf8; line-height: 1; margin-bottom: 8px; letter-spacing: -1px;">
                            {{ $stat->value }}
                        </div>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 6px;">{{ $stat->label }}</h4>
                        <p style="font-size: 0.82rem; color: #cbd5e1; line-height: 1.5; margin: 0;">{{ $stat->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- OUR PARTNER / KLIEN PERUSAHAAN KORPORASI -->
    <section class="section-py" style="background: #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 34px;">
                <span class="section-tag">Kemitraan Korporasi Nasional</span>
                <h2 class="section-title">Dipercaya Pemimpin Industri & Korporasi Multinasional</h2>
                <p class="section-desc" style="max-width: 760px; margin: 0 auto;">
                    Kami bangga mendampingi peningkatan kompetensi profesional, kepatuhan teknis, efisiensi operasional, dan keunggulan manajerial di berbagai perusahaan terkemuka:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 16px;">
                @foreach($partners as $partner)
                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px 16px; text-align: center; transition: all 0.25s ease;">
                        <div style="font-size: 1rem; font-weight: 800; color: #0a0e1a; margin-bottom: 4px;">{{ $partner['name'] }}</div>
                        <div style="font-size: 0.74rem; color: #1d4ed8; font-weight: 600;">{{ $partner['role'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- KREDIBILITAS & PENGALAMAN (DIKEMAS KEREN & ELEGAN) -->
    <section class="section-py" style="background: #eff6ff; border-bottom: 1px solid #c084fc;">
        <div class="container">
            <div class="kredibilitas-grid">
                <div>
                    <span class="section-tag" style="background: #f5f3ff; color: #064e3b; border: 1px solid #c084fc;">Kredibilitas & Pengalaman Teruji</span>
                    <h2 class="section-title" style="text-align: left;">Integritas, Pengalaman & Standar Rekayasa Teknologi Industri</h2>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.7; margin-bottom: 22px;">
                        Lembaga Training Corp didirikan dengan komitmen kuat mendampingi industri nasional mencapai target Zero Breakdown dan Overall Equipment Effectiveness (OEE) optimal. Dengan rekam jejak lebih dari 15 tahun, kami telah meluluskan lebih dari 24.800 engineer dan teknisi kompeten di seluruh 38 provinsi di Indonesia.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 28px;">
                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #f5f3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1d4ed8; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #c084fc;">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #0a0e1a; margin-bottom: 3px;">Kesesuaian Regulasi Nasional & Standar ISO 45001</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Seluruh modul dan silabus pelatihan mengacu langsung pada standar proteksi korosi internasional IEEE 519, NFPA 70E, dan NACE SP0188.</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #f5f3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1d4ed8; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #c084fc;">
                                <i class="bi bi-qr-code-scan"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #0a0e1a; margin-bottom: 3px;">Sertifikasi & Lisensi Resmi Terverifikasi Online</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Sertifikat kelulusan dilengkapi nomor registrasi resmi dan barcode verifikasi mandiri untuk memudahkan pengecekan oleh auditor, manajemen, dan divisi HRD.</p>
                            </div>
                        </div>

                        <div style="display: flex; gap: 14px; align-items: flex-start;">
                            <div style="width: 38px; height: 38px; background: #f5f3ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1d4ed8; font-size: 1.2rem; flex-shrink: 0; border: 1px solid #c084fc;">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 0.98rem; font-weight: 700; color: #0a0e1a; margin-bottom: 3px;">Instruktur Bersertifikasi Lead Auditor & Master Trainer</h4>
                                <p style="font-size: 0.84rem; color: #64748b; line-height: 1.5; margin: 0;">Didukung oleh jajaran instruktur senior berkualifikasi Lead Auditor SMK3, konsultan risiko industri, dan praktisi HSE yang aktif di korporasi terkemuka.</p>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="btn-primary-green">
                        <i class="bi bi-info-circle-fill"></i> Profil Lengkap & Visi Misi Lembaga
                    </a>
                </div>

                <!-- Showcase Credibility Card -->
                <div>
                    <div style="background: #ffffff; border: 2px solid #c084fc; border-radius: 20px; padding: 32px; box-shadow: 0 16px 36px -4px rgba(37, 99, 235, 0.15);">
                        <div style="display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #e2e8f0; padding-bottom: 16px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <i class="bi bi-patch-check-fill" style="color: #2563eb; font-size: 1.8rem;"></i>
                                <div>
                                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0a0e1a; margin: 0;">STANDAR AKREDITASI K3 KORPORASI</h4>
                                    <span style="font-size: 0.76rem; color: #64748b;">REGISTRASI: K3-CORP-CERT/2026</span>
                                </div>
                            </div>
                            <span style="background: #f5f3ff; color: #064e3b; font-size: 0.75rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; border: 1px solid #c084fc;">TERAKREDITASI</span>
                        </div>

                        <div style="display: flex; flex-direction: column; gap: 12px; font-size: 0.88rem; color: #334155;">
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Standar Audit K3:</span>
                                <strong style="color: #0a0e1a;">SMK3 PP 50/2012 (166 Kriteria)</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Standar Manajemen Global:</span>
                                <strong style="color: #0a0e1a;">ISO 45001:2018 Terpadu</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Metodologi Analisis Risiko:</span>
                                <strong style="color: #0a0e1a;">HIRADC, IBPPR & JSA Komprehensif</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px dashed #e2e8f0;">
                                <span style="color: #64748b;">Sertifikat & Lisensi:</span>
                                <strong style="color: #2563eb;">Resmi, Sah & Terverifikasi Barcode</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 8px 0;">
                                <span style="color: #64748b;">Cakupan Wilayah Layanan:</span>
                                <strong style="color: #0a0e1a;">38 Provinsi Seluruh Indonesia</strong>
                            </div>
                        </div>

                        <div style="margin-top: 24px; padding: 14px; background: #f5f3ff; border-radius: 12px; text-align: center; border: 1px solid #c084fc;">
                            <span style="font-size: 0.82rem; color: #064e3b; font-weight: 700;">
                                <i class="bi bi-whatsapp me-1" style="color: #2563eb;"></i> Konsultasi Program K3 Cepat WA: 0813-9981-0272
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DIREKTORI WILAYAH 38 PROVINSI, KABUPATEN/KOTA & KECAMATAN LENGKAP -->
    <style>
        .wilayah-section-wrap {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
        }
        .island-tab-btn {
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 0.82rem;
            font-weight: 700;
            border: 1px solid #cbd5e1;
            background: #f8fafc;
            color: #475569;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .island-tab-btn:hover {
            border-color: #2563eb;
            color: #1d4ed8;
            background: #f5f3ff;
        }
        .island-tab-btn.active {
            background: #2563eb;
            border-color: #2563eb;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
        }
        .home-province-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.25s ease;
            box-shadow: 0 2px 6px rgba(0,0,0,0.02);
            margin-bottom: 16px;
        }
        .home-province-card:hover {
            border-color: #c084fc;
            box-shadow: 0 4px 16px rgba(37, 99, 235, 0.08);
        }
        .prov-header-toggle {
            padding: 14px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            background: #f8fafc;
            border-bottom: 1px solid transparent;
            flex-wrap: wrap;
            gap: 10px;
            transition: background 0.2s ease;
        }
        .prov-header-toggle.is-open {
            background: #f5f3ff;
            border-bottom-color: #c084fc;
        }
        .prov-preview-bar {
            padding: 8px 18px;
            background: #ffffff;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.77rem;
            color: #64748b;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 6px;
        }
        .prov-preview-tag {
            background: #f1f5f9;
            color: #334155;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.73rem;
            font-weight: 600;
        }
        .prov-drawer-body {
            padding: 18px;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
        }
        .kabkot-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 12px;
        }
        .home-kabkot-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 14px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.2s ease;
        }
        .home-kabkot-box:hover {
            background: #ffffff;
            border-color: #c084fc;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.08);
        }
        .home-kec-pill {
            font-size: 0.72rem;
            color: #334155;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 2px 7px;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.15s ease;
            display: inline-block;
        }
        .home-kec-pill:hover {
            border-color: #2563eb;
            color: #1d4ed8;
            background: #f5f3ff;
        }
    </style>

    <section class="section-py wilayah-section-wrap" id="wilayah">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 32px;">
                <span class="section-tag">Jangkauan Layanan 38 Provinsi • 514 Kab/Kota • Seluruh Kecamatan</span>
                <h2 class="section-title">Direktori Wilayah Pelaksanaan Training Training Corp</h2>
                <p class="section-desc" style="max-width: 840px; margin: 0 auto;">
                    Kami menyelenggarakan program training reguler maupun pelatihan dan sertifikasi industri sertifikasi Training Corp di seluruh 38 provinsi di Indonesia hingga ke tingkat kabupaten, kota, dan kecamatan. Klik pada nama wilayah untuk melihat jadwal, kuota, dan panduan teknis spesifik di daerah Anda:
                </p>
            </div>

            @php
                // Build lightweight structure for Cascading Explorer & Live Search
                $regionsExplorerData = [];
                foreach($provinces as $pSlug => $pr) {
                    $kabkotItems = [];
                    foreach($pr['kabkot'] as $kk) {
                        $kabkotItems[] = [
                            'name' => $kk['name'],
                            'slug' => $kk['slug'],
                            'kecamatan' => $kk['kecamatan'] ?? []
                        ];
                    }
                    $regionsExplorerData[] = [
                        'name' => $pr['name'],
                        'slug' => $pr['slug'],
                        'island' => $pr['island'] ?? 'Lainnya',
                        'total_kabkot' => $pr['total_kabkot'] ?? count($kabkotItems),
                        'kabkot' => $kabkotItems
                    ];
                }
            @endphp

            <!-- 1. CASCADING REGION SELECTOR (PROVINSI -> KABKOT -> KECAMATAN) -->
            <div style="background: linear-gradient(135deg, #0a0e1a 0%, #131b2e 100%); border-radius: 16px; padding: 24px; margin-bottom: 28px; box-shadow: 0 10px 25px rgba(10, 14, 26, 0.2);">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 16px; color: #ffffff;">
                    <i class="bi bi-funnel-fill" style="color: #38bdf8; font-size: 1.25rem;"></i>
                    <h3 style="font-size: 1.1rem; font-weight: 800; margin: 0;">Pilih Cepat Wilayah Pelaksanaan Training (3 Tingkat Bertingkat)</h3>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 14px; align-items: end;">
                    <!-- Dropdown Provinsi -->
                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #c084fc; margin-bottom: 6px; display: block;">1. Pilih Provinsi:</label>
                        <select id="cascadeProvSelect" style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #2563eb; background: #ffffff; color: #0f172a; font-size: 0.86rem; font-weight: 600; outline: none;">
                            <option value="">-- Pilih Provinsi (38 Provinsi) --</option>
                            @foreach($regionsExplorerData as $p)
                                <option value="{{ $p['slug'] }}">{{ $p['name'] }} ({{ $p['total_kabkot'] }} Kab/Kota)</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Dropdown Kab/Kota -->
                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #c084fc; margin-bottom: 6px; display: block;">2. Pilih Kab/Kota:</label>
                        <select id="cascadeKabkotSelect" disabled style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; background: #f1f5f9; color: #64748b; font-size: 0.86rem; font-weight: 600; outline: none;">
                            <option value="">-- Pilih Kab/Kota Terlebih Dahulu --</option>
                        </select>
                    </div>

                    <!-- Dropdown Kecamatan -->
                    <div>
                        <label style="font-size: 0.78rem; font-weight: 700; color: #c084fc; margin-bottom: 6px; display: block;">3. Pilih Kecamatan:</label>
                        <select id="cascadeKecSelect" disabled style="width: 100%; padding: 10px 14px; border-radius: 8px; border: 1px solid #cbd5e1; background: #f1f5f9; color: #64748b; font-size: 0.86rem; font-weight: 600; outline: none;">
                            <option value="">-- Pilih Kecamatan Terlebih Dahulu --</option>
                        </select>
                    </div>

                    <!-- Tombol Eksekusi Buka Halaman Wilayah -->
                    <div>
                        <button type="button" id="btnGoToRegion" class="btn-primary-green" style="width: 100%; justify-content: center; padding: 10px 16px; font-size: 0.88rem; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);">
                            <i class="bi bi-box-arrow-up-right"></i> Buka Panduan Daerah
                        </button>
                    </div>
                </div>
            </div>

            <!-- 2. TABS PULAU INDONESIA -->
            <div style="display: flex; gap: 8px; flex-wrap: wrap; justify-content: center; margin-bottom: 28px;">
                <button type="button" class="island-tab-btn active" data-island="all">Semua Pulau (38)</button>
                <button type="button" class="island-tab-btn" data-island="Jawa">Jawa</button>
                <button type="button" class="island-tab-btn" data-island="Sumatera">Sumatera</button>
                <button type="button" class="island-tab-btn" data-island="Kalimantan">Kalimantan</button>
                <button type="button" class="island-tab-btn" data-island="Sulawesi">Sulawesi</button>
                <button type="button" class="island-tab-btn" data-island="Bali & Nusa Tenggara">Bali & Nusa Tenggara</button>
                <button type="button" class="island-tab-btn" data-island="Maluku & Papua">Maluku & Papua</button>
            </div>

            <!-- 3. ACCORDION 38 PROVINSI WITH FULL KABUPATEN, KOTA & KECAMATAN -->
            <div id="provincesAccordionContainer">
                @foreach($regionsExplorerData as $prov)
                    <div class="home-province-card" data-island="{{ $prov['island'] }}">
                        <div class="prov-header-toggle" onclick="toggleProvCard(this)">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 38px; height: 38px; border-radius: 8px; background: #eff6ff; border: 1px solid #c084fc; display: flex; align-items: center; justify-content: center; color: #1d4ed8; font-size: 1.15rem;">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin: 0;">
                                        {{ $prov['name'] }}
                                    </h3>
                                    <span style="font-size: 0.74rem; color: #64748b;">Pulau {{ $prov['island'] }} • {{ $prov['total_kabkot'] }} Kabupaten / Kota</span>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; gap: 10px;">
                                <a href="{{ route('wilayah.provinsi', $prov['slug']) }}" class="btn-primary-green" style="padding: 6px 14px; font-size: 0.76rem; border-radius: 20px;" onclick="event.stopPropagation();">
                                    <i class="bi bi-door-open-fill"></i> Detail Provinsi
                                </a>
                                <span class="badge-toggle-icon" style="font-size: 1.2rem; color: #64748b; transition: transform 0.2s;"><i class="bi bi-chevron-down"></i></span>
                            </div>
                        </div>

                        <!-- Mini Preview Tags -->
                        <div class="prov-preview-bar">
                            <span style="font-weight: 700; color: #1d4ed8; font-size: 0.74rem;">Daftar Kota:</span>
                            @foreach(array_slice($prov['kabkot'], 0, 6) as $kkPreview)
                                <a href="{{ route('wilayah.kabkot', [$prov['slug'], $kkPreview['slug']]) }}" class="prov-preview-tag">
                                    {{ $kkPreview['name'] }}
                                </a>
                            @endforeach
                            @if(count($prov['kabkot']) > 6)
                                <span style="font-size: 0.73rem; color: #94a3b8;">+{{ count($prov['kabkot']) - 6 }} lainnya...</span>
                            @endif
                        </div>

                        <!-- Drawer Body: Full Kab/Kota & Kecamatan Pills -->
                        <div class="prov-drawer-body" style="display: none;">
                            <div class="kabkot-card-grid">
                                @foreach($prov['kabkot'] as $kk)
                                    <div class="home-kabkot-box">
                                        <div style="margin-bottom: 8px;">
                                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
                                                <a href="{{ route('wilayah.kabkot', [$prov['slug'], $kk['slug']]) }}" style="font-size: 0.88rem; font-weight: 800; color: #0a0e1a; text-decoration: none;">
                                                    <i class="bi bi-building" style="color: #2563eb; margin-right: 4px;"></i> {{ $kk['name'] }}
                                                </a>
                                                <a href="{{ route('wilayah.kabkot', [$prov['slug'], $kk['slug']]) }}" style="font-size: 0.72rem; color: #1d4ed8; font-weight: 700; background: #f5f3ff; padding: 2px 8px; border-radius: 4px; text-decoration: none;">
                                                    Pilih Kota &rarr;
                                                </a>
                                            </div>

                                            <!-- Kecamatan Pills Under this Kab/Kota -->
                                            <div style="display: flex; flex-wrap: wrap; gap: 4px; margin-top: 6px;">
                                                @foreach(array_slice($kk['kecamatan'], 0, 8) as $kecName)
                                                    @php $kSlug = Str::slug($kecName); @endphp
                                                    <a href="{{ route('wilayah.kecamatan', [$prov['slug'], $kk['slug'], $kSlug]) }}" class="home-kec-pill" title="Kecamatan {{ $kecName }}">
                                                        {{ $kecName }}
                                                    </a>
                                                @endforeach
                                                @if(count($kk['kecamatan']) > 8)
                                                    <a href="{{ route('wilayah.kabkot', [$prov['slug'], $kk['slug']]) }}" class="home-kec-pill" style="background: #f1f5f9; color: #64748b;">
                                                        +{{ count($kk['kecamatan']) - 8 }} kec
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- ARTIKEL DAERAH TERBARU (3 CARDS DILIMIT SESUAI INSTRUKSI) -->
    <section class="section-py" style="background: #ffffff; border-bottom: 1px solid #e2e8f0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 38px;">
                <span class="section-tag">Publikasi & Panduan Praktik</span>
                <h2 class="section-title">Wawasan & Panduan K3 Korporasi</h2>
                <p class="section-desc" style="max-width: 760px; margin: 0 auto;">
                    Artikel teknis komprehensif mengenai strategi keselamatan kerja, pemenuhan audit SMK3, metodologi identifikasi bahaya, dan investigasi insiden di berbagai sektor industri:
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px; margin-bottom: 36px;">
                @foreach($articles as $art)
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; display: flex; flex-direction: column; transition: all 0.25s ease; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">
                        <div style="height: 200px; overflow: hidden; position: relative;">
                            <img src="{{ $art->featured_image ?? 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=800&auto=format&fit=crop&q=80' }}" alt="{{ $art->title }}" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
                            <span style="position: absolute; top: 12px; left: 12px; background: rgba(10, 14, 26, 0.85); color: #38bdf8; font-size: 0.74rem; font-weight: 700; padding: 4px 12px; border-radius: 20px; backdrop-filter: blur(4px);">
                                {{ $art->category ?? 'Training Corp' }}
                            </span>
                        </div>

                        <div style="padding: 22px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div style="display: flex; align-items: center; gap: 14px; font-size: 0.78rem; color: #64748b; margin-bottom: 10px;">
                                <span><i class="bi bi-clock"></i> {{ $art->read_time ?? 25 }} menit</span>
                                <span><i class="bi bi-eye"></i> {{ number_format($art->views_count ?? 150) }} dibaca</span>
                            </div>

                            <h3 style="font-size: 1.1rem; font-weight: 800; color: #0a0e1a; line-height: 1.4; margin-bottom: 12px;">
                                <a href="{{ route('article.detail', $art->slug) }}" style="color: inherit; text-decoration: none;">
                                    {{ $art->title }}
                                </a>
                            </h3>

                            <p style="font-size: 0.86rem; color: #64748b; line-height: 1.6; margin-bottom: 18px; flex-grow: 1;">
                                {{ Str::limit($art->excerpt ?? strip_tags($art->content), 120) }}
                            </p>

                            <a href="{{ route('article.detail', $art->slug) }}" style="display: inline-flex; align-items: center; gap: 6px; color: #1d4ed8; font-weight: 700; font-size: 0.86rem; text-decoration: none;">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div style="text-align: center;">
                <a href="{{ route('articles') }}" class="btn-outline-white" style="color: #0a0e1a; border-color: #cbd5e1; background: #f8fafc; display: inline-flex; align-items: center; gap: 8px;">
                    <i class="bi bi-journals"></i> Buka Seluruh Arsip Artikel & Panduan
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION (ACCORDION MODERN) -->
    <section class="section-py" style="background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
        <div class="container" style="max-width: 880px;">
            <div class="section-header" style="text-align: center; margin-bottom: 36px;">
                <span class="section-tag">Pertanyaan Sering Diajukan</span>
                <h2 class="section-title">Frequently Asked Questions (FAQ)</h2>
                <p class="section-desc">
                    Pertanyaan umum seputar program pelatihan resmi Training Corp, sertifikasi profesi, dan in-house training perusahaan:
                </p>
            </div>

            <div class="faq-list">
                @foreach($faqs as $faq)
                    <div class="faq-item" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; margin-bottom: 12px; overflow: hidden; transition: all 0.2s ease;">
                        <div class="faq-question" style="padding: 18px 22px; font-weight: 700; font-size: 0.96rem; color: #0a0e1a; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <span>{{ $faq->question }}</span>
                            <i class="bi bi-plus-lg faq-icon" style="color: #2563eb; font-size: 1.1rem; transition: transform 0.2s;"></i>
                        </div>
                        <div class="faq-answer" style="padding: 0 22px 18px; font-size: 0.88rem; color: #475569; line-height: 1.7; display: none;">
                            {{ $faq->answer }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // 1. Hero Slider Logic (Prev, Next, Dots & Autoplay)
    let currentHeroSlide = 1;
    const totalHeroSlides = 2;
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDots = document.querySelectorAll('.hero-dot');
    const prevHeroBtn = document.getElementById('prevHeroBtn');
    const nextHeroBtn = document.getElementById('nextHeroBtn');

    function switchHeroSlide(n) {
        if (n > totalHeroSlides) n = 1;
        if (n < 1) n = totalHeroSlides;
        
        heroSlides.forEach(s => s.style.display = 'none');
        heroDots.forEach(d => {
            d.style.background = 'rgba(255,255,255,0.3)';
            d.style.width = '10px';
        });

        const activeSlide = document.querySelector(`.hero-slide[data-slide="${n}"]`);
        const activeDot = document.querySelector(`.hero-dot[data-slide="${n}"]`);

        if (activeSlide) activeSlide.style.display = 'block';
        if (activeDot) {
            activeDot.style.background = '#10b981';
            activeDot.style.width = '28px';
        }
        currentHeroSlide = n;
    }

    if (prevHeroBtn) {
        prevHeroBtn.addEventListener('click', () => switchHeroSlide(currentHeroSlide - 1));
    }
    if (nextHeroBtn) {
        nextHeroBtn.addEventListener('click', () => switchHeroSlide(currentHeroSlide + 1));
    }
    heroDots.forEach(d => {
        d.addEventListener('click', function() {
            const slideNum = parseInt(this.getAttribute('data-slide'));
            switchHeroSlide(slideNum);
        });
    });

    setInterval(() => {
        switchHeroSlide(currentHeroSlide + 1);
    }, 7000);


    // 2. Keunggulan Interactive Slider Carousel Logic
    const keunggulanTrack = document.getElementById('keunggulanTrack');
    const prevKeunggulanBtn = document.getElementById('prevKeunggulanBtn');
    const nextKeunggulanBtn = document.getElementById('nextKeunggulanBtn');
    const keunggulanDotsContainer = document.getElementById('keunggulanDots');

    if (keunggulanTrack) {
        const cards = keunggulanTrack.querySelectorAll('.keunggulan-slide-card');
        const totalCards = cards.length;
        let keunggulanIndex = 0;

        function getVisibleCardsCount() {
            if (window.innerWidth < 768) return 1;
            if (window.innerWidth < 1024) return 2;
            return 3;
        }

        function maxSlideIndex() {
            return Math.max(0, totalCards - getVisibleCardsCount());
        }

        function updateKeunggulanSlider() {
            const maxIdx = maxSlideIndex();
            if (keunggulanIndex > maxIdx) keunggulanIndex = maxIdx;
            if (keunggulanIndex < 0) keunggulanIndex = 0;

            const cardWidth = cards[0] ? cards[0].offsetWidth : 320;
            const gap = 24;
            const shift = (cardWidth + gap) * keunggulanIndex;
            keunggulanTrack.style.transform = `translateX(-${shift}px)`;

            renderKeunggulanDots();
        }

        function renderKeunggulanDots() {
            if (!keunggulanDotsContainer) return;
            const maxIdx = maxSlideIndex();
            let html = '';
            for (let i = 0; i <= maxIdx; i++) {
                const isActive = (i === keunggulanIndex);
                html += `<button type="button" aria-label="Slide ${i+1}" onclick="goToKeunggulanSlide(${i})" style="width: ${isActive ? '26px' : '8px'}; height: 8px; border-radius: 4px; border: none; background: ${isActive ? '#10b981' : '#cbd5e1'}; cursor: pointer; transition: all 0.3s;"></button>`;
            }
            keunggulanDotsContainer.innerHTML = html;
        }

        window.goToKeunggulanSlide = function(idx) {
            keunggulanIndex = idx;
            updateKeunggulanSlider();
        };

        if (prevKeunggulanBtn) {
            prevKeunggulanBtn.addEventListener('click', () => {
                keunggulanIndex = (keunggulanIndex > 0) ? keunggulanIndex - 1 : maxSlideIndex();
                updateKeunggulanSlider();
            });
        }

        if (nextKeunggulanBtn) {
            nextKeunggulanBtn.addEventListener('click', () => {
                keunggulanIndex = (keunggulanIndex < maxSlideIndex()) ? keunggulanIndex + 1 : 0;
                updateKeunggulanSlider();
            });
        }

        window.addEventListener('resize', () => {
            updateKeunggulanSlider();
        });

        // Initialize keunggulan slider
        updateKeunggulanSlider();

        // Autoplay with hover pause
        let keunggulanTimer = setInterval(() => {
            keunggulanIndex = (keunggulanIndex < maxSlideIndex()) ? keunggulanIndex + 1 : 0;
            updateKeunggulanSlider();
        }, 5000);

        keunggulanTrack.addEventListener('mouseenter', () => clearInterval(keunggulanTimer));
        keunggulanTrack.addEventListener('mouseleave', () => {
            clearInterval(keunggulanTimer);
            keunggulanTimer = setInterval(() => {
                keunggulanIndex = (keunggulanIndex < maxSlideIndex()) ? keunggulanIndex + 1 : 0;
                updateKeunggulanSlider();
            }, 5000);
        });
    }

    // Island Tabs Filter
    const tabBtns = document.querySelectorAll('.island-tab-btn');
    const provCards = document.querySelectorAll('.home-province-card');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const island = btn.getAttribute('data-island');
            provCards.forEach(card => {
                if (island === 'all' || card.getAttribute('data-island') === island) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Toggle Province Drawer
    function toggleProvCard(header) {
        const card = header.closest('.home-province-card');
        const drawer = card.querySelector('.prov-drawer-body');
        const icon = header.querySelector('.badge-toggle-icon');

        if (drawer.style.display === 'none' || !drawer.style.display) {
            drawer.style.display = 'block';
            header.classList.add('is-open');
            if (icon) icon.style.transform = 'rotate(180deg)';
        } else {
            drawer.style.display = 'none';
            header.classList.remove('is-open');
            if (icon) icon.style.transform = 'rotate(0deg)';
        }
    }

    // Cascading Region Selector
    const cascadeData = @json($regionsExplorerData);
    const provSelect = document.getElementById('cascadeProvSelect');
    const kabkotSelect = document.getElementById('cascadeKabkotSelect');
    const kecSelect = document.getElementById('cascadeKecSelect');
    const btnGo = document.getElementById('btnGoToRegion');

    let selectedProv = null;
    let selectedKab = null;
    let selectedKec = null;

    if (provSelect) {
        provSelect.addEventListener('change', function() {
            const pSlug = this.value;
            kabkotSelect.innerHTML = '<option value="">-- Pilih Kab/Kota --</option>';
            kecSelect.innerHTML = '<option value="">-- Pilih Kecamatan Terlebih Dahulu --</option>';
            kecSelect.disabled = true;
            kecSelect.style.background = '#f1f5f9';

            if (!pSlug) {
                kabkotSelect.disabled = true;
                kabkotSelect.style.background = '#f1f5f9';
                selectedProv = null;
                return;
            }

            selectedProv = cascadeData.find(item => item.slug === pSlug);
            if (selectedProv && selectedProv.kabkot) {
                selectedProv.kabkot.forEach(k => {
                    const opt = document.createElement('option');
                    opt.value = k.slug;
                    opt.textContent = k.name;
                    kabkotSelect.appendChild(opt);
                });
                kabkotSelect.disabled = false;
                kabkotSelect.style.background = '#ffffff';
                kabkotSelect.style.border = '1px solid #2563eb';
            }
        });
    }

    if (kabkotSelect) {
        kabkotSelect.addEventListener('change', function() {
            const kSlug = this.value;
            kecSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';

            if (!kSlug || !selectedProv) {
                kecSelect.disabled = true;
                kecSelect.style.background = '#f1f5f9';
                selectedKab = null;
                return;
            }

            selectedKab = selectedProv.kabkot.find(item => item.slug === kSlug);
            if (selectedKab && selectedKab.kecamatan) {
                selectedKab.kecamatan.forEach(kec => {
                    const opt = document.createElement('option');
                    const cleanSlug = kec.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
                    opt.value = cleanSlug;
                    opt.textContent = kec;
                    kecSelect.appendChild(opt);
                });
                kecSelect.disabled = false;
                kecSelect.style.background = '#ffffff';
                kecSelect.style.border = '1px solid #2563eb';
            }
        });
    }

    if (kecSelect) {
        kecSelect.addEventListener('change', function() {
            selectedKec = this.value;
        });
    }

    if (btnGo) {
        btnGo.addEventListener('click', function() {
            const pVal = provSelect ? provSelect.value : '';
            const kVal = kabkotSelect ? kabkotSelect.value : '';
            const cVal = kecSelect ? kecSelect.value : '';

            if (pVal && kVal && cVal) {
                window.location.href = `/wilayah/${pVal}/${kVal}/${cVal}`;
            } else if (pVal && kVal) {
                window.location.href = `/wilayah/${pVal}/${kVal}`;
            } else if (pVal) {
                window.location.href = `/wilayah/${pVal}`;
            } else {
                alert('Silakan pilih minimal Provinsi terlebih dahulu.');
            }
        });
    }

    // FAQ Accordion
    document.querySelectorAll('.faq-question').forEach(q => {
        q.addEventListener('click', () => {
            const item = q.parentElement;
            const ans = item.querySelector('.faq-answer');
            const icon = q.querySelector('.faq-icon');

            if (ans.style.display === 'block') {
                ans.style.display = 'none';
                icon.className = 'bi bi-plus-lg faq-icon';
            } else {
                ans.style.display = 'block';
                icon.className = 'bi bi-dash-lg faq-icon';
            }
        });
    });

    // ==========================================
    // JS PAGINATION & SEARCH FOR 120 PROGRAMS
    // ==========================================
    let currentProgPage = 1;
    const progPerPage = 6;
    let currentProgSearch = '';
    let currentProgCategory = 'all';
    let progSearchDebounceTimer = null;

    const progGridContainer = document.getElementById('programsGridContainer');
    const progPaginationWrapper = document.getElementById('programsPaginationWrapper');
    const progSearchInput = document.getElementById('programSearchInput');
    const progSearchClear = document.getElementById('programSearchClear');
    const progCountInfo = document.getElementById('programCountInfo');

    async function fetchPaginatedPrograms(page = 1, isManual = false) {
        if (!progGridContainer) return;
        currentProgPage = page;

        // Skeleton Loader
        progGridContainer.style.opacity = '0.4';
        
        try {
            const params = new URLSearchParams({
                page: page,
                per_page: progPerPage,
                search: currentProgSearch,
                category: currentProgCategory
            });

            const response = await fetch(`/api/programs?${params.toString()}`);
            const result = await response.json();

            if (result.success) {
                renderProgramsGrid(result.data);
                renderProgramsPagination(result.pagination);
                if (progCountInfo) {
                    if (result.pagination.total === 0) {
                        progCountInfo.textContent = 'Tidak ada program ditemukan';
                    } else {
                        progCountInfo.textContent = `Menampilkan ${result.pagination.from} - ${result.pagination.to} dari ${result.pagination.total} Program`;
                    }
                }
                
                if (isManual) {
                    const section = document.getElementById('program');
                    if (section) {
                        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            }
        } catch (err) {
            console.error('Error fetching programs:', err);
        } finally {
            progGridContainer.style.opacity = '1';
        }
    }

    function renderProgramsGrid(items) {
        if (!progGridContainer) return;

        if (!items || items.length === 0) {
            progGridContainer.innerHTML = `
                <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px; background: #ffffff; border-radius: 16px; border: 1px dashed #cbd5e1;">
                    <div style="font-size: 2.5rem; color: #94a3b8; margin-bottom: 12px;"><i class="bi bi-search"></i></div>
                    <h4 style="font-size: 1.15rem; font-weight: 800; color: #0a0e1a; margin-bottom: 6px;">Program Tidak Ditemukan</h4>
                    <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 18px;">Tidak ada pelatihan yang cocok dengan kata kunci "${escapeHtml(currentProgSearch)}".</p>
                    <button type="button" onclick="resetProgramSearch()" style="background: linear-gradient(135deg, #2563eb, #7c3aed); color: #fff; border: none; padding: 8px 18px; border-radius: 8px; font-weight: 700; font-size: 0.85rem; cursor: pointer;">
                        Reset Pencarian
                    </button>
                </div>
            `;
            return;
        }

        let html = '';
        items.forEach(prog => {
            html += `
                <div class="program-card">
                    <div class="program-img-wrapper">
                        <img src="${escapeHtml(prog.image)}" alt="${escapeHtml(prog.title)}" class="program-img" loading="lazy">
                        <span class="program-badge">${escapeHtml(prog.badge)}</span>
                    </div>

                    <div class="program-body">
                        <div class="program-level">${escapeHtml(prog.level_name)}</div>
                        <h3 class="program-title">${escapeHtml(prog.title)}</h3>
                        <p class="program-desc">
                            ${escapeHtml(prog.short_description)}
                        </p>

                        <div class="program-meta">
                            <div><i class="bi bi-clock-history" style="color: #2563eb;"></i> ${escapeHtml(prog.duration)}</div>
                            <div><i class="bi bi-mortarboard-fill" style="color: #2563eb;"></i> ${escapeHtml(prog.method)}</div>
                        </div>

                        <div class="program-footer-btn">
                            <a href="${escapeHtml(prog.detail_url)}" class="btn-primary-green" style="width: 100%; justify-content: center; font-size: 0.88rem; padding: 11px 16px;">
                                <i class="bi bi-info-circle-fill"></i> Detail Layanan & Lingkup Kerja
                            </a>
                        </div>
                    </div>
                </div>
            `;
        });
        progGridContainer.innerHTML = html;
    }

    function renderProgramsPagination(meta) {
        if (!progPaginationWrapper) return;
        if (!meta || meta.last_page <= 1) {
            progPaginationWrapper.innerHTML = '';
            return;
        }

        const totalPages = meta.last_page;
        const current = meta.current_page;
        let html = '';

        // Prev Button
        if (current > 1) {
            html += `<button type="button" onclick="fetchPaginatedPrograms(${current - 1}, true)" style="display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1px solid #cbd5e1; background: #ffffff; color: #1e293b; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: pointer; transition: all 0.2s;"><i class="bi bi-chevron-left"></i> Prev</button>`;
        } else {
            html += `<button type="button" disabled style="display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1px solid #e2e8f0; background: #f8fafc; color: #94a3b8; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: not-allowed;"><i class="bi bi-chevron-left"></i> Prev</button>`;
        }

        // Smart Page Numbering
        let pages = [];
        if (totalPages <= 7) {
            for (let i = 1; i <= totalPages; i++) pages.push(i);
        } else {
            if (current <= 4) {
                pages = [1, 2, 3, 4, 5, '...', totalPages];
            } else if (current >= totalPages - 3) {
                pages = [1, '...', totalPages - 4, totalPages - 3, totalPages - 2, totalPages - 1, totalPages];
            } else {
                pages = [1, '...', current - 1, current, current + 1, '...', totalPages];
            }
        }

        pages.forEach(p => {
            if (p === '...') {
                html += `<span style="padding: 8px 10px; color: #94a3b8; font-weight: 700;">...</span>`;
            } else if (p === current) {
                html += `<button type="button" style="padding: 8px 14px; border: none; background: linear-gradient(135deg, #2563eb, #7c3aed); color: #ffffff; border-radius: 8px; font-size: 0.85rem; font-weight: 800; box-shadow: 0 4px 12px rgba(37,99,235,0.3);">${p}</button>`;
            } else {
                html += `<button type="button" onclick="fetchPaginatedPrograms(${p}, true)" style="padding: 8px 14px; border: 1px solid #cbd5e1; background: #ffffff; color: #1e293b; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#eff6ff'; this.style.borderColor='#2563eb'" onmouseout="this.style.background='#ffffff'; this.style.borderColor='#cbd5e1'">${p}</button>`;
            }
        });

        // Next Button
        if (current < totalPages) {
            html += `<button type="button" onclick="fetchPaginatedPrograms(${current + 1}, true)" style="display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1px solid #cbd5e1; background: #ffffff; color: #1e293b; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: pointer; transition: all 0.2s;">Next <i class="bi bi-chevron-right"></i></button>`;
        } else {
            html += `<button type="button" disabled style="display: flex; align-items: center; gap: 6px; padding: 8px 14px; border: 1px solid #e2e8f0; background: #f8fafc; color: #94a3b8; border-radius: 8px; font-size: 0.85rem; font-weight: 700; cursor: not-allowed;">Next <i class="bi bi-chevron-right"></i></button>`;
        }

        progPaginationWrapper.innerHTML = html;
    }

    function escapeHtml(str) {
        if (!str) return '';
        return String(str).replace(/[&<>"']/g, function(m) {
            return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m];
        });
    }

    window.resetProgramSearch = function() {
        if (progSearchInput) progSearchInput.value = '';
        if (progSearchClear) progSearchClear.style.display = 'none';
        currentProgSearch = '';
        currentProgCategory = 'all';
        document.querySelectorAll('.prog-cat-btn').forEach(b => {
            if (b.getAttribute('data-cat') === 'all') {
                b.style.background = 'linear-gradient(135deg, #2563eb, #7c3aed)';
                b.style.color = '#fff';
                b.style.borderColor = '#2563eb';
            } else {
                b.style.background = '#f8fafc';
                b.style.color = '#475569';
                b.style.borderColor = '#e2e8f0';
            }
        });
        fetchPaginatedPrograms(1, false);
    };

    if (progSearchInput) {
        progSearchInput.addEventListener('input', function() {
            const val = this.value.trim();
            if (progSearchClear) {
                progSearchClear.style.display = val ? 'block' : 'none';
            }
            clearTimeout(progSearchDebounceTimer);
            progSearchDebounceTimer = setTimeout(() => {
                currentProgSearch = val;
                fetchPaginatedPrograms(1, false);
            }, 300);
        });
    }

    if (progSearchClear) {
        progSearchClear.addEventListener('click', function() {
            resetProgramSearch();
        });
    }

    // Category button events
    document.querySelectorAll('.prog-cat-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.prog-cat-btn').forEach(b => {
                b.style.background = '#f8fafc';
                b.style.color = '#475569';
                b.style.borderColor = '#e2e8f0';
            });
            this.style.background = 'linear-gradient(135deg, #2563eb, #7c3aed)';
            this.style.color = '#fff';
            this.style.borderColor = '#2563eb';

            currentProgCategory = this.getAttribute('data-cat') || 'all';
            fetchPaginatedPrograms(1, false);
        });
    });

    // Initialize pagination on load
    fetchPaginatedPrograms(1, false);

</script>
@endpush

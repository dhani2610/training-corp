@extends('layouts.front')

@section('title', 'Tentang Kami | Profil, Sejarah, Visi, Misi & Standar Mutu Training Corp')
@section('meta_description', 'Profil lengkap, sejarah, visi, misi, dan standar mutu resmi Training Corp: Akuntansi & Perpajakan, HSE Offshore Migas, Teknik Sipil Konstruksi, Mesin Industri & Manajemen Mutu.')

@section('content')

    <!-- HERO ABOUT -->
    <section class="hero-section" style="padding: 56px 0 50px;">
        <div class="container">
            <div class="hero-badge">
                <i class="bi bi-patch-check-fill"></i>
                Pusat Pelatihan & Sertifikasi Kompetensi Profesional (Training Corp) Indonesia
            </div>

            <h1 class="hero-title" style="font-size: 2.35rem;">
                Membangun Keunggulan <span>Kompetensi & Kapabilitas SDM Profesional</span> di Indonesia
            </h1>

            <p class="hero-lead" style="max-width: 860px;">
                Mendedikasikan diri menyelenggarakan pelatihan terapan dan sertifikasi keahlian korporat komprehensif mencakup Akuntansi & Perpajakan, HSE K3 Offshore Migas, Rekayasa Sipil & Struktur, Teknik Mesin & Otomasi, serta Manajemen Mutu & Laboratorium yang berpedoman teguh pada standar resmi nasional dan internasional.
            </p>
        </div>
    </section>

    <!-- SEJARAH, VISI & MISI SECTION -->
    <section class="section-py">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; margin-bottom: 56px; align-items: center;">
                <div>
                    <span class="section-tag" style="background: #ecfdf5; color: #059669; font-size: 0.76rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase;">Sejarah Kami</span>
                    <h2 class="section-title" style="font-size: 1.85rem; margin: 10px 0 18px;">
                        Pusat Unggulan Pelatihan & Sertifikasi Korporat Terlengkap di Indonesia
                    </h2>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                        Dinamika dunia usaha dan percepatan transformasi industri modern menuntut ketersediaan sumber daya manusia yang memiliki keahlian teknis unggul, kepatuhan keselamatan kerja tanpa kompromi, dan integritas operasional berstandar global.
                    </p>
                    <p style="font-size: 0.92rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                        Didirikan oleh konsorsium praktisi industri senior, konsultan keuangan dan perpajakan bersertifikasi, master engineer K3 migas, serta pakar rekayasa teknik terkemuka, <strong>Training Corp</strong> hadir menjadi pusat rujukan terpercaya dalam mencetak profesional andal di seluruh 38 provinsi Indonesia.
                    </p>
                    <div style="display: flex; gap: 18px; flex-wrap: wrap;">
                        <div style="background: #ecfdf5; border-left: 4px solid #10b981; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #064e3b;">100%</div>
                            <div style="font-size: 0.78rem; color: #047857; font-weight: 600;">Standar IAI, BNSP, OPITO & ISO Terakreditasi</div>
                        </div>
                        <div style="background: #eff6ff; border-left: 4px solid #2563eb; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #1e3a8a;">38</div>
                            <div style="font-size: 0.78rem; color: #1d4ed8; font-weight: 600;">Provinsi Jangkauan In-House & Publik</div>
                        </div>
                        <div style="background: #fef2f2; border-left: 4px solid #dc2626; padding: 12px 18px; border-radius: 0 8px 8px 0;">
                            <div style="font-size: 1.3rem; font-weight: 800; color: #7f1d1d;">16.800+</div>
                            <div style="font-size: 0.78rem; color: #b91c1c; font-weight: 600;">Alumni Profesional & Praktisi Industri</div>
                        </div>
                    </div>
                </div>

                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 32px; box-shadow: 0 8px 24px rgba(16, 185, 129, 0.08);">
                    <div style="margin-bottom: 28px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <div style="width: 38px; height: 38px; background: #ecfdf5; color: #059669; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-eye-fill"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0a0e1a; margin: 0;">Visi Lembaga</h3>
                        </div>
                        <p style="font-size: 0.9rem; color: #475569; line-height: 1.65; margin: 0;">
                            Menjadi lembaga pelatihan dan sertifikasi korporat terdepan dan terpercaya di Indonesia yang menghasilkan sumber daya manusia berdaya saing global, berintegritas tinggi, dan berkontribusi nyata pada keunggulan operasional industri nasional.
                        </p>
                    </div>

                    <div style="border-top: 1px solid #e2e8f0; padding-top: 24px;">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <div style="width: 38px; height: 38px; background: #eff6ff; color: #2563eb; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0a0e1a; margin: 0;">Misi Lembaga</h3>
                        </div>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: #475569;">
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #10b981; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Menyelenggarakan program pelatihan dan sertifikasi kompetensi multidisiplin (Keuangan & Perpajakan, HSE K3 Migas, Konstruksi Sipil, Mekanikal & Otomasi, serta Manajemen Mutu) berstandar tertinggi.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #10b981; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Memfasilitasi studi kasus praktis, workshop terarah, hands-on simulation, dan studi implementasi industri terkini yang aplikatif di dunia kerja.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #10b981; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Menerapkan kurikulum berbasis kompetensi yang selaras dengan perkembangan regulasi, kebutuhan korporasi, serta transformasi teknologi digital.</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 8px;">
                                <i class="bi bi-check-circle-fill" style="color: #10b981; font-size: 1rem; margin-top: 2px;"></i>
                                <span>Mendampingi akselerasi kapabilitas tenaga kerja dan peningkatan produktivitas perusahaan mitra di seluruh 38 provinsi Indonesia.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- STANDAR MUTU & KREDIBILITAS -->
            <div style="background: linear-gradient(145deg, #0a0e1a 0%, #131b2e 100%); color: #ffffff; border-radius: 20px; padding: 36px 32px; border: 1px solid rgba(16, 185, 129, 0.4); box-shadow: 0 12px 32px rgba(15, 23, 42, 0.4);">
                <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(16, 185, 129, 0.15); border: 1px solid rgba(16, 185, 129, 0.35); color: #34d399; font-size: 0.74rem; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase; margin-bottom: 12px;">
                            <i class="bi bi-patch-check-fill"></i> Standar Internasional & Kredibilitas Resmi
                        </div>
                        <h3 style="font-size: 1.45rem; font-weight: 800; margin-bottom: 8px; color: #ffffff;">Standar Mutu Pendidikan & Kepatuhan Industri</h3>
                        <p style="font-size: 0.88rem; color: #94a3b8; max-width: 680px; margin: 0; line-height: 1.6;">
                            Seluruh program pelatihan dan sertifikasi berpedoman pada standar resmi asosiasi profesi dan konsorsium global: Ikatan Akuntan Indonesia (IAI), Badan Nasional Sertifikasi Profesi (BNSP), OPITO, OSHA, American Concrete Institute (ACI), ASME, IEEE, serta Sistem Manajemen Mutu ISO 9001, ISO 14001, ISO 45001, dan ISO 22000.
                        </p>
                    </div>
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=6281399810272&text={{ urlencode('Halo Admin Training Corp, saya ingin konsultasi penawaran teknis dan jadwal pelatihan.') }}" target="_blank" class="btn-primary-green" style="font-size: 0.88rem; padding: 12px 22px;">
                            <i class="bi bi-whatsapp"></i> Hubungi Hotline Utama
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

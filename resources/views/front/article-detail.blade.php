@extends('layouts.front')

@section('title', $article->title . ' | Panduan Training Corp')
@section('meta_description', Str::limit($article->excerpt, 160))

@section('content')

    <!-- HERO ARTICLE DETAIL -->
    <section class="hero-section" style="padding: 46px 0 42px; text-align: left;">
        <div class="container">
            <div style="font-size: 0.82rem; color: #c084fc; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                <a href="{{ route('home') }}" style="color: #cbd5e1;"><i class="bi bi-house-door"></i> Beranda</a>
                <span>/</span>
                <a href="{{ route('articles') }}" style="color: #cbd5e1;">Artikel & Panduan</a>
                <span>/</span>
                <span style="color: #ffffff; font-weight: 700;">{{ Str::limit($article->title, 42) }}</span>
            </div>

            <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 14px; flex-wrap: wrap;">
                <span class="hero-badge" style="margin-bottom: 0;">
                    <i class="bi bi-tag-fill"></i> {{ $article->category ?? 'Training Corp' }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(37, 99, 235, 0.2); border-color: #38bdf8; color: #c084fc;">
                    <i class="bi bi-geo-alt-fill"></i> {{ $article->city ?? ($article->province ?? 'Indonesia') }}
                </span>
                <span class="hero-badge" style="margin-bottom: 0; background: rgba(37, 99, 235, 0.2); border-color: #2563eb; color: #c084fc;">
                    <i class="bi bi-shield-check"></i> Sertifikasi Kompetensi Resmi & Akreditasi Global
                </span>
            </div>

            <h1 class="hero-title" style="margin-left: 0; font-size: 2.25rem; line-height: 1.25; margin-bottom: 14px;">
                {{ $article->title }}
            </h1>

            <div style="display: flex; align-items: center; gap: 16px; font-size: 0.82rem; color: #cbd5e1; flex-wrap: wrap;">
                <span><i class="bi bi-person-fill" style="color: #38bdf8;"></i> {{ $article->author ?? 'Instruktur Master Training Corp & Manajemen Risiko K3' }}</span>
                <span>•</span>
                <span><i class="bi bi-clock-history" style="color: #38bdf8;"></i> Waktu Baca: 35-45 Menit</span>
                <span>•</span>
                <span><i class="bi bi-eye-fill" style="color: #38bdf8;"></i> {{ number_format($article->views_count ?? 380) }} x dibaca</span>
                <span>•</span>
                <span style="color: #c084fc; font-weight: 700;"><i class="bi bi-patch-check-fill"></i> Standar Mutu Internasional IAI, BNSP, OPITO & ISO</span>
            </div>
        </div>
    </section>

    <!-- CONTENT WRAPPER -->
    <section class="section-py">
        <div class="container">
            <div class="content-sidebar-grid">
                
                <!-- Main Content Column -->
                <div>
                    <div class="article-content-card">
                        
                        <!-- Highlight Excerpt -->
                        <div style="font-size: 1.02rem; font-weight: 600; color: #0a0e1a; background: #eff6ff; border-left: 4px solid #2563eb; padding: 16px 20px; border-radius: 8px; margin-bottom: 28px;">
                            <div style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.8px; color: #4c1d95; margin-bottom: 6px; font-weight: 800;">
                                <i class="bi bi-bookmark-check-fill"></i> Ringkasan Eksekutif Materi
                            </div>
                            {{ $article->excerpt }}
                        </div>

                        <!-- 4 WHATSAPP HOTLINES CARD -->
                        <div class="wa-hotlines-box" style="margin: 0 0 32px 0;">
                            <div class="wa-hotlines-header">
                                <h3><i class="bi bi-headset" style="color: var(--accent-mint); margin-right: 8px;"></i> 4 Nomor WhatsApp Resmi Layanan Konsultasi & Pendaftaran</h3>
                                <p>Hubungi petugas spesialis kami untuk konsultasi teknis, survei lokasi, atau penawaran pelatihan dan sertifikasi industri:</p>
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

                        <!-- ARTICLE BODY TEXT (HTML RENDERED) -->
                        <div class="article-rich-text">
                            @if(str_contains($article->content, '<h2') || str_contains($article->content, '<p>') || str_contains($article->content, '<div'))
                                {!! $article->content !!}
                            @else
                                @php
                                    $paragraphs = explode("\n\n", $article->content);
                                @endphp
                                @foreach($paragraphs as $para)
                                    @if(str_starts_with(trim($para), 'BAB '))
                                        @php
                                            $lines = explode("\n", trim($para));
                                            $header = array_shift($lines);
                                            $body = implode("\n", $lines);
                                        @endphp
                                        <h2>{{ $header }}</h2>
                                        @if(!empty($body))
                                            <p>{{ $body }}</p>
                                        @endif
                                    @else
                                        <p>{{ trim($para) }}</p>
                                    @endif
                                @endforeach
                            @endif
                        </div>

                        <!-- CTA BANNER -->
                        <div style="background: linear-gradient(135deg, #022c22 0%, #064e3b 100%); border: 1px solid rgba(16, 185, 129, 0.3); border-radius: 12px; padding: 28px; color: #ffffff; margin-top: 40px; text-align: center;">
                            <div style="font-size: 0.8rem; color: #34d399; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
                                Pusat Pelatihan & Sertifikasi Resmi Training Corp
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 12px;">
                                Konsultasi Pendaftaran Training Corp Sekarang
                            </h3>
                            <p style="font-size: 0.88rem; color: #a7f3d0; max-width: 600px; margin: 0 auto 20px; line-height: 1.6;">
                                Hubungi konsultan pendaftaran resmi kami untuk konfirmasi jadwal pelatihan terdekat maupun in-house training korporasi perusahaan:
                            </p>
                            <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="font-size: 0.95rem; padding: 12px 28px; display: inline-flex;">
                                <i class="bi bi-whatsapp"></i> Chat WhatsApp: 081399810272
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div>
                    <!-- Sticky Sidebar -->
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: var(--radius-xl); padding: 26px; box-shadow: 0 4px 16px rgba(0,0,0,0.03); position: sticky; top: 96px;">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0a0e1a; margin-bottom: 18px; border-bottom: 1px solid #f1f5f9; padding-bottom: 10px;">
                            Hotline WhatsApp
                        </h3>

                        <a href="{{ $waLink }}" target="_blank" class="btn-primary-green" style="width: 100%; justify-content: center; margin-bottom: 12px;">
                            <i class="bi bi-whatsapp"></i> Chat 0813-9981-0272
                        </a>

                        <div style="font-size: 0.82rem; color: #64748b; line-height: 1.6; margin-bottom: 20px;">
                            Layanan konsultasi resmi Training Corp seluruh wilayah Indonesia.
                        </div>

                        <!-- 6 Program Resmi Links -->
                        <div style="border-top: 1px solid #f1f5f9; padding-top: 18px;">
                            <h4 style="font-size: 0.95rem; font-weight: 800; color: #0a0e1a; margin-bottom: 12px;">
                                6 Skema Program Training Resmi:
                            </h4>
                            <div style="display: flex; flex-direction: column; gap: 8px;">
                                @foreach($programs as $prog)
                                    <a href="{{ route('program.detail', $prog->slug) }}" style="font-size: 0.82rem; color: #1e1b4b; padding: 8px 10px; border-radius: 6px; background: #f8fafc; border: 1px solid #e2e8f0; text-decoration: none; font-weight: 600; display: flex; align-items: center; justify-content: space-between;">
                                        <span>{{ $prog->title }}</span>
                                        <i class="bi bi-chevron-right" style="color: #2563eb; font-size: 0.75rem;"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Artikel Terkait -->
                        @if(isset($relatedArticles) && $relatedArticles->count() > 0)
                            <div style="border-top: 1px solid #f1f5f9; padding-top: 18px; margin-top: 20px;">
                                <h4 style="font-size: 0.95rem; font-weight: 800; color: #0a0e1a; margin-bottom: 12px;">
                                    Artikel Terkait:
                                </h4>
                                <div style="display: flex; flex-direction: column; gap: 10px;">
                                    @foreach($relatedArticles as $rel)
                                        <a href="{{ route('article.detail', $rel->slug) }}" style="font-size: 0.82rem; color: #131b2e; line-height: 1.4; text-decoration: none; font-weight: 600;">
                                            • {{ $rel->title }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

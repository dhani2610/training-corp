@extends('layouts.admin')

@section('title', 'Tulis Artikel Baru')
@section('header_title', 'Tulis Artikel & Panduan Training Corp Baru')

@section('content')

    <div style="max-width: 850px;">
        <div class="admin-card">
            <div class="admin-card-header">
                <h3 class="admin-card-title">Form Tulis Artikel</h3>
                <a href="{{ route('admin.articles.index') }}" class="btn-view-site">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar
                </a>
            </div>

            <form action="{{ route('admin.articles.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label">Judul Artikel *</label>
                    <input type="text" name="title" class="form-control" required placeholder="Contoh: Panduan Lengkap Analisa Vibrasi Mesin & Deteksi Dini Kerusakan Bearing Industri" value="{{ old('title') }}">
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <label class="form-label">Kategori *</label>
                        <input type="text" name="category" class="form-control" required placeholder="Contoh: Rekayasa Teknologi Industri" value="{{ old('category', 'Rekayasa Teknologi Industri') }}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Estimasi Waktu Baca</label>
                        <input type="text" name="reading_time" class="form-control" placeholder="Contoh: 15 Menit" value="{{ old('reading_time', '15 Menit') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Nama Penulis</label>
                    <input type="text" name="author" class="form-control" placeholder="Contoh: Instruktur Ahli Pengeboran & Manajemen Risiko K3" value="{{ old('author', 'Instruktur Ahli Pengeboran & Manajemen Risiko K3') }}">
                </div>

                <div class="form-group">
                    <label class="form-label">Ringkasan / Excerpt *</label>
                    <textarea name="excerpt" rows="3" class="form-control" required placeholder="Ringkasan singkat artikel yang tampil di kartu artikel...">{{ old('excerpt') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Isi Lengkap Artikel *</label>
                    <textarea name="content" rows="10" class="form-control" required placeholder="Tuliskan isi artikel lengkap di sini...">{{ old('content') }}</textarea>
                </div>

                <div style="margin-bottom: 24px;">
                    <input type="checkbox" name="is_published" id="is_published" value="1" checked style="width: 18px; height: 18px;">
                    <label for="is_published" style="font-size: 0.88rem; font-weight: 700; color: #1e293b; cursor: pointer;">Publikasikan Sekarang</label>
                </div>

                <button type="submit" class="btn-admin-gold" style="font-size: 0.95rem; padding: 12px 24px;">
                    <i class="bi bi-send-fill"></i> Terbitkan Artikel
                </button>
            </form>
        </div>
    </div>

@endsection

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Setting;
use App\Models\Statistic;
use App\Models\Program;
use App\Models\Article;
use App\Models\Faq;
use App\Services\CorpSchemeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // 1. Super Admin User
        User::updateOrCreate(
            ['email' => 'admin@trainingcorp.my.id'],
            [
                'name' => 'Administrator Training Corp',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Settings
        $settings = [
            'site_name' => 'Training Corp',
            'site_tagline' => 'Pusat Pelatihan & Sertifikasi Kompetensi Profesional, Keuangan, Rekayasa & Bisnis Terkemuka di Indonesia',
            'company_name' => 'Lembaga Pelatihan & Pengembangan Training Corp Indonesia',
            'license_info' => 'Akreditasi Lembaga Pelatihan Resmi & Standar Mutu Internasional (IAI, BNSP, OPITO, OSHA, ISO, ASME, ACI & SNI)',
            'whatsapp' => '081399810272', // Main WA Utama (Highlighted)
            'whatsapp_detail_1' => '08118500177',
            'whatsapp_detail_2' => '081399810272',
            'whatsapp_detail_3' => '087894580806',
            'whatsapp_detail_4' => '087894580649',
            'email' => 'kontak@trainingcorp.my.id',
            'email_secondary' => 'info@trainingcorp.my.id',
            'phone' => '081399810272',
            'address' => 'Gedung Pusat Pelatihan & Pengembangan Eksekutif Training Corp Indonesia, Jakarta',
            'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.28298835848!2d106.759478!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e498c0a531%3A0x7d87f7b2c0e86b0a!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'office_hours' => 'Senin - Jumat: 08.00 - 17.00 WIB | Hotline Layanan & WhatsApp Konsultasi: 24 Jam',
            'hero_title' => 'Pusat Pelatihan & Sertifikasi Profesional Resmi Training Corp Indonesia',
            'hero_description' => 'Katalog Program Pelatihan & Sertifikasi Kompetensi Terlengkap: Manufaktur & Fabrikasi Logam, Otomotif & Alat Berat, Agribisnis & Perkebunan, K3 Industri & Energi, Teknik Sipil Konstruksi, Teknologi Informasi & Otomasi, Manajemen Mutu & Laboratorium, serta Logistik & Supply Chain.',
            'about_history' => 'Lembaga Training Corp didirikan oleh konsorsium praktisi senior, lead auditor terakreditasi, master engineer, dan konsultan bisnis terkemuka di Indonesia. Kami berdedikasi mentransformasikan kapabilitas sumber daya manusia korporasi melalui pelatihan terapan berstandar global, kurikulum mutakhir, dan sertifikasi resmi yang diakui luas. Hingga saat ini, Training Corp telah membina lebih dari 28.500 profesional dan berkolaborasi dengan lebih dari 1.450 perusahaan di seluruh 38 provinsi di Indonesia.',
            'about_vision' => 'Menjadi lembaga pelatihan dan sertifikasi multi-disiplin terdepan di Indonesia yang mencetak profesional unggul, adaptif, berintegritas tinggi, dan berdaya saing global.',
            'about_mission' => "1. Menyelenggarakan pelatihan dan sertifikasi profesional berkualitas tinggi di bidang finansial, perpajakan, keselamatan migas, rekayasa sipil, manufaktur, dan manajemen mutu.\n2. Mengembangkan kurikulum aplikatif berbasis studi kasus industri nyata dan simulasi praktis.\n3. Mendukung pertumbuhan bisnis korporasi nasional melalui peningkatan efisiensi operasional, kepatuhan regulasi, dan mitigasi risiko komprehensif.\n4. Menghadirkan layanan In-House Training fleksibel dan berstandar internasional ke seluruh pelosok 38 provinsi di Indonesia.",
            'floating_wa_text' => 'Halo Admin Utama Training Corp, saya ingin konsultasi pendaftaran program pelatihan profesional perusahaan.',
            'whatsapp_template' => 'Halo Admin Utama Training Corp, saya ingin konsultasi pendaftaran pelatihan dan sertifikasi resmi untuk wilayah {region}. Mohon info jadwal batch terbaru dan penawaran in-house.'
        ];

        foreach ($settings as $key => $val) {
            Setting::updateOrCreate(['key' => $key], ['value' => $val]);
        }

        // 3. Statistics
        $stats = [
            [
                'key' => 'alumni',
                'label' => 'Alumni Lulus Sertifikasi',
                'value' => '28,500+',
                'description' => 'Tersertifikasi di bidang akuntansi, pajak, HSE offshore, teknik & manajemen',
                'icon' => 'bi-people-fill',
                'sort_order' => 1,
            ],
            [
                'key' => 'clients',
                'label' => 'Mitra Korporasi Nasional',
                'value' => '1,450+',
                'description' => 'Perusahaan multinasional, BUMN, perbankan, manufaktur, dan migas di Indonesia',
                'icon' => 'bi-building-fill',
                'sort_order' => 2,
            ],
            [
                'key' => 'satisfaction',
                'label' => 'Tingkat Kepuasan & Kelulusan',
                'value' => '99.6%',
                'description' => 'Evaluasi kepuasan peserta terhadap kualitas instruktur dan silabus pelatihan',
                'icon' => 'bi-shield-check',
                'sort_order' => 3,
            ],
            [
                'key' => 'coverage',
                'label' => 'Jangkauan In-House 38 Provinsi',
                'value' => '100%',
                'description' => 'Hadir langsung on-site ke fasilitas kantor dan pabrik klien di seluruh Indonesia',
                'icon' => 'bi-geo-alt-fill',
                'sort_order' => 4,
            ]
        ];

        Statistic::truncate();
        foreach ($stats as $st) {
            Statistic::create(array_merge($st, ['is_active' => true]));
        }

        // 4. Programs (Compiled Master Programs)
        Program::truncate();
        $masterPrograms = CorpSchemeService::getMasterPrograms();
        $images = [
            'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&auto=format&fit=crop&q=80',
            'https://images.unsplash.com/photo-1581092160607-ee22621dd758?w=800&auto=format&fit=crop&q=80',
            'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&auto=format&fit=crop&q=80',
            'https://images.unsplash.com/photo-1581092335397-9583fe92d232?w=800&auto=format&fit=crop&q=80',
            'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=800&auto=format&fit=crop&q=80',
            'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&auto=format&fit=crop&q=80'
        ];

        foreach ($masterPrograms as $idx => $prog) {
            Program::create([
                'title' => $prog['title'],
                'slug' => $prog['slug'],
                'level_name' => $prog['level_name'],
                'badge' => $prog['badge'],
                'duration' => $prog['duration'],
                'method' => $prog['method'],
                'short_description' => $prog['short_description'],
                'full_description' => $prog['short_description'] . ' Program komprehensif ini menggabungkan pemahaman teori mutakhir, studi kasus bisnis riil, penguasaan regulasi teknis, serta simulasi aplikatif untuk mempercepat penguasaan keahlian profesional di lingkungan kerja.',
                'image' => $images[$idx % count($images)],
                'target_audience' => $prog['target_audience'],
                'is_active' => true,
                'is_featured' => ($idx < 6),
                'sort_order' => $idx + 1
            ]);
        }

        // 5. Featured Articles (3 items)
        Article::truncate();
        $featured = [
            [
                'title' => 'Panduan Komprehensif Brevet Pajak AB & Strategi Kepatuhan Pajak Badan Perusahaan',
                'slug' => 'panduan-komprehensif-brevet-pajak-ab-dan-strategi-kepatuhan-pajak-badan-perusahaan',
                'excerpt' => 'Pelajari tata kelola pemenuhan kewajiban perpajakan PPh Badan, withholding tax PPh 21/23/26, e-Faktur PPN, serta mitigasi risiko sanksi melalui perencanaan pajak (tax planning) yang sah.',
                'read_time' => 15,
                'views' => 4250
            ],
            [
                'title' => 'Standar Keselamatan Lepas Pantai BOSIET with CA-EBS: Prosedur Evakuasi Helikopter & Tanggap Darurat Migas',
                'slug' => 'standar-keselamatan-lepas-pantai-bosiet-with-ca-ebs-prosedur-evakuasi-helikopter-tanggap-darurat-migas',
                'excerpt' => 'Kupas tuntas kompetensi wajib pekerja offshore meliputi simulasi underwater escape HUET, penggunaan alat bantu napas CA-EBS, sea survival, dan pemadaman kebakaran tingkat lanjut.',
                'read_time' => 14,
                'views' => 4680
            ],
            [
                'title' => 'Implementasi Sistem Manajemen Keamanan Pangan HACCP & FSSC 22000 pada Industri Manufaktur Makanan',
                'slug' => 'implementasi-sistem-manajemen-keamanan-pangan-haccp-dan-fssc-22000-pada-industri-manufaktur-makanan',
                'excerpt' => 'Langkah praktis mengidentifikasi bahaya biologi, kimia, dan fisik, menetapkan Critical Control Point (CCP), batas kritis, serta sistem monitoring terpadu guna menjamin integritas produk konsumsi.',
                'read_time' => 16,
                'views' => 3910
            ]
        ];

        foreach ($featured as $idx => $art) {
            Article::create([
                'title' => $art['title'],
                'slug' => $art['slug'],
                'excerpt' => $art['excerpt'],
                'content' => CorpSchemeService::generateArticleBody($art['title'], 'Nasional'),
                'category' => 'Corporate Training & Sertifikasi',
                'read_time' => $art['read_time'],
                'featured_image' => $images[$idx % count($images)],
                'is_featured' => true,
                'is_published' => true,
                'views_count' => $art['views'],
                'created_at' => now()->subDays($idx * 2)
            ]);
        }

        // 6. FAQs
        Faq::truncate();
        $faqs = [
            [
                'question' => 'Apa saja rumpun bidang pelatihan yang diselenggarakan oleh Training Corp?',
                'answer' => 'Training Corp menyelenggarakan pelatihan multi-disiplin komprehensif, mencakup: Akuntansi & Perpajakan (Brevet AB/C, CPA, USKP, IFRS), Offshore & Keselamatan Migas (BOSIET, HUET, NEBOSH), Teknik Sipil & Konstruksi (ACI, STAAD Pro, QA/QC Gedung), Metalurgi & NDT, Teknik Mesin & Otomasi (Vibration, PLC, Hidrolik), serta Manajemen Mutu & Pangan (HACCP, ISO 22000, ISO 9001).',
                'sort_order' => 1
            ],
            [
                'question' => 'Apakah program pelatihan ini dapat diselenggarakan secara In-House di lokasi perusahaan kami?',
                'answer' => 'Ya, kami melayani In-House Corporate Training di seluruh 38 provinsi di Indonesia. Silabus, durasi, studi kasus, serta jadwal pelatihan dapat disesuaikan secara fleksibel (tailor-made) mengikuti kebutuhan spesifik tim dan fasilitas kerja Anda.',
                'sort_order' => 2
            ],
            [
                'question' => 'Standar akreditasi dan sertifikasi apa yang menjadi acuan kurikulum kami?',
                'answer' => 'Seluruh program kami mengacu pada standar kompetensi yang diakui secara nasional dan global, seperti Ikatan Akuntan Indonesia (IAI), BNSP, OPITO & OSHA (Keselamatan Migas), ACI, ASME, API, IEEE, IEC, serta International Organization for Standardization (ISO).',
                'sort_order' => 3
            ],
            [
                'question' => 'Fasilitas apa saja yang diperoleh peserta pelatihan?',
                'answer' => 'Setiap peserta mendapatkan Sertifikat Resmi Pelatihan & Sertifikasi Kompetensi berbarcode verifikasi online, modul panduan teknis eksklusif, worksheet aplikasi & template kerja profesional, souvenir training kit, serta akses konsultasi lanjutan pasca-pelatihan bersama instruktur master.',
                'sort_order' => 4
            ],
            [
                'question' => 'Bagaimana cara mengajukan proposal penawaran dan pendaftaran pelatihan?',
                'answer' => 'Prosedur sangat mudah. Anda dapat memilih program pada katalog website, lalu menghubungi Hotline Utama kami via WhatsApp di 0813-9981-0272 atau email resmi kontak@trainingcorp.my.id. Tim representatif kami akan mengirimkan proposal teknis lengkap dan silabus dalam 1x24 jam kerja.',
                'sort_order' => 5
            ]
        ];

        foreach ($faqs as $fq) {
            Faq::create(array_merge($fq, ['is_active' => true]));
        }

        Schema::enableForeignKeyConstraints();
    }
}

<div class="space-y-24">
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 text-white">
        <div class="absolute inset-0">
            <div class="absolute -top-16 right-16 h-72 w-72 rounded-full bg-secondary-400/30 blur-3xl"></div>
            <div class="absolute bottom-0 left-20 h-72 w-72 rounded-full bg-primary-400/20 blur-[160px]"></div>
        </div>

        <div class="relative">
            <div class="container mx-auto px-4 py-24 md:py-32">
                <div class="max-w-3xl space-y-6">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em]">
                        PPDB 2025/2026
                    </span>
                    <h1 class="text-3xl font-semibold leading-tight md:text-5xl">
                        Panduan Penerimaan Peserta Didik Baru SMP Muara Indonesia
                    </h1>
                    <p class="text-lg text-white/85">
                        Kami membuka kesempatan bagi calon siswa berprestasi dan berkarakter untuk bergabung.
                        Ikuti alur pendaftaran berikut untuk mendapatkan pengalaman belajar terbaik.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['title' => 'Gelombang I', 'date' => '1 Nov – 20 Des 2024', 'desc' => 'Prioritas jalur prestasi akademik & tahfidz.'],
                    ['title' => 'Gelombang II', 'date' => '6 Jan – 1 Mar 2025', 'desc' => 'Jalur reguler fullday & boarding.'],
                ['title' => 'Gelombang III', 'date' => '10 Mar – 30 Apr 2025', 'desc' => 'Jalur cadangan & mutasi.'],
                ['title' => 'Pengumuman', 'date' => 'Seminggu setelah seleksi', 'desc' => 'Melalui portal ppdb.smpmuara.sch.id dan WhatsApp resmi.'],
            ] as $phase)
                <article class="rounded-[28px] bg-white p-8 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100">
                    <p class="text-sm font-semibold uppercase tracking-[0.3em] text-primary-500">{{ $phase['title'] }}</p>
                    <h2 class="mt-3 text-lg font-semibold text-primary-900">{{ $phase['date'] }}</h2>
                    <p class="mt-2 text-sm text-primary-700/80">{{ $phase['desc'] }}</p>
                </article>
            @endforeach
            </div>
        </div>
    </section>

    <section class="bg-primary-50/70 py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="grid gap-10 lg:grid-cols-[1.2fr,0.8fr]">
                <div class="space-y-6">
                    <h2 class="text-3xl font-semibold text-primary-900 md:text-4xl">
                        Tahapan Pendaftaran Daring
                    </h2>
                    <ol class="space-y-4 text-sm text-primary-700/80">
                        <li class="rounded-3xl border border-primary-100 bg-white p-6 shadow-sm shadow-primary-900/5">
                            <p class="font-semibold text-primary-900">1. Registrasi Akun</p>
                            <p class="mt-2">Isi formulir awal di portal PPDB untuk mendapatkan akun calon siswa dan jadwal seleksi.</p>
                        </li>
                    <li class="rounded-3xl border border-primary-100 bg-white p-6 shadow-sm shadow-primary-900/5">
                        <p class="font-semibold text-primary-900">2. Unggah Berkas</p>
                        <p class="mt-2">Kartu keluarga, rapor kelas 5 & 6 semester 1, sertifikat prestasi (opsional), surat rekomendasi sekolah asal.</p>
                    </li>
                    <li class="rounded-3xl border border-primary-100 bg-white p-6 shadow-sm shadow-primary-900/5">
                        <p class="font-semibold text-primary-900">3. Tes Seleksi</p>
                        <p class="mt-2">Tes potensi akademik, wawancara siswa & orang tua, serta tes hafalan bagi jalur tahfidz.</p>
                    </li>
                    <li class="rounded-3xl border border-primary-100 bg-white p-6 shadow-sm shadow-primary-900/5">
                        <p class="font-semibold text-primary-900">4. Pengumuman & Daftar Ulang</p>
                        <p class="mt-2">Calon siswa melakukan daftar ulang maksimal 7 hari setelah pengumuman dengan menyelesaikan administrasi.</p>
                    </li>
                    </ol>
                </div>
                <div class="space-y-6 rounded-[36px] bg-gradient-to-br from-white to-primary-50 p-10 shadow-xl shadow-primary-900/5">
                    <h3 class="text-xl font-semibold text-primary-900">Syarat Umum</h3>
                    <ul class="space-y-3 text-sm text-primary-700/80">
                        <li>• Lulusan SD/MI tahun 2024 &amp; 2025.</li>
                        <li>• Usia maksimal 15 tahun pada Juli 2025.</li>
                        <li>• Sehat jasmani, rohani, dan bebas narkoba.</li>
                        <li>• Bersedia mengikuti tata tertib SMP Muara Indonesia.</li>
                    </ul>
                    <div class="rounded-3xl border border-primary-100 bg-white/90 p-6 text-sm text-primary-700/80">
                        <p class="font-semibold text-primary-900">Biaya Pendidikan (Tahunan)</p>
                        <ul class="mt-3 space-y-2">
                            <li>• Uang Pangkal Fullday : Rp12.500.000</li>
                            <li>• Uang Pangkal Boarding : Rp18.500.000</li>
                            <li>• SPP Fullday : Rp950.000/bulan</li>
                            <li>• SPP Boarding : Rp1.650.000/bulan (sudah termasuk konsumsi)</li>
                        </ul>
                    </div>
                    <a href="#" class="inline-flex items-center gap-2 rounded-full border border-primary-200 px-5 py-3 text-sm font-semibold text-primary-700 transition-colors duration-200 hover:border-primary-400 hover:bg-primary-50 hover:text-primary-900">
                        Unduh Brosur PPDB
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2m-4-5l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="grid gap-12 lg:grid-cols-[1.1fr,0.9fr]">
                <div class="space-y-6">
                    <h2 class="text-3xl font-semibold text-primary-900 md:text-4xl">
                        Informasi Beasiswa &amp; Jalur Khusus
                    </h2>
                    <div class="grid gap-4 md:grid-cols-2">
                        @foreach ([
                            ['title' => 'Beasiswa Prestasi Akademik', 'desc' => 'Diskon hingga 100% uang pangkal bagi peraih medali OSN atau lomba tingkat nasional.'],
                            ['title' => 'Beasiswa Tahfidz Qur\'an', 'desc' => 'Potongan SPP hingga 100% bagi hafidz minimal 10 juz dan lulus tes tahsin.'],
                            ['title' => 'Jalur Mitra', 'desc' => 'Kerja sama dengan SD/MI mitra Muara dengan rekomendasi kepala sekolah.'],
                            ['title' => 'Jalur Saudara Kandung', 'desc' => 'Potongan SPP 10% sepanjang kedua saudara masih aktif di SMP Muara.'],
                        ] as $scholarship)
                        <div class="rounded-3xl border border-primary-100 bg-white p-6 shadow-sm shadow-primary-900/5">
                            <h3 class="text-lg font-semibold text-primary-900">{{ $scholarship['title'] }}</h3>
                            <p class="mt-2 text-sm text-primary-700/80">{{ $scholarship['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="space-y-6 rounded-[36px] bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 p-10 text-white shadow-2xl shadow-primary-950/40">
                <h3 class="text-xl font-semibold">Kontak Pusat Informasi PPDB</h3>
                <p class="text-sm text-white/80">
                    Tim admisi kami siap membantu proses pendaftaran dan konsultasi program pilihan:
                </p>
                <ul class="space-y-3 text-sm text-white/80">
                    <li>• Hotline: 0812-3000-2211 (WA)</li>
                    <li>• Email: ppdb@smpmuara.sch.id</li>
                    <li>• Instagram: @ppdb.smpmuara</li>
                    <li>• Kantor Admisi: Senin - Sabtu, 08.00 - 15.00 WIB</li>
                </ul>
                <button type="button" class="flex w-full items-center justify-center gap-2 rounded-full bg-white/10 px-5 py-3 text-sm font-semibold text-white transition-colors duration-200 hover:bg-white/20">
                    Jadwalkan Tur Sekolah
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
</div>

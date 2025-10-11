<div class="space-y-24">
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 text-white">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 h-64 w-64 rounded-full bg-secondary-400/30 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 rounded-full bg-primary-400/20 blur-[140px]"></div>
        </div>

        <div class="relative">
            <div class="container mx-auto px-4 py-24 md:py-32">
                <div class="max-w-3xl space-y-6">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em]">
                        Agenda &amp; Kegiatan
                    </span>
                    <h1 class="text-3xl font-semibold leading-tight md:text-5xl">
                        Kalender Aktivitas SMP Muara Indonesia
                    </h1>
                    <p class="text-lg text-white/85">
                        Jelajahi rangkaian kegiatan akademik, ekstrakurikuler, dan pengembangan karakter yang menjadi ciri khas SMP Muara sepanjang tahun ajaran.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="grid gap-6 lg:grid-cols-[0.6fr,1.4fr]">
                <div class="rounded-[32px] bg-gradient-to-br from-primary-50 via-white to-white p-8 shadow-xl shadow-primary-900/5">
                    <h2 class="text-xl font-semibold text-primary-900">Kalender Akademik 2024/2025</h2>
                    <ul class="mt-6 space-y-3 text-sm text-primary-700/80">
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-secondary-400"></span>
                            15 Juli 2024 – Awal Tahun Pelajaran &amp; Masa Ta'aruf Siswa Baru
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-secondary-400"></span>
                            9-13 September 2024 – Penilaian Tengah Semester Ganjil
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-secondary-400"></span>
                            2-6 Desember 2024 – Penilaian Akhir Semester Ganjil
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-secondary-400"></span>
                            10-14 Maret 2025 – Penilaian Tengah Semester Genap
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-2 h-2 w-2 rounded-full bg-secondary-400"></span>
                            12-20 Mei 2025 – Asesmen Sumatif Akhir &amp; Pameran Karya
                        </li>
                    </ul>
                    <a href="#" class="mt-8 inline-flex items-center gap-2 rounded-full border border-primary-200 px-5 py-3 text-sm font-semibold text-primary-700 transition-colors duration-200 hover:border-primary-400 hover:bg-primary-50 hover:text-primary-900">
                        Unduh Kalender Lengkap (PDF)
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2m-4-5l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </a>
                </div>

                <div class="space-y-6">
                    <div class="grid gap-4 md:grid-cols-2">
                        @foreach ([
                            ['date' => '20 Februari 2025', 'title' => 'Muara Science Fair', 'desc' => 'Pameran proyek penelitian siswa dan pelatihan riset dari dosen UNAIR.'],
                            ['date' => '5 Maret 2025', 'title' => 'Rihlah Dakwah &amp; Outdoor Leadership', 'desc' => 'Eksplorasi alam dan pembinaan kepemimpinan di Trawas, Jawa Timur.'],
                            ['date' => '18 April 2025', 'title' => 'Ramadan Student Camp', 'desc' => 'Pesantren kilat, kajian tematik, dan bakti sosial di desa binaan.'],
                            ['date' => '24 Juli 2025', 'title' => 'International Student Exchange', 'desc' => 'Program pertukaran pelajar daring bersama SMP Saijo Higashi, Tokyo.'],
                        ] as $event)
                            <article class="rounded-[28px] bg-white p-8 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100">
                                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-primary-500">{{ $event['date'] }}</p>
                                <h3 class="mt-3 text-lg font-semibold text-primary-900">{!! $event['title'] !!}</h3>
                                <p class="mt-2 text-sm text-primary-700/80">{{ $event['desc'] }}</p>
                            </article>
                        @endforeach
                    </div>

                    <div class="overflow-hidden rounded-[32px] bg-primary-900 text-white shadow-2xl shadow-primary-900/40">
                        <div class="grid gap-0 md:grid-cols-2">
                            <div class="space-y-4 p-8 md:p-12">
                                <h2 class="text-2xl font-semibold">Ekstrakurikuler Pilihan</h2>
                                <p class="text-sm text-white/80">
                                    Setiap siswa diwajibkan memilih minimal satu klub. Pembinaan dilakukan oleh pelatih profesional dan alumni berprestasi.
                                </p>
                                <ul class="space-y-3 text-sm text-white/80">
                                    <li>• Klub Robotik dan Coding</li>
                                    <li>• English Debate Society</li>
                                    <li>• Muara Sport Academy (Basket, Futsal, Panahan)</li>
                                    <li>• Sanggar Seni Tari &amp; Teater Muara</li>
                                </ul>
                            </div>
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1200&q=80" alt="Ekstrakurikuler SMP Muara" class="h-full w-full object-cover" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-primary-900/80 to-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary-50/70 py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="grid gap-10 lg:grid-cols-[1.1fr,0.9fr]">
                <div class="space-y-6">
                    <h2 class="text-3xl font-semibold text-primary-900 md:text-4xl">
                        Program Pengembangan Karakter
                    </h2>
                    <p class="text-base text-primary-700/80 md:text-lg">
                        Penguatan karakter dilakukan setiap pekan melalui muhasabah, mentoring, dan kegiatan sosial.
                    </p>
                    <div class="grid gap-4 md:grid-cols-2">
                        @foreach ([
                            ['title' => 'Mentoring Akhlak', 'desc' => 'Bimbingan bersama mentor setiap Selasa &amp; Jumat membahas adab dan etika pergaulan.'],
                            ['title' => 'Parent Gathering', 'desc' => 'Forum orang tua dan sekolah untuk menyelaraskan strategi pengasuhan dan belajar di rumah.'],
                            ['title' => 'Community Service', 'desc' => 'Pengabdian masyarakat bersama warga sekitar sekolah atau desa binaan.'],
                            ['title' => 'Muara Leadership Day', 'desc' => 'Simulasi kepemimpinan dan manajemen proyek dengan tantangan real case.'],
                        ] as $character)
                            <div class="rounded-3xl border border-primary-100 bg-white p-6 shadow-sm shadow-primary-900/5">
                                <h3 class="text-lg font-semibold text-primary-900">{!! $character['title'] !!}</h3>
                                <p class="mt-2 text-sm text-primary-700/80">{{ $character['desc'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-6 rounded-[36px] bg-gradient-to-br from-white to-primary-50 p-10 shadow-xl shadow-primary-900/5">
                    <h3 class="text-xl font-semibold text-primary-900">Informasi Klub dan Jadwal</h3>
                    <div class="rounded-3xl border border-primary-100 bg-white/90 p-6 text-sm text-primary-700/80">
                        <p class="font-semibold text-primary-800">Jam Ekstrakurikuler</p>
                        <ul class="mt-3 space-y-2">
                            <li>• Selasa &amp; Kamis : 15.30 – 17.30 WIB</li>
                            <li>• Sabtu : 08.00 – 12.00 WIB (kelas prestasi)</li>
                            <li>• Minggu : Liga internal &amp; kompetisi simulasi</li>
                        </ul>
                    </div>
                    <div class="rounded-3xl border border-primary-100 bg-white/90 p-6 text-sm text-primary-700/80">
                        <p class="font-semibold text-primary-800">Kontak Koordinator</p>
                        <p class="mt-3">Bapak Farhan Yusuf, S.Pd<br>Whatsapp: 0812-3000-2211<br>Email: kegiatan@smpmuara.sch.id</p>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-full border border-primary-200 px-5 py-3 text-sm font-semibold text-primary-700 transition-colors duration-200 hover:border-primary-400 hover:bg-primary-50 hover:text-primary-900">
                        Ajukan Kerja Sama Kegiatan
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

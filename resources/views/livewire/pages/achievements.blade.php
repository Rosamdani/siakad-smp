<div class="space-y-24">
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 text-white">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 h-64 w-64 rounded-full bg-secondary-400/30 blur-3xl"></div>
            <div class="absolute bottom-0 right-10 h-64 w-64 rounded-full bg-primary-400/20 blur-[140px]"></div>
        </div>

        <div class="relative">
            <div class="container mx-auto px-4 py-24 md:py-32">
                <div class="max-w-3xl space-y-6">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em]">
                        Prestasi Sekolah
                    </span>
                    <h1 class="text-3xl font-semibold leading-tight md:text-5xl">
                        Deretan Prestasi yang Menginspirasi dan Mengukuhkan Reputasi SMP Muara Indonesia
                    </h1>
                    <p class="text-lg text-white/85">
                        Capaian akademik, non-akademik, serta inovasi sekolah adalah buah dari kolaborasi guru, siswa, dan orang tua. Berikut highlight prestasi terbaik dalam tiga tahun terakhir.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="grid gap-6 md:grid-cols-2">
                @foreach ([
                    ['year' => '2024', 'category' => 'Akademik', 'title' => 'Medali Emas OSN Matematika & IPA', 'detail' => 'Siswa SMP Muara mewakili Provinsi Jawa Timur dan meraih medali emas dalam Olimpiade Sains Nasional.'],
                    ['year' => '2024', 'category' => 'Teknologi', 'title' => 'Champion Muara Robotics Team', 'detail' => 'Juara umum kompetisi National Robotics Championship kategori Autonomous Coding.'],
                ['year' => '2023', 'category' => 'Lingkungan', 'title' => 'Sekolah Adiwiyata Nasional', 'detail' => 'Penilaian Kementerian Lingkungan Hidup atas konsistensi program eco school & bank sampah digital.'],
                ['year' => '2023', 'category' => 'Olahraga', 'title' => 'Juara Umum Porseni Surabaya', 'detail' => 'Mengoleksi 8 medali emas cabang atletik, basket, pencak silat, dan renang.'],
            ] as $achievement)
                <article class="group relative overflow-hidden rounded-[32px] bg-white p-8 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100 transition-all duration-200 hover:-translate-y-2 hover:shadow-card">
                    <div class="absolute -right-16 -top-16 h-36 w-36 rounded-full bg-primary-100/60 blur-3xl transition-transform duration-300 group-hover:scale-110"></div>
                    <div class="relative flex items-center justify-between">
                        <span class="rounded-full bg-primary-50 px-3 py-1 text-xs font-semibold text-primary-600">{{ $achievement['category'] }}</span>
                        <span class="text-sm font-semibold text-primary-400">{{ $achievement['year'] }}</span>
                    </div>
                    <h2 class="relative mt-6 text-xl font-semibold text-primary-900">{{ $achievement['title'] }}</h2>
                    <p class="relative mt-3 text-sm text-primary-700/80">
                        {{ $achievement['detail'] }}
                    </p>
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
                        Peta Prestasi Akademik &amp; Kompetisi
                    </h2>
                    <div class="overflow-hidden rounded-[32px] bg-white shadow-xl shadow-primary-900/5 ring-1 ring-primary-100">
                        <div class="grid grid-cols-4 bg-primary-50/60 text-xs font-semibold uppercase tracking-[0.3em] text-primary-600">
                            <div class="px-4 py-3">Tahun</div>
                            <div class="px-4 py-3 col-span-2">Prestasi</div>
                            <div class="px-4 py-3">Level</div>
                        </div>
                        @foreach ([
                            ['year' => '2024', 'title' => 'Finalis Global Innovation Challenge – NASA', 'level' => 'Internasional'],
                            ['year' => '2024', 'title' => 'Juara 1 Lomba Debat Bahasa Inggris', 'level' => 'Nasional'],
                            ['year' => '2023', 'title' => 'Gold Medal Lomba Riset Remaja', 'level' => 'ASEAN'],
                            ['year' => '2023', 'title' => 'Juara 1 Musabaqah Hifdzil Qur\'an', 'level' => 'Provinsi'],
                            ['year' => '2022', 'title' => 'Juara 1 Science Project Fair', 'level' => 'Asia Pasifik'],
                        ] as $row)
                            <div class="grid grid-cols-4 border-t border-primary-100/70 text-sm text-primary-700/85">
                                <div class="px-4 py-3 font-semibold text-primary-600">{{ $row['year'] }}</div>
                                <div class="col-span-2 px-4 py-3">{{ $row['title'] }}</div>
                                <div class="px-4 py-3">{{ $row['level'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="space-y-6 rounded-[36px] bg-gradient-to-br from-white to-primary-50 p-10 shadow-xl shadow-primary-900/5">
                    <h3 class="text-xl font-semibold text-primary-900">Program Pembinaan Prestasi</h3>
                    <ul class="space-y-3 text-sm text-primary-700/80">
                        <li>• Klinik Olimpiade dan Bootcamp intensif bersama dosen universitas.</li>
                        <li>• Talent mapping sejak kelas 7 dengan asesmen psikologi profesional.</li>
                        <li>• Mentoring khusus dari alumni berprestasi di dalam dan luar negeri.</li>
                        <li>• Insentif dan beasiswa prestasi skala nasional dan internasional.</li>
                    </ul>
                    <div class="rounded-3xl border border-primary-100 bg-white/90 p-6 text-sm text-primary-700/80">
                        <p class="font-semibold text-primary-800">Data Capaian</p>
                        <ul class="mt-3 space-y-2">
                            <li>• 54 prestasi akademik dan non-akademik tahun 2024.</li>
                            <li>• 32 siswa mendapatkan beasiswa penuh sekolah favorit.</li>
                            <li>• 12 karya ilmiah dipublikasikan di jurnal pelajar nasional.</li>
                        </ul>
                    </div>
                    <a href="{{ route('activities') }}" class="inline-flex items-center gap-2 rounded-full border border-primary-200 px-5 py-3 text-sm font-semibold text-primary-700 transition-colors duration-200 hover:border-primary-400 hover:bg-primary-50 hover:text-primary-900">
                        Lihat Agenda Kompetisi
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

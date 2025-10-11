<div class="space-y-24">
    <section class="py-20 md:py-28">
    <div class="container mx-auto px-4">
        <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">
            <div class="max-w-xl space-y-4">
                <span class="inline-flex items-center gap-2 rounded-full bg-primary-100 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-primary-700">
                    Prestasi Terkini
                </span>
                <h2 class="text-3xl font-semibold text-primary-900 md:text-4xl">
                    Rekam Jejak Prestasi yang Mengukuhkan Posisi Kami sebagai Sekolah Berwawasan Global
                </h2>
                <p class="text-base text-primary-700/80 md:text-lg">
                    Konsistensi dalam inovasi pembelajaran dan pembinaan talenta menghasilkan capaian membanggakan di berbagai bidang.
                </p>
            </div>
            <a href="{{ route('achievements') }}" class="inline-flex items-center gap-2 rounded-full border border-primary-200 px-5 py-3 text-sm font-semibold text-primary-700 transition-all duration-200 hover:border-primary-400 hover:bg-primary-50 hover:text-primary-900">
                Lihat Semua Prestasi
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        @php
            $achievements = [
                [
                    'year' => '2024',
                    'title' => 'Juara 1 Olimpiade Sains Nasional',
                    'desc' => 'Meraih medali emas bidang Matematika dan IPA tingkat nasional, mewakili Jawa Timur.',
                    'badge' => 'Akademik',
                ],
                [
                    'year' => '2024',
                    'title' => 'Champion Robotics Indonesia',
                    'desc' => 'Tim Muara Robotics memenangkan kategori Best Coding & Strategy tingkat SMP.',
                    'badge' => 'Teknologi',
                ],
                [
                    'year' => '2023',
                    'title' => 'Sekolah Adiwiyata Nasional',
                    'desc' => 'Penghargaan sekolah peduli lingkungan dengan program eco campus dan urban farming.',
                    'badge' => 'Lingkungan',
                ],
                [
                    'year' => '2023',
                    'title' => 'Juara Umum Porseni Kota Surabaya',
                    'desc' => 'Menyabet 8 medali emas cabang atletik, basket, dan pencak silat.',
                    'badge' => 'Olahraga',
                ],
            ];
        @endphp

        <div class="mt-12 grid gap-6 md:grid-cols-2">
            @foreach ($achievements as $achievement)
                <article class="group relative overflow-hidden rounded-[32px] bg-white p-8 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100 transition-all duration-200 hover:-translate-y-2 hover:shadow-card">
                    <div class="absolute -right-16 -top-16 h-36 w-36 rounded-full bg-primary-100/60 blur-3xl transition-transform duration-300 group-hover:scale-110"></div>
                    <div class="relative flex items-center justify-between">
                        <span class="rounded-full bg-primary-50 px-3 py-1 text-xs font-semibold text-primary-600">
                            {{ $achievement['badge'] }}
                        </span>
                        <span class="text-sm font-semibold text-primary-400">{{ $achievement['year'] }}</span>
                    </div>
                    <h3 class="relative mt-6 text-xl font-semibold text-primary-900">
                        {{ $achievement['title'] }}
                    </h3>
                    <p class="relative mt-3 text-sm text-primary-700/80">
                        {{ $achievement['desc'] }}
                    </p>
                    <div class="relative mt-6 inline-flex items-center gap-2 rounded-full bg-primary-50 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-primary-600">
                        Highlight
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 5l7 7-7 7M5 5h8" />
                        </svg>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
    </section>
</div>

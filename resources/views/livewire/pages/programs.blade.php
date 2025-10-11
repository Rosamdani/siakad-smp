<div class="space-y-24">
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 text-white">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 h-72 w-72 rounded-full bg-secondary-400/30 blur-3xl"></div>
            <div class="absolute bottom-0 left-1/3 h-64 w-64 rounded-full bg-primary-400/20 blur-[140px]"></div>
        </div>

        <div class="relative">
            <div class="container mx-auto px-4 py-24 md:py-32">
                <div class="max-w-3xl space-y-6">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em]">
                        Program Pendidikan
                    </span>
                    <h1 class="text-3xl font-semibold leading-tight md:text-5xl">
                        Program Muara Curriculum Framework
                    </h1>
                    <p class="text-lg text-white/85">
                        Kami menawarkan empat jalur pembelajaran terarah yang memadukan penguatan karakter, akademik, dan pengembangan bakat sesuai potensi setiap siswa.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    [
                        'name' => 'Regular Fullday',
                        'focus' => 'Pembelajaran reguler dengan pendalaman karakter dan literasi digital.',
                    'details' => ['Jam belajar 07.00-15.00 WIB', 'Pengayaan Olimpiade Sains', 'Program Tahfidz 4 Juz'],
                    'icon' => 'M12 6v6l4 2m6-2a10 10 0 11-20 0 10 10 0 0120 0z',
                ],
                [
                    'name' => 'Regular Boarding',
                    'focus' => 'Pilihan berasrama dengan pembinaan akhlak dan kebiasaan islami 24 jam.',
                    'details' => ['Lingkungan asrama modern', 'Pembinaan bahasa Arab & Inggris', 'Talaqqi Al-Qur\'an harian'],
                    'icon' => 'M3 10l9-7 9 7-1.5 1.5V20a1 1 0 01-1 1h-3.5v-7h-7v7H5.5a1 1 0 01-1-1v-8.5L3 10z',
                ],
                [
                    'name' => 'Takhassus Qur\'an',
                    'focus' => 'Program unggulan tahfidz bersanad dengan target 20-30 juz.',
                    'details' => ['Bimbingan syeikh internasional', 'Tahsin & Qiraat intensif', 'Sertifikasi sanad global'],
                    'icon' => 'M12 6l-2 3h4l-2-3zm-6 4l-2 3h4l-2-3zm12 0l-2 3h4l-2-3zm-6 4l-2 3h4l-2-3z',
                ],
                [
                    'name' => 'Muara Talenta',
                    'focus' => 'Pengembangan bakat sains, teknologi, seni, dan wirausaha.',
                    'details' => ['Laboratorium STEAM', 'Kolaborasi mentor industri', 'Proyek kewirausahaan sosial'],
                    'icon' => 'M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 11-10 10A10 10 0 0112 2z',
                ],
            ] as $program)
                <article class="group relative overflow-hidden rounded-[32px] bg-white p-8 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100 transition-all duration-200 hover:-translate-y-2 hover:shadow-card">
                    <div class="absolute -right-12 -top-12 h-32 w-32 rounded-full bg-primary-100/60 blur-3xl transition-transform duration-300 group-hover:scale-110"></div>
                    <div class="relative flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-secondary-500 text-white shadow-lg shadow-primary-900/20">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="{{ $program['icon'] }}" />
                        </svg>
                    </div>
                    <h2 class="relative mt-8 text-xl font-semibold text-primary-900">{{ $program['name'] }}</h2>
                    <p class="relative mt-3 text-sm leading-relaxed text-primary-700/80">
                        {{ $program['focus'] }}
                    </p>
                    <ul class="relative mt-6 space-y-3 text-sm text-primary-700/80">
                        @foreach ($program['details'] as $detail)
                            <li class="flex items-start gap-3">
                                <span class="mt-1 h-2 w-2 rounded-full bg-secondary-400"></span>
                                {{ $detail }}
                            </li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-primary-900 md:text-4xl">Ekstrakurikuler &amp; Klub Prestasi</h2>
                <p class="mt-4 text-base text-primary-700/80 md:text-lg">
                    Kami memfasilitasi lebih dari 25 klub untuk mengasah passion siswa di bidang akademik, seni, olahraga, dan sosial.
                </p>
            </div>
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                @foreach ([
                    ['title' => 'Sains &amp; Riset', 'items' => ['Olimpiade Matematika & Sains', 'Klub Robotik & IoT', 'Muara Research Project']],
                    ['title' => 'Seni &amp; Budaya', 'items' => ['Paduan Suara Muara Voice', 'Tari Tradisional', 'Teater Bahasa Inggris']],
                    ['title' => 'Olahraga &amp; Bela Diri', 'items' => ['Basket & Futsal', 'Panahan', 'Pencak Silat']],
                ] as $club)
                <div class="rounded-[28px] bg-white p-8 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100">
                    <h3 class="text-lg font-semibold text-primary-900">{{ $club['title'] }}</h3>
                    <ul class="mt-4 space-y-2 text-sm text-primary-700/80">
                        @foreach ($club['items'] as $item)
                            <li class="flex items-start gap-3">
                                <span class="mt-1 h-2 w-2 rounded-full bg-secondary-400"></span>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
            </div>
        </div>
    </section>
</div>

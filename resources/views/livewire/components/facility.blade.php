<section class="relative overflow-hidden py-20 md:py-28">
    <div class="absolute inset-0 bg-gradient-to-b from-white via-primary-50/60 to-white"></div>
    <div class="absolute -top-32 right-10 h-64 w-64 rounded-full bg-secondary-200/60 blur-3xl"></div>
    <div class="absolute bottom-10 left-16 h-56 w-56 rounded-full bg-primary-200/40 blur-3xl"></div>

    <div class="relative">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl space-y-4 text-center md:mx-auto">
                <span class="inline-flex items-center gap-2 rounded-full bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-primary-700 shadow-sm shadow-primary-900/5 ring-1 ring-primary-100">
                    Fasilitas &amp; Ekosistem
                </span>
                <h2 class="text-3xl font-semibold text-primary-900 md:text-4xl">
                    Ekosistem Pembelajaran Modern yang Mendorong Kreativitas &amp; Karakter
                </h2>
                <p class="text-base text-primary-700/80 md:text-lg">
                    Lingkungan sekolah dirancang untuk mendukung pembelajaran kontekstual, kolaborasi lintas disiplin, dan pengembangan soft skill siswa.
                </p>
            </div>

            <div class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @php
                    $facilities = [
                        [
                            'title' => 'Smart Classroom &amp; Maker Space',
                            'description' => 'Ruang belajar dilengkapi panel interaktif, learning management system, dan studio kreatif STEAM.',
                            'icon' => 'M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M7.05 16.95l-1.414 1.414M18.364 18.364l-1.414-1.414M7.05 7.05 5.636 5.636M12 8a4 4 0 014 4h0a4 4 0 01-4 4 4 4 0 01-4-4h0a4 4 0 014-4z',
                        ],
                        [
                            'title' => 'Asrama Terintegrasi',
                            'description' => 'Kamar nyaman ber-AC, ruang kajian, dan pendampingan musyrif profesional dengan monitoring digital.',
                            'icon' => 'M3 10l9-7 9 7-1.5 1.5V20a1 1 0 01-1 1h-4v-6h-5v6H5.5a1 1 0 01-1-1v-8.5L3 10z',
                        ],
                        [
                            'title' => 'Laboratorium Sains &amp; Teknologi',
                            'description' => 'Lab Biologi, Fisika, Kimia, dan Komputer dengan perangkat riset terbaru serta dukungan IoT.',
                            'icon' => 'M12 6v6l4 2m5-2a9 9 0 11-18 0 9 9 0 0118 0z',
                        ],
                        [
                            'title' => 'Pusat Bahasa &amp; Global Exposure',
                            'description' => 'Program bilingual intensif, native speaker club, dan koneksi sister school mancanegara.',
                            'icon' => 'M10.5 19.5l7.5-7.5-7.5-7.5M3 12h15',
                        ],
                        [
                            'title' => 'Arena Olahraga &amp; Seni',
                            'description' => 'Lapangan olahraga multi fungsi, studio musik, tari, teater, dan program coaching atlet profesional.',
                            'icon' => 'M9 11l3 3L22 4m-7 16H5a2 2 0 01-2-2V7',
                        ],
                        [
                            'title' => 'Klinik &amp; Konseling Holistik',
                            'description' => 'Layanan kesehatan terpadu, konseling psikologi remaja, dan pendampingan karir sejak dini.',
                            'icon' => 'M12 8c1.657 0 3-1.567 3-3.5S13.657 1 12 1 9 2.567 9 4.5 10.343 8 12 8zm0 0c-4.418 0-8 2.239-8 5v1.5A1.5 1.5 0 005.5 16H7',
                        ],
                    ];
                @endphp

                @foreach ($facilities as $facility)
                    <div class="group relative overflow-hidden rounded-[28px] bg-white/90 p-8 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100 transition-all duration-200 hover:-translate-y-2 hover:bg-white hover:shadow-card">
                        <div class="absolute -right-14 -top-14 h-32 w-32 rounded-full bg-primary-100/60 blur-3xl transition-transform duration-300 group-hover:scale-110"></div>
                        <div class="relative flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-secondary-500 text-white shadow-lg shadow-primary-900/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="{!! $facility['icon'] !!}" />
                            </svg>
                        </div>
                        <h3 class="relative mt-8 text-xl font-semibold text-primary-900">{!! $facility['title'] !!}</h3>
                        <p class="relative mt-3 text-sm leading-relaxed text-primary-700/80">
                            {{ $facility['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

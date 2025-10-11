<div class="space-y-24">
    <section class="relative py-20 md:py-28">
    <div class="absolute inset-x-0 top-0 h-1/2 bg-gradient-to-b from-primary-50 via-white to-white"></div>
    <div class="container relative mx-auto px-4">
        <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">
            <div class="max-w-xl space-y-4">
                <span class="inline-flex items-center gap-2 rounded-full bg-primary-100 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-primary-700">
                    Kabar Terbaru
                </span>
                <h2 class="text-3xl font-semibold text-primary-900 md:text-4xl">
                    Cerita Inspiratif dari Aktivitas Sekolah &amp; Komunitas Muara Indonesia
                </h2>
                <p class="text-base text-primary-700/80 md:text-lg">
                    Ikuti update kegiatan, prestasi, dan inovasi pembelajaran yang dijalankan siswa maupun guru.
                </p>
            </div>
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 rounded-full border border-primary-200 px-5 py-3 text-sm font-semibold text-primary-700 transition-all duration-200 hover:border-primary-400 hover:bg-primary-50 hover:text-primary-900">
                Kumpulan Artikel
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        @php
            $news = [
                [
                    'title' => 'Peluncuran Laboratorium STEAM Muara Tech Space',
                    'excerpt' => 'Sarana baru ini menjadi pusat riset microcontroller, coding, dan desain produk bagi siswa kelas 7-9.',
                    'category' => 'Inovasi',
                    'date' => 'Februari 2025',
                    'thumbnail' => 'https://images.unsplash.com/photo-1584697964154-94f1cbe757e3?w=900&q=80',
                ],
                [
                    'title' => 'Kolaborasi Pembelajaran Lintas Negara bersama SMP Tokyo',
                    'excerpt' => 'Sesi virtual exchange menghadirkan pembelajaran budaya dan proyek kolaboratif bahasa Inggris.',
                    'category' => 'Kolaborasi',
                    'date' => 'Januari 2025',
                    'thumbnail' => 'https://images.unsplash.com/photo-1454165205744-3b78555e5572?w=900&q=80',
                ],
                [
                    'title' => 'Program Ecopreneur: Siswa Mengolah Limbah menjadi Produk Bernilai',
                    'excerpt' => 'Melalui pendampingan UMKM, siswa belajar membuat bisnis ramah lingkungan yang berdampak sosial.',
                    'category' => 'Pengabdian',
                    'date' => 'Desember 2024',
                    'thumbnail' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=900&q=80',
                ],
            ];
        @endphp

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($news as $item)
                <article class="group overflow-hidden rounded-[32px] bg-white shadow-xl shadow-primary-900/5 ring-1 ring-primary-100 transition-all duration-200 hover:-translate-y-2 hover:shadow-card">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ $item['thumbnail'] }}" alt="{{ $item['title'] }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary-900/60 via-transparent to-transparent"></div>
                        <span class="absolute left-4 top-4 inline-flex items-center gap-2 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-primary-700">
                            <span class="h-2 w-2 rounded-full bg-secondary-400"></span>
                            {{ $item['category'] }}
                        </span>
                    </div>
                    <div class="space-y-4 p-8">
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-primary-500">{{ $item['date'] }}</p>
                        <h3 class="text-xl font-semibold text-primary-900">
                            {{ $item['title'] }}
                        </h3>
                        <p class="text-sm text-primary-700/80">
                            {{ $item['excerpt'] }}
                        </p>
                        <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-primary-700 transition-colors duration-200 hover:text-primary-900">
                            Baca Selengkapnya
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
    </section>
</div>

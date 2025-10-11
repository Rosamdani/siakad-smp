<div class="space-y-24">
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 text-white">
        <div class="absolute inset-0">
            <div class="absolute top-0 right-20 h-72 w-72 rounded-full bg-secondary-400/30 blur-3xl"></div>
            <div class="absolute bottom-0 left-1/3 h-64 w-64 rounded-full bg-primary-400/20 blur-[140px]"></div>
        </div>

        <div class="relative">
            <div class="container mx-auto px-4 py-24 md:py-32">
                <div class="max-w-3xl space-y-6">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em]">
                        Berita Sekolah
                    </span>
                    <h1 class="text-3xl font-semibold leading-tight md:text-5xl">
                        Update Terbaru dari Kampus SMP Muara Indonesia
                    </h1>
                    <p class="text-lg text-white/85">
                        Saksikan perkembangan terbaru, inovasi, dan cerita inspiratif dari siswa, guru, serta komunitas Muara.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                <div class="max-w-2xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.35em] text-primary-500">Pencarian</p>
                    <h2 class="mt-2 text-2xl font-semibold text-primary-900">Telusuri artikel berdasarkan kategori dan waktu</h2>
                </div>
                <div class="flex w-full flex-col gap-4 md:w-auto md:flex-row">
                    <div class="relative">
                        <span class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-primary-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-4.35-4.35M5 11a6 6 0 1112 0 6 6 0 01-12 0z" />
                            </svg>
                        </span>
                        <input type="text" placeholder="Cari artikel..." class="w-full rounded-full border border-primary-100 bg-white px-12 py-3 text-sm text-primary-700 shadow-sm shadow-primary-900/5 focus:border-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-200">
                    </div>
                    <select class="rounded-full border border-primary-100 bg-white px-5 py-3 text-sm text-primary-700 shadow-sm shadow-primary-900/5 focus:border-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-200">
                        <option>Semua Kategori</option>
                        <option>Akademik</option>
                        <option>Kegiatan</option>
                        <option>Prestasi</option>
                        <option>Pengumuman</option>
                    </select>
                </div>
            </div>

            @php
            $posts = [
                [
                    'title' => 'Integrasi Learning Analytics di SIAKAD Muara',
                    'excerpt' => 'Guru dan orang tua kini dapat mengakses dashboard perkembangan siswa secara real-time dengan rekomendasi belajar personal.',
                    'category' => 'Inovasi',
                    'date' => '14 Februari 2025',
                    'author' => 'Tim Redaksi',
                    'image' => 'https://images.unsplash.com/photo-1553877522-43269d4ea984?w=1200&q=80',
                ],
                [
                    'title' => 'Tim Basket SMP Muara Raih Juara DBL Junior',
                    'excerpt' => 'Kemenangan dramatis melalui overtime melawan SMP unggulan Surabaya dan membawa piala bergilir pulang.',
                    'category' => 'Prestasi',
                    'date' => '2 Februari 2025',
                    'author' => 'Nur Aini',
                    'image' => 'https://images.unsplash.com/photo-1517649763962-0c623066013b?w=1200&q=80',
                ],
                [
                    'title' => 'Sesi Bedah Karir bersama Alumni Global',
                    'excerpt' => 'Alumni di bidang teknologi, kedokteran, dan pendidikan berbagi pengalaman studi lanjut dan pengembangan karir.',
                    'category' => 'Komunitas',
                    'date' => '25 Januari 2025',
                    'author' => 'Humaira Puspa',
                    'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&q=80',
                ],
                [
                    'title' => 'Launching Program Muara Green Campus',
                    'excerpt' => 'Gerakan peduli lingkungan dengan konsep urban farming, bank sampah digital, dan eco literacy week.',
                    'category' => 'Lingkungan',
                    'date' => '12 Januari 2025',
                    'author' => 'Rizky Pratama',
                    'image' => 'https://images.unsplash.com/photo-1529650184081-2520dd358614?w=1200&q=80',
                ],
                [
                    'title' => 'Peresmian Bahasa Arab Intensive Corner',
                    'excerpt' => 'Pusat pembelajaran berbasis multimedia dengan native speaker untuk mempercepat keterampilan komunikasi.',
                    'category' => 'Akademik',
                    'date' => '2 Desember 2024',
                    'author' => 'Fatimah Zahra',
                    'image' => 'https://images.unsplash.com/photo-1545239351-1141bd82e8a6?w=1200&q=80',
                ],
                [
                    'title' => 'Pengumuman Beasiswa Prestasi 2025',
                    'excerpt' => 'Sebanyak 38 siswa mendapatkan beasiswa penuh dan sebagian untuk melanjutkan ke SMA favorit.',
                    'category' => 'Pengumuman',
                    'date' => '25 November 2024',
                    'author' => 'Admin PPDB',
                    'image' => 'https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?w=1200&q=80',
                ],
            ];
        @endphp
            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="group overflow-hidden rounded-[32px] bg-white shadow-xl shadow-primary-900/5 ring-1 ring-primary-100 transition-all duration-200 hover:-translate-y-2 hover:shadow-card">
                        <div class="relative h-52 overflow-hidden">
                            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-900/60 via-transparent to-transparent"></div>
                            <span class="absolute left-4 top-4 inline-flex items-center gap-2 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-primary-700">
                                <span class="h-2 w-2 rounded-full bg-secondary-400"></span>
                                {{ $post['category'] }}
                            </span>
                        </div>
                        <div class="space-y-4 p-8">
                            <div class="flex items-center justify-between text-xs uppercase tracking-[0.3em] text-primary-500">
                                <span>{{ $post['date'] }}</span>
                                <span>{{ $post['author'] }}</span>
                            </div>
                            <h2 class="text-xl font-semibold text-primary-900">{{ $post['title'] }}</h2>
                            <p class="text-sm text-primary-700/80">
                                {{ $post['excerpt'] }}
                            </p>
                            <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-primary-700 transition-colors duration-200 hover:text-primary-900">
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

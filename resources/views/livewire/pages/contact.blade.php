<div class="space-y-24">
    <section class="relative overflow-hidden bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 text-white">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 h-64 w-64 rounded-full bg-secondary-400/30 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-primary-400/20 blur-[160px]"></div>
        </div>

        <div class="relative">
            <div class="container mx-auto px-4 py-24 md:py-32">
                <div class="max-w-3xl space-y-6">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em]">
                        Hubungi Kami
                    </span>
                    <h1 class="text-3xl font-semibold leading-tight md:text-5xl">
                        Kami Siap Mendengar dan Membantu Kebutuhan Informasi Anda
                    </h1>
                    <p class="text-lg text-white/85">
                        Tim layanan SMP Muara Indonesia tersedia pada hari kerja. Silakan hubungi kami melalui kanal resmi berikut atau isi formulir konsultasi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 md:py-28">
        <div class="container mx-auto px-4">
            <div class="grid gap-12 lg:grid-cols-[1.1fr,0.9fr]">
                <div class="space-y-8">
                    <div class="grid gap-6 md:grid-cols-2">
                        @foreach ([
                            [
                                'title' => 'Layanan Admisi & PPDB',
                                'info' => 'Telepon/WhatsApp: 0812-3000-2211',
                            'desc' => 'Senin - Jumat, 07.30 - 16.00 WIB',
                            'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.163 21 3 14.837 3 7V5z',
                        ],
                        [
                            'title' => 'Konsultasi Akademik',
                            'info' => 'Email: akademik@smpmuara.sch.id',
                            'desc' => 'Respon 1x24 jam pada hari kerja',
                            'icon' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V6a2 2 0 00-2-2H3a2 2 0 00-2 2v8a2 2 0 002 2z',
                        ],
                        [
                            'title' => 'Kerja Sama & CSR',
                            'info' => 'Email: partnership@smpmuara.sch.id',
                            'desc' => 'Kolaborasi pendidikan, riset, dan kegiatan sosial',
                            'icon' => 'M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 11-10 10A10 10 0 0112 2z',
                        ],
                        [
                            'title' => 'Layanan Pengaduan',
                            'info' => 'Hotline: 031-555-7789',
                            'desc' => 'Umpan balik publik & layanan siswa',
                            'icon' => 'M15 17h5l-1.405-1.405M4 4l16 16M9.879 9.879A3 3 0 1014.12 14.12M9.88 9.88L5.5 5.5M14.12 14.12L18.5 18.5',
                            ],
                        ] as $contact)
                        <div class="rounded-[28px] bg-white p-8 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-primary-500 to-secondary-500 text-white shadow-lg shadow-primary-900/20">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="{{ $contact['icon'] }}" />
                                </svg>
                            </div>
                            <h2 class="mt-6 text-lg font-semibold text-primary-900">{{ $contact['title'] }}</h2>
                            <p class="mt-2 text-sm text-primary-700/80">{{ $contact['info'] }}</p>
                            <p class="mt-1 text-xs text-primary-500">{{ $contact['desc'] }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="overflow-hidden rounded-[36px] bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 text-white shadow-2xl shadow-primary-900/40">
                    <div class="grid gap-0 md:grid-cols-2">
                        <div class="space-y-4 p-8 md:p-12">
                            <h2 class="text-2xl font-semibold">Lokasi Kampus</h2>
                            <p class="text-sm text-white/80">
                                Jl. Muara Raya No. 21, Kelurahan Ketintang, Kec. Gayungan, Surabaya, Jawa Timur 60235.
                            </p>
                            <div class="space-y-2 text-sm text-white/80">
                                <p><span class="font-semibold text-white">Transportasi:</span> Tersedia halte BRT, akses tol 5 menit, dan jalur sepeda.</p>
                                <p><span class="font-semibold text-white">Jam Operasional:</span> Senin - Jumat, 07.00 - 16.00 | Sabtu, 08.00 - 12.00.</p>
                            </div>
                            <a href="https://maps.google.com" class="inline-flex items-center gap-2 rounded-full bg-white/10 px-5 py-3 text-sm font-semibold text-white transition-colors duration-200 hover:bg-white/20">
                                Lihat di Google Maps
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c1.657 0 3-1.567 3-3.5S13.657 4 12 4 9 5.567 9 7.5 10.343 11 12 11zm0 0c-4.418 0-8 2.239-8 5v1.5A1.5 1.5 0 005.5 19h13a1.5 1.5 0 001.5-1.5V16c0-2.761-3.582-5-8-5z" />
                                </svg>
                            </a>
                        </div>
                        <div class="relative min-h-[260px]">
                            <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=1200&q=80" alt="Gedung SMP Muara Indonesia" class="h-full w-full object-cover" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary-900/70 to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="space-y-6">
                    <div class="rounded-[36px] bg-white p-10 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100">
                        <h2 class="text-2xl font-semibold text-primary-900">Formulir Konsultasi</h2>
                        <p class="mt-2 text-sm text-primary-700/80">
                            Kirimkan pertanyaan Anda, tim kami akan merespon maksimal 1x24 jam pada hari kerja.
                        </p>
                        <form class="mt-6 space-y-4">
                            <div class="space-y-1">
                                <label for="contact-name" class="text-sm font-semibold text-primary-700">Nama Lengkap</label>
                                <input id="contact-name" type="text" placeholder="Nama lengkap Anda" class="w-full rounded-2xl border border-primary-100 px-4 py-3 text-sm shadow-sm shadow-primary-900/5 focus:border-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-200">
                            </div>
                            <div class="space-y-1">
                                <label for="contact-email" class="text-sm font-semibold text-primary-700">Email</label>
                                <input id="contact-email" type="email" placeholder="email@domain.com" class="w-full rounded-2xl border border-primary-100 px-4 py-3 text-sm shadow-sm shadow-primary-900/5 focus:border-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-200">
                            </div>
                            <div class="space-y-1">
                                <label for="contact-phone" class="text-sm font-semibold text-primary-700">No. WhatsApp</label>
                                <input id="contact-phone" type="tel" placeholder="08xxxxxxxxxx" class="w-full rounded-2xl border border-primary-100 px-4 py-3 text-sm shadow-sm shadow-primary-900/5 focus:border-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-200">
                            </div>
                            <div class="space-y-1">
                                <label for="contact-topic" class="text-sm font-semibold text-primary-700">Topik</label>
                                <select id="contact-topic" class="w-full rounded-2xl border border-primary-100 px-4 py-3 text-sm shadow-sm shadow-primary-900/5 focus:border-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-200">
                                    <option>Pilih topik konsultasi</option>
                                    <option>Informasi PPDB</option>
                                    <option>Kegiatan Akademik</option>
                                    <option>Kerja Sama</option>
                                    <option>Pengaduan</option>
                                </select>
                            </div>
                            <div class="space-y-1">
                                <label for="contact-message" class="text-sm font-semibold text-primary-700">Pesan</label>
                                <textarea id="contact-message" rows="4" placeholder="Tuliskan pesan atau pertanyaan Anda..." class="w-full rounded-2xl border border-primary-100 px-4 py-3 text-sm shadow-sm shadow-primary-900/5 focus:border-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-200"></textarea>
                            </div>
                            <button type="button" class="flex w-full items-center justify-center gap-2 rounded-full bg-gradient-to-r from-secondary-500 to-secondary-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-secondary-900/25 transition-transform duration-200 hover:-translate-y-0.5">
                                Kirim Pesan
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14m0 0l-5 5m5-5l-5-5" />
                                </svg>
                            </button>
                            <p class="text-xs text-primary-500">
                                Data Anda akan dijaga kerahasiaannya dan hanya digunakan untuk keperluan layanan SMP Muara Indonesia.
                            </p>
                        </form>
                    </div>

                    <div class="rounded-[28px] bg-primary-50/70 p-8 text-primary-700 shadow-xl shadow-primary-900/5 ring-1 ring-primary-100">
                        <h3 class="text-lg font-semibold text-primary-900">Media Sosial Resmi</h3>
                        <p class="mt-3 text-sm text-primary-700/80">Ikuti kabar terbaru kami di berbagai platform:</p>
                        <div class="mt-4 flex gap-3">
                            @foreach ([
                            ['label' => 'Instagram', 'handle' => '@smpmuara.id'],
                            ['label' => 'Facebook', 'handle' => 'SMP Muara Indonesia'],
                            ['label' => 'YouTube', 'handle' => 'Muara TV'],
                            ['label' => 'TikTok', 'handle' => '@muara.creative'],
                        ] as $social)
                            <div class="rounded-full border border-primary-100 bg-white px-4 py-2 text-xs font-semibold text-primary-600 shadow-sm shadow-primary-900/5">
                                {{ $social['label'] }} • {{ $social['handle'] }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

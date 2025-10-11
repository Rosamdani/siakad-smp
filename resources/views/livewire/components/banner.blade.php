<section
    class="relative overflow-hidden bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900 text-white"
    x-data="{
        active: 0,
        interval: null,
        slides: [
            {
                title: 'Sekolah Ramah Digital',
                description: 'Integrasi pembelajaran berbasis teknologi dengan karakter islami dan budaya Indonesia yang kuat.',
                image: 'https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?w=1200&q=80',
                badge: 'Smart School',
                focus: ['Pembelajaran hybrid interaktif', 'Dashboard akademik real-time', 'Kelas kolaboratif berbasis proyek']
            },
            {
                title: 'Lingkungan Belajar Inspirasional',
                description: 'Ruang belajar modern yang mendorong kreativitas, sportivitas, dan kepedulian sosial.',
                image: 'https://images.unsplash.com/photo-1553877522-43269d4ea984?w=1200&q=80',
                badge: 'Learning Space',
                focus: ['Laboratorium STEAM lengkap', 'Kegiatan ekstrakurikuler unggulan', 'Pembinaan karakter 24 jam']
            },
            {
                title: 'Prestasi Bertaraf Nasional',
                description: 'Mengukir prestasi akademik dan non-akademik melalui pendampingan berbasis talenta.',
                image: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&q=80',
                badge: 'Achievement',
                focus: ['Juara olimpiade sains & olahraga', 'Kolaborasi perguruan tinggi negeri', 'Jejaring alumni strategis']
            }
        ],
        start() {
            this.interval = setInterval(() => {
                this.active = (this.active + 1) % this.slides.length;
            }, 7000);
        },
        stop() {
            clearInterval(this.interval);
        }
    }"
    x-init="start()"
    @mouseenter="stop"
    @mouseleave="start"
>
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/2 h-[600px] w-[600px] -translate-x-1/2 rounded-full bg-primary-400/30 blur-3xl"></div>
        <div class="absolute -bottom-20 right-0 h-[480px] w-[480px] rounded-full bg-secondary-500/20 blur-[120px]"></div>
    </div>

    <div class="relative">
        <div class="container mx-auto px-4 pb-16 pt-20 md:pb-24 md:pt-28">
            <div class="grid items-center gap-12 lg:grid-cols-[1.1fr,0.9fr]">
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-sm font-medium">
                        <span class="h-2 w-2 rounded-full bg-secondary-400"></span>
                        Sistem Informasi Akademik SMP Muara Indonesia
                    </div>
                    <div class="space-y-6">
                        <h1 class="text-4xl font-semibold leading-tight md:text-5xl xl:text-6xl">
                            Bangun Masa Depan Cerah Melalui Pendidikan Humanis &amp; Teknologis
                        </h1>
                        <p class="max-w-2xl text-base text-white/85 md:text-lg">
                            Kami menghadirkan ekosistem belajar yang memadukan kurikulum nasional, penguatan karakter, dan literasi digital.
                            Seluruh data akademik tersedia secara real-time sehingga guru, siswa, dan orang tua dapat berkolaborasi tanpa batas.
                        </p>
                    </div>
                    <div class="flex flex-col gap-4 sm:flex-row">
                        <a
                            href="{{ route('admission') }}"
                            class="inline-flex items-center justify-center gap-3 rounded-full bg-secondary-500 px-7 py-3 text-sm font-semibold text-white shadow-lg shadow-secondary-900/25 transition-transform duration-200 hover:-translate-y-0.5 hover:bg-secondary-400"
                        >
                            Daftar PPDB 2025
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14m0 0l-5 5m5-5l-5-5" />
                            </svg>
                        </a>
                        <a
                            href="{{ route('about') }}"
                            class="inline-flex items-center justify-center gap-3 rounded-full border border-white/30 px-7 py-3 text-sm font-semibold text-white transition-colors duration-200 hover:border-white hover:bg-white/10"
                        >
                            Jelajahi Profil Sekolah
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                    <div class="grid gap-4 rounded-3xl bg-white/10 p-4 backdrop-blur">
                        <div class="grid w-full gap-4 sm:grid-cols-4">
                            <div class="space-y-1 rounded-2xl bg-white/5 p-4 text-center">
                                <p class="text-3xl font-semibold text-white">1.280</p>
                                <p class="text-xs uppercase tracking-[0.25em] text-white/70">Siswa Aktif</p>
                            </div>
                            <div class="space-y-1 rounded-2xl bg-white/5 p-4 text-center">
                                <p class="text-3xl font-semibold text-white">85</p>
                                <p class="text-xs uppercase tracking-[0.25em] text-white/70">Guru Profesional</p>
                            </div>
                            <div class="space-y-1 rounded-2xl bg-white/5 p-4 text-center">
                                <p class="text-3xl font-semibold text-white">54</p>
                                <p class="text-xs uppercase tracking-[0.25em] text-white/70">Prestasi 2024</p>
                            </div>
                            <div class="space-y-1 rounded-2xl bg-white/5 p-4 text-center">
                                <p class="text-3xl font-semibold text-white">8.700+</p>
                                <p class="text-xs uppercase tracking-[0.25em] text-white/70">Alumni Berdaya</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -top-6 -left-10 hidden h-32 w-32 rounded-3xl bg-secondary-500/30 blur-2xl lg:block"></div>
                    <div class="absolute bottom-4 -right-6 hidden h-36 w-36 rounded-full bg-accent/20 blur-3xl lg:block"></div>
                    <div class="relative overflow-hidden rounded-[32px] bg-white/10 p-6 shadow-2xl shadow-primary-950/40 backdrop-blur">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div
                                x-show="active === index"
                                x-transition:enter="transition duration-500 ease-out"
                                x-transition:enter-start="opacity-0 translate-y-6"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition duration-300 ease-in"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-6"
                                class="space-y-5"
                            >
                                <div class="relative overflow-hidden rounded-[28px]">
                                    <img :src="slide.image" :alt="slide.title" class="h-72 w-full object-cover" loading="lazy">
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary-900 via-primary-900/10 to-transparent"></div>
                                    <span class="absolute top-4 left-4 inline-flex items-center gap-2 rounded-full bg-white/90 px-4 py-1 text-xs font-semibold text-primary-700">
                                        <span class="h-2 w-2 rounded-full bg-secondary-500"></span>
                                        <span x-text="slide.badge"></span>
                                    </span>
                                </div>
                                <div class="space-y-3">
                                    <h2 class="text-2xl font-semibold text-white" x-text="slide.title"></h2>
                                    <p class="text-sm text-white/80" x-text="slide.description"></p>
                                    <div class="space-y-2">
                                        <template x-for="(item, i) in slide.focus" :key="i">
                                            <div class="flex items-start gap-3 rounded-2xl bg-white/5 p-3 text-sm text-white/85">
                                                <span class="mt-1 h-2 w-2 rounded-full bg-secondary-400"></span>
                                                <p x-text="item"></p>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <div class="mt-6 flex items-center justify-between border-t border-white/10 pt-4">
                            <div class="flex gap-2">
                                <template x-for="(slide, index) in slides" :key="`dot-${index}`">
                                    <button
                                        @click="active = index"
                                        class="h-2 rounded-full transition-all"
                                        :class="active === index ? 'w-8 bg-secondary-400' : 'w-3 bg-white/30 hover:bg-white/50'"
                                    ></button>
                                </template>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    @click="active = (active - 1 + slides.length) % slides.length"
                                    class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-white/20 text-white transition-colors hover:bg-white/15"
                                    aria-label="Sebelumnya"
                                >
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <button
                                    @click="active = (active + 1) % slides.length"
                                    class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-white/20 text-white transition-colors hover:bg-white/15"
                                    aria-label="Selanjutnya"
                                >
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

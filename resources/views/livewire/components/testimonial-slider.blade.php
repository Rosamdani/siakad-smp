<div class="space-y-24">
    <section class="relative overflow-hidden py-20 md:py-28">
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900 via-primary-800 to-primary-900"></div>
    <div class="absolute -top-24 left-16 h-64 w-64 rounded-full bg-secondary-400/40 blur-3xl"></div>
    <div class="absolute bottom-10 right-20 h-60 w-60 rounded-full bg-accent/30 blur-3xl"></div>

    <div class="relative">
        <div class="container mx-auto px-4">
            <div class="flex flex-col gap-8 text-white lg:flex-row lg:items-start lg:justify-between">
                <div class="max-w-xl space-y-4">
                    <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em]">
                        Testimoni
                    </span>
                    <h2 class="text-3xl font-semibold md:text-4xl">
                        Suara Orang Tua, Alumni, dan Mitra tentang Transformasi Pendidikan di SMP Muara
                    </h2>
                    <p class="text-base text-white/80 md:text-lg">
                        Kesuksesan kami diukur dari kepuasan dan perkembangan siswa. Berikut cerita singkat dari mereka yang merasakan langsung ekosistem belajar kami.
                    </p>
                </div>
                <div class="flex items-center gap-4 text-white/80">
                    <svg class="h-12 w-12 text-secondary-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M9 12l2 2 4-4m5-6H4a2 2 0 00-2 2v16l4-4h14a2 2 0 002-2V4a2 2 0 00-2-2z" />
                    </svg>
                    <p class="max-w-sm text-sm">
                        Indeks kepuasan orang tua tahun 2024 mencapai <span class="font-semibold text-white">97%</span> dengan peningkatan signifikan pada aspek komunikasi dan pendampingan karir siswa.
                    </p>
                </div>
            </div>

            @php
                $testimonials = [
                    [
                        'name' => 'Ir. Siti Rahma, M.Eng',
                        'role' => 'Orang Tua siswa kelas 9',
                        'message' => 'Perkembangan anak kami sangat terasa, khususnya kemampuan komunikasi dan kepemimpinannya. Sistem akademik yang terintegrasi memudahkan memantau hasil belajar setiap pekan.',
                        'avatar' => 'https://i.pravatar.cc/120?img=47',
                    ],
                    [
                        'name' => 'Alif Nugroho',
                        'role' => 'Alumni 2015 – Software Engineer',
                        'message' => 'Semangat riset dan inovasi sudah ditanamkan sejak SMP. Program STEAM membantu saya menemukan passion di bidang teknologi dan kini saya bekerja di startup pendidikan nasional.',
                        'avatar' => 'https://i.pravatar.cc/120?img=12',
                    ],
                    [
                        'name' => 'Drs. Budi Santoso',
                        'role' => 'Kepala Dinas Pendidikan Kota Surabaya',
                        'message' => 'SMP Muara menjadi salah satu role model sekolah yang konsisten dalam transformasi digital. Kolaborasinya dengan orang tua dan komunitas menjadi kekuatan utama.',
                        'avatar' => 'https://i.pravatar.cc/120?img=33',
                    ],
                ];
            @endphp

            <div
                class="mt-12 overflow-hidden rounded-[36px] bg-white/5 shadow-2xl shadow-primary-900/40 backdrop-blur-xl"
                x-data="{
                    active: 0,
                    testimonials: @js($testimonials),
                    next() {
                        this.active = (this.active + 1) % this.testimonials.length
                    },
                    prev() {
                        this.active = (this.active - 1 + this.testimonials.length) % this.testimonials.length
                    },
                    autoplay: null,
                    start() {
                        this.autoplay = setInterval(() => this.next(), 7000);
                    },
                    stop() {
                        clearInterval(this.autoplay);
                    }
                }"
                x-init="start()"
                @mouseenter="stop()"
                @mouseleave="start()"
            >
                <div class="grid gap-8 p-10 md:grid-cols-[1.1fr,0.9fr] md:p-16">
                    <div class="space-y-8">
                        <template x-for="(item, index) in testimonials" :key="index">
                            <div
                                x-show="active === index"
                                x-transition:enter="transition duration-500 ease-out"
                                x-transition:enter-start="opacity-0 translate-x-10"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transition duration-300 ease-in"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 -translate-x-10"
                                class="space-y-6"
                            >
                                <svg class="h-10 w-10 text-secondary-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7.17 20H4a1 1 0 01-1-1v-3c0-2.47 1-4.68 3-6.65L5 6h5l2 3.5-1.5 2.6c2 .64 3.5 2.49 3.5 4.9 0 3.04-2.46 5.5-5.5 5.5a5.51 5.51 0 01-1.33-.16zm11 0H15a1 1 0 01-1-1v-3c0-2.47 1-4.68 3-6.65L16 6h5l2 3.5-1.5 2.6c2 .64 3.5 2.49 3.5 4.9 0 3.04-2.46 5.5-5.5 5.5a5.51 5.51 0 01-1.33-.16z" />
                                </svg>
                                <p class="text-lg font-medium leading-relaxed text-white/90" x-text="`“${item.message}”`"></p>
                                <div class="flex items-center gap-4">
                                    <img :src="item.avatar" :alt="item.name" class="h-16 w-16 rounded-2xl border-2 border-white/20 object-cover">
                                    <div>
                                        <p class="text-lg font-semibold text-white" x-text="item.name"></p>
                                        <p class="text-sm text-white/70" x-text="item.role"></p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="flex flex-col justify-between rounded-[28px] bg-white/10 p-8 ring-1 ring-white/10">
                        <div class="space-y-4">
                            <h3 class="text-xl font-semibold text-white">Mengapa Memilih SMP Muara?</h3>
                            <ul class="space-y-3 text-sm text-white/80">
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-2 w-2 rounded-full bg-secondary-300"></span>
                                    Sistem informasi akademik terintegrasi dengan laporan perkembangan mingguan.
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-2 w-2 rounded-full bg-secondary-300"></span>
                                    Kolaborasi intensif bersama orang tua melalui forum edukasi dan parent coaching.
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-2 h-2 w-2 rounded-full bg-secondary-300"></span>
                                    Jaringan alumni kuat yang membuka peluang magang dan beasiswa.
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 flex items-center justify-between">
                            <div class="flex gap-2">
                                <template x-for="(item, index) in testimonials" :key="`dot-${index}`">
                                    <button
                                        @click="active = index"
                                        class="h-2 rounded-full transition-all"
                                        :class="active === index ? 'w-8 bg-secondary-300' : 'w-3 bg-white/30 hover:bg-white/50'"
                                    ></button>
                                </template>
                            </div>
                            <div class="flex gap-2">
                                <button
                                    @click="prev()"
                                    class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 text-white transition-colors hover:bg-white/15"
                                    aria-label="Testimoni sebelumnya"
                                >
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <button
                                    @click="next()"
                                    class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/20 text-white transition-colors hover:bg-white/15"
                                    aria-label="Testimoni selanjutnya"
                                >
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
</div>

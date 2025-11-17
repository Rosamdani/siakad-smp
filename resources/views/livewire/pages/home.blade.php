@php
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Str;

    $stats = collect($settings->highlight_stats ?? []);
    $features = collect($settings->excellence_features ?? []);
    $programs = collect($settings->program_cards ?? []);
    $testimonials = collect($settings->testimonials ?? []);
    $heroHighlights = collect($settings->hero_highlights ?? []);
    $heroMedia = $settings->hero_media ? Storage::url($settings->hero_media) : null;

    $resolveUrl = static function (?string $value): ?string {
        if (blank($value)) {
            return null;
        }

        return Str::startsWith($value, ['http://', 'https://']) ? $value : url($value);
    };
@endphp

<x-page-wrapper class="space-y-24 lg:space-y-32">

<div class="space-y-24 lg:space-y-32">
    <section class="relative isolate overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 opacity-80" style="background-image: radial-gradient(circle at 10% 20%, color-mix(in srgb, var(--site-secondary) 35%, transparent), transparent 55%), radial-gradient(circle at 80% 10%, color-mix(in srgb, var(--site-primary) 30%, transparent), transparent 60%);"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-24 grid gap-12 lg:grid-cols-[minmax(0,1fr)_minmax(0,0.95fr)] items-center">
            <div class="space-y-6">
                <p class="text-sm font-semibold uppercase tracking-[0.4em] text-site-secondary">{{ $settings->hero_tagline }}</p>
                <h1 class="text-4xl lg:text-5xl font-semibold leading-tight text-slate-900">{{ $settings->hero_title }}</h1>
                <p class="text-base lg:text-lg text-slate-600 leading-relaxed">{{ $settings->hero_description }}</p>
                <div class="flex flex-wrap gap-4">
                    @php($primaryCta = $resolveUrl($settings->hero_primary_cta_url))
                    @php($secondaryCta = $resolveUrl($settings->hero_secondary_cta_url))
                    @if ($primaryCta)
                        <a href="{{ $primaryCta }}" class="btn-primary inline-flex items-center gap-2">
                            {{ $settings->hero_primary_cta_label }}
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    @endif
                    @if ($secondaryCta)
                        <a href="{{ $secondaryCta }}" class="btn-secondary inline-flex items-center gap-2">
                            {{ $settings->hero_secondary_cta_label }}
                        </a>
                    @endif
                </div>
                @if ($heroHighlights->isNotEmpty())
                    <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3 mt-10">
                        @foreach ($heroHighlights as $highlight)
                            <div class="flex items-start gap-3 rounded-2xl bg-white/80 backdrop-blur px-4 py-3 shadow-sm">
                                <span class="mt-1 h-2.5 w-2.5 rounded-full bg-site-primary"></span>
                                <p class="text-sm text-slate-700">{{ $highlight }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="relative">
                <div class="absolute -top-8 -right-4 h-32 w-32 rounded-full blur-[90px]" style="background-color: color-mix(in srgb, var(--site-primary) 55%, transparent);"></div>
                <div class="relative rounded-[2.5rem] border border-slate-100 bg-white shadow-2xl overflow-hidden">
                    @if ($heroMedia)
                        <img src="{{ $heroMedia }}" alt="Sekolah" class="h-full w-full object-cover" />
                    @else
                        <div class="p-10 text-white" style="background-image: linear-gradient(145deg, color-mix(in srgb, var(--site-primary) 85%, transparent), color-mix(in srgb, var(--site-secondary) 65%, transparent));">
                            <p class="text-2xl font-semibold">{{ $settings->site_name }}</p>
                            <p class="mt-4 text-sm text-white/80 max-w-md">{{ $settings->hero_description }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if ($stats->isNotEmpty())
        <section class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($stats as $stat)
                    <div class="rounded-3xl bg-white shadow-card border border-slate-100 p-6 flex flex-col gap-2">
                        <p class="text-3xl font-semibold text-site-primary">{{ data_get($stat, 'value') }}</p>
                        <p class="text-base font-semibold text-slate-900">{{ data_get($stat, 'label') }}</p>
                        <p class="text-sm text-slate-500 leading-relaxed">{{ data_get($stat, 'description') }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <section class="max-w-7xl mx-auto px-6 lg:px-8 grid gap-10 lg:grid-cols-[1.1fr,0.9fr] items-center">
        <div class="space-y-4">
            <p class="text-sm font-semibold uppercase tracking-[0.4em] text-site-secondary">Sekolah Humanis</p>
            <h2 class="text-3xl font-semibold text-slate-900">Keseharian belajar yang hangat, adaptif, dan penuh kolaborasi.</h2>
            <p class="text-base text-slate-600 leading-relaxed">Kurikulum diperkaya dengan proyek lintas disiplin, kelas karakter, dan kegiatan kolaboratif bersama komunitas. Setiap siswa mendapatkan pendampingan akademik maupun pengembangan minat.</p>
            <dl class="mt-6 grid gap-4 text-sm text-slate-600">
                @if ($settings->address)
                    <div>
                        <dt class="font-semibold text-slate-900">Alamat</dt>
                        <dd>{{ $settings->address }}</dd>
                    </div>
                @endif
                @if ($settings->phone)
                    <div>
                        <dt class="font-semibold text-slate-900">Telepon</dt>
                        <dd>{{ $settings->phone }}</dd>
                    </div>
                @endif
                @if ($settings->email)
                    <div>
                        <dt class="font-semibold text-slate-900">Email</dt>
                        <dd>{{ $settings->email }}</dd>
                    </div>
                @endif
            </dl>
        </div>
        <div class="rounded-[2rem] border border-slate-100 bg-white shadow-card p-8 space-y-6">
            <div class="flex items-start gap-4">
                <div class="h-12 w-12 rounded-2xl bg-site-primary-soft text-site-primary flex items-center justify-center font-semibold">01</div>
                <div>
                    <p class="text-base font-semibold text-slate-900">Pendampingan Akademik</p>
                    <p class="text-sm text-slate-600">Monitoring berkala dan kelas remedial/akselerasi yang menyesuaikan kebutuhan siswa.</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="h-12 w-12 rounded-2xl bg-site-primary-soft text-site-primary flex items-center justify-center font-semibold">02</div>
                <div>
                    <p class="text-base font-semibold text-slate-900">Eksplorasi Minat</p>
                    <p class="text-sm text-slate-600">Klub STEAM, seni, olahraga, dan literasi digital berjalan aktif setiap pekan.</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <div class="h-12 w-12 rounded-2xl bg-site-primary-soft text-site-primary flex items-center justify-center font-semibold">03</div>
                <div>
                    <p class="text-base font-semibold text-slate-900">Konektivitas Orang Tua</p>
                    <p class="text-sm text-slate-600">Laporan perkembangan dan forum konsultasi rutin menjaga komunikasi berjalan baik.</p>
                </div>
            </div>
        </div>
    </section>

    @if ($features->isNotEmpty())
        <section class="bg-white py-16 lg:py-20">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="max-w-3xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.4em] text-site-secondary">Karakter Utama</p>
                    <h2 class="text-3xl font-semibold text-slate-900 mt-2">Keunggulan yang menyatu dalam setiap pengalaman belajar.</h2>
                </div>
                <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($features as $feature)
                        <article class="rounded-3xl border border-slate-100 bg-slate-50/70 p-6 shadow-sm">
                            <div class="flex items-center gap-3">
                                <div class="h-11 w-11 rounded-2xl bg-site-primary-soft text-site-primary flex items-center justify-center font-semibold">
                                    {{ Str::substr(data_get($feature, 'title'), 0, 2) }}
                                </div>
                                <p class="text-lg font-semibold text-slate-900">{{ data_get($feature, 'title') }}</p>
                            </div>
                            <p class="mt-4 text-sm text-slate-600 leading-relaxed">{{ data_get($feature, 'description') }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($programs->isNotEmpty())
        <section class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.4em] text-site-secondary">Program Unggulan</p>
                    <h2 class="text-3xl font-semibold text-slate-900 mt-2">Pilihan jalur belajar yang relevan dengan masa depan.</h2>
                </div>
                <p class="text-sm text-slate-500 max-w-2xl">Setiap program dilengkapi mentor, monitoring capaian, serta showcase hasil karya agar orang tua dapat mengikuti perkembangan anak.</p>
            </div>
            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($programs as $program)
                    @php($link = $resolveUrl(data_get($program, 'link_url')))
                    <article class="rounded-3xl border border-slate-100 bg-white p-6 shadow-card h-full flex flex-col">
                        <p class="text-xl font-semibold text-slate-900">{{ data_get($program, 'title') }}</p>
                        <p class="mt-3 text-sm text-slate-600 leading-relaxed flex-1">{{ data_get($program, 'description') }}</p>
                        @if ($link)
                            <a href="{{ $link }}" class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-site-primary">
                                {{ data_get($program, 'link_label') ?? 'Pelajari Program' }}
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        @endif
                    </article>
                @endforeach
            </div>
        </section>
    @endif

    @if ($testimonials->isNotEmpty())
        <section class="bg-white py-16 lg:py-20">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 grid gap-10 lg:grid-cols-[0.85fr,1fr] items-center">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.4em] text-site-secondary">Cerita dari Komunitas</p>
                    <h2 class="text-3xl font-semibold text-slate-900 mt-3">Pengalaman siswa dan orang tua tentang ekosistem belajar.</h2>
                    <p class="mt-4 text-sm text-slate-500 leading-relaxed">Kolaborasi antara guru, orang tua, dan siswa menghadirkan perjalanan belajar yang menyenangkan sekaligus menantang.</p>
                </div>
                <div class="grid gap-6">
                    @foreach ($testimonials as $testimonial)
                        <article class="rounded-3xl border border-slate-100 bg-slate-50/80 p-6 shadow-sm">
                            <p class="text-base italic leading-relaxed text-slate-700">“{{ data_get($testimonial, 'quote') }}”</p>
                            <div class="mt-4">
                                <p class="text-sm font-semibold text-slate-900">{{ data_get($testimonial, 'name') }}</p>
                                <p class="text-xs uppercase tracking-widest text-slate-400">{{ data_get($testimonial, 'role') }}</p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="max-w-6xl mx-auto px-6 lg:px-8 pb-8">
        <div class="rounded-[2.5rem] text-white px-8 py-12 lg:px-16 lg:py-16 flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between" style="background-image: linear-gradient(135deg, var(--site-primary), var(--site-secondary));">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.4em] text-white/70">PPDB</p>
                <h2 class="text-3xl font-semibold mt-3">{{ $settings->cta_title }}</h2>
                <p class="mt-3 text-base text-white/80 max-w-2xl">{{ $settings->cta_description }}</p>
            </div>
            @php($ctaLink = $resolveUrl($settings->cta_button_url))
            @if ($ctaLink)
                <a href="{{ $ctaLink }}" class="btn-secondary bg-white/10 border-white/30 text-white inline-flex items-center gap-2">
                    {{ $settings->cta_button_label }}
                    <span aria-hidden="true">&rarr;</span>
                </a>
            @endif
        </div>
    </section>
</x-page-wrapper>

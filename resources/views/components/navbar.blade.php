@php
    $navigation = [
        ['label' => 'Beranda', 'route' => 'home'],
        ['label' => 'Profil Sekolah', 'route' => 'about'],
        ['label' => 'Program', 'route' => 'programs'],
        ['label' => 'Prestasi', 'route' => 'achievements'],
        ['label' => 'Kegiatan', 'route' => 'activities'],
        ['label' => 'Kontak', 'route' => 'contact'],
    ];
@endphp

<nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-xl border-b border-white/40">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4 md:py-5">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div>
                    <p class="text-sm font-medium text-neutral-500 uppercase tracking-wide">SMP Muara Indonesia</p>
                </div>
            </a>

            <div class="hidden lg:flex items-center gap-8">
                <div class="flex items-center gap-1 rounded-full bg-white/80 px-3 py-1 shadow-sm shadow-primary-900/5 ring-1 ring-primary-100">
                    @foreach ($navigation as $item)
                        <a
                            href="{{ route($item['route']) }}"
                            class="relative px-4 py-2 text-sm font-semibold transition-all duration-200 text-neutral-600 hover:text-primary-600"
                        >
                            @if (request()->routeIs($item['route']))
                                <span class="absolute inset-0 -z-10 rounded-full bg-primary-100/70"></span>
                                <span class="text-primary-700">{{ $item['label'] }}</span>
                            @else
                                {{ $item['label'] }}
                            @endif
                        </a>
                    @endforeach
                </div>

                <div class="flex items-center gap-3">
                    <a
                        href="/admin/login"
                        class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-secondary-500 to-secondary-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-secondary-900/20 transition-transform duration-200 hover:-translate-y-0.5"
                    >
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m18-10l-5-5m0 0l-5 5m5-5v12" />
                        </svg>
                        Portal Login
                    </a>
                </div>
            </div>

            <button
                @click="open = !open"
                class="inline-flex items-center justify-center rounded-xl border border-primary-100 bg-white px-3 py-2 text-primary-600 transition-colors duration-200 hover:bg-primary-50 lg:hidden"
                aria-label="Toggle menu"
            >
                <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden bg-white border-t border-primary-100/60 shadow-lg shadow-primary-900/5"
    >
        <div class="container mx-auto px-4 py-6 space-y-4">
            @foreach ($navigation as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="flex items-center justify-between rounded-2xl border border-primary-100/80 px-4 py-3 text-sm font-semibold transition-all duration-200 {{ request()->routeIs($item['route']) ? 'bg-primary-50 text-primary-700' : 'text-neutral-600 hover:bg-primary-50 hover:text-primary-700' }}"
                    @click="open = false"
                >
                    {{ $item['label'] }}
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            @endforeach

            <div class="grid gap-3 pt-2">
                <a
                    href="{{ route('admission') }}"
                    class="inline-flex items-center justify-between rounded-2xl border border-primary-100 bg-primary-50 px-4 py-3 text-sm font-semibold text-primary-700"
                    @click="open = false"
                >
                    Brosur Penerimaan
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 5l7 7-7 7M21 12H3" />
                    </svg>
                </a>
                <a
                    href="/admin/login"
                    class="inline-flex items-center justify-center gap-2 rounded-2xl bg-gradient-to-r from-secondary-500 to-secondary-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-secondary-900/20"
                    @click="open = false"
                >
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m18-10l-5-5m0 0l-5 5m5-5v12" />
                    </svg>
                    Portal Login
                </a>
            </div>
        </div>
    </div>
</nav>

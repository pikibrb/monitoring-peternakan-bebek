<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'TernakBebek OS') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }
        ::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-background font-body-md text-body-md text-on-surface antialiased">
    <aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest border-r border-outline-variant z-50 flex flex-col justify-between">
        <div class="flex flex-col">
            <div class="p-space-lg border-b border-outline-variant flex items-center gap-space-md">
                <img alt="TernakBebek Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1XhVVhRa9b1a5oDC6ji2j_QyrrOhxkTwIAaIadM6IseHuDerhJOqYkiLw8nyGciTaFAGYrMl2Ou6FQ03VdZPt_C8MYMQ7KjZMxwLXpL0OJu0uTPVgcL1xmAIDKAQmQlydaD-GTEamccHwE5Q1ggFssSArQNtFYOywURhA4lR5UonClvJd5UVsK179YqwLOUHhLCJuq4SwTpJVMXE-SA5QpqU9FXZmoBVxUAtbGPIJ02eQ2ijtJYKVrIF4o" />
                <div class="flex flex-col min-w-0">
                    <span class="font-headline-sm text-headline-sm text-on-surface tracking-tight truncate">TernakBebek OS</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant truncate">Kandang Sumber Rezeki</span>
                </div>
            </div>
            <div class="p-space-md mx-space-md my-space-md rounded-lg bg-surface-container-low border border-outline-variant flex items-center gap-space-md">
                <div class="relative flex-shrink-0">
                    <img alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAagGwZexPvueyFpfkfkRIz-4PHWIVi9ajyZt3H1ug-SDwO_NPHPl8Vf5k9hDqeTSJNbmMsFK2gfLNNmHnuKObDchBdLsk7b3xCcq0wNpsPeBpZrjfBdDGv-MANL6WF1B_eZSK9N9cTKUd1MLqUVMXvZvABwUrImyu3oVipl7iBqB6g5jtOPtvf95YnRdCjo9f3RTzZZMusj8lRxF2PTApJYo66YZ3QyyUvYdTyxILfPFtdNsghM7lD" />
                    <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-primary rounded-full ring-2 ring-surface-container-lowest"></span>
                </div>
                <div class="flex flex-col min-w-0 flex-1">
                    <span class="font-label-md text-label-md text-on-surface truncate">{{ Auth::user()->name ?? 'Pak Darsono' }}</span>
                    <span class="font-label-sm text-label-sm text-primary flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-primary inline-block"></span>Online / Kandang Aktif
                    </span>
                </div>
            </div>
            <nav class="px-space-md space-y-1 mt-space-xs">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-space-md px-space-md py-space-sm transition-colors bg-primary-container text-on-primary font-label-lg rounded-lg">
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-space-md px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-lg text-label-lg">
                    <span class="material-symbols-outlined text-[20px]">cruelty_free</span>
                    <span>Data Bebek</span>
                </a>
                <a href="#" class="flex items-center gap-space-md px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-lg text-label-lg">
                    <span class="material-symbols-outlined text-[20px]">monitoring</span>
                    <span>Monitoring Pertumbuhan</span>
                </a>
                <a href="#" class="flex items-center gap-space-md px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-lg text-label-lg">
                    <span class="material-symbols-outlined text-[20px]">egg</span>
                    <span>Produksi Telur</span>
                </a>
                <a href="#" class="flex items-center gap-space-md px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-lg text-label-lg">
                    <span class="material-symbols-outlined text-[20px]">shopping_basket</span>
                    <span>Penjualan</span>
                </a>
                <a href="#" class="flex items-center gap-space-md px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-lg text-label-lg">
                    <span class="material-symbols-outlined text-[20px]">description</span>
                    <span>Laporan & Riwayat</span>
                </a>
                <a href="#" class="flex items-center gap-space-md px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-lg text-label-lg">
                    <span class="material-symbols-outlined text-[20px]">settings</span>
                    <span>Pengaturan</span>
                </a>
            </nav>
        </div>
        <div class="p-space-md border-t border-outline-variant bg-surface-container-lowest">
            <button class="w-full flex items-center justify-center gap-space-xs h-11 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-primary-container transition-colors" type="button">
                <span class="material-symbols-outlined text-[20px]">add</span>
                <span>Catat Cepat</span>
            </button>
        </div>
    </aside>

    <div class="pl-72">
        <header class="fixed top-0 left-72 right-0 h-16 bg-surface-container-lowest border-b border-outline-variant z-40 px-space-lg flex items-center justify-between">
            <div class="flex items-center gap-space-lg">
                <div class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
                    <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                    <span>{{ now()->translatedFormat('l, d F Y') }}</span>
                </div>
                <span class="h-4 w-px bg-outline-variant"></span>
                <div class="flex items-center gap-space-xs bg-surface-container-low text-primary px-space-sm py-1 rounded-md font-label-sm text-label-sm border border-outline-variant">
                    <span class="material-symbols-outlined text-[16px]">thermostat</span>
                    <span>28°C • Lembap Normal</span>
                </div>
            </div>
            <div class="flex items-center gap-space-md">
                <button class="w-10 h-10 rounded-lg flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-on-surface border border-outline-variant relative transition-colors" type="button">
                    <span class="material-symbols-outlined text-[20px]">notifications</span>
                    <span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-error"></span>
                </button>
                <button class="flex items-center gap-space-xs h-10 px-space-md bg-primary-container text-on-primary rounded-lg font-label-lg text-label-lg hover:bg-primary transition-colors border border-transparent" type="button">
                    <span class="material-symbols-outlined text-[18px]">add_circle</span>
                    <span>+ Catat Telur Hari Ini</span>
                </button>
                <div class="pl-space-xs border-l border-outline-variant ml-space-xs">
                    <img alt="Profile" class="w-8 h-8 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAagGwZexPvueyFpfkfkRIz-4PHWIVi9ajyZt3H1ug-SDwO_NPHPl8Vf5k9hDqeTSJNbmMsFK2gfLNNmHnuKObDchBdLsk7b3xCcq0wNpsPeBpZrjfBdDGv-MANL6WF1B_eZSK9N9cTKUd1MLqUVMXvZvABwUrImyu3oVipl7iBqB6g5jtOPtvf95YnRdCjo9f3RTzZZMusj8lRxF2PTApJYo66YZ3QyyUvYdTyxILfPFtdNsghM7lD" />
                </div>
            </div>
        </header>

        <main class="relative pt-16 w-full px-gutter-lg pb-margin-lg bg-background min-h-screen">
            <div class="flex flex-col w-full gap-space-lg pt-space-lg">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
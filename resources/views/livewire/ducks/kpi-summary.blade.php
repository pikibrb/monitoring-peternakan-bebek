<?php
use function Livewire\Volt\{state};
?>

<div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg mb-space-xl">
    <div class="md:col-span-4 bg-surface-container-lowest p-space-xl rounded-xl flex flex-col justify-between shadow-sm relative overflow-hidden">
        <div class="flex items-center justify-between">
            <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Total Bebek Aktif</span>
            <span class="p-2 rounded-lg bg-surface-container text-primary flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">cruelty_free</span>
            </span>
        </div>
        <div class="my-space-md">
            <div class="flex items-baseline gap-space-xs">
                <span class="font-headline-kpi text-headline-kpi text-on-surface tracking-tight">2.450</span>
                <span class="font-label-lg text-label-lg text-on-surface-variant">Ekor</span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Tersebar di 4 zona kandang komersial aktif</p>
        </div>
        <div class="pt-space-sm flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm bg-surface-container-low px-space-md py-space-xs rounded-lg">
            <span class="flex items-center gap-1 text-primary font-semibold">
                <span class="material-symbols-outlined text-[16px]">trending_flat</span> Kapasitas 84%
            </span>
            <span>Maks. 2.900 Ekor</span>
        </div>
    </div>

    <div class="md:col-span-5 bg-surface-container-lowest p-space-xl rounded-xl flex flex-col justify-between shadow-sm">
        <div class="flex items-center justify-between">
            <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Distribusi Kelompok Utama</span>
            <span class="p-2 rounded-lg bg-surface-container text-secondary flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">pie_chart</span>
            </span>
        </div>
        <div class="my-space-sm">
            <div class="flex items-center justify-between mb-space-xs font-label-sm text-label-sm">
                <span class="text-on-surface font-semibold">Kelompok A: 1.200 (49%)</span>
                <span class="text-on-surface font-semibold">Kelompok B: 1.250 (51%)</span>
            </div>
            <div class="h-3 w-full bg-surface-container-high rounded-full overflow-hidden flex">
                <div class="h-full bg-primary-container" style="width: 49%"></div>
                <div class="h-full bg-secondary" style="width: 51%"></div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-space-sm pt-space-xs">
            <div class="bg-surface-container-low p-space-sm rounded-lg flex items-center gap-space-sm">
                <div class="w-2.5 h-2.5 rounded bg-primary-container flex-shrink-0"></div>
                <div class="flex flex-col min-w-0">
                    <span class="font-label-sm text-label-sm text-on-surface font-semibold truncate">Kandang Timur</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">1.200 Ekor Mojosari</span>
                </div>
            </div>
            <div class="bg-surface-container-low p-space-sm rounded-lg flex items-center gap-space-sm">
                <div class="w-2.5 h-2.5 rounded bg-secondary flex-shrink-0"></div>
                <div class="flex flex-col min-w-0">
                    <span class="font-label-sm text-label-sm text-on-surface font-semibold truncate">Kandang Barat</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant">1.250 Ekor Alabio</span>
                </div>
            </div>
        </div>
    </div>

    <div class="md:col-span-3 bg-surface-container-lowest p-space-xl rounded-xl flex flex-col justify-between shadow-sm">
        <div class="flex items-center justify-between">
            <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Mati / Berkurang (Bulan Ini)</span>
            <span class="p-2 rounded-lg bg-error-container text-error flex items-center justify-center">
                <span class="material-symbols-outlined text-[20px]">heart_broken</span>
            </span>
        </div>
        <div class="my-space-md">
            <div class="flex items-baseline gap-space-xs">
                <span class="font-headline-kpi text-headline-kpi text-on-surface tracking-tight">8</span>
                <span class="font-label-lg text-label-lg text-on-surface-variant">Ekor</span>
            </div>
            <div class="mt-2 flex items-center">
                <span class="inline-flex items-center gap-1 px-space-sm py-0.5 rounded bg-[#A5453B] text-on-error font-label-sm text-label-sm">
                    <span class="material-symbols-outlined text-[13px]">verified</span>
                    Mortalitas Rendah 0.3%
                </span>
            </div>
        </div>
        <div class="pt-space-xs">
            <span class="font-body-sm text-body-sm text-on-surface-variant">Ambang batas aman kandang: <span class="font-semibold text-on-surface">< 1.5% / bln</span></span>
        </div>
    </div>
</div>
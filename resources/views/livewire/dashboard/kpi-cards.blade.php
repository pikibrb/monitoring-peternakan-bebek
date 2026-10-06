<?php
use function Livewire\Volt\{state};
?>

<section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-space-lg w-full">
    <div class="bg-surface-container-lowest rounded-xl p-space-xl flex flex-col justify-between shadow-sm border border-outline-variant hover:border-primary transition-colors">
        <div class="flex items-start justify-between">
            <div class="flex flex-col gap-space-xs">
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Populasi Bebek</span>
                <div class="flex items-baseline gap-space-xs mt-space-xs">
                    <span class="font-headline-kpi text-headline-kpi text-on-surface font-semibold tracking-tight">2.450</span>
                    <span class="font-label-lg text-label-lg text-on-surface-variant font-medium">Ekor</span>
                </div>
            </div>
            <div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary border border-outline-variant">
                <span class="material-symbols-outlined text-[28px]">cruelty_free</span>
            </div>
        </div>
        <div class="mt-space-md pt-space-md border-t border-outline-variant flex flex-col gap-space-xs">
            <div class="flex items-center gap-space-xs">
                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-primary-container text-on-primary font-label-sm text-label-sm font-semibold">
                    <span class="material-symbols-outlined text-[14px]">trending_up</span>
                    +12 ekor dari kemarin
                </span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                <span class="font-medium text-on-surface">Kelompok A:</span> 1.200 <span class="mx-1">•</span> <span class="font-medium text-on-surface">Kelompok B:</span> 1.250
            </p>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl p-space-xl flex flex-col justify-between shadow-sm border border-outline-variant hover:border-primary transition-colors">
        <div class="flex items-start justify-between">
            <div class="flex flex-col gap-space-xs">
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Produksi Telur Hari Ini</span>
                <div class="flex items-baseline gap-space-xs mt-space-xs">
                    <span class="font-headline-kpi text-headline-kpi text-on-surface font-semibold tracking-tight">2.085</span>
                    <span class="font-label-lg text-label-lg text-on-surface-variant font-medium">Butir</span>
                </div>
            </div>
            <div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary border border-outline-variant">
                <span class="material-symbols-outlined text-[28px]">egg</span>
            </div>
        </div>
        <div class="mt-space-md pt-space-md border-t border-outline-variant flex flex-col gap-space-xs">
            <div class="flex items-center gap-space-xs">
                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-primary text-on-primary font-label-sm text-label-sm font-semibold">
                    <span class="material-symbols-outlined text-[14px]">auto_awesome</span>
                    Rasio Bertelur 85.1%
                </span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5 flex items-center gap-1">
                <span class="material-symbols-outlined text-[14px]">schedule</span>
                Pencatatan pukul 07:30 WIB
            </p>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl p-space-xl flex flex-col justify-between shadow-sm border border-outline-variant hover:border-primary transition-colors">
        <div class="flex items-start justify-between">
            <div class="flex flex-col gap-space-xs">
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Stok Telur Siap Jual</span>
                <div class="flex items-baseline gap-space-xs mt-space-xs">
                    <span class="font-headline-kpi text-headline-kpi text-on-surface font-semibold tracking-tight">480</span>
                    <span class="font-label-lg text-label-lg text-on-surface-variant font-medium">Butir</span>
                </div>
            </div>
            <div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary border border-outline-variant">
                <span class="material-symbols-outlined text-[28px]">inventory_2</span>
            </div>
        </div>
        <div class="mt-space-md pt-space-md border-t border-outline-variant flex flex-col gap-space-xs">
            <div class="flex items-center gap-space-xs">
                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-tertiary-container text-on-tertiary-fixed font-label-sm text-label-sm font-semibold border border-tertiary-fixed">
                    <span class="material-symbols-outlined text-[14px]">warning</span>
                    ⚠️ Stok Menipis
                </span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                Kapasitas gudang: 3.000 butir (16% terisi)
            </p>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl p-space-xl flex flex-col justify-between shadow-sm border border-outline-variant hover:border-primary transition-colors">
        <div class="flex items-start justify-between">
            <div class="flex flex-col gap-space-xs">
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Penjualan Bulan Ini</span>
                <div class="flex items-baseline gap-space-xs mt-space-xs">
                    <span class="font-headline-kpi-mobile lg:font-headline-kpi text-headline-kpi text-on-surface font-semibold tracking-tight">Rp 46,85M</span>
                </div>
            </div>
            <div class="w-12 h-12 rounded-lg bg-surface-container-low flex items-center justify-center text-primary border border-outline-variant">
                <span class="material-symbols-outlined text-[28px]">payments</span>
            </div>
        </div>
        <div class="mt-space-md pt-space-md border-t border-outline-variant flex flex-col gap-space-xs">
            <div class="flex items-center gap-space-xs">
                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-secondary text-on-secondary font-label-sm text-label-sm font-semibold">
                    <span class="material-symbols-outlined text-[14px]">bar_chart</span>
                    +14.2% vs bln lalu
                </span>
            </div>
            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5 truncate">
                20.800 butir telur komersial terjual
            </p>
        </div>
    </div>
</section>
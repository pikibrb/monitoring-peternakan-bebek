<?php
use function Livewire\Volt\{state};
?>

<div class="lg:col-span-4 bg-surface-container-lowest rounded-xl p-space-xl border border-outline-variant shadow-sm flex flex-col justify-between">
    <div>
        <div class="flex items-center justify-between pb-space-md border-b border-outline-variant">
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-primary text-[22px]">history</span>
                <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Aktivitas Terkini</h2>
            </div>
            <span class="font-label-sm text-label-sm text-primary font-semibold">Live Log</span>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant my-space-md">
            Pembaruan status operasional riil dari staf kandang.
        </p>
        <div class="flex flex-col gap-space-lg relative before:absolute before:left-3 before:top-2 before:bottom-2 before:w-0.5 before:bg-outline-variant">
            
            <div class="flex items-start gap-space-md relative pl-1">
                <div class="w-5 h-5 rounded-full bg-primary text-on-primary flex items-center justify-center ring-4 ring-surface-container-lowest z-10 flex-shrink-0">
                    <span class="material-symbols-outlined text-[12px]">egg</span>
                </div>
                <div class="flex flex-col flex-1">
                    <div class="flex items-center justify-between">
                        <span class="font-label-sm text-label-sm font-bold text-on-surface">07:30 WIB</span>
                        <span class="font-label-sm text-label-sm text-primary font-medium">Hari Ini</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mt-0.5 font-medium">
                        Pak Darsono mencatat <span class="font-bold text-primary">2.085 butir telur</span>
                    </p>
                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Kelompok A (1.020) & Kelompok B (1.065)</span>
                </div>
            </div>

            <div class="flex items-start gap-space-md relative pl-1">
                <div class="w-5 h-5 rounded-full bg-secondary text-on-secondary flex items-center justify-center ring-4 ring-surface-container-lowest z-10 flex-shrink-0">
                    <span class="material-symbols-outlined text-[12px]">shopping_cart</span>
                </div>
                <div class="flex flex-col flex-1">
                    <div class="flex items-center justify-between">
                        <span class="font-label-sm text-label-sm font-bold text-on-surface">16:45 WIB</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Kemarin</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mt-0.5 font-medium">
                        Penjualan 1.500 butir telur ke <span class="font-semibold">UD Telur Berkah</span>
                    </p>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="px-2 py-0.5 rounded bg-primary-container text-on-primary font-label-sm text-label-sm font-bold">Lunas (Tunai)</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Rp 3.375.000</span>
                    </div>
                </div>
            </div>

            <div class="flex items-start gap-space-md relative pl-1">
                <div class="w-5 h-5 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center ring-4 ring-surface-container-lowest z-10 flex-shrink-0">
                    <span class="material-symbols-outlined text-[12px]">restaurant</span>
                </div>
                <div class="flex flex-col flex-1">
                    <div class="flex items-center justify-between">
                        <span class="font-label-sm text-label-sm font-bold text-on-surface">09:15 WIB</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Kemarin</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface mt-0.5 font-medium">
                        Pemberian pakan ransum formulasi
                    </p>
                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">185 kg jagung giling + konsentrat layer 144</span>
                </div>
            </div>
            
        </div>
    </div>
    <div class="mt-space-lg pt-space-md border-t border-outline-variant">
        <a class="w-full py-2 flex items-center justify-center gap-1 font-label-md text-label-md text-primary hover:text-primary-container font-semibold transition-colors" href="#">
            <span>Lihat Log Lengkap Seluruh Kandang</span>
            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
        </a>
    </div>
</div>
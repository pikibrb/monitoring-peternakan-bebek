<?php
use function Livewire\Volt\{state};
?>

<div class="lg:col-span-4 bg-surface-container-lowest rounded-xl p-space-xl border border-outline-variant shadow-sm flex flex-col justify-between">
    <div>
        <div class="flex items-center gap-space-xs pb-space-md border-b border-outline-variant">
            <span class="material-symbols-outlined text-primary text-[22px]">flash_on</span>
            <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Aksi Cepat Harian</h2>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant my-space-md">
            Tombol berukuran besar untuk input data cepat di area kandang basah/semi-terbuka.
        </p>
        <div class="flex flex-col gap-space-md">
            <button class="w-full h-12 bg-primary text-on-primary rounded-lg font-label-lg text-label-lg font-semibold flex items-center justify-between px-space-lg hover:bg-primary-container transition-colors shadow-sm" type="button">
                <span class="flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-[22px]">egg</span>
                    <span>+ Catat Telur Pagi/Sore</span>
                </span>
                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
            </button>
            <button class="w-full h-12 bg-secondary text-on-secondary rounded-lg font-label-lg text-label-lg font-semibold flex items-center justify-between px-space-lg hover:opacity-90 transition-opacity shadow-sm" type="button">
                <span class="flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-[22px]">point_of_sale</span>
                    <span>+ Input Penjualan Baru</span>
                </span>
                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
            </button>
            <button class="w-full h-12 bg-surface-container-highest text-on-surface rounded-lg font-label-lg text-label-lg font-semibold flex items-center justify-between px-space-lg border border-outline-variant hover:bg-surface-container-high transition-colors" type="button">
                <span class="flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-[22px] text-primary">add_box</span>
                    <span>+ Tambah Bebek Masuk</span>
                </span>
                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
            </button>
            <button class="w-full h-12 bg-surface-container text-error rounded-lg font-label-lg text-label-lg font-semibold flex items-center justify-between px-space-lg border border-outline-variant hover:bg-error-container transition-colors" type="button">
                <span class="flex items-center gap-space-sm">
                    <span class="material-symbols-outlined text-[22px] text-error">remove_circle_outline</span>
                    <span>+ Catat Bebek Afkir/Mati</span>
                </span>
                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
            </button>
        </div>
    </div>
    <div class="mt-space-lg pt-space-md border-t border-outline-variant text-center">
        <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center justify-center gap-1">
            <span class="material-symbols-outlined text-[16px] text-primary">verified</span>
            Target input operator: < 60 detik per batch
        </span>
    </div>
</div>
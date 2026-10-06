<?php
use function Livewire\Volt\{state};
?>

<div class="lg:col-span-4 bg-surface-container-lowest rounded-xl p-space-xl border border-outline-variant shadow-sm flex flex-col justify-between">
    <div>
        <div class="flex items-center justify-between pb-space-md border-b border-outline-variant">
            <div class="flex items-center gap-space-xs">
                <span class="material-symbols-outlined text-tertiary-container text-[22px]">pending_actions</span>
                <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Piutang Pembeli</h2>
            </div>
            <span class="font-label-sm text-label-sm font-bold bg-error-container text-on-error-container px-2 py-0.5 rounded-full">3 Tertunda</span>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant my-space-md">
            Monitoring pelunasan tengkulak & agen pelanggan telur.
        </p>
        <div class="flex flex-col gap-space-md">
            <div class="p-space-md rounded-lg bg-surface-container-low border border-outline-variant flex flex-col gap-space-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Toko Berkah Jaya</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Jatuh tempo 2 hari lagi</p>
                    </div>
                    <span class="px-2 py-0.5 rounded-md bg-error text-on-error font-label-sm text-label-sm font-semibold">
                        Belum Bayar
                    </span>
                </div>
                <div class="flex items-center justify-between pt-space-xs border-t border-outline-variant mt-1">
                    <span class="font-label-lg text-label-lg font-bold text-on-surface">Rp 3.500.000</span>
                    <button class="px-3 py-1 bg-primary text-on-primary rounded text-label-sm font-label-sm font-semibold hover:bg-primary-container transition-colors" type="button">
                        Tandai Lunas
                    </button>
                </div>
            </div>

            <div class="p-space-md rounded-lg bg-surface-container-low border border-outline-variant flex flex-col gap-space-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">RM Padang Sabana</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Total: Rp 1.200.000 (DP 50%)</p>
                    </div>
                    <span class="px-2 py-0.5 rounded-md bg-tertiary-container text-on-tertiary-fixed font-label-sm text-label-sm font-semibold border border-tertiary-fixed">
                        Sebagian
                    </span>
                </div>
                <div class="flex items-center justify-between pt-space-xs border-t border-outline-variant mt-1">
                    <div class="flex flex-col">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">Sisa Tagihan:</span>
                        <span class="font-label-lg text-label-lg font-bold text-on-surface">Rp 600.000</span>
                    </div>
                    <button class="px-3 py-1 bg-surface-container-lowest text-on-surface border border-outline-variant rounded text-label-sm font-label-sm font-semibold hover:bg-surface-container transition-colors" type="button">
                        Kirim WA
                    </button>
                </div>
            </div>

            <div class="p-space-md rounded-lg bg-surface-container-low border border-outline-variant flex flex-col gap-space-sm">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Martabak Mas Joko</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Menunggu verifikasi transfer</p>
                    </div>
                    <span class="px-2 py-0.5 rounded-md bg-error text-on-error font-label-sm text-label-sm font-semibold">
                        Belum Bayar
                    </span>
                </div>
                <div class="flex items-center justify-between pt-space-xs border-t border-outline-variant mt-1">
                    <span class="font-label-lg text-label-lg font-bold text-on-surface">Rp 2.100.000</span>
                    <button class="px-3 py-1 bg-surface-container-lowest text-on-surface border border-outline-variant rounded text-label-sm font-label-sm font-semibold hover:bg-surface-container transition-colors" type="button">
                        Cek Bukti
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-space-lg pt-space-md border-t border-outline-variant flex items-center justify-between">
        <span class="font-label-md text-label-md text-on-surface-variant">Total Tertahan:</span>
        <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Rp 6.200.000</span>
    </div>
</div>